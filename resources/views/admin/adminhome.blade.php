@extends('admin.basecek')
@section('head')
<style>
    .card:hover {
      -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
      box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
      transform: scale(1.01);
 }
 .card {
  padding: 10px;
  height: 200px;
  border: none;
  -webkit-box-shadow: 0px 1px 9px 3px rgba(219, 210, 219, 1);
  -moz-box-shadow: 0px 1px 9px 3px rgba(219, 210, 219, 1);
  box-shadow: 0px 1px 9px 3px rgba(219, 210, 219, 1);
  display: flex;
  justify-content: center;
  align-items: center
}
</style>
@endsection

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Hallo, user </h1>
    <p class="lead">Selamat datang, Selamat beraktivitas!  berhasil </p>
    <hr class="my-4">


<div class="row g-2">
<div class="col-md-3">
<div class="card"> <a href="/riwayatadmin"> <img src="/bootstrap/templates/refresh.png" width="40"></a>
<h5>Riwayat</h5>
<p>Lihat riwayat</p>
</div>
</div>
<div class="col-md-3">
<div class="card"> <a href="/tolak"><img src="/bootstrap/templates/delete.png" width="40"> </a>
<h5>Ditolak</h5>
<p>Pesanan ditolak</p>
</div>
</div>

<div class="col-md-3">
<div class="card"> <a href="/editbuku"><img src="/bootstrap/templates/edit.png" width="40"> </a>
<h5>Edit</h5>
<p>Edit data buku</p>
</div>
</div>
<div class="col-md-3">
<div class="card"><a href="/tambahadmin"> <img src="/bootstrap/templates/add.png" width="40"></a>
<h5>Tambah</h5>
<p>Tambah data buku</p>
</div>
</div>
</div>
</div>
</div>
<footer class="bg-light text-center text-lg-start">

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
©2022 Copyright:
<a class="text-dark" href="https://mdbootstrap.com/">Bukupedia@frankie</a>
</div>

</footer>
@endsection
