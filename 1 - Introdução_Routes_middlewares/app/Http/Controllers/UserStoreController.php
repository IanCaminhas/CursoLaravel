<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserStoreController extends Controller
{

    private function teste() {
        dd('teste');
    }

    public function __invoke(Request $request)
    {
        $this->teste();
    }
}
