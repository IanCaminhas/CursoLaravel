<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/create/user',
        '/update/user',
        '/delete/user',
        '/user/teste',
        '/user/12',
        '/user',
        '/user/create',
        '/product'
    ];
}
