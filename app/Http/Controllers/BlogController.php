<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function welcome()
    {
        $intro = [
            'titolo' => 'Benvenuti nel nostro Blog',
            'sottotitolo' => 'Articoli, guide e curiosità sul mondo di fanta e game',
            'descrizione' => 'Condividiamo ogni settimana tutorial e guide sul fanta e sul gaming',
            'image' => 'https://picsum.photos/1200/600'
        ];

     
        $links = [
            'about' => route('about'),
            'post' => route('post'),
            'servizi' => route('servizi'),
        ];

        return view('welcome', compact('intro', 'links'));
    }

    public function about()
    {
        $team = [
            'nome' => 'Francesco',
            'cognome' => 'Marzano',
            'eta' => 90,
            'passione' => 'Giocare alle sdrogo corse',
            'image' => 'https://images.squarespace-cdn.com/content/v1/65c9f92dbcea263ed06a6b1b/0f63b715-ac88-491e-9078-d6ed18f2a2d6/MARZA.jpg?format=1000w'
        ];

        return view('about', compact('team'));
    }

    public function post()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Fantacalcio: Consigli per vincere',
                'author' => 'Zlatan Ibra',
                'category' => 'Sport',
                'content' => 'In questo articolo ti diamo consigli per la tua squadra di fantacalcio.',
                'image' => 'https://play-lh.googleusercontent.com/ScxKMlMqr8iZNNofGP7lKm0k9k644z3cJIFFIgPWKenAauLVPw4QqmeR1BUG2oFZ1aU=w240-h480-rw',
                'created_at' => '2025-11-01',
            ],
            [
                'id' => 2,
                'title' => 'Battlefield 6: Guida completa',
                'author' => 'Marzano',
                'category' => 'Videogiochi',
                'content' => 'Scopri le strategie e i trucchi per eccellere in Battlefield 6.',
                'image' => 'https://cdn1.epicgames.com/offer/a14a02aa3c8143729605eaf7c93d7501/EGS_Battlefield6_BattlefieldStudios_S1_2560x1440-6a45f8547ef32debb4e18b178809d63a',
                'created_at' => '2025-11-02',
            ],
        ];

        return view('post', compact('posts'));
    }

    public function servizi()
    {
        $servizi = [
            [
                'id' => 1,
                'name' => 'Scrittura articoli',
                'description' => 'Creazione di contenuti originali e coinvolgenti per il tuo blog.',
                'icon' => '📝',
            ],
            [
                'id' => 2,
                'name' => 'Gestione social',
                'description' => 'Promuoviamo i tuoi contenuti sui principali social network.',
                'icon' => '📱',
            ],
        ];

        return view('servizi', compact('servizi'));
    }

    
    public function show($id)
    {
        $posts = [
            1 => [
                'title' => 'FantaConsigli 2025',
                'author' => 'Luca Rossi',
                'category' => 'Fantacalcio',
                'image' => 'https://picsum.photos/id/1018/800/400',
                'created_at' => '2025-11-01',
                'content' => 'Tutti i consigli per il tuo fantacalcio stagione 2025/2026...',
            ],
            2 => [
                'title' => 'I migliori giochi del mese',
                'author' => 'Marco Bianchi',
                'category' => 'Videogiochi',
                'image' => 'https://picsum.photos/id/1025/800/400',
                'created_at' => '2025-11-05',
                'content' => 'ber gioco',
            ],
        ];

        if (!isset($posts[$id])) {
            abort(404);
        }

        $post = $posts[$id];

        return view('post-detail', compact('post'));
    }
}
