@extends('./layouts/header')

@section('page-content')
<link href="css/register.css" rel="stylesheet" />
<div class="form-body">
  <div class="row">
      <div class="form-holder">
          <div class="form-content">
              <div class="form-items">
                  <h3>Register</h3>
                

                  <form class="mx-1 mx-md-4" action="/register" method="POST">
                    @method('post')
                    @csrf
                        <div class="col-md-12">
                         <input class="form-control" type="text" name="nom" placeholder="Nom" >
                         
                         @error('nom')
                         <div class="alert alert-info">{{ $message }}</div>
                         @enderror
                        
                      </div>

                      <div class="col-md-12">
                        <input type="text" id="form3Example1c" class="form-control"  name="prenom" placeholder="Prenom"/>
                        @error('prenom')
                        <div class="alert alert-info">{{ $message }}</div>
                        @enderror
                        
                      </div>

                     <div class="col-md-12">
                        <input type="text" id="form3Example1c" class="form-control" name="pays" placeholder="Pays"/>
                        @error('pays')
                        <div class="alert alert-info">{{ $message }}</div>
                        @enderror
                     </div>


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


                    {{--  <div class="col-md-12 mt-3">
                      <label class="mb-3 mr-1" for="gender">Gender: </label>

                      <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                      <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                      <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                      <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                      <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                      <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                         <div class="valid-feedback mv-up">You selected a gender!</div>
                          <div class="invalid-feedback mv-up">Please select a gender!</div>
                      </div> --}}

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox"  id="invalidCheck" >
                    @error('checkbox')
                        <div class="alert alert-info">{{ $message }}</div>
                    @enderror
                    <label class="form-check-label">I confirm that all data are correct</label>
                   
                  </div>

                 
            

                      <div class="form-button mt-3">
                          <button id="submit" type="submit" class="btn btn-primary">Register</button>
                      </div>
                      
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection