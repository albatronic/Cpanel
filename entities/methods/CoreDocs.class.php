<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 02.10.2012 18:58:03
 */

/**
 * @orm:Entity(CoreDocs)
 */
class CoreDocs extends CoreDocsEntity {

    protected $_prePath;

    /**
     * Array con la estructura de $_FILES del documento a subir
     *
     * Esta variable no tiene correspondencia con ninguna
     * columna de la tabla.
     * @var array
     */
    protected $_ArrayDoc;

    public function __construct($primaryKeyValue = '') {

        $this->_prePath = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . "/";
        parent::__construct($primaryKeyValue);
    }

    public function __toString() {
        return $this->getId();
    }

    public function setArrayDoc($arrayDoc) {
        $this->_ArrayDoc = $arrayDoc;
    }

    public function save() {

        $archivo = new Archivo($this->_prePath . $this->PathName);
        $this->setSize($archivo->getSize());
        $this->setWidth($archivo->getImageWidth());
        $this->setHeight($archivo->getImageHeight());
        $this->setMimeType($archivo->getMimeType());
        unset($archivo);

        $ok = parent::save();

        return $ok;
    }

    public function create() {

        $id = parent::create();

        if ($id) {
            $this->actualizaNombreAmigable();
            if ($this->subeDocumento())
                $this->save();
            else
                $this->_errores[] = "Error al subir el documento";
        }

        return $id;
    }

    /**
     * Marca como borrado un registro y borra el archivo asociado.
     *
     * @return bollean
     */
    public function delete() {

        $this->conecta();

        if (is_resource($this->_dbLink)) {
            // Auditoria
            $fecha = date('Y-m-d H:i:s');
            $query = "UPDATE `{$this->_dataBaseName}`.`{$this->_tableName}` SET `Deleted` = '1', `DeletedAt` = '{$fecha}', `DeletedBy` = '{$_SESSION['USER']['user']['Id']}' WHERE `{$this->_primaryKeyName}` = '{$this->getPrimaryKeyValue()}'";
            if (!$this->_em->query($query))
                $this->_errores = $this->_em->getError();
            else {
                // Borrar el archivo asociado al registro
                $this->borraArchivo();
            }
            $this->_em->desConecta();
        } else
            $this->_errores = $this->_em->getError();

        unset($this->_em);

        $ok = (count($this->_errores) == 0);

        return $ok;
    }

    /**
     * Borra físicamente un registro (delete) y su archivo asociado.
     *
     * @return boolean
     */
    public function erase() {

        $this->conecta();

        if (is_resource($this->_dbLink)) {
            $query = "DELETE FROM `{$this->_dataBaseName}`.`{$this->_tableName}` WHERE `{$this->_primaryKeyName}` = '{$this->getPrimaryKeyValue()}'";
            if (!$this->_em->query($query))
                $this->_errores = $this->_em->getError();
            else {
                // Borrar el archivo asociado al registro
                $this->borraArchivo();
            }
            $this->_em->desConecta();
        } else
            $this->_errores = $this->_em->getError();

        unset($this->_em);

        $ok = (count($this->_errores) == 0);

        return $ok;
    }

    /**
     * Borra físicamente el archivo del disco duro
     *
     * @return boolean TRUE si se ha borrado con éxito
     */
    private function borraArchivo() {

        $fullPath = $this->_prePath . $this->getPathName();
        $archivo = new Archivo($fullPath);
        $ok = $archivo->delete();

        if (!$ok)
            $this->_errores = $archivo->getErrores();

        unset($archivo);

        return $ok;
    }

    /**
     * Borrar los documentos de la entidad $entidad y $idEntidad
     * que son del tipo $tipo
     *
     * En el parámetro $tipo se puede usar el comodín '%' para
     * seleccionar varios tipos de documentos
     *
     * Borra las entradas en la tabla de documentos y
     * los archivos físicos del disco duro
     *
     *
     * @param string $entidad
     * @param integer $idEntidad
     * @param string $tipo El tipo de documento
     * @param string $criterio Expresión lógica a incluir en el criterio de borrado
     * @return boolean
     */
    public function borraDocs($entidad, $idEntidad, $tipo, $criterio = '1') {

        $ok = false;

        $filtro = "(Entity='{$entidad}') AND (IdEntity='{$idEntidad}') AND (Type LIKE '{$tipo}') AND ({$criterio})";

        $rows = $this->cargaCondicion('Id', $filtro);

        foreach ($rows as $row) {
            $doc = new CoreDocs($row['Id']);
            $doc->erase();
        }
        unset($doc);

        return $ok;
    }

