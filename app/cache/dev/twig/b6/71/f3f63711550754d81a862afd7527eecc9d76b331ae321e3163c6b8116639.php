<?php

/* ORMMainBundle::layout.html.twig */
class __TwigTemplate_b671f3f63711550754d81a862afd7527eecc9d76b331ae321e3163c6b8116639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html xmlns=\"http://www.w3.org/1999/html\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>

<div class=\"container\">
    <div id=\"header\" class=\"page-header text-center\">
        <h1>Approfondissement Technique - ORM</h1>
        <p class=\"badge\">Démonstration du fonctionnement de l'ORM Doctrine 2, couplé au Framework Symfony 2.
        </p>
    </div>
</div>

";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id=\"actions\" class=\"text-center panel-footer\">
    <p class=\"text-primary\">Selectionner une action :</p>
    <a class=\"btn btn-primary\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("orm_get_bydate");
        echo "\">Get by date</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("orm_main_homepage");
        echo "\">Home</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("orm_count");
        echo "\">Get data count</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("orm_main_homepage");
        echo "\">Get by you</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("orm_main_homepage");
        echo "\">Get by deeply</a>



</div>

";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " AppTech - ORM ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 50
        echo "    <script
            src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 53
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ORMMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  134 => 52,  130 => 50,  128 => 48,  125 => 47,  120 => 23,  117 => 22,  111 => 8,  106 => 7,  103 => 6,  97 => 5,  92 => 55,  90 => 47,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  51 => 25,  35 => 10,  33 => 6,  23 => 1,  66 => 14,  61 => 12,  57 => 11,  53 => 10,  49 => 22,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 5,);
    }
}
