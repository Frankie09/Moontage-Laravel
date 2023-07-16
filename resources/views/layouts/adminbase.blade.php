<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- Feather Icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    
    {{-- CSS --}}
    <link rel="stylesheet" href="style.css">
    @yield('head')

</head>
<body>
    {{-- navbarcustom start --}}
    <nav class="navbarcustom">
        <div class="navbarcustom-logo">
            <a href="/" class="navbarcustom-logo-text"><img src="img/logo.png" alt="logo">Moontage</a>
        </div>
        


        <div class="navbarcustom-nav">
            
            @php
                if ($title == 'Home') {
                    echo '<a href="/">Home</a>
                        <a href="#service">Service</a>
                        <a href="#contact">Contact</a>';
                } else {
                    echo '';
                }
            @endphp
            
        </div>

        <div class="navbarcustom-extra">
            @php
                if ($title != 'Home') {
                echo '<a href="/"><i data-feather="home"></i></a>';
            } 
            @endphp
            
            
            <a href="/cekid" id="search"><i data-feather="search"></i>Cek ID</a>
            <a href="#" id="shopping"><i data-feather="shopping-cart"></i></a>

            @php
                if ($title != 'Home') {
                echo '';
            } else {
                echo '<a href="#" id="hamburger"><i data-feather="menu"></i></a>';
            }
            @endphp
           
        </div>
    </nav>
    
    {{-- navbarcustom end --}}
    @yield('content')

    {{-- footer --}}
    <footer>
        <div class="social">
            <a href="#"><i data-feather="instagram"> </i></a>
            <a href="#"><i data-feather="twitter"> </i></a>
            <a href="#"><i data-feather="facebook"> </i></a>
        </div> 
        
        <div class="credit">
            <p>Moontage | &copy; 2023</p>
        </div>
        
    </footer>
    {{-- footer end --}}
    {{-- floating button --}}

    <a href="https://api.whatsapp.com/send?phone=6281227786836">
        <button class="btn-floating">
            <img src="img/whatsapp.png" alt="">
        </button>
    </a>
    {{-- feather --}}
    <script>
        feather.replace()
    </script>
    @php
        if ($title == 'Home') {
            echo '<script src="script.js"></script>';
        } else {
            echo '';
        }
    @endphp
    
</body>
</html>