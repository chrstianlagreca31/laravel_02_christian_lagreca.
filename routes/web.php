<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $intro = [
        'titolo' => 'Benvenuti nel nostro Blog ',
        'sottotitolo' => 'Articoli, guide e curiosità sul mondo di fanta e game',
        'descrizione' => 'Condividiamo ogni settimana tutorial e guide sul fanta e sul gaming',
        'image' => 'https://www.tuttocalcioestero.it/wp-content/uploads/2025/06/Logo-Fantacalcio.it-Instagram-Tuttocalcioestero.it_-1024x576.jpg'
    ];
    

    return view('welcome', [
        'intro' => $intro
    ]);
        
});

Route::get('/about', function () {
    $team = 
        [
            'nome' => 'francesco',
            'cognome' => 'marzano',
            'eta' => 90,
            'passione' => 'giocare alle sdrogo corse',
            'image' => 'https://i.ytimg.com/vi/I0KhG2XdYlY/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBdif1sqjFTqMdzed2P7aF-Hi_Adg'
        ];

    return view('about', [
        'team' => $team
    ]);
});

Route::get('/post', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Fantacalcio: Consigli per vincere',
            'author' => 'zlatan ibra',
            'category' => 'Sport',
            'content' => 'In questo articolo ti diamo consigli  per  la tua squadra di fantacalcio.',
            'image' => 'https://www.tuttocalcioestero.it/wp-content/uploads/2025/06/Logo-Fantacalcio.it-Instagram-Tuttocalcioestero.it_-1024x576.jpg',
            'created_at' => '2025-11-01',
        ],
        [
            'id' => 2,
            'title' => 'Battlefield 6: Guida completa',
            'author' => 'marzano',
            'category' => 'Videogiochi',
            'content' => 'Scopri le strategie e i trucchi per eccellere in Battlefield 6.',
            'image' => 'https://i.redd.it/k3x4ugdssjye1.png',
            'created_at' => '2025-11-02',
        ],
    ];

    return view('post', ['posts' => $posts]);
});

Route::get('/servizi', function () {
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
});



