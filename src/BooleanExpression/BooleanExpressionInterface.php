<?php

namespace App\BooleanExpression;

interface BooleanExpressionInterface
{
    public function calculate(): bool;

    public function draw(): string;
}