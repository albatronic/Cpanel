<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 06.07.2013 15:53:44
 */

/**
 * @orm:Entity(BolBoletines)
 */
class BolBoletines extends BolBoletinesEntity {

    public function __toString() {
        return $this->getId();
    }

    public function getContenidosRelacionados() {

        $relaciones = new CpanRelaciones();
        $contenidos = $relaciones->getObjetosRelacionados("BolBoletines", $this->getPrimaryKeyValue());
        unset($relaciones);

        return $contenidos;
    }

    /**
     * Devuelve la url del archivo html que contiene
     * el boletín asociado a la entidad. Si no existe
     * devuelve la cadena vacía
     * 
     * @return string La url del boletín
     */
    public function getUrlBoletin() {
        return $this->Observations;
    }

    /**
     * Devuelve array con objetos envíos del boletín en curso
     * @return \BolEnvios
     */
    public function getEnvios() {
        
        $array = array();
        
        $envios = new BolEnvios();
        $rows = $envios->cargaCondicion("Id", "IDBoletin='" . $this->getPrimaryKeyValue() . "'", "CreatedAt DESC");
        unset($envios);
        foreach ($rows as $row) {
            $array[] = new BolEnvios($row['Id']);
        }

        return $array;
    }

    /**
     * Envia el boletín y crea el registro de envío.
     * 
     * @param array $destinatarios
     * @return boolean
     */
    public function enviar($destinatarios) {

        $envio = new Mail($_SESSION['VARIABLES']['WebPro']['mail']);
        $ok = $envio->send(
                $destinatarios['para'], 
                $_SESSION['VARIABLES']['WebPro']['mail']['from'], 
                $_SESSION['VARIABLES']['WebPro']['mail']['from_name'], 
                $destinatarios['cc'], 
                $destinatarios['cco'], 
                "Boletín Informativo", 
                $this->Observations);
        unset($envio);

        if ($ok) {
            $envio = new BolEnvios();
            $envio->setIDBoletin($this->Id);
            $envio->setPara($destinatarios['para']);
            $envio->setCc($destinatarios['cc']);
            $envio->setCco($destinatarios['cco']);
            $envio->setObservations($this->Observations);
            $envio->create();
            unset($envio);
        }

        return $ok;
    }

    /**
     * Generar el boletín y el html obtenido
     * lo guarda en la columna Observations
     * 
     * @return boolean
     */
    public function generar() {

        $ok = FALSE;

        /**
         * Volver a descomentar esto cuando se pueda acceder vía curl
        $filePlantilla = $_SESSION['project']['url'] . "/modules/Boletin/" . $this->getIDFormato()->getPlantillaHtm();
        $ftp = new Ftp($_SESSION['project']['ftp']);
        $resultado = $ftp->getFileContent($filePlantilla);
        $plantilla = $resultado['result'];
         *
         */
        $filePlantilla = "docs/docscpanel/". $this->getIDFormato()->getPlantillaHtm();
        $plantilla = file_get_contents($filePlantilla);

        if (strlen($plantilla) > 0) {

            $plantilla = $this->sustituyeValores($plantilla);

            /**
              $archivoTemporal = "../tmp/" . md5(date('Ymd His')) . ".html";
              $boletin = substr($this->getUrlFriendly(), 1) . ".html";
              $archivo = new Archivo($archivoTemporal);
              $url = $archivo->creaYSube($plantilla, "/docs/BolBoletines", $boletin);
             */
            $this->setObservations($plantilla);
            $ok = $this->save();
        }

        return $ok;
    }

    public function sustituyeValores($texto) {

        // Valores globales
        $texto = str_replace("#urlBoletin#", $_SESSION['project']['url'] . $this->getUrlFriendly(), $texto);
        $texto = str_replace("#titulo#", $this->getTitulo(), $texto);
        $texto = str_replace("#subtitulo#", $this->getSubtitulo(), $texto);
        $texto = str_replace("#resumen#", $this->getResumen(), $texto);

        // Valores de los contenidos
        $contenido = "";
        $contenidoBase = $this->getIDFormato()->getHtml();
        $textoContenido = "";

        $contenidos = $this->getContenidosRelacionados();
        foreach ($contenidos as $key => $contenido) {
            $esPar = (($key + 1) % 2 == 0);
            if (!$esPar) {
                $textoContenido .= "<tr>";
            }
            
            $aux = str_replace("#urlContenido#", $_SESSION['project']['url'] . $contenido->getUrlFriendly(), $contenidoBase);
            $aux = str_replace("#urlImagen#", $_SESSION['project']['url'] . "/" . $contenido->getPathNameImagenN(1), $aux);
            $aux = str_replace("#tituloContenido#", $contenido->getTitulo(), $aux);
            $aux = str_replace("#textoContenido#", $contenido->getResumen(), $aux);
            $textoContenido .= $aux;
            
            if ($esPar) {
                $textoContenido .= "</tr>";
            }
        }

        $texto = str_replace("#filas#", $textoContenido, $texto);

        return $texto;
    }

}
