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
        $telegram = Share::page($currentURL, 'Berikan pesan, tanggapan atau apapun itu kepada seseorang tanpa diketahui siapa pengirimnya')->telegram()->getRawLinks();

        return view('index', [
            'title' => 'TeyMii - Sampaikan Pesan Secara Rahasia',
            'desc' => 'Berikan pesan, tanggapan atau apapun itu kepada seseorang tanpa diketahui siapa pengirimnya',
            'facebook' => $facebook,
            'whatsapp' => $whatsapp,
            'telegram' => $telegram
        ]);
    }
}
