<?php

/**
 * Description of Calendario
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright (c) Ártico Estudio, sl
 * @version 1.0 27-nov-2012
 */
class Calendario {

    /**
     * Devuelve el código html del calendario del $mes y $ano
     * 
     * @param integer $mes
     * @param integer $ano
     * @param boolean $pintarSemana
     * @return string Codigo html 
     */
    static function showCalendario($mes = '', $ano = '', $pintarSemana = false) {
        return self::getHtmlCalendario(self::getArrayCalendario($mes, $ano), $pintarSemana);
    }

    /**
     * Devuelve el array bidimensional del calendario del $mes y $ano
     * @param integer $mes El mes
     * @param integer $ano El año
     * @param string $formato El formato cómo se devuelve: php,json,yml
     * @return array Array con el calendario
     */
    static function getArrayCalendario($mes = '', $ano = '', $formato = 'PHP') {

        if ($mes == '')
            $mes = date('m');
        if ($ano == '')
            $ano = date('Y');

        $formato = strtoupper($formato);

        if (!in_array($formato, array('PHP', 'YML', 'JSON')))
            $formato = 'PHP';


        $ultimoDiaMes = date('d', mktime(0, 0, 0, $mes + 1, 0, $ano));

        $calendario = array();

        for ($dia = 1; $dia <= $ultimoDiaMes; $dia++) {
            $semana = date('W', mktime(0, 0, 0, $mes, $dia, $ano));
            $diaSemana = date('N', mktime(0, 0, 0, $mes, $dia, $ano));
            $calendario[$semana][$diaSemana] = $dia;
        }


        switch ($formato) {
            case 'PHP': $resultado = $calendario;
                break;
            case 'YML': $resultado = sfYaml::dump($calendario);
                break;
            case 'JSON': $resultado = json_encode($calendario);
                break;
        }

        return ($resultado);
    }

    /**
     * Genera el código html de un calendario mensual
     * 
     * @param array $calendario Array bidemensional con el calendario
     * @param boolean $pintarSemana Si true en añade una columna a la izquierda con el número de la semana
     * @return string Código html con el calendario
     */
    static function getHtmlCalendario($calendario, $pintarSemana = false) {

        $cabecera .= "<tr>";
        if ($pintarSemana)
            $cabecera .= "<td>Sem</td>";
        $cabecera .= "<td>L</td><td>M</td><td>X</td><td>J</td><td>V</td><td>S</td><td>D</td></tr>";

        foreach ($calendario as $keySemana => $semana) {

            $html .= "<tr>";
            if ($pintarSemana)
                $html .= "<td>{$keySemana}</td>";
            for ($dia = 1; $dia <= 7; $dia++) {
                $html .= "<td style='text-align: right;'>{$semana[$dia]}</td>";
            }
            $html .= "</tr>";
        }
        $html = "<table>{$cabecera}{$html}</table>";

        return $html;
    }

}

?>
