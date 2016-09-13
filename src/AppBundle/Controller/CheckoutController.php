<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CheckoutController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('AppBundle:Checkout:index.html.twig', array(
                // ...
            ));    }
        /**
     * @Route("/cart", name="cart")
     */
    public function cartAction(Request $request)
    {
        return $this->render('AppBundle:Checkout:cart.html.twig', array(
                // ...
            ));    }

}
