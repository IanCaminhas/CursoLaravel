<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $hello;
    public string $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */

     /* Usando as propriedades do PHP 8 para definir e atribuir valores a atributos
        public function __construct($hello, $name)
        {

        }

        Aí não preciso da definição de :
         public string $hello;
        public string $name;

        e

    public function __construct($hello, $name)
    {
        $this->hello = $hello;
        $this->name = $name;
    }
     */

    public function __construct($hello, $name)
    {
        $this->hello = $hello;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
