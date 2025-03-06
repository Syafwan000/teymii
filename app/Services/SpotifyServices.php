<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SpotifyServices
{
    private $accessToken;

    public function __construct()
    {
        $this->authenticate();
    }

    private function authenticate()
    {
        try {
            $response = Http::asForm()->withHeaders([
                'Authorization' => 'Basic ' . base64_encode(config('services.spotify.client_id') . ':' . config('services.spotify.client_secret')),
            ])->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'client_credentials',
            ]);

            if ($response->successful()) {
                $this->accessToken = $response->json('access_token');
            } else {
                Log::error('Spotify authentication failed: ' . $response->body());
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }

    public function getTrack($id)
    {
        try {
            $response = Http::withToken($this->accessToken)->get('https://api.spotify.com/v1/tracks/' . $id);

            if($response->successful()) {
                return $response->json();
            } else {
                Log::error('Spotify get track failed: ' . $response->body());
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }

    public function searchTrack($q)
    {
        try {
            $response = Http::withToken($this->accessToken)->get('https://api.spotify.com/v1/search', [
                'q' => $q,
                'type' => 'track',
                'limit' => 10,
            ]);

            if($response->successful()) {
                return $response->json();
            } else {
                Log::error('Spotify search track failed: ' . $response->body());
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
