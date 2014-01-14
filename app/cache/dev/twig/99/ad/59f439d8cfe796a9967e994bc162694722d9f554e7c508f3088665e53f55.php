<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_99ad59f439d8cfe796a9967e994bc162694722d9f554e7c508f3088665e53f55 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  72 => 16,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  33 => 10,  204 => 74,  202 => 73,  198 => 71,  196 => 90,  193 => 68,  189 => 58,  186 => 57,  182 => 55,  179 => 54,  173 => 74,  168 => 72,  165 => 6,  159 => 5,  153 => 76,  151 => 63,  140 => 59,  138 => 57,  135 => 56,  133 => 55,  116 => 39,  108 => 35,  99 => 30,  97 => 29,  92 => 21,  83 => 24,  75 => 17,  66 => 15,  56 => 9,  54 => 21,  46 => 7,  36 => 7,  34 => 6,  30 => 3,  24 => 4,);
    }
}
