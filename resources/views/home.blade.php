@extends('layouts.base')

@section('content')
{{-- hero section --}}
<section class="hero" id="home">
    <main class="content">
        <h1>Selamat datang di Moontage</h1>
        <h4>Joki aman , murah,  dan Terpercaya</h4>
        <a href="#service" class="cta">Order Sekarang</a>
    </main>

</section>
{{-- hero end --}}


{{-- service --}}
<section class="service" id="service">
    <h2>Service</h2>
    <div class="row">
        <div class="service-card">
            <a href="/servicerank">
                <img src="img/card-joki.png" alt="Joki">
            </a>
            <h3 class="service-card-tittle">Joki Rank</h3>
        </div>
        
    </div>
</section>


{{-- end service --}}


{{-- contact --}}
<section class="contact" id="contact">
   <h2>Contact</h2>
</section>

{{-- end contact --}}


@endsection