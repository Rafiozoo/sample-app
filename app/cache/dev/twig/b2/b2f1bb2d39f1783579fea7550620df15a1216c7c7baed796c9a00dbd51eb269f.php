<?php

/* AppBundle:Checkout:cart.html.twig */
class __TwigTemplate_e49567190593ced5afe92e0c6ba1b626fce43851582ce105cd20c70e015d2a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Checkout:cart.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Checkout:cart";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Checkout:cart page</h1>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Checkout:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Checkout:cart{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Checkout:cart page</h1>*/
/* {% endblock %}*/
/* */
