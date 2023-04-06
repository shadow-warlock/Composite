<?php

namespace App\BooleanExpression;

class AndNode implements BooleanExpressionInterface
{
    private array $operands;

    /**
     * @param BooleanExpressionInterface[] $operands
     */
    public function __construct(array $operands)
    {
        $this->operands = $operands;
    }


    public function calculate(): bool
    {
        foreach ($this->operands as $operand) {
            if(!$operand->calculate()){
                return false;
            }
        }
        return true;
    }

    public function draw(): string
    {
        return '(' . implode(
            ' & ',
            array_map(fn(BooleanExpressionInterface $node) => $node->draw(), $this->operands)
            ) . ')';
    }
}