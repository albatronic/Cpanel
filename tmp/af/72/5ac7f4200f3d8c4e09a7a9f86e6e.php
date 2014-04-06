<?php

/* GconContenidosRelacionados/list.html.twig */
class __TwigTemplate_af725ac7f4200f3d8c4e09a7a9f86e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'listado' => array($this, 'block_listado'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(($this->getAttribute($this->getContext($context, "values"), "controller") . "/index.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_listado($context, array $blocks = array())
    {
        // line 13
        echo "<ul class=\"arbol\">
";
        // line 14
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_values_, "datos"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["padre"]) {
            // line 15
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["padre"])) { $_padre_ = $context["padre"]; } else { $_padre_ = null; }
            $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/secciones.html.twig"));
            $template->display(array_merge($context, array("seccion" => $_padre_, "templateContenidos" => "contenidosEditar.html.twig")));
            // line 16
            echo "    <ul class=\"arbol\">
        ";
            // line 17
            if (isset($context["padre"])) { $_padre_ = $context["padre"]; } else { $_padre_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_padre_, "hijos"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["hijo"]) {
                // line 18
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["hijo"])) { $_hijo_ = $context["hijo"]; } else { $_hijo_ = null; }
                $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/secciones.html.twig"));
                $template->display(array_merge($context, array("seccion" => $_hijo_, "templateContenidos" => "contenidosEditar.html.twig")));
                // line 19
                echo "            <ul class=\"arbol\">
                ";
                // line 20
                if (isset($context["hijo"])) { $_hijo_ = $context["hijo"]; } else { $_hijo_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_hijo_, "hijos"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["nieto"]) {
                    // line 21
                    echo "                    ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["nieto"])) { $_nieto_ = $context["nieto"]; } else { $_nieto_ = null; }
                    $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/secciones.html.twig"));
                    $template->display(array_merge($context, array("seccion" => $_nieto_, "templateContenidos" => "contenidosEditar.html.twig")));
                    // line 22
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nieto'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 23
                echo "            </ul>                        
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hijo'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "    </ul>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['padre'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "GconContenidosRelacionados/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 27,  139 => 25,  124 => 23,  110 => 22,  104 => 21,  86 => 20,  83 => 19,  77 => 18,  59 => 17,  56 => 16,  50 => 15,  32 => 14,  29 => 13,  26 => 12,);
    }
}
