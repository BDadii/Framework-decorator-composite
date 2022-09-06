<?php

namespace App\Composite;

abstract class AbstractComposite
{
    abstract public function add(AbstractComposite $c): void;

    abstract public function render(): string;
}