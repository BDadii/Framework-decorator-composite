<?php

namespace App\Decorator;

class Text implements HtmlElement
{
    public function __construct(
        protected string $text
    ) {
    }

    public function __toString(): string
    {
        return $this->text;
    }
}