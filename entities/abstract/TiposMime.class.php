<?php

/**
 * Description of TiposMime
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 26-ago-2012 19:40:28
 */
class TiposMime extends Tipos {

    protected $tipos = array(
        array('Id' => "323", 'Value' => "text/h323"),
        array('Id' => "acx", 'Value' => "application/internet-property-stream"),
        array('Id' => "ai", 'Value' => "application/postscript"),
        array('Id' => "aif", 'Value' => "audio/x-aiff"),
        array('Id' => "aifc", 'Value' => "audio/x-aiff"),
        array('Id' => "aiff", 'Value' => "audio/x-aiff"),
        array('Id' => "asf", 'Value' => "video/x-ms-asf"),
        array('Id' => "asr", 'Value' => "video/x-ms-asf"),
        array('Id' => "asx", 'Value' => "video/x-ms-asf"),
        array('Id' => "au", 'Value' => "audio/basic"),
        array('Id' => "avi", 'Value' => "video/x-msvideo"),
        array('Id' => "axs", 'Value' => "application/olescript"),
        array('Id' => "bas", 'Value' => "text/plain"),
        array('Id' => "bcpio", 'Value' => "application/x-bcpio"),
        array('Id' => "bin", 'Value' => "application/octet-stream"),
        array('Id' => "bmp", 'Value' => "image/bmp"),
        array('Id' => "c", 'Value' => "text/plain"),
        array('Id' => "cat", 'Value' => "application/vnd.ms-pkiseccat"),
        array('Id' => "cdf", 'Value' => "application/x-cdf"),
        array('Id' => "cer", 'Value' => "application/x-x509-ca-cert"),
        array('Id' => "class", 'Value' => "application/octet-stream"),
        array('Id' => "clp", 'Value' => "application/x-msclip"),
        array('Id' => "cmx", 'Value' => "image/x-cmx"),
        array('Id' => "cod", 'Value' => "image/cis-cod"),
        array('Id' => "cpio", 'Value' => "application/x-cpio"),
        array('Id' => "crd", 'Value' => "application/x-mscardfile"),
        array('Id' => "crl", 'Value' => "application/pkix-crl"),
        array('Id' => "crt", 'Value' => "application/x-x509-ca-cert"),
        array('Id' => "csh", 'Value' => "application/x-csh"),
        array('Id' => "css", 'Value' => "text/css"),
        array('Id' => "dcr", 'Value' => "application/x-director"),
        array('Id' => "der", 'Value' => "application/x-x509-ca-cert"),
        array('Id' => "dir", 'Value' => "application/x-director"),
        array('Id' => "dll", 'Value' => "application/x-msdownload"),
        array('Id' => "dms", 'Value' => "application/octet-stream"),
        array('Id' => "doc", 'Value' => "application/msword"),
        array('Id' => "dot", 'Value' => "application/msword"),
        array('Id' => "dvi", 'Value' => "application/x-dvi"),
        array('Id' => "dxr", 'Value' => "application/x-director"),
        array('Id' => "eps", 'Value' => "application/postscript"),
        array('Id' => "etx", 'Value' => "text/x-setext"),
        array('Id' => "evy", 'Value' => "application/envoy"),
        array('Id' => "exe", 'Value' => "application/octet-stream"),
        array('Id' => "fif", 'Value' => "application/fractals"),
        array('Id' => "flr", 'Value' => "x-world/x-vrml"),
        array('Id' => "gif", 'Value' => "image/gif"),
        array('Id' => "gtar", 'Value' => "application/x-gtar"),
        array('Id' => "gz", 'Value' => "application/x-gzip"),
        array('Id' => "h", 'Value' => "text/plain"),
        array('Id' => "hdf", 'Value' => "application/x-hdf"),
        array('Id' => "hlp", 'Value' => "application/winhlp"),
        array('Id' => "hqx", 'Value' => "application/mac-binhex40"),
        array('Id' => "hta", 'Value' => "application/hta"),
        array('Id' => "htc", 'Value' => "text/x-component"),
        array('Id' => "htm", 'Value' => "text/html"),
        array('Id' => "html", 'Value' => "text/html"),
        array('Id' => "htt", 'Value' => "text/webviewhtml"),
        array('Id' => "ico", 'Value' => "image/x-icon"),
        array('Id' => "ief", 'Value' => "image/ief"),
        array('Id' => "iii", 'Value' => "application/x-iphone"),
        array('Id' => "ins", 'Value' => "application/x-internet-signup"),
        array('Id' => "isp", 'Value' => "application/x-internet-signup"),
        array('Id' => "jfif", 'Value' => "image/pipeg"),
        array('Id' => "jpe", 'Value' => "image/jpeg"),
        array('Id' => "jpeg", 'Value' => "image/jpeg"),
        array('Id' => "jpg", 'Value' => "image/jpeg"),
        array('Id' => "js", 'Value' => "application/x-javascript"),
        array('Id' => "latex", 'Value' => "application/x-latex"),
        array('Id' => "lha", 'Value' => "application/octet-stream"),
        array('Id' => "lsf", 'Value' => "video/x-la-asf"),
        array('Id' => "lsx", 'Value' => "video/x-la-asf"),
        array('Id' => "lzh", 'Value' => "application/octet-stream"),
        array('Id' => "m13", 'Value' => "application/x-msmediaview"),
        array('Id' => "m14", 'Value' => "application/x-msmediaview"),
        array('Id' => "m3u", 'Value' => "audio/x-mpegurl"),
        array('Id' => "man", 'Value' => "application/x-troff-man"),
        array('Id' => "mdb", 'Value' => "application/x-msaccess"),
        array('Id' => "me", 'Value' => "application/x-troff-me"),
        array('Id' => "mht", 'Value' => "message/rfc822"),
        array('Id' => "mhtml", 'Value' => "message/rfc822"),
        array('Id' => "mid", 'Value' => "audio/mid"),
        array('Id' => "mny", 'Value' => "application/x-msmoney"),
        array('Id' => "mov", 'Value' => "video/quicktime"),
        array('Id' => "movie", 'Value' => "video/x-sgi-movie"),
        array('Id' => "mp2", 'Value' => "video/mpeg"),
        array('Id' => "mp3", 'Value' => "audio/mpeg"),
        array('Id' => "mpa", 'Value' => "video/mpeg"),
        array('Id' => "mpe", 'Value' => "video/mpeg"),
        array('Id' => "mpeg", 'Value' => "video/mpeg"),
        array('Id' => "mpg", 'Value' => "video/mpeg"),
        array('Id' => "mpp", 'Value' => "application/vnd.ms-project"),
        array('Id' => "mpv2", 'Value' => "video/mpeg"),
        array('Id' => "ms", 'Value' => "application/x-troff-ms"),
        array('Id' => "mvb", 'Value' => "application/x-msmediaview"),
        array('Id' => "nws", 'Value' => "message/rfc822"),
        array('Id' => "oda", 'Value' => "application/oda"),
        array('Id' => "p10", 'Value' => "application/pkcs10"),
        array('Id' => "p12", 'Value' => "application/x-pkcs12"),
        array('Id' => "p7b", 'Value' => "application/x-pkcs7-certificates"),
        array('Id' => "p7c", 'Value' => "application/x-pkcs7-mime"),
        array('Id' => "p7m", 'Value' => "application/x-pkcs7-mime"),
        array('Id' => "p7r", 'Value' => "application/x-pkcs7-certreqresp"),
        array('Id' => "p7s", 'Value' => "application/x-pkcs7-signature"),
        array('Id' => "pbm", 'Value' => "image/x-portable-bitmap"),
        array('Id' => "pdf", 'Value' => "application/pdf"),
        array('Id' => "pfx", 'Value' => "application/x-pkcs12"),
        array('Id' => "pgm", 'Value' => "image/x-portable-graymap"),
        array('Id' => "pko", 'Value' => "application/ynd.ms-pkipko"),
        array('Id' => "pma", 'Value' => "application/x-perfmon"),
        array('Id' => "pmc", 'Value' => "application/x-perfmon"),
        array('Id' => "pml", 'Value' => "application/x-perfmon"),
        array('Id' => "pmr", 'Value' => "application/x-perfmon"),
        array('Id' => "pmw", 'Value' => "application/x-perfmon"),
        array('Id' => "pnm", 'Value' => "image/x-portable-anymap"),
        array('Id' => "pot", 'Value' => "application/vnd.ms-powerpoint"),
        array('Id' => "ppm", 'Value' => "image/x-portable-pixmap"),
        array('Id' => "pps", 'Value' => "application/vnd.ms-powerpoint"),
        array('Id' => "ppt", 'Value' => "application/vnd.ms-powerpoint"),
        array('Id' => "prf", 'Value' => "application/pics-rules"),
        array('Id' => "ps", 'Value' => "application/postscript"),
        array('Id' => "pub", 'Value' => "application/x-mspublisher"),
        array('Id' => "qt", 'Value' => "video/quicktime"),
        array('Id' => "ra", 'Value' => "audio/x-pn-realaudio"),
        array('Id' => "ram", 'Value' => "audio/x-pn-realaudio"),
        array('Id' => "ras", 'Value' => "image/x-cmu-raster"),
        array('Id' => "rgb", 'Value' => "image/x-rgb"),
        array('Id' => "rmi", 'Value' => "audio/mid"),
        array('Id' => "roff", 'Value' => "application/x-troff"),
        array('Id' => "rtf", 'Value' => "application/rtf"),
        array('Id' => "rtx", 'Value' => "text/richtext"),
        array('Id' => "scd", 'Value' => "application/x-msschedule"),
        array('Id' => "sct", 'Value' => "text/scriptlet"),
        array('Id' => "setpay", 'Value' => "application/set-payment-initiation"),
        array('Id' => "setreg", 'Value' => "application/set-registration-initiation"),
        array('Id' => "sh", 'Value' => "application/x-sh"),
        array('Id' => "shar", 'Value' => "application/x-shar"),
        array('Id' => "sit", 'Value' => "application/x-stuffit"),
        array('Id' => "snd", 'Value' => "audio/basic"),
        array('Id' => "spc", 'Value' => "application/x-pkcs7-certificates"),
        array('Id' => "spl", 'Value' => "application/futuresplash"),
        array('Id' => "src", 'Value' => "application/x-wais-source"),
        array('Id' => "sst", 'Value' => "application/vnd.ms-pkicertstore"),
        array('Id' => "stl", 'Value' => "application/vnd.ms-pkistl"),
        array('Id' => "stm", 'Value' => "text/html"),
        array('Id' => "svg", 'Value' => "image/svg+xml"),
        array('Id' => "sv4cpio", 'Value' => "application/x-sv4cpio"),
        array('Id' => "sv4crc", 'Value' => "application/x-sv4crc"),
        array('Id' => "t", 'Value' => "application/x-troff"),
        array('Id' => "tar", 'Value' => "application/x-tar"),
        array('Id' => "tcl", 'Value' => "application/x-tcl"),
        array('Id' => "tex", 'Value' => "application/x-tex"),
        array('Id' => "texi", 'Value' => "application/x-texinfo"),
        array('Id' => "texinfo", 'Value' => "application/x-texinfo"),
        array('Id' => "tgz", 'Value' => "application/x-compressed"),
        array('Id' => "tif", 'Value' => "image/tiff"),
        array('Id' => "tiff", 'Value' => "image/tiff"),
        array('Id' => "tr", 'Value' => "application/x-troff"),
        array('Id' => "trm", 'Value' => "application/x-msterminal"),
        array('Id' => "tsv", 'Value' => "text/tab-separated-values"),
        array('Id' => "txt", 'Value' => "text/plain"),
        array('Id' => "uls", 'Value' => "text/iuls"),
        array('Id' => "ustar", 'Value' => "application/x-ustar"),
        array('Id' => "vcf", 'Value' => "text/x-vcard"),
        array('Id' => "vrml", 'Value' => "x-world/x-vrml"),
        array('Id' => "wav", 'Value' => "audio/x-wav"),
        array('Id' => "wcm", 'Value' => "application/vnd.ms-works"),
        array('Id' => "wdb", 'Value' => "application/vnd.ms-works"),
        array('Id' => "wks", 'Value' => "application/vnd.ms-works"),
        array('Id' => "wmf", 'Value' => "application/x-msmetafile"),
        array('Id' => "wps", 'Value' => "application/vnd.ms-works"),
        array('Id' => "wri", 'Value' => "application/x-mswrite"),
        array('Id' => "wrl", 'Value' => "x-world/x-vrml"),
        array('Id' => "wrz", 'Value' => "x-world/x-vrml"),
        array('Id' => "xaf", 'Value' => "x-world/x-vrml"),
        array('Id' => "xbm", 'Value' => "image/x-xbitmap"),
        array('Id' => "xla", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xlc", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xlm", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xls", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xlt", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xlw", 'Value' => "application/vnd.ms-excel"),
        array('Id' => "xof", 'Value' => "x-world/x-vrml"),
        array('Id' => "xpm", 'Value' => "image/x-xpixmap"),
        array('Id' => "xwd", 'Value' => "image/x-xwindowdump"),
        array('Id' => "z", 'Value' => "application/x-compress"),
        array('Id' => "zip", 'Value' => "application/zip"),
    );

}

?>
