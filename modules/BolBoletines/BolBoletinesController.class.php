<?php

/**
 * CONTROLLER FOR BolBoletines
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 06.07.2013 15:53:43

 * Extiende a la clase controller
 */
class BolBoletinesController extends Controller {

    protected $entity = "BolBoletines";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $this->values['objetoController'] = $this;
        $this->values['relaciones'] = new CpanRelaciones();
    }

    public function IndexAction() {
        return parent::listAction();
    }

    public function GenerarBoletinAction() {

        $boletin = new BolBoletines($this->request['BolBoletines']['Id']);
        $boletin->generar();

        $this->request["METHOD"] = "GET";
        $this->request[2] = $boletin->getPrimaryKeyMD5();
        unset($boletin);
        
        return $this->editAction();
    }

    /**
     * Envía el boletín
     * @return type
     */
    public function EnviarBoletinAction() {

        $boletin = new BolBoletines($this->request['BolBoletines']['Id']);
        $boletin->enviar($this->request['destino']);
        unset($boletin);

        $this->request['accion'] = 'Guardar';
        return $this->editAction();
    }

    /**
     * Devuelve un array anidado de tipos de boletines con sus boletines
     * 
     * @return array Array de tipos de boletines y boletines
     */
    public function getArbolTiposBoletines() {

        $tipo = new BolTipos();
        $tipos = $tipo->cargaCondicion("Id,Titulo", "1", "SortOrder ASC");
        unset($tipo);

        $arbol = array();

        foreach ($tipos as $tipo) {
            $boletin = new BolBoletines();
            $boletines = $boletin->cargaCondicion('Id', "IDTipo='{$tipo['Id']}'", "SortOrder ASC");
            unset($boletin);

            $arbol[$tipo['Id']]['titulo'] = $tipo['Titulo'];
            $arbol[$tipo['Id']]['nBoletines'] = count($boletines);
            foreach ($boletines as $boletin)
                $arbol[$tipo['Id']]['boletines'][] = new BolBoletines($boletin['Id']);
        }

        return $arbol;
    }

    /**
     * Reordenada los elmentos
     * @return type
     */
    public function ReordenarAction() {

        $relaciones = new CpanRelaciones();
        $dbName = $relaciones->getDataBaseName();
        $tableName = $relaciones->getTableName();

        $filtro = "EntidadOrigen='{$this->entity}' and IdEntidadOrigen='{$this->request[$this->entity]['Id']}'";
        $em = new EntityManager($relaciones->getConectionName());
        if ($em->getDbLink()) {
            // Recorro los elementos que vienen en el acordeon, y los reordeno
            $orden = 0;
            foreach ($this->request['acordeon'] as $id => $elemento) {
                $query = "UPDATE {$dbName}.{$tableName} SET SortOrder = '{$orden}' WHERE ({$filtro}) AND (IdEntidadDestino = '{$id}')";
                $em->query($query);
                $orden += 1;
            }
            $em->desConecta();
        }
        unset($em);

        $this->request['METHOD'] = 'GET';
        $boletin = new BolBoletines($this->request[$this->entity]['Id']);
        $this->request[2] = $boletin->getPrimaryKeyMD5();
        unset($boletin);
        return $this->EditAction();
    }

}
