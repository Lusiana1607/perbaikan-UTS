<!DOCTYPE html>
<html>
<head>
    <title>Tugasku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            Tugasku
        </a>

        <div>
            <a href="/" class="btn btn-light">
                Daftar Tugas
            </a>

            <a href="/dashboard" class="btn btn-warning">
                Dashboard
            </a>

            <a href="/report" class="btn btn-info">
                Laporan
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>