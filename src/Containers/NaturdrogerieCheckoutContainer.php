<?php

namespace NaturdrogerieCheckout\Containers;

use Plenty\Plugin\Templates\Twig;

class NaturdrogerieCheckoutContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('NaturdrogerieCheckout::content.NaturdrogerieCheckout');
    }
}