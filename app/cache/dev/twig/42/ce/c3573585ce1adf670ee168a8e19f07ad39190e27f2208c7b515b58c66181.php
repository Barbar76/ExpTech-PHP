<?php

/* ORMMainBundle:Main:count.html.twig */
class __TwigTemplate_42cec3573585ce1adf670ee168a8e19f07ad39190e27f2208c7b515b58c66181 extends Twig_Template
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
        echo " - Information";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ((!twig_test_empty((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person"))))) {
            // line 8
            echo "        <div class=\"text-primary text-info text-center\">
            <i class=\"glyphicon glyphicon-info-sign\">Information</i>
            <br>
            <br>
            Personnes dans la BDD : ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "html", null, true);
            echo "
            <br>
            Adresses dans la BDD : ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "html", null, true);
            echo "
            <br>
            Villes dans la BDD : ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")), "html", null, true);
            echo "
            <br>
            Pays dans la BDD : ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")), "html", null, true);
            echo "
            <br>
            Regions dans la BDD : ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "ORMMainBundle:Main:count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  70 => 20,  65 => 18,  60 => 16,  55 => 14,  50 => 12,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
