@extends('app')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="card">
				<div class="card-header"><h2>Login</h2></div>
				<div class="card-body card-padding">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group fg-float">
							<div class="fg-line">
								<input type="email" class="form-control fg-input" name="email" value="{{ old('email') }}">
							</div>
                            <label class="fg-label">E-Mail Address</label>
						</div>

						<div class="form-group fg-float">
							<div class="fg-line">
								<input type="password" class="form-control fg-input" name="password">
							</div>
                            <label class="fg-label">Password</label>
						</div>

						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Login</button>
							<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
