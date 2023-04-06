<?php

namespace App\BooleanExpression;

class BooleanNode implements BooleanExpressionInterface
{

    private bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }


    public function calculate(): bool
    {
        return $this->value;
    }

    public function draw(): string
    {
        return $this->value ? 'true' : 'false';
    }
}