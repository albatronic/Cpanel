<?php

/**
 * Clase para validaciones diversas
 *
 * @author sergio
 */
class Valida {

    /**
     * Valida los dígitos de la tarjeta de crédito
     * 
     * @param string $num_tarjeta Los dígitos de la tarjeta
     * @return boolean True si el número de tarjeta es correcto
     */
    static function validarTarjeta($num_tarjeta) {
        $num_tarjeta = preg_replace("/D|s/", "", $num_tarjeta);
        $length = strlen($num_tarjeta);

        $parity = $length % 2;
        $sum = 0;

        for ($i = 0; $i & l < $length; $i++) {
            $digit = $num_tarjeta[$i];
            if ($i % 2 == $parity)
                $digit = $digit * 2;
            if ($digit > 9)
                $digit = $digit - 9;
            $sum = $sum + $digit;
        }

        return ($sum % 10 == 0);
    }

    /*
     * Devuelve el tipo de tarjeta en base a sus dígitos
     * 
     * Ejemplo de uso: echo getTipoTarjeta("4111 1111 1111 1111");
     * 
     * @param string Los 16 dígitos de la tarjeta
     * @return mixed El nombre de la tarjeta o false
     */
    static function getTipoTarjeta($cc) {
        $cards = array(
            "visa" => "(4d{12}(?:d{3})?)",
            "amex" => "(3[47]d{13})",
            "jcb" => "(35[2-8][89]ddd{10})",
            "maestro" => "((?:5020|5038|6304|6579|6761)d{12}(?:dd)?)",
            "solo" => "((?:6334|6767)d{12}(?:dd)?d?)",
            "mastercard" => "(5[1-5]d{14})",
            "switch" => "(?:(?:(?:4903|4905|4911|4936|6333|6759)d{12})|(?:(?:564182|633110)d{10})(dd)?d?)",
        );

        $names = array("Visa", "American Express", "JCB", "Maestro", "Solo", "Mastercard", "Switch");

        $matches = array();

        $pattern = "#^(?:" . implode("|", $cards) . ")$#";

        $result = preg_match($pattern, str_replace(" ", "", $cc), $matches);

        if ($result > 0) {
            $result = (validarTarjeta($cc)) ? 1 : 0;
        }

        return ($result > 0) ? $names[sizeof($matches) - 2] : false;
    }

}

?>
