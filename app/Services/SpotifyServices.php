<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SpotifyServices
{
    private $accessToken;

    public function __construct()
    {
        $this->authenticate();
    }

    private function authenticate()
    {
        $response = Http::asForm()->withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('SPOTIFY_CLIENT_ID') . ':' . env('SPOTIFY_CLIENT_SECRET'))
        ])->post('https://accounts.spotify.com/api/token', [
            'grant_type' => 'client_credentials',
        ]);

        $this->accessToken = $response->json('access_token');
    }

    public function getTrack($id)
    {
        $response = Http::withToken($this->accessToken)->get('https://api.spotify.com/v1/tracks/' . $id);

        return $response->json();
    }

    public function searchTrack($q)
    {
        $response = Http::withToken($this->accessToken)->get('https://api.spotify.com/v1/search', [
            'q' => $q,
            'type' => 'track',
            'limit' => 10,
        ]);

        return $response->json();
    }
}
