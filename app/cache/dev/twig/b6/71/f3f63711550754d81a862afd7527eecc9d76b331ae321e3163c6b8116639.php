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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SdzBlog";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ORMMainBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  42 => 5,  34 => 9,  27 => 5,  21 => 1,  39 => 6,  36 => 11,  29 => 3,);
    }
}
