<?php
return [
    'twig.extensions' => \DI\add([
        \DI\get(\App\Basket\Twig\BasketTwigExtension::class)
    ]),
    App\Basket\Basket::class => \DI\autowire(\App\Basket\SessionBasket::class)
];
