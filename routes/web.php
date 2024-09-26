<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return <<<HTML
        <div>
            <h1>Olá Família.</h1>
            <p>
                Em breve um novo pedacinho da internet dedicado a maior lenda gamer irá
                aparecer por aqui.
            </p>
        </div>
    HTML;
});

require __DIR__.'/auth.php';
