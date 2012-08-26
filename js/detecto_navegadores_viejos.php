<?php
$navegador_php=$_SERVER["HTTP_USER_AGENT"];
$decode_navegador_php = strpos($navegador_php, "MSIE 7");
 if($decode_navegador_php !== FALSE){$navegador_viejo="SI";}
$decode_navegador_php = strpos($navegador_php, "MSIE 6");
 if($decode_navegador_php !== FALSE){$navegador_viejo="SI";}

?>