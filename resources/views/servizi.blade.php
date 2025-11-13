<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Servizi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  html, body {
    height: 100%;
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    display: flex;
    flex-direction: column;
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

  .nav-link:hover,
  .nav-link.active {
    color: #ffc107 !important;
  }

  /* Contenuto principale */
  .main-content {
    flex: 1 0 auto;
    width: 100%;
    padding: 50px 0;
  }

  /* Servizi */
  .service-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-align: center;
    padding: 30px 20px;
    transition: transform 0.3s;
    margin-bottom: 30px;
  }

  .service-card:hover {
    transform: translateY(-5px);
  }

  .service-icon {
    font-size: 50px;
    margin-bottom: 15px;
  }

  .service-card h3 {
    font-weight: bold;
    margin-bottom: 10px;
  }

  .service-card p {
    color: #555;
  }

  /* Footer */
  footer {
    flex-shrink: 0;
    background-color: #343a40;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    border-top: 3px solid #007bff;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome') }}">Blog fanta e game</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main-content container">
    <div class="row">
      @foreach ($servizi as $service)
        <div class="col-md-6">
          <div class="service-card">
            <div class="service-icon">{{ $service['icon'] }}</div>
            <h3>{{ $service['name'] }}</h3>
            <p>{{ $service['description'] }}</p>
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
