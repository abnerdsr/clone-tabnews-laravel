<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return <<<HTML
        <div>
            <h1>Olá Família.</h1>
            <p>
                Em breve um novo pedacinho da internet para nós podermos construir muita coisa juntos.
            </p>
        </div>
    HTML;
});

require __DIR__.'/auth.php';
