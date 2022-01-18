<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Share;

class HomeController extends Controller
{
    public function index()
    {
        $currentURL = URL::current();

        $facebook = Share::page($currentURL)->facebook()->getRawLinks();
        $whatsapp = Share::page($currentURL)->whatsapp()->getRawLinks();
        $telegram = Share::page($currentURL, 'Sampaikan pesan secara rahasia dengan TeyMii')->telegram()->getRawLinks();

        return view('index', [
            'title' => 'Sampaikan Pesan Secara Rahasia',
            'facebook' => $facebook,
            'whatsapp' => $whatsapp,
            'telegram' => $telegram
        ]);
    }
}
