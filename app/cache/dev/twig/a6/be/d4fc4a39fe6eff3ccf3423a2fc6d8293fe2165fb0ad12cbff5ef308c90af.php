<?php

/* ORMMainBundle:Main:getbydate.html.twig */
class __TwigTemplate_a6bed4fc4a39fe6eff3ccf3423a2fc6d8293fe2165fb0ad12cbff5ef308c90af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ORMMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ORMMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Get By Date Action";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((!twig_test_empty((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person"))))) {
            // line 7
            echo "        <div class=\"text-center\">
            <i class=\"glyphicon glyphicon-time\"></i>
            Time elapsed : ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
            echo " milliseconds
            <br>
            <i class=\"glyphicon glyphicon-stats\"></i>
            Person count : ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "ORMMainBundle:Main:getbydate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 12,  46 => 9,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
