<?php

namespace App\Decorator;

class Italic implements HtmlElement
{
    public function __construct(
        protected HtmlElement $e
    ) {
    }

    public function __toString(): string
    {
        return "<em>".$this->e->__toString()."</em>";
    }
}