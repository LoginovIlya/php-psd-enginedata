<?php

namespace Enginedata\Parsers\Formats;

use Enginedata\NodeInterface;
use Enginedata\Parsers\Parser;

class BooleanParser extends Parser
{
    public function expression(): string
    {
        return '/^([A-Z0-9]+) (true|false)$/i';
    }

    protected function parse(NodeInterface $node, $line, $matches)
    {
        $name = $matches[1];
        $value = $matches[2] === 'true' ? true : false;

        $node->setValue($name, $value);
    }
}
