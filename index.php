<?php

use App\BooleanExpression\AndNode;
use App\BooleanExpression\BooleanNode;
use App\BooleanExpression\NegativeNode;
use App\BooleanExpression\OrNode;
use App\BooleanExpression\XorNode;

spl_autoload_register(static function ($class_name) {
    include __DIR__ . '/src/' . str_replace("\\", "/", substr($class_name, 4)) . '.php';
});
$booleanExpression = new NegativeNode(
    new AndNode([
        new BooleanNode(true),
        new NegativeNode(new BooleanNode(false)),
        new XorNode(
            new BooleanNode(false),
            new OrNode([
                new BooleanNode(false),
                new BooleanNode(true)]
            )
        )
    ])
);

echo $booleanExpression->draw();
echo "\n";
echo "Result: " . ($booleanExpression->calculate() ? 'true' : 'false');