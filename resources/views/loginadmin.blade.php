@extends('layouts.adminbase')
@section('head')

@endsection
@section('content')
<section class="admin">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">     
                    <div class="form mb-md-5 mt-md-4 pb-5" >
                        <form action="/loginadmin" method="POST">
                        @csrf
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
                    
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="typeEmailX" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX">Email</label>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="typePasswordX">Password</label>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
              
</section>
@endsection