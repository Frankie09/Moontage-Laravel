@extends('layouts.base')

@section('content')
<section class="jokirank" id="jokirank">
    <div id="carouselExampleControls" class="carousel slide mb-3" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="d-block w-100 " src="img/banner.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 " src="img/banner2.png" alt="Second slide">
          </div>
          
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      
   
    
    
    <div class="row">
        <div class="about-img">
            <img src="img/logo.png" alt="Tentang Kami">
            <h3>Joki Buka 24 Jam - Pesan Sekarang!</h3> 
            <h3>⭐⭐⭐⭐⭐</h3>
            <p>Orderan Joki Di Cek Jam 08.00 - 23.00 WIB
                <br>
                Cara Order : 
                <br>
                1. Lengkapi Data Joki dengan Teliti!<br>
                2. Pilih Jenis Rank dan Jumlahnya.<br>
                3. Pilih Metode Pembayaran.<br>
                4. Masukkan Nomor WhatsApp yang Benar!<br>
                5. Klik "Beli" dan Lakukan Pembayaran.<br>
                6. Pesanan Joki akan diproses setelah pembayaran sukses.<br>
            
            <br>
            <p>
              Metode Pembayaran: <br>
              1. Transfer Bank : BCA (Sementara masih pengecekan manual) <br>
              2. QRIS : OVO, GoPay, DANA, dll (Sementara masih pengecekan manual) <br>

            </p>
            <p>
              Estimasi Waktu Proses ⏱️: <br>

              Kami berusaha memberikan layanan secepat mungkin. <br>
              Minimum: 12 jam <br>
              Maksimum: 2 x 24 jam 
            </p>
        </div>
        
        <div class="form" >
            <form action="/submitjoki" method="POST" autocomplete="off">
                @csrf
                <label for="name">Username/Email/No HP</label>
                @error('name')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <input type="text" id="name" name="name" placeholder="contoh@gmail.com/081228182" value="{{ old('name') }}"><br>
                
                <label for="password">Password</label>
                @error('password')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <input type="text" id="password" name="password" placeholder="Password"><br>
                
                <label for="message">Request Hero & catatan untuk penjoki</label>
                @error('message')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <textarea id="message" name="message" placeholder="Contoh REQ: Yuzhong">{{ old('message') }}</textarea><br>
                
                <label for="userid">User ID & Nickname</label>
                @error('userid')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <input type="text" id="userid" name="userid" placeholder="Contoh : 1238746 (Moontage)" value="{{ old('userid') }}"><br>
                
                <label for="radio-group">Pilih Rank</label>
                @error('my-radio')
                <div class="alert" style="color:red">Pilih rank terlebih dahulu</div>
                @enderror
                <div class="radio-group">
                    <input type="radio" name="my-radio" id="1" value="1" {{ old('my-radio') == '1' ? 'checked' : '' }}>
                    <label class="radio" for="1"><span>GM /Star <br> Rp.5000 </span></label>
                    <input type="radio" name="my-radio" id="2" value="2" {{ old('my-radio') == '2' ? 'checked' : '' }}>
                    <label class="radio" for="2">Epic /Star <br> Rp.6000</label>
                    <input type="radio" name="my-radio" id="3" value="3" {{ old('my-radio') == '3' ? 'checked' : '' }}>
                    <label class="radio" for="3">Legend /Star <br> Rp.7000</label>
                    <input type="radio" name="my-radio" id="4" value="4" {{ old('my-radio') == '4' ? 'checked' : '' }}>
                    <label class="radio" for="4">Mythic /Star <br> Rp.15000</label>
                    <input type="radio" name="my-radio" id="5" value="5" {{ old('my-radio') == '5' ? 'checked' : '' }}>
                    <label class="radio" for="5">Honor /Star <br> Rp.20000</label>
                    <input type="radio" name="my-radio" id="6" value="6" {{ old('my-radio') == '6' ? 'checked' : '' }}>
                    <label class="radio" for="6">Glory /Star <br> Rp.25000</label>
                </div>
                
                <br>
                <label for="jumlah">Jumlah Bintang <span>(minimal 3 bintang)</span></label>
                @error('jumlah')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <input type="number" inputmode="numeric" id="jumlah" name="jumlah" min="3" value="3"  value="{{ old('jumlah') }}"><br>
                
                <label for="nohp">No Whatsapp</label>
                @error('nohp')
                <div class="alert" style="color:red">{{ $message }}</div>
                @enderror
                <input type="number" inputmode="numeric" id="nohp" name="nohp" value="{{ old('nohp') }}"><br>
                <br>
                <input type="submit" value="Submit" id="submit-btn">
            </form>
            
        </div>

    
    </div>
    @if(session('message'))
    <div class="alert {{ session('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    {{-- <script>

        // Get the input element
        var nohpInput = document.getElementById('nohp');
        
        // Add an event listener to the input element
        nohpInput.addEventListener('input', function() {
          var nohpValue = nohpInput.value;
          
          // If the input starts with "08", replace it with "+62"
          if (nohpValue.startsWith('08')) {
            nohpInput.value = '+62' + nohpValue.substring(2);
          }
        });
        
      </script> --}}

      
   
 </section>
 @include('sweetalert::alert')
@endsection