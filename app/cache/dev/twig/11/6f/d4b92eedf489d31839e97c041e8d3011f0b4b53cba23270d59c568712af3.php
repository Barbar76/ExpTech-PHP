<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_116fd4b92eedf489d31839e97c041e8d3011f0b4b53cba23270d59c568712af3 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  72 => 16,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  33 => 6,  204 => 74,  202 => 73,  198 => 71,  196 => 90,  193 => 68,  189 => 58,  186 => 57,  182 => 55,  179 => 54,  173 => 74,  168 => 72,  165 => 6,  159 => 5,  153 => 76,  151 => 63,  140 => 59,  138 => 57,  135 => 56,  133 => 55,  116 => 39,  108 => 35,  99 => 30,  97 => 29,  92 => 21,  83 => 24,  75 => 17,  66 => 15,  56 => 9,  54 => 21,  46 => 7,  36 => 7,  34 => 6,  30 => 3,  24 => 4,);
    }
}