    /**
     * Devuelve un array de objetos documentos que cumplen
     * los criterios indicados en los parámetros recibidos por el método
     *
     * @param string $entidad
     * @param integer $idEntidad
     * @param string $tipo El tipo de documento
     * @param string $criterio Expresión lógica a incluir en el criterio de borrado
     * $param string $orderCriteria El criterio de ordenación
     * @return array El array con los objetos documentos
     */
    public function getDocs($entidad, $idEntidad, $tipo, $criterio = '1', $orderCriteria = 'SortOrder ASC') {

        $arrayDocs = array();

        $filtro = "(Entity='{$entidad}') AND (IdEntity='{$idEntidad}') AND (Type LIKE '{$tipo}') AND ({$criterio})";
        $rows = $this->cargaCondicion('Id', $filtro, $orderCriteria);

        foreach ($rows as $row)
            $arrayDocs[] = new CoreDocs($row['Id']);

        return $arrayDocs;
    }

    /**
     * Devuelve el número de documentos asociados a la entidad
     * indicada en los parámetros
     *
     * @param string $tipo El tipo de documento, se admite '%'
     * @param string $criterio Expresión lógica a incluir en el criterio de filtro
     * @return integer El número de documentos
     */
    public function getNumberOfDocs($entidad, $idEntidad, $tipo, $criterio = '1') {

        $rows = $this->cargaCondicion('Id', "(Entity='{$entidad}') AND (IdEntity='{$idEntidad}') AND (Type LIKE '{$tipo}') AND ({$criterio})");

        return count($rows);
    }

    private function actualizaNombreAmigable() {

        $archivo = pathinfo($this->_ArrayDoc['name']);
        $extension = strtolower($archivo['extension']);
        $this->setName(Textos::limpia($this->Title) . ".{$extension}");
        $this->setPathName("docs/{$this->Entity}/{$this->Name}");
        $this->setExtension($extension);

        $tipos = new TiposDocs($this->Type);
        $tipo = $tipos->getTipo();
        unset($tipos);
        switch ($tipo['limit']) {
            case '1':
                $doc = new CoreDocs();
                $rows = $doc->cargaCondicion("Id, Entity, IdEntity, Type, IsThumbnail", "(Name='{$this->Name}')");
                $row = $rows[0];
                if (($row['Id']) and ($row['Entity'] != "{$this->Entity}" or $row['IdEntity'] != "{$this->IdEntity}" or $row['Type'] != "{$this->Type}" or $row['IsThumbnail'] != "{$this->IsThumbnail}")) {
                    // Ya existe esa imagen amigable, le pongo al final el id
                    $aux = explode(".", $this->Name);
                    $this->Name = "{$aux[0]}-{$this->Id}.{$aux[1]}";
                }
                break;
            case '':
                break;
        }

        unset($doc);
        
        $this->setPathName("docs/{$this->Entity}/{$this->Name}");
    }

    /**
     * Comprueba que el archivo cumple las reglas de validación
     * respecto a tipo y tamaño
     *
     * @param array $rules Array con las reglas de validación
     * @return boolean TRUE si cumple las reglas de validación
     */
    public function valida(array $rules) {

        // Comprobacion de tamaño
        $prohibidoTamano = ( ($rules['maxFileSize'] > 0) and ($this->_ArrayDoc['size'] > $rules['maxFileSize']) );

        // Comprobación de tipo
        $prohibidoTipo = in_array($this->_ArrayDoc['type'], $rules['forbidenTypes']);

        if ($prohibidoTipo)
            $this->_errores[] = "El tipo de archivo '" . $this->_ArrayDoc['type'] . "' no está permitido.";
        if ($prohibidoTamano)
            $this->_errores[] = "El tamaño del archivo (" . $this->_ArrayDoc['size'] / 1024 . " Kb) supera el limite autorizado (" . $rules['maxFileSize'] / 1024 . " Kb).";

        return (count($this->_errores) == 0);
    }

    /**
     * Sube el documento al servidor
     *
     * Si es una imagen y se han establecido dimensiones
     * fijas en $this->_ArrayDoc['width'] y $this->_ArrayDoc['heigth'], se redimensiona
     *
     * @return boolean TRUE si se subió con éxito
     */
    private function subeDocumento() {

        $fullPath = $this->_prePath . $this->PathName;

        $archivo = new Archivo($fullPath);
        $ok = $archivo->upLoad($this->_ArrayDoc['tmp_name']);

        if (($ok) and (exif_imagetype($fullPath))) {
            list($ancho, $alto) = getimagesize($fullPath);

            if ( ($this->_ArrayDoc['maxWidth']) and ($ancho > $this->_ArrayDoc['maxWidth']) ) $ancho = $this->_ArrayDoc['maxWidth'];
            if ( ($this->_ArrayDoc['maxHeight']) and ($alto > $this->_ArrayDoc['maxHeight']) ) $alto = $this->_ArrayDoc['maxHeight'];

            $img = new Gd();
            $img->loadImage($fullPath);
            $img->crop($ancho, $alto);
            $ok = $img->save($fullPath);
            unset($img);
        }

        unset($archivo);

        return $ok;
    }

