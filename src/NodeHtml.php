<?php

namespace Il4mb\BlockNode;

class NodeHtml extends Node
{

    function __construct($head = [], $body = [])
    {
        parent::__construct(
            "html",
            [
                "children" => [
                    new Node("head", $head),
                    new Node("body", $body)
                ]
            ]
        );
    }
}
