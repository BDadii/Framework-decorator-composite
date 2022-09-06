<?php

namespace App\Composite;

class Input extends AbstractComposite
{
    public function __construct(
        private string $name,
        private string $label,
        private string $type,
    ) {
    }

    public function add(AbstractComposite $c): void {}

    public function render(): string{
        return '<input' 
        . 'type ="' . $this->type 
        . '" name ="' . $this->name 
        . '" label = "' . $this->label 
        . '" />';  
    }
}