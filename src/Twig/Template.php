<?php

namespace RVanGinneken\TwigTemplateInfo\Twig;

abstract class Template extends \Twig\Template
{
    public function display(array $context, array $blocks = array()): void
    {
        $name = $this->getTemplateName();

        echo PHP_EOL.'<!-- Start template: `'.$name.'` -->'.PHP_EOL;
        parent::display($context, $blocks);
        echo PHP_EOL.'<!-- End template: `'.$name.'` -->'.PHP_EOL;
    }
}
