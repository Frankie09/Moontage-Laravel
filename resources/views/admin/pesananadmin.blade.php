@extends('admin.basecek')
@section('head')
<style>
    .pic {
    width: 50px;
    height: 50px;
    object-fit: contain
    }
    .table thead {
    background-color: #1f211f
    }
    .table thead th {
    padding: 30px;
    font-size: 14px;
    color: white
    }
    .table tbody td input[type="checkbox"] {
    appearance: none;
    width: 20px;
    height: 20px;
    background-color: #eee;
    position: relative;
    border-radius: 3px;
    cursor: pointer
    }
    .container .table-wrap {
    margin: 20px auto;
    overflow-x: auto
    }
    .container .table-wrap::-webkit-scrollbar {
    height: 5px
    }
    .container .table-wrap::-webkit-scrollbar-thumb {
    border-radius: 5px;
    background-image: linear-gradient(to right, #5D7ECD, #0C91E6)
    }
    .table>:not(caption)>*>* {
    padding: 2rem 0.5rem
    }
    .input {
    width: 30px;
    height: 30px;
    color: black;
    font-weight: 600;
    outline: none;
    padding: 8px
    }
    ::placeholder {
    color: black;
    font-weight: 600
    }
    .table tbody td input[type="checkbox"]:after {
    position: absolute;
    width: 100%;
    height: 100%;
    font-family: "Font Awesome 5 Free";
    font-weight: 600;
    content: "\f00c";
    color: #fff;
    font-size: 15px;
    display: none
    }
    .table tbody td input[type="checkbox"]:checked,
    .table tbody td input[type="checkbox"]:checked:hover {
    background-color: #21cf95
    }
    .table tbody td input[type="checkbox"]:checked::after {
    display: flex;
    align-items: center;
    justify-content: center
    }
    .table tbody td input[type="checkbox"]:hover {
    background-color: #ddd
    }
    .table tbody td {
    padding: 30px;
    margin: 0;
    font-size: 14.5px;
    font-weight: 600
    }
    .table tbody td .fa-times {
    color: #D32F2F
    }
    .text-muted {
    font-size: 12.5px
    }
    .table tbody tr td:nth-of-type(3) {
    min-width: 20px
    }
 </style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-auto">
<form method="post">
    <div class="container">
<div class="table-wrap">
<table class="table table-responsive table-borderless">
<thead>
 <th>ID</th>
    <th>ID Akun</th>
   
    <th>Status</th>
    <th>Username</th>
    <th>Password</th>

    <th>Status Pengerjaan</th>
    <th>&nbsp;</th>

</thead>
    @if (isset($data))
     <tbody>
        @foreach ($data as $row)
            <tr class="align-middle alert border-bottom" role="alert">

            <td ><a  href="/detailadmin?detail=x.2" >{{ $row->invoice }}</a> </td>
                <td class="text-center">{{ $row->idjokirank }} </td>
                <td>
                    <div>
                        <p class="m-0 fw-bold">{{ $row->statuspayment }}</p>

                    </div>
                </td>

                <td>
                    <div >{{ $row->username }}</div>
                </td>

                <td class="text-center">{{ $row->password }} </td>

                <td>{{ $row->statusjoki }} </td>

                <td>
                <a class="btn" href="/pesananadmin?update=x.2&status1=x.1" data-bs-dismiss="alert"> <span class="fas fa-check"></span> </a>
                    <a class="btn" href="/pesananadmin?tolak=x.2&status2=x.1" data-bs-dismiss="alert"> <span class="fas fa-times"></span> </a>
                </td>


            </tr>
        @endforeach

</tbody>
@endif

    </table> </div> </div> </form> </div> </div>
@endsection