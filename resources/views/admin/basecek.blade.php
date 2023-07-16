<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukupedia</title>
    <link href="/bootstrap/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/bootstrap/assets/fontawesome/css/all.min.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="/bootstrap/templates/bootstrap.min.css">
	<script src="/bootstrap/templates/jquery.min.js"></script>
	<script src="/bootstrap/templates/popper.min.js"></script>
	<script src="/bootstrap/templates/bootstrap.min.js"></script>
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/adminhome">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-item  " href="/homeadmin">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item  " href="/pesananadmin">Pesanan</a>
                </li>

                    <li class="nav-item">
                    <a class="nav-link nav-item  " href="/riwayatadmin">Riwayat</a>
                </li>
    
    
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>