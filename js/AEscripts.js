/*
 * Script js propios
 */

var primerslap=false;
var segundoslap=false;


$(function(){

    /**
     * Para las solapas
     */
    $( "#tabs" ).tabs();

    /**
     * Para el efecto acordeón
     */
    $( "#accordion" ).accordion({
        autoHeight: false,
        navigation: true,
        collapsible: true,
        animated: 'bounceslide'
    });

    $("#usersSelector").change(function () {
        submitForm('layoutForm');
    });

    $("#projectsSelector").change(function () {
        submitForm('layoutForm');
    });

});


/**
 * Oculta (si existe) el elemento html id
 * @param id
 * @return void
 */
function ocultarElemento(id) {

    if ($('#'+id).length){
        $('#'+id).css("display", "none");
    }
}

/**
 * Muestra (si existe) el elemento html id
 * @param id
 * @return void
 */
function mostrarElemento(id) {

    if ($('#'+id).length){
        $('#'+id).css("display", "block");
    }
}

/**
 * Muestra un popUp con las variables de entorno
 * un formulario de mantenimiento de las variables de entorno
 * del modulo y columna indicado en 'modulo_columna'
 *
 * En el parámetro 'modulo_columna' debe venir el nombre del módulo y el
 * de la columna concatenados con guión bajo
 *
 *
 * @param idDiv Id del elemento html a rellenar
 * @param modulo_columna El nombre del modulo y de la columna concatenados con guión bajo
 * @return void
 */
function popUpVariablesEnv(tipo, ambito, modulo_columna) {

    var elementos = modulo_columna.split("_");

    var modulo = elementos[0];
    var columna = elementos[1];
    var url = appPath + '/CpanVariables/EditNode/'+ambito+'/'+tipo+'/'+modulo+'/'+columna;

    window.open(url,'Variables','width=490,height=580,resizable=yes,scrollbars=yes');
}

/**
 * Comprueba si un valor es numérico
 * @param valor
 * @return boolean
 */
function IsNumeric(valor){

    var log=valor.length;
    var sw="S";
    for (x=0; x<log; x++){
        v1=valor.substr(x,1);
        v2 = parseInt(v1);
        //Compruebo si es un valor numerico
        if (isNaN(v2)) {
            sw= "N";
        }
    }
    if (sw=="S") {
        return true;
    } else {
        return false;
    }
}

/**
 * Recibe un string y lo intenta formatear como una fecha
 * añadiéndolo las '/' de separación entre el día, mes y año
 * @param fecha
 * @return string fecha
 */
function formateafecha(fecha){
    var longitud = fecha.length;
    var dia;
    var mes;
    var ano;

    if ((longitud>=2) && (primerslap==false)) {
        dia=fecha.substr(0,2);
        if ((IsNumeric(dia)==true) && (dia<=31) && (dia!="00")) {
            fecha=fecha.substr(0,2)+"/"+fecha.substr(3,7);
            primerslap=true;
        }
        else {
            fecha="";
            primerslap=false;
        }
    }
    else
    {
        dia=fecha.substr(0,1);
        if (IsNumeric(dia)==false)
        {
            fecha="";
        }
        if ((longitud<=2) && (primerslap=true)) {
            fecha=fecha.substr(0,1);
            primerslap=false;
        }
    }
    if ((longitud>=5) && (segundoslap==false))
    {
        mes=fecha.substr(3,2);
        if ((IsNumeric(mes)==true) &&(mes<=12) && (mes!="00")) {
            fecha=fecha.substr(0,5)+"/"+fecha.substr(6,4);
            segundoslap=true;
        }
        else {
            fecha=fecha.substr(0,3);
            segundoslap=false;
        }
    }
    else {
        if ((longitud<=5) && (segundoslap=true)) {
            fecha=fecha.substr(0,4);
            segundoslap=false;
        }
    }
    if (longitud>=7)
    {
        ano=fecha.substr(6,4);
        if (IsNumeric(ano)==false) {
            fecha=fecha.substr(0,6);
        }
        else {
            if (longitud==10){
                if ((ano==0) || (ano<1900) || (ano>2100)) {
                    fecha=fecha.substr(0,6);
                }
            }
        }
    }
    if (longitud>=10){
        fecha=fecha.substr(0,10);
        dia=fecha.substr(0,2);
        mes=fecha.substr(3,2);
        ano=fecha.substr(6,4);
        // A�o no viciesto y es febrero y el dia es mayor a 28
        if ( (ano%4 != 0) && (mes ==02) && (dia > 28) ) {
            fecha=fecha.substr(0,2)+"/";
        }
    }
    return (fecha);
}

/**
 * Carga vía ajax los documentos/imagenes de una entidad
 *
 * @param string entidad El nombre de la entidad
 * @param integer idEntidad El id de la entidad
 * @param string idDiv El id del div que se recargará
 * @param string tipo El tipo de documento (documents, images)
 */
function documentos(entidad, idEntidad, idDiv, tipo) {
    var url        = appPath + '/lib/documentos.php';
    var parametros = 'idEntidad='+idEntidad+'&entidad='+entidad+'&tipo='+tipo;

    // Coloco un gif "Cargando..." en la capa
    $('#'+idDiv).html("<img src='"+appPath+"/images/loading.gif'>");

    jQuery('#'+idDiv).load(url, parametros);
}

/**
 * Submitea el formulario pasado como parámetro
 *
 * @param string formulario El nombre del formulario a submitear
 * @return void
 */
function submitForm(formulario) {
    $('#'+formulario).submit();
}

/**
 * Pone un gif 'loading' en en div 'idDiv'
 */
function loading(idDiv) {
    // Coloco un gif "Cargando..." en la capa
    $('#'+idDiv).html("<img src='"+appPath+"/images/loading.gif'>");
}
