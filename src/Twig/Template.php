<?php

namespace RVanGinneken\TwigTemplateInfo\Twig;

abstract class Template extends \Twig\Template
{
    public function display(array $context, array $blocks = array()): void
    {
        echo PHP_EOL.'<!-- Template start: '.$this->getTemplateName().' -->'.PHP_EOL;
        parent::display($context, $blocks);
        echo PHP_EOL.'<!-- Template end: '.$this->getTemplateName().' -->'.PHP_EOL;
    }
}