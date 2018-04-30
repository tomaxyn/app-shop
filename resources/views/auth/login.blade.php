@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('http://www.allabouthappylife.com/wallpapers/pink-plumeria/pink-plumeria-o-2800.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
            <div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
                            <form class="form-horizontal" method="POST" 
                                  action="{{ route('login') }}">
                                    {{ csrf_field() }} 							
								<div class="header header-info text-center">
									<h4>Ingresa</h4>								
								</div>
								<p class="text-divider">Ingresa tus datos</p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>										
                                        <input id="email" type="email" placeholder="Email..." class="form-control" name="email" value="{{ old('email') }}" required autofocus>

									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password..." required>									
									</div>

									<!--If you want to add a checkbox to this form, uncomment this code -->

									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
											Recordar sesion
										</label>
									</div>
								</div>
								<div class="footer text-center">
									<button type="submit" class="btn btn-simple btn-info btn-lg">Ingresar</a>
								</div>
                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> 
                                    Forgot Your Password?
                                </a>  -->
							</form>	                        
                        </div>                        
					</div>
				</div>
    </div>
   

</div>

@endsection
