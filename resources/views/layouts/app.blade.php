<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PDAM ANGKASA PELITA')</title>
   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #f0f8ff; font-family: Arial, sans-serif;">
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #004d99; color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #ffffff; font-weight: bold;">PDAM ANGKASA PELITA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('golongan.index') }}" style="color: #ffffff;">Daftar Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}" style="color: #ffffff;">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}" style="color: #ffffff;">Daftar Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px;">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer style="background-color: #004d99; color: white; text-align: center; padding: 10px 0; margin-top: 20px;">
        <p>&copy; {{ date('Y') }} PDAM ANGKASA PELITA. All Rights Reserved.</p>
    </footer>

    <!-- Tambahkan script seperti Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
