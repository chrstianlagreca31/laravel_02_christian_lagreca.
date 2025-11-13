<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    /* Navbar */
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

    .nav-link.active {
      color: #ffc107 !important;
    }

    /* Post cards */
    .post-card {
      height: 500px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      margin-bottom: 30px;
      transition: transform 0.3s;
    }

    .post-card:hover {
      transform: translateY(-5px);
    }

    .post-card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .post-card-body {
      padding: 20px;
    }

    .post-card-body h3 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .post-card-body p {
      color: #555;
    }

    .post-meta {
      font-size: 0.9rem;
      color: #6c757d;
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
      border-top: 3px solid #007bff;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome') }}">Blog fanta e game</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('post') ? 'active' : '' }}" href="{{ route('post') }}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('servizi') ? 'active' : '' }}" href="{{ route('servizi') }}">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Chi sono</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mb-5">
    <h1 class="mb-4 text-center">I nostri post</h1>
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-6">
        <div class="post-card">
          <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
          <div class="post-card-body">
            <div class="post-meta">
              <span>Autore: {{ $post['author'] }}</span> | 
              <span>Categoria: {{ $post['category'] }}</span> | 
              <span>Pubblicato: {{ $post['created_at'] }}</span>
            </div>
            <h3>{{ $post['title'] }}</h3>
            <p>{{ $post['content'] }}</p>
            <a href="{{ route('post.show', $post['id']) }}" class="btn btn-primary">Leggi di più</a>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <footer>
    &copy; 2025 Blog fanta e game
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
