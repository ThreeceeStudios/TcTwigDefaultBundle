<?php

namespace Tc\Bundle\TwigDefault\Twig\Extension;

use Tc\Bundle\TwigDefault\Twig\TokenParser\TwigDefaultTokenParser;

/**
 * TwigDefaultExtension
 */
class TwigDefaultExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getTokenParsers()
    {
        return array(
            new TwigDefaultTokenParser()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'tc_twig_default';
    }
}
