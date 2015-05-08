<?php

namespace Tc\Bundle\TwigDefault\Twig\Node;

use Twig_Compiler;
use Twig_Node;
use Twig_Node_Expression;

/**
 * TwigDefaultNode
 */
class TwigDefaultNode extends Twig_Node
{
    /**
     * @param array $name
     * @param Twig_Node_Expression $value
     * @param int $line
     * @param null $tag
     */
    public function __construct($name, Twig_Node_Expression $value, $line, $tag = null)
    {
        parent::__construct(array('value' => $value), array('name' => $name), $line, $tag);
    }

    /**
     * @param Twig_Compiler $compiler
     */
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write(
                'isset($context[\''.$this->getAttribute('name').'\']) || $context[\''.$this->getAttribute(
                    'name'
                ).'\'] = '
            )
            ->subcompile($this->getNode('value'))
            ->raw(";\n");
    }
}
