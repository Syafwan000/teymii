<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use Share;

class MessageController extends Controller
{
    public function index(User $user)
    {
        $currentURL = URL::current();

        $facebook = Share::page($currentURL)->facebook()->getRawLinks();
        $whatsapp = Share::page($currentURL)->whatsapp()->getRawLinks();
        $telegram = Share::page($currentURL)->telegram()->getRawLinks();

        return view('messages', [
            'user' => $user,
            'facebook' => $facebook,
            'whatsapp' => $whatsapp,
            'telegram' => $telegram
        ]);
    }
}
