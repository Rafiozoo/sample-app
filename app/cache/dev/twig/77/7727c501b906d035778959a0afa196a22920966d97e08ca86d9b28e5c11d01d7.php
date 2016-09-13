<?php

/* base.html.twig */
class __TwigTemplate_f1c89136def89c4c56567b36dd88fa9fe9fae65d7b9f6ed183c284c0cd4a48f2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" />
        <script   src=\"https://code.jquery.com/jquery-1.12.4.js\"   integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"   crossorigin=\"anonymous\"></script>
        <script   src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>
    <header>
        <div class=\"menu\">
            <ul class=\"menu__items\">
                <li>MenuItem 1</li>
                <li>MenuItem 2</li>
                <li>MenuItem 3</li>
                <li>MenuItem 4</li>
                <li>MenuItem 5</li>
                <li>MenuItem 6</li>
                <li>MenuItem 7</li>
                <li>MenuItem 8</li>
                <li>MenuItem 9</li>
                <li>MenuItem 10</li>
                <li>MenuItem 11</li>
                <li>MenuItem 12</li>
            </ul>
            <ul>
                <li><a href=\"/cart\">Go to Checkout <span id=\"counter\">(0)</span></a></li>
                <li class=\"menu__hamburger\"><!--&#9776;-->
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
        </div>
    </header>
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    <footer>
        Copyrights
    </footer>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  106 => 40,  101 => 6,  95 => 5,  88 => 46,  86 => 45,  80 => 41,  78 => 40,  45 => 10,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/html">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" />*/
/*         <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>*/
/*         <script   src="{{ asset('bundles/app/js/main.js') }}"></script>*/
/* */
/*     </head>*/
/*     <body>*/
/*     <header>*/
/*         <div class="menu">*/
/*             <ul class="menu__items">*/
/*                 <li>MenuItem 1</li>*/
/*                 <li>MenuItem 2</li>*/
/*                 <li>MenuItem 3</li>*/
/*                 <li>MenuItem 4</li>*/
/*                 <li>MenuItem 5</li>*/
/*                 <li>MenuItem 6</li>*/
/*                 <li>MenuItem 7</li>*/
/*                 <li>MenuItem 8</li>*/
/*                 <li>MenuItem 9</li>*/
/*                 <li>MenuItem 10</li>*/
/*                 <li>MenuItem 11</li>*/
/*                 <li>MenuItem 12</li>*/
/*             </ul>*/
/*             <ul>*/
/*                 <li><a href="/cart">Go to Checkout <span id="counter">(0)</span></a></li>*/
/*                 <li class="menu__hamburger"><!--&#9776;-->*/
/*                     <span></span>*/
/*                     <span></span>*/
/*                     <span></span>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </header>*/
/*         {% block body %}{% endblock %}*/
/*     <footer>*/
/*         Copyrights*/
/*     </footer>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
