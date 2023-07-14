@extends('./layouts/header')

@section('page-content')
<link href="css/register.css" rel="stylesheet" />
<div class="form-body">
  <div class="row">
      <div class="form-holder">
          <div class="form-content">
              <div class="form-items">
                  <h3>Connexion</h3>
                  
                 

                  <form class="mx-1 mx-md-4" action="/connexion" method="POST">
                    @method('post')
                    @csrf
                       


                     <div class="col-md-12">
                        <input type="email" id="form3Example3c" class="form-control" name="email" placeholder="Email" />
                        @error('email')
                        <div class="alert alert-info">{{ $message }}</div>
                        @enderror
                     </div>

                     <div class="col-md-12">
                        <input type="password" id="form3Example4c" class="form-control" name="password"  placeholder="Password"/>
                        @error('password')
                        <div class="alert alert-info">{{ $message }}</div>
                        @enderror
                     </div>

                     <div class="col-md-12">
                        <input type="password" id="form3Example4cd" class="form-control" name="confirm" placeholder="Confirmation de password"/>
                        @error('confirm')
                        <div class="alert alert-info">{{ $message }}</div>
                        @enderror
                     </div>


                   
               

                 
            

                      <div class="form-button mt-3">
                          <button id="submit" type="submit" class="btn btn-primary">Log in</button>
                      </div>
                      
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection