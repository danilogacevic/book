<style>
  .form-control {
    margin-bottom: 2%;
  }
  #forgot {
    display: none;
  }
  .modal-dialog {

        margin-top: 15%;
    margin-left: 40%;
  }

  .modal-content {

    width: 60%;
  }
</style>

<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document" style="margin-top: 15%;">
    <div class="modal-content">
      

      @if(!Auth::check())

      <div class="modal-header">
        <h5 class="modal-title text-center" style="font-weight:bold;">registrujte se za pristtup ekskluzivnom sadrzaju</h5>
   <!--      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">

        {!! Form::open(['method'=>'POST','action'=>'Auth\RegisterController@register','id'=>'register']) !!}

           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ime i prezime" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Mejl adresa" required>

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

                        <div class="form-group">
                           

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ponovite password" required>
                            </div>
                        </div>

               <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <p class="pull-right"><a href="javascript:void(0)" class="">Forgot password ?</a></p>

  
         {!! Form::close() !!}

      @else

   

        {!! Form::open(['method'=>'POST','action'=>'Auth\LoginController@login','id'=>'login']) !!}

           <div class="modal-header">
        <h5 class="modal-title text-center" style="font-weight:bold;">Log in</h5>
 
      </div>
      <div class="modal-body">

        

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Mejl adresa" required>

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

                

               <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <p class="pull-right"><a href="javascript:void(0)" class="">Forgot password ?</a></p>

  
         {!! Form::close() !!}

         @endif


        {!! Form::open(['method'=>'POST','id'=>'forgot']) !!}
          <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputGroup" placeholder="Username">
        {!! Form::close() !!}


      </div>
    
    </div>
  </div>
</div>