    /**
     * Sube una imagen al servidor y crea la entrada en la tabla de imagenes
     *
     * @param string $entidad El nombre de la entidad
     * @param integer $idEntidad El id de la entidad
     * @param string $tipo El tipo de imagen: 'imageN' ó 'galeria'
     * @param array $imagen Array $_FILE
     * @param array $medidas Array con los medidas del la variable de entorno
     * @param string $slug EL titulo sin limpiar
     * @param boolean $esThumbnail TRUE si es thumbnail
     * @return boolean TRUE si se subió con éxisto
     */
    public function subeDocumentoxxxx($entidad, $idEntidad, $tipo, $imagen, $medidas, $slug, $esThumbnail = FALSE) {

        $ok = FALSE;

        $path = "docs/images/{$entidad}/";
        $fullPath = $this->_prePath . $path;

        if (!is_dir($fullPath))
            @mkdir($fullPath);

        if (is_dir($fullPath)) {
            $slugLimpio = Textos::limpia($slug);

            $img = new CoreImagenes();
            $rows = $img->cargaCondicion("Id", "Entity='{$entidad}' and IdEntity='{$idEntidad}' and Type='{$tipo}' and IsThumbnail='{$esThumbnail}'");
            $idImg = $rows[0]['Id'];

            if (!$idImg) {
                $img->setEntity($entidad);
                $img->setIdEntity($idEntidad);
                $img->setType($tipo);
                $img->setIsThumbnail($esThumbnail);
                $img->setPathName($entidad . $idEntidad);
                $img->setName($entidad . $idEntidad);
                $img->setTitle($slug);
                $idImg = $img->create();
            }

            $rows = $img->cargaCondicion("Id, Entity, IdEntity, Type, IsThumbnail", "(Name='{$slugLimpio}')");
            $row = $rows[0];
            if (($row['Id']) and ($row['Entity'] != "{$entidad}" or $row['IdEntity'] != "{$idEntidad}" or $row['Type'] != "{$tipo}" or $row['IsThumbnail'] != "{$esThumbnail}")) {
                // Ya existe esa imagen amigable, le pongo al final el id
                $slugLimpio .= "-" . $idImg;
            }


            $pathName = $fullPath . $slugLimpio;
            $img = new Thumbnails();
            $img->loadImage($imagen['tmp_name']);
            $img->crop($medidas['width'], $medidas['height']);

            $ok = $img->save($pathName);

            if ($ok) {
                $archivo = new Archivo($pathName);
                $img = new CoreImagenes($idImg);
                $img->setPathName($path . $slugLimpio);
                $img->setName($slugLimpio);
                $img->setTitle($slug);
                $img->setSize($archivo->getSize());
                $img->setWidth($archivo->getImageWidth());
                $img->setHeight($archivo->getImageHeight());
                $img->setMimeType($archivo->getMimeType());
                $img->save();
            } else {
                $img = new CoreImagenes($idImg);
                $img->erase();
            }

            unset($archivo);
            unset($img);
        }

        return $ok;
    }

