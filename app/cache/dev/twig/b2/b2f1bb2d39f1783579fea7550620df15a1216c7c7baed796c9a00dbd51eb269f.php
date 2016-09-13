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
        echo "<header class=\"header\">
\t<div class=\"container--header\">
\t\t<h1 class=\"header__title\">Acme Store</h1>
\t\t<div class=\"cart-counter\">
\t\t\t<p><i class=\"cart-counter__icon svg-icon svg-icon--cart\"></i><span class=\"cart-counter__total-qty\">1</span></p>
\t\t</div>
\t</div>
</header>
<main class=\"main\">
\t<div class=\"container--main\">
\t\t<h2 class=\"main__title\">Checkout</h2>
\t\t<section class=\"order\">
\t\t\t<h3 class=\"form__section-title\">Order</h3>
\t\t\t<ul class=\"product-list\">
\t\t\t\t<li class=\"product-list__item\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"product-list__item__image\">
\t\t\t\t\t<h4 class=\"product-list__item__name\">Acme Product</h4>
\t\t\t\t\t<dl class=\"product-list__item__qty-price\">
\t\t\t\t\t\t<dt class=\"item__qty__key\">Qty</dt>
\t\t\t\t\t\t<dd class=\"item__qty__val\">1</dd>
\t\t\t\t\t\t<dt class=\"item__price__key\">Price</dt>
\t\t\t\t\t\t<dd class=\"item__price__val\">00</dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<dl class=\"order__summary\">
\t\t\t\t<dt class=\"summary__subtotal__key\">Subtotal</dt>
\t\t\t\t<dd class=\"summary__subtotal__val\">00,000</dd>
\t\t\t\t<dt class=\"summary__tax__key\">Tax</dt>
\t\t\t\t<dd class=\"summary__tax__val\">00</dd>
\t\t\t\t<dt class=\"summary__shipping__key\">Shipping</dt>
\t\t\t\t<dd class=\"summary__shipping__val\">05</dd>
\t\t\t\t<dt class=\"summary__total__key\">Total</dt>
\t\t\t\t<dd class=\"summary__total__val\">00,00</dd>
\t\t\t</dl>
\t\t</section>

\t\t<form class=\"form\" method=\"post\" action=\"\">
\t\t\t<section class=\"form__section--delivery\">
\t\t\t\t<h3 class=\"delivery__title\">Delivery Address</h3>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"first_name\">First Name</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"first_name\" name=\"first_name\" type=\"text\" autocomplete=\"name given-name\" required pattern=\"\\D{1,64}\" autofocus title=\"Please enter your first given name\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"last_name\">Last Name</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"last_name\" name=\"last_name\" type=\"text\" autocomplete=\"name family-name\" required pattern=\"\\D{1,64}\" title=\"Please enter your family name\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"email\">E-mail</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"email\" name=\"email\" type=\"email\" autocomplete=\"email\" required title=\"Please enter correct e-mail address\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label\" for=\"phone\">Phone</label>
\t\t\t\t\t<input class=\"form__input\" id=\"phone\" name=\"phone\" type=\"tel\" autocomplete=\"home tel\" title=\"Please enter your contact phone number\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"address1\">Address</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"address1\" name=\"address1\" type=\"text\" autocomplete=\"shipping street-address address-line1\" required title=\"Please enter your street address\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label\" for=\"address2\">Address cont…</label>
\t\t\t\t\t<input class=\"form__input\" id=\"address2\" name=\"address2\" type=\"text\" autocomplete=\"shipping street-address address-line2\" title=\"\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label\" for=\"zip\">ZIP Code</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"zip\" name=\"zip\" type=\"text\" autocomplete=\"shipping postal-code\" required pattern=\"\\d{2,4}-?\\d{3,5}\" title=\"\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"city\">City</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"city\" name=\"city\" type=\"text\" autocomplete=\"shipping address-level2\" required pattern=\"\\D{1,64}\" title=\"\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"state\">State</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"state\" name=\"state\" type=\"text\" autocomplete=\"shipping address-level1\" required pattern=\"\\D{1,64}\" title=\"\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"country\">Country</label>
\t\t\t\t\t<select class=\"form__select\" id=\"country\" name=\"country\" required>
\t\t\t\t\t\t<option value=\"AF\">Afghanistan</option>
\t\t\t\t\t\t<option value=\"AU\">Australia</option>
\t\t\t\t\t\t<option value=\"US\" selected>United States</option>
\t\t\t\t\t\t<option value=\"PL\">Poland</option>
\t\t\t\t\t</select>
\t\t\t\t</p>
\t\t\t</section>


