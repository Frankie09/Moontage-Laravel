@extends('layouts.base')



@section('content')

<section class="payment">
    <div class="card">
        <div class="card-body">
          <div class="container mb-5 mt-3">
            
              <div class="col-xl-9">
                <p style="color: #7e8d9f;font-size: 20px;">Invoice <strong>{{ $data->invoice }}</strong></p>
              </div>
             
              <hr>
            
      
            <div class="container">
              <div class="col-md-12">
                <div class="text-center">

                  <h2 class="" style="color:rgb(233, 231, 231)">Moontage</h2>
                </div>
      
              </div>
      
      
              <div class="row d-flex justify-content-between">
                <div class="row1">
                  <ul class="list-unstyled">
                    
                    <li class="text-muted"></li>
                    <li class="text-muted"></li>
                    <li class="text-muted"> </li>
                  </ul>
                </div>
                <div class="row2">
                  <p class="text-muted">Invoice</p>
                  <ul class="list-unstyled">
                    <li class="text-muted"><i  style="color:#84B0CA ;"></i> <span
                        class="fw-bold">ID:</span>{{ $data->invoice }}</li>
                    <li class="text-muted"><i class="" style="color:#84B0CA ;"></i> <span
                        class="fw-bold">Creation Date: </span>{{ $data->created_at }}</li>
                    <li class="text-muted"><i  style="color:#84B0CA ;"></i> <span
                        class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                        {{ $data->status }}</span></li>
                  </ul>
                </div>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead class="text-white ">
                      <tr>
                        
                        <th scope="col">Rank</th>
                        <th scope="col">Bintang</th>
                        <th scope="col">Harga/*</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody class="text-white ">
                      @foreach ($detail as $item)
                      <tr>
                        
                        <td>{{ $item->nama_tier }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga_tier }}</td>
                        <td>{{ $item->harga }}</td>
                        
                      </tr>
                      @endforeach
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-xl-8">
                  <p class="ms-3">Silahkan lakukan pembayaran. jangan lupa copy dan simpan invoice</p>
      
                </div>
                <div class="col-xl-4">
                  
                  <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><br><span
                      style="font-size: 15px;">Rp. {{ $item->harga }}</span></p>
                </div>
              </div>
              <hr style="  border: 0;
              clear:both;
              display:block;
              width: 100%;               
              background-color:#ebebe6;
              height: 1px;">
              <div class="row d-flex justify-content-between">
                <div class="col-xl-12">
                  <p>Thank you for your purchase</p>
                </div>
                <div class="col-xl-12">
                    <button type="button" class="btn btn-dark text-capitalize" data-toggle="modal" data-target="#staticBackdrop">  Pay Now
                    </button>
                  </div>
                 
              </div>
      
            </div>
          </div>
        </div>
    </div>

    
    
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  
                 <div class="tabs mt-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item" role="presentation"> <a class="nav-link active" id="BCA-tab" data-toggle="tab" href="#BCA" role="tab" aria-controls="BCA" aria-selected="true"> <img src="img/BCA.png" width="80"> </a> </li>
                       <li class="nav-item" role="presentation"> <a class="nav-link" id="QRIS-tab" data-toggle="tab" href="#QRIS" role="tab" aria-controls="QRIS" aria-selected="false"> <img src="img/QRIS.png" width="80"> </a> </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade show active" id="BCA" role="tabpanel" aria-labelledby="BCA-tab">
                          <div class="mt-4 mx-4">
                             <div class="text-center">
                                <h5 style="color:black"> Transfer BCA</h5>
                             </div>
                             <div class="form mt-3 text-dark">
                                <h6>Cara pembayaran :</h6>
                                <h6>1. Buka aplikasi BCA Mobile pada smartphone Anda.</h6>
                                <h6>2. Masuk ke akun BCA Mobile menggunakan user ID dan MPIN Anda.</h6>
                                <h6>3. Setelah berhasil login, pilih menu "Transfer".</h6>
                                <h6>4. Pilih opsi "Transker ke Rekening" apabila menggunakan BCA dan "Transfer ke Bank Lain" apabila menggunakan bank selain BCA.</h6>
                                <h6>5. Masukkan Nomor Rekening dan Jumlah Pembayaran</h6>
                                <h6>6. Pastikan jumlah pembayaran senilai Rp. {{ $item->harga }}</h6>
                                <h6>7. Lalu kirim dan masukkan pin, selesai.</h6>
                                <br>
                                <h5>Nomor Rekening : <b>0153781955</b></h5>
                                <h5><span class="text-danger"> Upload bukti pembayaran dan segera chat Admin melalui whatsapp agar validasi lebih cepat!</span></h5>

                                {{-- <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Cardholder Name</span> </div>
                                <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Card Number</span> <i class="fa fa-eye"></i> </div>
                                <div class="d-flex flex-row">
                                  <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Expiration Date</span> </div>
                                  <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div>
                                </div> --}}
                                <form method="post" action="/upload" enctype="multipart/form-data">
                                  @csrf
                                  <input type="hidden" name="invoice" value="{{ htmlspecialchars($data->invoice) }}">
                                  <input type="hidden" name="id" value="{{ htmlspecialchars($id) }}">
                                  
                                  
                                <div class="inputbox">
                                  <label class="text-dark" for="bca-image">Upload Image:</label>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="bcaimage" name="bcaimage" accept="image/*" required>
                                    <label class="custom-file-label" for="bcaimage">Choose file</label>
                                    
                                  </div>
                                </div>
                                <div class="px-5 pay"> <button class="btn btn-success btn-block">Add card</button> </div>
                              </form>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="QRIS" role="tabpanel" aria-labelledby="QRIS-tab">
                          <div class="px-5 mt-5">
                             <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>QRIS Email Address</span> </div>
                             <div class="qris"> <img src="img/QRIS.png" width="80" alt=""></div>
                             <div class="pay px-5"> <button class="btn btn-primary btn-block">Add QRIS</button> </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

</section>
@include('sweetalert::alert')
@endsection