    /**
     * Sube una imagen al servidor y crea la entrada en la tabla de imagenes
     *
     * @param string $entidad El nombre de la entidad
     * @param integer $idEntidad El id de la entidad
     * @param string $tipo El tipo de imagen: 'imageN' ó 'galeria'
     * @param array $imagen Array $_FILE
     * @param array $medidas Array con los medidas del la variable de entorno
     * @param string $slug EL titulo sin limpiar
     * @param boolean $esThumbnail TRUE si es thumbnail
     * @return integer El id de la imagen subida
     */
    public function subeGaleria($idImagen, $entidad, $idEntidad, $tipo, $imagen, $medidas, $slug, $esThumbnail = FALSE) {

        $ok = FALSE;

        $path = "docs/images/{$entidad}/";
        $fullPath = $this->_prePath . $path;

        if (!is_dir($fullPath))
            @mkdir($fullPath);

        if (is_dir($fullPath)) {
            $slugLimpio = Textos::limpia($slug);

            $img = new CoreImagenes();
            $rows = $img->cargaCondicion("Id", "Entity='{$entidad}' and IdEntity='{$idEntidad}' and Type='{$tipo}' and IsThumbnail='{$esThumbnail}'");
            $idImg = $rows[0]['Id'];

            if ($idImagen == '') {
                $img = new CoreImagenes();
                $img->setEntity($entidad);
                $img->setIdEntity($idEntidad);
                $img->setType($tipo);
                $img->setIsThumbnail($esThumbnail);
                $img->setPathName($entidad . $idEntidad);
                $img->setName($entidad . $idEntidad);
                $img->setTitle($slug);
                $idImagen = $img->create();

                $rows = $img->cargaCondicion("Id", "(Name='{$slugLimpio}')");
                if ($rows[0]['Id']) {
                    // Ya existe esa imagen amigable, le pongo al final el id
                    $slugLimpio .= "-" . $idImagen;
                }
            } else {
                $img = new CoreImagenes($idImagen);

                $rows = $img->cargaCondicion("Id", "(Name='{$slugLimpio}')");
                if ($rows[0]['Id'] != $idImagen) {
                    // Ya existe esa imagen amigable, le pongo al final el id
                    $slugLimpio .= "-" . $idImagen;
                }
            }


            if ($imagen['tmp_name']) {
                $pathName = $fullPath . $slugLimpio;
                $img = new Thumbnails();
                $img->loadImage($imagen['tmp_name']);
                $img->crop($medidas['width'], $medidas['height']);
                $ok = $img->save($pathName);
            } else
                $ok = TRUE;

            if ($ok) {
                $archivo = new Archivo($pathName);
                $img = new CoreImagenes($idImagen);
                $img->setPathName($path . $slugLimpio);
                $img->setName($slugLimpio);
                $img->setTitle($slug);
                $img->setSize($archivo->getSize());
                $img->setWidth($archivo->getImageWidth());
                $img->setHeight($archivo->getImageHeight());
                $img->setMimeType($archivo->getMimeType());
                $img->save();
            } else {
                $img = new CoreImagenes($idImagen);
                $img->erase();
            }

            unset($archivo);
            unset($img);
        }

        if ($ok)
            return $idImagen; else
            return FALSE;
    }

    /**
     * Le cambia el nombre a una imagen existente
     *
     * Actuliaza el nombre nuevo en la tabla de imagenes y cambia
     * el nombre al archivo físico
     *
     * @param string $entidad El nombre de la entidad
     * @param integer $idEntidad El id de la entidad
     * @param string $tipo El tipo: imageN
     * @param string $titulo El titulo de la imagen
     * @param string $slug El nombre de la imagen sin limpiar
     * @param booelan $mostrarPieFoto TRUE si se quiere mostrar el titulo en el pie de la imagen
     * @return boolean TRUE si se cambió con Exito
     */
    public function cambiaNombre($entidad, $idEntidad, $tipo, $titulo, $slug, $mostrarPieFoto) {
        $ok = FALSE;

        $path = "docs/images/{$entidad}/";

        $slugLimpio = Textos::limpia($slug);

        $img = new CoreImagenes();
        $rows = $img->cargaCondicion("Id", "Entity='{$entidad}' and IdEntity='{$idEntidad}' and Type='{$tipo}' and IsThumbnail='0'");
        $idImg = $rows[0]['Id'];
        $imgAnterior = new CoreImagenes($idImg);
        $pathNameAnterior = $this->_prePath . $imgAnterior->getPathName();

        $rows = $img->cargaCondicion("Id, Entity, IdEntity, Type, IsThumbnail", "(Name='{$slugLimpio}')");
        $row = $rows[0];
        if (($row['Id']) and ($row['Entity'] != "{$entidad}" or $row['IdEntity'] != "{$idEntidad}" or $row['Type'] != "{$tipo}" or $row['IsThumbnail'] != "0")) {
            // Ya existe esa imagen amigable, le pongo al final el id
            $slugLimpio .= "-" . $idImg;
        }

        $pathNameNuevo = $this->_prePath . $path . $slugLimpio;
        $ok = @rename($pathNameAnterior, $pathNameNuevo);

        if ($ok) {
            $img = new CoreImagenes($idImg);
            $img->setPathName($path . $slugLimpio);
            $img->setName($slugLimpio);
            $img->setTitle($titulo);
            $img->setShowCaption($mostrarPieFoto);
            $img->save();
        }

        unset($img);

        return $ok;
    }

    public function getSize($unit='kb') {

        $archivo = new Archivo($this->_prePath . $this->PathName);
        $size = $archivo->getSize($unit);
        unset($archivo);

        return "{$size} ({$unit})";
    }
}

?>