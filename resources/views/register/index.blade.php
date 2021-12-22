@extends('layouts.main-login')  
    @section('blogin')
{{--  START CONTENT  --}}
   <div class="overlay"></div>
   <form action="/register" method="post" class="box">
      
       <div class="header">
           <h4>Register Your Account Here</h4>
           <p>Utamakan Keselamatan dan selalu gunakan K3 dalam menjalankan tugas dimana dan kapanpun kalian berada</p>
       </div>
       <div class="login-area">
        @csrf
           <input type="text" class="name form-control mb-1 @error('name') is-invalid @enderror" style="border-radius: 0px" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
           @error('name')
           <div class="invalid-feedback">
            {{ $message }}
            </div>           
           @enderror
           <input type="text" class="username form-control mb-1 @error('username') is-invalid @enderror"style="border-radius: 0px" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
           @error('username')
           <div class="invalid-feedback">
            {{ $message }}
            </div>           
           @enderror
           <input type="email" class="email form-control mb-1 @error('email') is-invalid @enderror"style="border-radius: 0px" id="email" name="email" placeholder="Email Address" required value="{{ old('email') }}">
           @error('email')
           <div class="invalid-feedback">
            {{ $message }}
            </div>           
           @enderror
           <input type="password" class="password form-control mb-1 mb-1 @error('password') is-invalid @enderror"style="border-radius: 0px" id="password" name="password" placeholder="Password" required>
           @error('password')
           <div class="invalid-feedback">
            {{ $message }}
            </div>           
           @enderror
           <input type="submit" value="submit" class="submit">
           <a class="text-center text-success " href="/login">Login Here</a>
       </div>
   </form> 
{{--  END CONTENT  --}}
@endsection