<?php

namespace App\Decorator;

class Paragraph implements HtmlElement
{
    public function __construct(
        protected HtmlElement $e
    ) {
    }

    public function __toString(): string
    {
        return "<p>".$this->e->__toString()."</p>";
    }
}