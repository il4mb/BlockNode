<?php

use Il4mb\BlockNode\Node;

include_once __DIR__ . "/vendor/autoload.php";

$node = new Node("div", [
    "children" => [
        "<div class=\"test 1\"></div>"
    ],
    "class" => "test"
]);

// print_r($node);

$node->query(".test")->prepend("<p>Hallo</p>", 1);
echo $node;
