<?php

namespace RVanGinneken\TwigTemplateInfo\Twig;

abstract class Template extends \Twig\Template
{
    public function display(array $context, array $blocks = array()): void
    {
        echo '<!-- Template start: '.$this->getTemplateName().' -->';
        parent::display($context, $blocks);
        echo '<!-- Template end: '.$this->getTemplateName().' -->';
    }
}