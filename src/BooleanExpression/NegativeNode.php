<?php

namespace App\BooleanExpression;

class NegativeNode implements BooleanExpressionInterface
{
    private BooleanExpressionInterface $booleanExpression;

    public function __construct(BooleanExpressionInterface $booleanExpression)
    {
        $this->booleanExpression = $booleanExpression;
    }


    public function calculate(): bool
    {
        return !$this->booleanExpression->calculate();
    }

    public function draw(): string
    {
        return '!' . $this->booleanExpression->draw();
    }
}