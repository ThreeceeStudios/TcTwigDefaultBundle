<?php

namespace Tc\Bundle\TwigDefault\Twig\TokenParser;

use Tc\Bundle\TwigDefault\Twig\Node\TwigDefaultNode;
use Twig_Token;
use Twig_TokenParser;

/**
 * TwigDefaultTokenParser
 */
class TwigDefaultTokenParser extends Twig_TokenParser
{
    /**
     * @param Twig_Token $token
     * @return TwigDefaultNode
     * @throws \Twig_Error_Syntax
     */
    public function parse(Twig_Token $token)
    {
        $parser = $this->parser;
        $stream = $parser->getStream();

        $name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();
        $stream->expect(Twig_Token::OPERATOR_TYPE, '=');
        $value = $parser->getExpressionParser()->parseExpression();
        $stream->expect(Twig_Token::BLOCK_END_TYPE);

        return new TwigDefaultNode($name, $value, $token->getLine(), $this->getTag());
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return 'set_default';
    }
}
