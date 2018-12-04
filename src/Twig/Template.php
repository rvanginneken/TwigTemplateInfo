<?php

namespace RVanGinneken\TwigTemplateInfo\Twig;

abstract class Template extends \Twig\Template
{
    public function display(array $context, array $blocks = array()): void
    {
        $templatePath = $this->getSourceContext()->getPath();

        echo PHP_EOL.'<!-- Start template: `'.$templatePath.'` -->'.PHP_EOL;
        parent::display($context, $blocks);
        echo PHP_EOL.'<!-- End template: `'.$templatePath.'` -->'.PHP_EOL;
    }

    public function displayBlock($name, array $context, array $blocks = array(), $useBlocks = true)
    {
        if (isset($blocks[$name]) && !in_array($name, ['form_group_class', 'title', 'page_title', 'attributes', 'widget_attributes', 'widget_container_attributes'])) {
            $blockName = $name.'` from `'.$blocks[$name][0]->getSourceContext()->getPath();

            echo PHP_EOL.'<!-- Start block: `'.$blockName.'` -->'.PHP_EOL;
            parent::displayBlock($name, $context, $blocks, $useBlocks);
            echo PHP_EOL.'<!-- End block: `'.$blockName.'` -->'.PHP_EOL;
        }
        else {
            parent::displayBlock($name, $context, $blocks, $useBlocks);
        }
    }
}
