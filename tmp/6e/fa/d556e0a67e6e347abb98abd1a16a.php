<?php

/* _global/menuIzquierda.html.twig */
class __TwigTemplate_6efad556e0a67e6e347abb98abd1a16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "app", array(), "array")) {
            // line 4
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context["appEnCurso"] = $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app");
        } else {
            // line 6
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context["appEnCurso"] = $this->getAttribute($this->getAttribute($_values_, "menu"), "perteneceA");
        }
        // line 8
        echo "
<div id=\"sidebar\">
    <div id=\"secondary_nav\">

    ";
        // line 13
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "app", array(), "array")) {
            // line 14
            echo "        <ul id=\"sidenav-select\">
            <li><a href=\"#\"><img class=\"iconoMenu\" src=\"";
            // line 15
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/iconos/";
            if (isset($context["appEnCurso"])) { $_appEnCurso_ = $context["appEnCurso"]; } else { $_appEnCurso_ = null; }
            echo twig_escape_filter($this->env, $_appEnCurso_, "html", null, true);
            echo ".png\"/><span class=\"textoMenu\">";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (isset($context["appEnCurso"])) { $_appEnCurso_ = $context["appEnCurso"]; } else { $_appEnCurso_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_menu_, $_appEnCurso_, array(), "array"), "titulo"), "html", null, true);
            echo "</span><span class=\"up_down_arrow\">&nbsp;</span></a>
                <ul class=\"acitem\">
                ";
            // line 17
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (isset($context["appEnCurso"])) { $_appEnCurso_ = $context["appEnCurso"]; } else { $_appEnCurso_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_menu_, $_appEnCurso_, array(), "array"), "modulos"));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 18
                echo "                    ";
                if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                if ($this->getAttribute($_modulo_, "publicar")) {
                    // line 19
                    echo "                        <li><a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/";
                    if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_modulo_, "controller"), "html", null, true);
                    echo "\"><span class=\"list-icon\">&nbsp;</span>";
                    if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_modulo_, "titulo"), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        // line 26
        echo "
    ";
        // line 28
        echo "    <ul id=\"sidenav\" class=\"accordion_mnu collapsible\">
    ";
        // line 29
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
        foreach ($context['_seq'] as $context["key"] => $context["aplicacion"]) {
            // line 30
            echo "
        ";
            // line 31
            if (isset($context["aplicacion"])) { $_aplicacion_ = $context["aplicacion"]; } else { $_aplicacion_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (isset($context["appEnCurso"])) { $_appEnCurso_ = $context["appEnCurso"]; } else { $_appEnCurso_ = null; }
            if (($this->getAttribute($_aplicacion_, "publicar") && ($_key_ != $_appEnCurso_))) {
                // line 32
                echo "            <li><a href=\"#\"><img class=\"iconoMenu\" src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/iconos/";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo ".png\"/><span class=\"textoMenu\">";
                if (isset($context["aplicacion"])) { $_aplicacion_ = $context["aplicacion"]; } else { $_aplicacion_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aplicacion_, "titulo"), "html", null, true);
                echo "</span><span class=\"up_down_arrow\">&nbsp;</span></a>
            ";
                // line 34
                echo "                <ul class=\"acitem\">
                ";
                // line 35
                if (isset($context["aplicacion"])) { $_aplicacion_ = $context["aplicacion"]; } else { $_aplicacion_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_aplicacion_, "modulos"));
                foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                    // line 36
                    echo "                    ";
                    if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                    if ($this->getAttribute($_modulo_, "publicar")) {
                        // line 37
                        echo "                        <li><a href=\"";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                        echo "/";
                        if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_modulo_, "controller"), "html", null, true);
                        echo "\"><span class=\"list-icon\">&nbsp;</span>";
                        if (isset($context["modulo"])) { $_modulo_ = $context["modulo"]; } else { $_modulo_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_modulo_, "titulo"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 39
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 40
                echo "                </ul>
            </li>
        ";
            }
            // line 43
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aplicacion'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "    </ul>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_global/menuIzquierda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  99 => 28,  96 => 26,  41 => 13,  182 => 46,  179 => 39,  152 => 39,  136 => 31,  126 => 28,  123 => 26,  57 => 14,  102 => 29,  86 => 21,  74 => 18,  71 => 19,  48 => 15,  24 => 6,  359 => 72,  347 => 68,  341 => 66,  336 => 65,  331 => 64,  326 => 63,  320 => 61,  315 => 60,  310 => 59,  305 => 58,  300 => 57,  295 => 56,  290 => 55,  285 => 54,  280 => 53,  275 => 52,  270 => 51,  265 => 50,  260 => 49,  255 => 48,  250 => 47,  245 => 46,  240 => 45,  235 => 44,  230 => 43,  225 => 42,  215 => 40,  210 => 39,  205 => 38,  195 => 36,  190 => 35,  185 => 34,  180 => 33,  175 => 37,  170 => 45,  165 => 30,  160 => 29,  155 => 28,  150 => 27,  145 => 26,  140 => 25,  130 => 35,  158 => 40,  151 => 32,  137 => 26,  120 => 25,  115 => 32,  105 => 28,  95 => 16,  80 => 19,  65 => 15,  60 => 9,  50 => 7,  45 => 14,  35 => 8,  30 => 6,  44 => 6,  38 => 6,  2568 => 596,  2565 => 595,  2562 => 594,  2557 => 593,  2545 => 592,  2531 => 574,  2526 => 572,  2523 => 571,  2518 => 569,  2513 => 568,  2510 => 567,  2507 => 566,  2494 => 565,  2479 => 561,  2470 => 560,  2449 => 554,  2441 => 548,  2428 => 547,  2416 => 543,  2410 => 541,  2404 => 540,  2392 => 539,  2380 => 535,  2374 => 533,  2368 => 532,  2356 => 531,  2343 => 527,  2337 => 525,  2334 => 524,  2321 => 523,  2306 => 518,  2294 => 517,  2281 => 516,  2266 => 511,  2254 => 510,  2241 => 509,  2226 => 504,  2211 => 503,  2197 => 502,  2182 => 497,  2164 => 496,  2148 => 495,  2130 => 490,  2112 => 489,  2097 => 488,  2082 => 483,  2079 => 482,  2068 => 481,  2050 => 471,  2045 => 470,  2040 => 469,  2036 => 468,  2030 => 467,  2025 => 465,  2020 => 464,  2015 => 463,  2008 => 461,  2003 => 460,  1998 => 457,  1988 => 455,  1985 => 454,  1978 => 452,  1968 => 451,  1965 => 450,  1946 => 449,  1916 => 445,  1914 => 444,  1903 => 443,  1882 => 432,  1868 => 431,  1853 => 424,  1846 => 422,  1843 => 421,  1839 => 419,  1832 => 417,  1822 => 414,  1810 => 413,  1805 => 412,  1799 => 411,  1794 => 410,  1788 => 408,  1781 => 407,  1776 => 406,  1771 => 405,  1765 => 404,  1761 => 402,  1757 => 401,  1746 => 399,  1743 => 398,  1740 => 397,  1730 => 395,  1727 => 394,  1723 => 392,  1713 => 390,  1710 => 389,  1703 => 387,  1693 => 386,  1690 => 385,  1668 => 384,  1653 => 376,  1646 => 374,  1643 => 373,  1639 => 371,  1629 => 368,  1617 => 367,  1612 => 366,  1606 => 364,  1599 => 363,  1594 => 362,  1589 => 361,  1583 => 360,  1579 => 358,  1575 => 357,  1564 => 355,  1561 => 354,  1558 => 353,  1548 => 351,  1545 => 350,  1541 => 348,  1531 => 346,  1528 => 345,  1521 => 343,  1511 => 342,  1508 => 341,  1486 => 340,  1468 => 332,  1463 => 331,  1459 => 330,  1454 => 329,  1449 => 328,  1444 => 327,  1439 => 326,  1433 => 325,  1428 => 324,  1424 => 322,  1414 => 320,  1411 => 319,  1404 => 317,  1393 => 316,  1385 => 313,  1382 => 312,  1378 => 311,  1359 => 310,  1340 => 300,  1333 => 299,  1325 => 298,  1317 => 297,  1305 => 296,  1301 => 294,  1291 => 292,  1288 => 291,  1281 => 289,  1278 => 288,  1274 => 287,  1257 => 286,  1238 => 280,  1230 => 278,  1227 => 277,  1221 => 276,  1207 => 275,  1191 => 268,  1183 => 267,  1177 => 265,  1169 => 264,  1163 => 262,  1155 => 261,  1149 => 259,  1140 => 258,  1132 => 256,  1129 => 255,  1123 => 254,  1106 => 253,  1091 => 245,  1081 => 243,  1075 => 242,  1069 => 241,  1064 => 240,  1057 => 239,  1052 => 238,  1047 => 237,  1042 => 236,  1036 => 235,  1031 => 234,  1027 => 232,  1022 => 231,  1018 => 229,  1008 => 227,  1005 => 226,  998 => 224,  988 => 223,  985 => 222,  965 => 221,  942 => 214,  936 => 210,  927 => 207,  904 => 206,  896 => 205,  888 => 204,  882 => 203,  877 => 202,  868 => 200,  862 => 199,  857 => 198,  854 => 197,  851 => 196,  847 => 194,  842 => 193,  837 => 192,  830 => 191,  822 => 190,  814 => 189,  808 => 188,  803 => 187,  797 => 186,  793 => 184,  788 => 183,  783 => 182,  768 => 180,  761 => 179,  751 => 177,  746 => 176,  741 => 175,  735 => 174,  730 => 173,  716 => 171,  712 => 170,  709 => 169,  705 => 167,  695 => 165,  692 => 164,  685 => 162,  675 => 161,  672 => 160,  669 => 159,  647 => 158,  634 => 136,  629 => 135,  624 => 134,  608 => 131,  604 => 130,  597 => 128,  592 => 127,  587 => 126,  581 => 125,  576 => 124,  562 => 122,  558 => 121,  544 => 120,  514 => 115,  497 => 114,  494 => 113,  489 => 112,  484 => 111,  476 => 109,  472 => 107,  457 => 106,  430 => 100,  413 => 99,  410 => 98,  405 => 97,  400 => 96,  392 => 94,  387 => 93,  384 => 92,  369 => 91,  353 => 70,  338 => 84,  335 => 83,  321 => 82,  301 => 75,  294 => 72,  288 => 70,  274 => 69,  268 => 67,  264 => 65,  248 => 64,  232 => 59,  229 => 58,  223 => 57,  220 => 41,  214 => 55,  208 => 54,  203 => 53,  200 => 37,  189 => 49,  183 => 47,  178 => 46,  172 => 36,  167 => 43,  162 => 42,  154 => 40,  149 => 39,  143 => 37,  134 => 34,  111 => 32,  106 => 578,  103 => 563,  100 => 22,  94 => 24,  91 => 23,  85 => 14,  79 => 500,  76 => 18,  67 => 18,  46 => 272,  40 => 5,  37 => 11,  31 => 9,  28 => 89,  22 => 3,  19 => 2,  169 => 51,  166 => 50,  161 => 46,  159 => 41,  156 => 34,  153 => 43,  147 => 37,  144 => 29,  141 => 35,  139 => 37,  135 => 36,  132 => 30,  127 => 34,  125 => 22,  122 => 24,  113 => 65,  107 => 30,  90 => 22,  88 => 521,  84 => 21,  82 => 507,  77 => 19,  75 => 12,  70 => 11,  68 => 16,  61 => 17,  53 => 13,  43 => 9,  34 => 10,  32 => 6,  25 => 4,  23 => 3,  133 => 37,  129 => 35,  119 => 23,  110 => 31,  104 => 23,  101 => 61,  97 => 25,  87 => 23,  73 => 16,  64 => 434,  58 => 13,  55 => 12,  52 => 11,  49 => 283,  42 => 14,  39 => 9,  36 => 12,  33 => 3,  27 => 8,);
    }
}
