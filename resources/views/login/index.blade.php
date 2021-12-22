@extends('layouts.main-login')  
    @section('blogin')
{{--  START CONTENT  --}}
   <div class="overlay"></div>
   <form action="/login" method="post" class="box">
    @csrf
       <div class="header">
           <h4>Login Your Account Here</h4>
           <p>Utamakan Keselamatan dan selalu gunakan K3 dalam menjalankan tugas dimana dan kapanpun kalian berada</p>
       </div>
       <div class="login-area">
           @if (session()->has('success'))
               <div class="alert alert-success alert-dismissible fade show">
                   {{ session('success') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
          @endif
          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
     @endif
           <input type="text" name="username" id="username" class="username @error('username') is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}">
           @error('user')
               <div class="invalid-feedback">
                   {{ $message }}
               </div>
           @enderror
           <input type="password" class="password" name="password" id="password" placeholder="Password" required>
           <input type="submit" value="Login" class="submit">
           <a class="text-center text-success" href="/register">Register Here</a>
       </div>
   </form> 
{{--  END CONTENT  --}}
@endsection