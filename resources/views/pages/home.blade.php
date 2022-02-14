@extends('layouts.main-layout')

@section('content')
<div class="container">
    @auth
        @else
        <h2 class="title_form">
            Registration
          </h2>
            <form id="registration" method="POST" action="{{route('register')}}">
                @method('post')
                @csrf
        
                {{-- Nome utente --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name or Username</label>
                    <input type="text" class="form-control" name="name">
                  </div>
        
                {{-- Email  --}}
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                  <div  class="form-text">We'll never share your email with anyone else.</div>
                </div>
        
                {{-- password  --}}
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="" name="password">
                </div>
                
                {{-- confirm password  --}}
                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Password</label>
                    <input type="password" class="form-control" id="" name="password_confirmation">
                  </div>
        
        
                <button type="submit" class="btn btn-primary">Registrati</button>
              </form>
    
              {{-- Login --}}
              <h2 class="title_form">
                Login
              </h2>
                <form id="login_form" method="POST" action="{{route('login')}}">
                    @method('post')
                    @csrf
        
                    {{-- Email  --}}
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                    </div>
        
                    {{-- password  --}}
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="" name="password">
                    </div>
    
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
    @endauth
    
</div>

    <videogames-component user="{{Auth::check()}}"> </videogames-component>
@endsection