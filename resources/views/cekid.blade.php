@extends('layouts.base')
@section('content')

<section class="cekid">
   
                <form action="/cekid2" method="POST">
                    @csrf
                    <label for="search"><h5>Cek Orderan Anda Disini. (ID Akun)</h5></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                        <button type="submit" class="btn btn-outline-dark">search</button>
                    </div>

                </form>
                
                @if (isset($data))
                <table class="table table-striped text-light">
                    <thead>
                        <tr>
                            
                            <th>INVOICE</th>
                            <th>ID AKUN</th>
                            <th>STATUS</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                
                                <td>{{ $row->invoice }}</td>
                                <td>{{ $row->idjokirank }}</td>
                                <td>{{ $row->statusjoki }}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
               
            @endif
               
               
                
     
</section>
@include('sweetalert::alert')
@endsection