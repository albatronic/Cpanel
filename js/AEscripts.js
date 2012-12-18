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
    $( "#tabs1" ).tabs();
    /**
     * Para el efecto acordeón
     */
    $( "#accordion" ).accordion({
        autoHeight: false,
        navigation: true,
        collapsible: true,
        active: false,
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
 * Muestra/oculta el elemento id
 */
function switchDisplay(id) {
    if ($('#'+id).css('display') == 'block') {
        $('#'+id).css('display','none');
    } else {
        $('#'+id).css('display','block')        
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

    window.open(url,'Variables','width=400,height=580,resizable=yes,scrollbars=yes');
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
        // Año no viciesto y es febrero y el dia es mayor a 28
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
    var url = "<img src='"+appPath+"/images/loading.gif'>";

    $('#'+idDiv).html(url);
}

/*
 * ----------------------------------------------------------------
 * FUNCIONES AJAX
 * ----------------------------------------------------------------
 * GENERA UN DESPLEGLABE CON TECNOLOGIA AJAX. LOS PARAMETROS SON
 *
 * iddiv        -> ID identificador del contenedor que será rellenado con la respuesta (¡¡no vale el atributo name!!)
 * idselect     -> ID identificador del select que se creará  (¡¡no vale el atributo name!!)
 * nameselect   -> NAME name del select que se creará (se utiliza para capturar del datos del formulario)
 * tipo         -> indica el tipo de select. O sea la tabla que se empleará. Ver script 'desplegableAjax.php'
 * filtro       -> elemento html que contiene el valor por el que filtrar los datos.
 */
function DesplegableAjax(iddiv,idselect,nameselect,tipo,filtro) {
    var url        = appPath + '/lib/desplegableAjax.php';
    var parametros = 't='+tipo+'&filtro='+filtro+'&idselect='+idselect+'&nameselect='+nameselect;

    // Coloco un gif "Cargando..." en la capa
    $('#'+iddiv).html("<img src='"+appPath+"/images/loading.gif'>");

    jQuery('#'+iddiv).load(url, parametros);
}

/*
 * GENERA UN LISTA DE AUTOCOMPLETADO CON JQUERY. REQUIRE DE LA FUNCION 'devuelve'
 *
 * campoAutoCompletar   -> es el id del campo donde se genera el autocompletado
 * campoId              -> es el id del campo donde se devuelve el id obtenido
 * campoTexto           -> es el id del campo donde se devuelve el texto obtenido
 * entidad              -> indica en base a qué entidad de datos se genera el autocompletado
 * columna              -> la columna de la entidad de datos que se devolverá
 * filtroAdicional      -> valor para un filtro adicional, es opcional
 * desplegableAjax      -> array con parametros adicionales para disparar desplegables en cascada
 */
function autoCompletar(campoAutoCompletar,campoId,campoTexto,entidad,columna,filtroAdicional,desplegableAjax) {

    $("#"+campoAutoCompletar).autocomplete({
        source: appPath + "/lib/autoCompletar.php?filtroAdicional=" + filtroAdicional + "&entidad=" + entidad + "&columna=" + columna,
        minLength: 2,
        select: function( event, ui ) {
            devuelve( campoId, ui.item.id, campoTexto, ui.item.value, desplegableAjax );
        }
    });
}

function devuelve( campoId, id, campoTexto, value, desplegableAjax) {
    $( "#"+campoId ).val(id);
    $( "#"+campoTexto ).val(value);
    if (desplegableAjax.length > 0) {
        var params = desplegableAjax;
        DesplegableAjax(params[0],params[1],params[2],params[3],id);
    }
    $( "#"+campoTexto ).focus();
}

function actualizaContenidoRelacionado(idDiv,idContenidoOrigen,idContenidoRelacionado,onOff) {

    //var url        = appPath + '/lib/contenidosRelacionados.php';
    var parametros = 'idContenidoOrigen='+idContenidoOrigen+'&idContenidoRelacionado='+idContenidoRelacionado+'&onOff='+onOff;

    // Coloco un gif "Cargando..." en la capa
    //$('#'+idDiv).html("<img src='"+appPath+"/images/loading.gif'>");

$.ajax({
    url: appPath + '/lib/contenidosRelacionados.php',
    type: 'GET',
    async: true,
    data: parametros
});

}

function actualizaEtiquetasRelacionadas(idDiv,idContenido,idEtiqueta,onOff) {


    var url        = appPath + '/lib/etiquetasRelacionadas.php';
    var parametros = 'idContenido='+idContenido+'&idEtiqueta='+idEtiqueta+'&onOff='+onOff;

    // Cojo el html que hay en el div
    var htmlSrc = $('div.'+idDiv).html();

    // Coloco un gif "Cargando..." en la capa
    $('#'+idDiv).html("<img src='"+appPath+"/images/loading.gif'>");

    $('#'+idDiv).load(
                        url,
                        parametros,
                        function() { $('#'+idDiv).html(htmlSrc);}
                    );
}
/*
 * ----------------------------------------------------------------
 * FUNCION PARA LOS MENSAJES DE NOTIFICACION
 * NECESITA:
 *       notificaciones.css
 *       habilitar un tag <div id="notificacion"></div> en cualquier
 *       parte de la pagina, preferiblemente en el layout principal
 *
 * $mensaje: es el mensaje de notificacion a mostrar
 * $tipo:    determina el estilo del mensaje. Los valores posibles son:
 *           exito,alerta,info,error (que coinciden con los estilos
 *           definidos en notificaciones.css)
 *
 * ----------------------------------------------------------------
 */
function notificacion(mensaje,tipo) {
    var v=0;
    var errores="";
    for (var i=0; i<=mensaje.length;i++)
    {
        if(mensaje[i]=='#')
        {
            errores += '<p>' + mensaje.substring(i, v) + '</p>';
            v=i+1;
        }
    }

    document.getElementById('notificacion').innerHTML = errores;
    document.getElementById('notificacion').className = tipo+" notificacion";

    setTimeout(function(){
        $(".notificacion").fadeIn(2000).fadeOut(6000);
    }, 0000);
}