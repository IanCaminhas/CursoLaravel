<?php

namespace App\View\Composers;

use Illuminate\View\View;

class HomeComposer
{

    protected $data;

    public function __construct(){
        $this->data = 'Ian composer';
    }

    public function compose(View $view) {
        //Vou passar esse índice data lá para a minha view
        $view->with('data', $this->data);
    }

}
