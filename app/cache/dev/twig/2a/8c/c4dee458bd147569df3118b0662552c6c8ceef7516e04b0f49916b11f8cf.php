<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_2a8cc4dee458bd147569df3118b0662552c6c8ceef7516e04b0f49916b11f8cf extends Twig_Template
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
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  72 => 16,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  43 => 8,  40 => 8,  33 => 5,  204 => 74,  202 => 73,  198 => 71,  196 => 90,  193 => 68,  189 => 58,  186 => 57,  182 => 55,  179 => 54,  173 => 74,  168 => 72,  165 => 6,  159 => 5,  153 => 76,  151 => 63,  140 => 59,  138 => 57,  135 => 56,  133 => 55,  116 => 39,  108 => 35,  99 => 30,  97 => 29,  92 => 21,  83 => 24,  75 => 17,  66 => 15,  56 => 9,  54 => 21,  46 => 7,  36 => 7,  34 => 6,  30 => 3,  24 => 3,);
    }
}
