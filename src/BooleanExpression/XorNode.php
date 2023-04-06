<?php

namespace App\BooleanExpression;

class XorNode implements BooleanExpressionInterface
{
    private BooleanExpressionInterface $left;
    private BooleanExpressionInterface $right;

    public function __construct(BooleanExpressionInterface $left, BooleanExpressionInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }


    public function calculate(): bool
    {
        return $this->left->calculate() XOR $this->right->calculate();
    }

    public function draw(): string
    {
        return '(' . $this->left->draw() . ' XOR ' . $this->right->draw() . ')';
    }
}