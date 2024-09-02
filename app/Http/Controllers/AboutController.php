<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function about() {
    //     return 'Silmy Maulia Dewi - 2241760090';
    // }

    public function __invoke() {
        return '2241760090 - Silmy Maulia Dewi';
    }
}
