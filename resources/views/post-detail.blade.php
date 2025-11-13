<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $post['title'] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    
    .navbar {
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .nav-link {
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: #ffc107 !important;
    }

    
    .post-detail img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .post-meta {
      color: #6c757d;
      margin-bottom: 20px;
    }

    .post-content {
      font-size: 1.1rem;
      color: #555;
      text-align: justify;
    }

    
    footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
      border-top: 3px solid #007bff;
    }

    .btn-back {
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/welcome') }}">Blog fanta e game</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/welcome') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/post') }}">Post</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/servizi') }}">Servizi</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Chi siamo</a></li>
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="container post-detail mb-5">
    <h1 class="mb-3">{{ $post['title'] }}</h1>
    <div class="post-meta">
      Autore: {{ $post['author'] }} | Categoria: {{ $post['category'] }} | Pubblicato: {{ $post['created_at'] }}
    </div>
    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
    <div class="post-content">
      <p>{{ $post['content'] }}</p>
    </div>
    <a href="{{ url('/post') }}" class="btn btn-primary btn-back">← Torna alla lista articoli</a>
  </div>

  
  <footer>
    &copy; 2025 Blog fanta e game
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
