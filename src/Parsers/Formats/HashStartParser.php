<?php

namespace Enginedata\Parsers\Formats;

use Enginedata\NodeInterface;
use Enginedata\Parsers\Parser;

class HashStartParser extends Parser
{
    public function expression(): string
    {
        return '/^<<$/';
    }

    protected function parse(NodeInterface $node, $line, $matches)
    {
        $node->addNode(self::$multiLineArray === 1);
        self::$multiLineArray++;
    }
}
