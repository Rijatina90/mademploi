@extends('layouts.app')

@section('content')
    <h1>Contacter-nous</h1>
       <form action="/contact" method="POST">
           @csrf
          <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                placeholder="Votre nom...." value="{{ old('name') }}">

                @error('name')
                  <div class="invalid-feedback">
                     {{ $errors->first('name')}}
                  </div>
                @enderror
              
            </div>

          <div class="form-group">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="email"
              placeholder="Votre email...." value="{{ old('name') }}">

              @error('email')
                <div class="invalid-feedback">
                  {{ $errors->first('name') }}
                </div>
              @enderror
          
         </div>
         <div class="form-group">
            <textarea name="message" cols="30" rows="10" class="form-control @error('') is-invalid @enderror" placeholder="Votre message">{{old('message')}}</textarea>
            @error('message')
              <div class="invalid-feedback">
               {{ $errors->first('message') }}
              </div>
            @enderror
          </div>
            <button type="submit" class="btn btn-primary">Envoyer mon message</button>
        </form>
@endsection
