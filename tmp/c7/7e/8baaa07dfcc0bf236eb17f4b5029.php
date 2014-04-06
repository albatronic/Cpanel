<?php

/* _global/menuIconosIzquierda.html.twig */
class __TwigTemplate_c77e8baaa07dfcc0bf236eb17f4b5029 extends Twig_Template
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
        echo "<div id=\"primary_nav\" class=\"g_blue\">
    <ul>

    ";
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
        if (($this->getAttribute($_idiomas_, "actual") == 0)) {
            // line 9
            echo "
    ";
            // line 10
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "idPerfil"), "Id") == 1)) {
                // line 11
                echo "        <li><a href=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/CpanVariables/Env/Pro/";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "\" title=\"Variables de Entorno Proyecto ";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "\"><span class=\"icon_block m_dashboardOver\">Variables de Entorno del Proyecto ";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "</span></a></li>
    ";
            }
            // line 13
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosProyecto"), "AC", array(), "array") || ($this->getAttribute($this->getAttribute($_user_, "idPerfil"), "Id") == 1))) {
                // line 14
                echo "        <li><a href=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/CpanVariables/Web/Pro/";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "\" title=\"Variables Web Proyecto ";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "\"><span class=\"icon_block m_dashboard\">Variables Web del Proyecto ";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
                echo "</span></a></li>
    ";
            }
            // line 16
            echo "
    ";
            // line 18
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (((($this->getAttribute($this->getAttribute($_values_, "enCurso"), "app") != "") && ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "app") != "Index")) && ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "app") != "CpanVariables"))) {
                // line 19
                echo "        ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (($this->getAttribute($this->getAttribute($_user_, "idPerfil"), "Id") == 1)) {
                    // line 20
                    echo "            <li><a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/CpanVariables/Env/App/";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "\" title=\"Variables de Entorno App ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "\"><span class=\"icon_block m_eventsOver\">Variables de Entorno de la App ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "</span></a></li>
        ";
                }
                // line 22
                echo "        ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosApp"), "VW", array(), "array")) {
                    // line 23
                    echo "            <li><a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/CpanVariables/Web/App/";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "\" title=\"Variables Web App ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "\"><span class=\"icon_block m_events\">Variables Web de la App ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "app"), "html", null, true);
                    echo "</span></a></li>
        ";
                }
                // line 25
                echo "    ";
            }
            // line 26
            echo "
    ";
            // line 28
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (((($this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo") != "") && ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo") != "Index")) && ($this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo") != "CpanVariables"))) {
                // line 29
                echo "        ";
                // line 30
                echo "        ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (($this->getAttribute($this->getAttribute($_user_, "idPerfil"), "Id") == 1)) {
                    // line 31
                    echo "            <li><a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/CpanVariables/Env/Mod/";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "\" title=\"Variables de Entorno Modulo ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "\"><span class=\"icon_block p_bookOver\">Variables de Entorno del Módulo ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "</span></a></li>
        ";
                }
                // line 33
                echo "        ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "VW", array(), "array")) {
                    // line 34
                    echo "            <li><a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/CpanVariables/Web/Mod/";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "\" title=\"Variables Web Modulo ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "\"><span class=\"icon_block p_book\">Variables Web del Módulo ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "enCurso"), "modulo"), "html", null, true);
                    echo "</span></a></li>
        ";
                }
                // line 36
                echo "    ";
            }
            // line 37
            echo "            
    ";
        }
        // line 39
        echo "
";
        // line 46
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "_global/menuIconosIzquierda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 46,  180 => 39,  176 => 37,  173 => 36,  157 => 34,  153 => 33,  137 => 31,  133 => 30,  131 => 29,  127 => 28,  124 => 26,  121 => 25,  105 => 23,  101 => 22,  85 => 20,  81 => 19,  77 => 18,  74 => 16,  58 => 14,  53 => 13,  37 => 11,  34 => 10,  31 => 9,  27 => 8,  24 => 6,  19 => 2,);
    }
}
