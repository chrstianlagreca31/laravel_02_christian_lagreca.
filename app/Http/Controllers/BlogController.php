<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function welcome()
    {
        $intro = [
            'titolo' => 'Benvenuti nel nostro Blog ',
            'sottotitolo' => 'Articoli, guide e curiosità sul mondo di fanta e game',
            'descrizione' => 'Condividiamo ogni settimana tutorial e guide sul fanta e sul gaming',
            'image' => 'data:image/png;base64,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'
        ];

        return view('welcome', ['intro' => $intro]);
    }

    public function about()
    {
        $team = [
            'nome' => 'francesco',
            'cognome' => 'marzano',
            'eta' => 90,
            'passione' => 'giocare alle sdrogo corse',
            'image' => 'https://images.squarespace-cdn.com/content/v1/65c9f92dbcea263ed06a6b1b/0f63b715-ac88-491e-9078-d6ed18f2a2d6/MARZA.jpg?format=1000w'
        ];

        return view('about', ['team' => $team]);
    }

    public function post()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Fantacalcio: Consigli per vincere',
                'author' => 'zlatan ibra',
                'category' => 'Sport',
                'content' => 'In questo articolo ti diamo consigli per la tua squadra di fantacalcio.',
                'image' => 'https://play-lh.googleusercontent.com/ScxKMlMqr8iZNNofGP7lKm0k9k644z3cJIFFIgPWKenAauLVPw4QqmeR1BUG2oFZ1aU=w240-h480-rw',
                'created_at' => '2025-11-01',
            ],
            [
                'id' => 2,
                'title' => 'Battlefield 6: Guida completa',
                'author' => 'marzano',
                'category' => 'Videogiochi',
                'content' => 'Scopri le strategie e i trucchi per eccellere in Battlefield 6.',
                'image' => 'https://cdn1.epicgames.com/offer/a14a02aa3c8143729605eaf7c93d7501/EGS_Battlefield6_BattlefieldStudios_S1_2560x1440-6a45f8547ef32debb4e18b178809d63a',
                'created_at' => '2025-11-02',
            ],
        ];

        return view('post', ['posts' => $posts]);
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

        return view('servizi', ['servizi' => $servizi]);
    }
}
