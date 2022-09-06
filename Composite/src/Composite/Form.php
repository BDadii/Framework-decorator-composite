<?php

namespace App\Composite;

class Form extends AbstractComposite
{
    private array $childs;

    public function __construct(
        private string $name,
        private string $action
    ) {
    }

    public function add(AbstractComposite $composite): void
    {
        $this->childs[] = $composite;
    }

    public function render(): string
    {
        $form = '<form>';
        foreach($this->childs as $child) {
            $form.= $child->render();
        }
        return $form . '</form>';
    }
}