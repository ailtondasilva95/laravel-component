<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     * 
     * @param string|null $icon Ícone do botão
     * @param string|null $label Texto do rótulo do botão
     * @param bool $pill Define se o botão tem bordas arredondadas
     * @param bool $circle Define se o botão é circular
     * @param bool $class Define o estilo pradrão do botão
     * @return void
     */
    public function __construct(
        public ?string $icon,
        public ?string $label,
        public bool $pill = false,
        public bool $circle = false,
        public string $class = 'btn-default',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}