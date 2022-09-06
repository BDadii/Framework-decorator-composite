<?php

namespace App\Composite;

class Wrapper extends AbstractComposite
{
    private array $childs;

    public function add(AbstractComposite $input): void
    {
        $this->childs[] = $input;
    }

    public function render(): string
    {
        $div = '<div>';
        foreach($this->childs as $child) {
            $div.= $child->render();
        }
        return $div . '</div>';
    }
}