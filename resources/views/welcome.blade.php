<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog fanta e game</title>
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
      margin-right: 10px;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: #ffc107 !important;
    }

    /* Main content */
    main {
      flex: 1 0 auto; /* cresce per spingere il footer in basso */
    }

    /* Header / Hero */
    header {
      background-color: #fff;
      padding: 60px 0;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
      border-radius: 10px;
      margin-bottom: 40px;
    }

    header img {
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    header h1 {
      font-size: 2.8rem;
      margin-top: 20px;
      font-weight: bold;
    }

    header h4 {
      font-size: 1.3rem;
      color: #6c757d;
      margin-bottom: 20px;
    }

    header p {
      font-size: 1.1rem;
      color: #555;
    }

    /* Button */
    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 12px 30px;
      font-size: 1.1rem;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/welcome') }}">Blog fanta e game</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/post') }}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/servizi') }}">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">Chi siamo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <header class="bg-light text-center container">
      <img src="{{ $intro['image'] }}" class="img-fluid mb-3" alt="Intro Image">
      <h1>{{ $intro['titolo'] }}</h1>
      <h4 class="text-muted">{{ $intro['sottotitolo'] }}</h4>
      <p class="mt-3">{{ $intro['descrizione'] }}</p>
      <a href="{{ url('/post') }}" class="btn btn-primary mt-3">Inizia a leggere</a>
    </header>
  </main>

  <footer>
    &copy; 2025 Blog fanta e game
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
