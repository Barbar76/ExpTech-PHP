<?php

/* ORMMainBundle:Main:index.html.twig */
class __TwigTemplate_07629f5465c141a3b3216dec523c1775af8bf4fe77639517be382c7b869317c2 extends Twig_Template
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
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    Person :

    ";
        // line 8
        if ((!twig_test_empty((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person"))))) {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 10
                echo "           <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "name"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "ORMMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  50 => 10,  45 => 9,  43 => 8,  39 => 6,  36 => 5,  29 => 3,);
    }
}
