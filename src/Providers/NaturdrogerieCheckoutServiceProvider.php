<?php

namespace NaturdrogerieCheckout\Providers;

use Plenty\Plugin\ServiceProvider;

class NaturdrogerieCheckoutServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */
    public function register()
    {

    }

//    /**
//     * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
//     */
//    public function boot(Twig $twig, Dispatcher $eventDispatcher)
//    {
//        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
//        {
////            $partial->set('head', 'NaturdrogerieCheckout::content.ThemeHead');
//            $partial->set('header', 'NaturdrogerieCheckout::content.ThemeHeader');
//            $partial->set('footer', 'NaturdrogerieCheckout::content.ThemeFooter');
////            $partial->set('page-design', 'NaturdrogerieCheckout::content.ThemePageDesign');
//        }, 0);
//
////        $eventDispatcher->listen('IO.tpl.checkout', function(TemplateContainer $container, $templateData)
////        {
////            $container->setTemplate('NaturdrogerieCheckout::content.ThemeBasket');
////            return false;
////        }, 0);
//
//        return false;
//    }
}