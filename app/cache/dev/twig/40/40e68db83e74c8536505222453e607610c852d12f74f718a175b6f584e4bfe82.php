<?php

/* AppBundle:Checkout:index.html.twig */
class __TwigTemplate_ede02f728f03dd24d58427141d6993c30d2d4f519b18512762f5ebd3f58b5aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Checkout:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"notifications\">
        <div id=\"messages\"></div>
        <p>
        <button id=\"notify\">Notify!</button>
        </p>
    </div>

    <p>
    <button id=\"addtocart\">Add Product to cart</button>
    </p>

    <h1>Some Default index page content</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>
    <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>
    <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>
    <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>
    <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>

    <h2>Another header</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>
    <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>
    <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>
    <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>
    <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>

    <h3>We want this page even longer</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>
    <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>
    <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>
    <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>
    <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>

";
    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Checkout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 40,  69 => 39,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="notifications">*/
/*         <div id="messages"></div>*/
/*         <p>*/
/*         <button id="notify">Notify!</button>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <p>*/
/*     <button id="addtocart">Add Product to cart</button>*/
/*     </p>*/
/* */
/*     <h1>Some Default index page content</h1>*/
/*     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>*/
/*     <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>*/
/*     <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>*/
/*     <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>*/
/*     <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>*/
/* */
/*     <h2>Another header</h2>*/
/*     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>*/
/*     <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>*/
/*     <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>*/
/*     <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>*/
/*     <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>*/
/* */
/*     <h3>We want this page even longer</h3>*/
/*     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis tortor, ut tempus ex aliquam sit amet. Phasellus quis efficitur dui. Mauris non quam eleifend, pretium turpis at, bibendum urna. Suspendisse volutpat ornare elit nec commodo. Curabitur eget nisl eu lectus elementum rutrum. Maecenas facilisis condimentum nunc at accumsan. Nulla aliquet id ante nec rhoncus. Suspendisse pellentesque nec magna at rhoncus. Praesent mi diam, viverra vel purus vitae, condimentum suscipit nibh. Fusce urna libero, pellentesque ut fermentum in, placerat dapibus magna. Aliquam porttitor porta mi, non lacinia turpis sodales vitae. Nulla semper neque vel nibh vulputate, sit amet venenatis lectus blandit. Fusce lacinia accumsan ex sit amet vestibulum. Suspendisse scelerisque fermentum dui.</p>*/
/*     <p>Proin gravida iaculis eros eu commodo. Maecenas non maximus risus. Vestibulum sed justo quam. In finibus turpis lectus. Nam risus libero, tincidunt vitae elit id, vestibulum mollis mi. Fusce ac purus a ligula egestas viverra eget auctor nunc. Pellentesque volutpat felis in feugiat mattis. Proin porta non orci ac hendrerit.</p>*/
/*     <p>Suspendisse bibendum nisi quis libero egestas, et varius mauris pulvinar. Quisque pharetra turpis sit amet nulla congue, id malesuada mauris interdum. Sed maximus eros at urna luctus pharetra. Nunc semper velit sit amet erat luctus, et elementum augue malesuada. Integer ut dolor facilisis, placerat odio iaculis, lobortis ipsum. Curabitur accumsan neque vel lorem hendrerit consectetur. Pellentesque efficitur aliquet tortor vitae tristique. Vestibulum congue rutrum ullamcorper. Sed eget leo faucibus mi cursus ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam aliquam volutpat ornare. Sed et sapien quis urna pulvinar convallis id non ante. Curabitur ut convallis mi, ac pellentesque orci. Proin nec fermentum metus. Pellentesque scelerisque felis sit amet vulputate luctus.</p>*/
/*     <p>Vivamus vel enim sed tortor posuere fermentum et auctor orci. Morbi ante metus, scelerisque in consequat at, fermentum eget massa. Cras facilisis augue id quam commodo, sed faucibus nisi dapibus. Vestibulum rutrum velit quis odio tristique venenatis. Mauris vehicula metus vel ligula fringilla, non ullamcorper urna sagittis. Quisque ultricies interdum nunc consequat volutpat. Suspendisse porta, ante et finibus varius, massa nisl facilisis augue, vitae molestie sem nunc ut mi. Nam ac lacinia quam. Sed leo enim, posuere a cursus sed, ultricies a lorem. Proin vestibulum dictum elit a euismod.</p>*/
/*     <p>Aliquam sapien nisl, faucibus non ullamcorper vitae, efficitur et dui. Nam fringilla ante dui, et dapibus nisi blandit eu. Quisque quam erat, tempor at tellus lobortis, cursus eleifend massa. Nam volutpat porta tempor. Morbi varius libero eget pellentesque dapibus. Sed euismod tempus nisl in euismod. Aliquam non lectus est. Aliquam erat volutpat. Ut vitae vestibulum neque. Donec ultricies ante sit amet iaculis placerat.</p>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