\t\t\t<section class=\"form__section--payment\">
\t\t\t\t<h3 class=\"form__section-title\">Payment</h3>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"ccnumber\">Card Number</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"ccnumber\" name=\"ccnumber\" type=\"number\" autocomplete=\"cc-number\" required pattern=\"\\d{4}\\s?\\d{4}\\s?\\d{4}\\s?\\d{4}\" title=\"Please enter the number specified on the front side of your card\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"ccholder\">Card Holder</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"ccholder\" name=\"ccholder\" type=\"text\" autocomplete=\"cc-name\" required pattern=\"\\D{1,64}\" title=\"Please enter the full name specified on your card\">
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label class=\"form__label form__label--required\" for=\"cvc\">CVC</label>
\t\t\t\t\t<input class=\"form__input form__input--required\" id=\"cvc\" name=\"cvc\" type=\"number\" autocomplete=\"cc-csc\" required pattern=\"\\d{3,4}\" title=\"Please enter the control number specified on the reverse side of your card (3 or 4-digit)\">
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<p>
\t\t\t\t<input class=\"form__submit-btn\" id=\"submit\" name=\"submit\" value=\"Checkout\" type=\"submit\" title=\"Go to Checkout\">
\t\t\t</p>
\t\t</form>
\t</div>
</main>
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
/* <header class="header">*/
/* 	<div class="container--header">*/
/* 		<h1 class="header__title">Acme Store</h1>*/
/* 		<div class="cart-counter">*/
/* 			<p><i class="cart-counter__icon svg-icon svg-icon--cart"></i><span class="cart-counter__total-qty">1</span></p>*/
/* 		</div>*/
/* 	</div>*/
/* </header>*/
/* <main class="main">*/
/* 	<div class="container--main">*/
/* 		<h2 class="main__title">Checkout</h2>*/
/* 		<section class="order">*/
/* 			<h3 class="form__section-title">Order</h3>*/
/* 			<ul class="product-list">*/
/* 				<li class="product-list__item">*/
/* 					<img src="" alt="" class="product-list__item__image">*/
/* 					<h4 class="product-list__item__name">Acme Product</h4>*/
/* 					<dl class="product-list__item__qty-price">*/
/* 						<dt class="item__qty__key">Qty</dt>*/
/* 						<dd class="item__qty__val">1</dd>*/
/* 						<dt class="item__price__key">Price</dt>*/
/* 						<dd class="item__price__val">00</dd>*/
/* 					</dl>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<dl class="order__summary">*/
/* 				<dt class="summary__subtotal__key">Subtotal</dt>*/
/* 				<dd class="summary__subtotal__val">00,000</dd>*/
/* 				<dt class="summary__tax__key">Tax</dt>*/
/* 				<dd class="summary__tax__val">00</dd>*/
/* 				<dt class="summary__shipping__key">Shipping</dt>*/
/* 				<dd class="summary__shipping__val">05</dd>*/
/* 				<dt class="summary__total__key">Total</dt>*/
/* 				<dd class="summary__total__val">00,00</dd>*/
/* 			</dl>*/
/* 		</section>*/
/* */
/* 		<form class="form" method="post" action="">*/
/* 			<section class="form__section--delivery">*/
/* 				<h3 class="delivery__title">Delivery Address</h3>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="first_name">First Name</label>*/
/* 					<input class="form__input form__input--required" id="first_name" name="first_name" type="text" autocomplete="name given-name" required pattern="\D{1,64}" autofocus title="Please enter your first given name">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="last_name">Last Name</label>*/
/* 					<input class="form__input form__input--required" id="last_name" name="last_name" type="text" autocomplete="name family-name" required pattern="\D{1,64}" title="Please enter your family name">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="email">E-mail</label>*/
/* 					<input class="form__input form__input--required" id="email" name="email" type="email" autocomplete="email" required title="Please enter correct e-mail address">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label" for="phone">Phone</label>*/
/* 					<input class="form__input" id="phone" name="phone" type="tel" autocomplete="home tel" title="Please enter your contact phone number">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="address1">Address</label>*/
/* 					<input class="form__input form__input--required" id="address1" name="address1" type="text" autocomplete="shipping street-address address-line1" required title="Please enter your street address">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label" for="address2">Address cont…</label>*/
/* 					<input class="form__input" id="address2" name="address2" type="text" autocomplete="shipping street-address address-line2" title="">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label" for="zip">ZIP Code</label>*/
/* 					<input class="form__input form__input--required" id="zip" name="zip" type="text" autocomplete="shipping postal-code" required pattern="\d{2,4}-?\d{3,5}" title="">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="city">City</label>*/
/* 					<input class="form__input form__input--required" id="city" name="city" type="text" autocomplete="shipping address-level2" required pattern="\D{1,64}" title="">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="state">State</label>*/
/* 					<input class="form__input form__input--required" id="state" name="state" type="text" autocomplete="shipping address-level1" required pattern="\D{1,64}" title="">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="country">Country</label>*/
/* 					<select class="form__select" id="country" name="country" required>*/
/* 						<option value="AF">Afghanistan</option>*/
/* 						<option value="AU">Australia</option>*/
/* 						<option value="US" selected>United States</option>*/
/* 						<option value="PL">Poland</option>*/
/* 					</select>*/
/* 				</p>*/
/* 			</section>*/
/* */
/* */
/* 			<section class="form__section--payment">*/
/* 				<h3 class="form__section-title">Payment</h3>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="ccnumber">Card Number</label>*/
/* 					<input class="form__input form__input--required" id="ccnumber" name="ccnumber" type="number" autocomplete="cc-number" required pattern="\d{4}\s?\d{4}\s?\d{4}\s?\d{4}" title="Please enter the number specified on the front side of your card">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="ccholder">Card Holder</label>*/
/* 					<input class="form__input form__input--required" id="ccholder" name="ccholder" type="text" autocomplete="cc-name" required pattern="\D{1,64}" title="Please enter the full name specified on your card">*/
/* 				</p>*/
/* 				<p>*/
/* 					<label class="form__label form__label--required" for="cvc">CVC</label>*/
/* 					<input class="form__input form__input--required" id="cvc" name="cvc" type="number" autocomplete="cc-csc" required pattern="\d{3,4}" title="Please enter the control number specified on the reverse side of your card (3 or 4-digit)">*/
/* 				</p>*/
/* 			</section>*/
/* 			<p>*/
/* 				<input class="form__submit-btn" id="submit" name="submit" value="Checkout" type="submit" title="Go to Checkout">*/
/* 			</p>*/
/* 		</form>*/
/* 	</div>*/
/* </main>*/
/* {% endblock %}*/
/* */
