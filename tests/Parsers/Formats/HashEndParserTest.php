<?php

use Enginedata\Node;

class HashEndParserTest extends TestCaseParser
{
    public function testExpression()
    {
        $this->checkExpressionOnAllData([2]);
    }

    /**
     * @throws ReflectionException
     */
    public function testParse()
    {
        $node = $this->getMockBuilder(Node::class)->getMock();

        $node->expects($this->once())
            ->method('parentNode');

        $this->startParsingTest(2, $node);
    }
}
