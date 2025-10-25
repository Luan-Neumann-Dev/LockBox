<?php

namespace App\Controllers\Notas;

class DashboardController {

    public function __invoke() {
        if (! auth()) {
            return redirect('/login');
        }

        return view('notas', [
            'user' => auth()
        ]);
    }

}