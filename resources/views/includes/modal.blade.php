<style>
  .form-control {
    margin-bottom: 2%;
  }

  .language {
    margin-bottom: 5%;
  }
  #forgot, #register {
    display: none;
  }
  .modal-dialog {

        margin-top: 15%;
    margin-left: 40%;
  }

  .modal-content {

    width: 60%;

  }

  .modal-content h5 {
  
    font-family: cursive;
  }

  .modal-content p, .modal-content label {
  
    font-family: cursive;
  }
</style>

<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document" style="margin-top: 15%;">
    <div class="modal-content">
      


      <div class="modal-header">
        <h5 class="modal-title text-center" style="font-weight:bold;">registrovani korisnici imaju pristup ekskluzivnom sadrzaju</h5>
   
      </div>
      <div class="modal-body">

        {!! Form::open(['method'=>'POST','action'=>'Auth\RegisterController@register','id'=>'register']) !!}

           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-12">
                                <input id="address" type="text" class="form-control" name="address" value="" placeholder="Address of delivery" required>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>

                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                           

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="newsletter" value=1>You want to receive newsletter ?
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                          <div class="form-inline" style="margin: 0 5%;">
                            <button type="submit" class="btn btn-sm btn-success">Register</button>
                            <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                            <p class="pull-right"><a href="{{route('password.request')}}" class="">Forgot password ? </a></p>
                          </div>
                         

                            </div>

                         

  
         {!! Form::close() !!}

  
   

        {!! Form::open(['method'=>'POST','action'=>'Auth\LoginController@login','id'=>'login']) !!}

      
      <div class="modal-body">

        

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                

                  <div class="form-inline" style="margin: 0 5%;">

                            <button type="submit" class="btn btn-sm btn-success">Login</button>
                            <button type="button" class="btn btn-sm btn-info">Register</button>
                            <p class="pull-right"><a href="{{route('password.request')}}" class="">Forgot password ?</a></p>
                  </div>

  
         {!! Form::close() !!}


      </div>

     <!--     <div class="modal-body">
        {!! Form::open(['method'=>'POST','id'=>'forgot']) !!}
          <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputGroup" placeholder="Username">
        {!! Form::close() !!}
      </div> -->
    
    </div>
  </div>
</div>


