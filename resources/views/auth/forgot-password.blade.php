@extends('auth.layout')
@section('content')


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="{{ route('forget.password.post') }}" method="POST"class="signup-form">
					 @csrf
                    <h2 style="color:black; text-align:center;"><b><span style="color: green;">SIASA</span><span style="color: red;">KENYA</span></b></h2>
 
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="username" required=""/>
							@if ($errors->has('email'))

                                      <span class="text-danger">{{ $errors->first('username') }}</span>

                                  @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" placeholder="Password" id="password" required="" />
							 @if ($errors->has('password'))

                                      <span class="text-danger">{{ $errors->first('password') }}</span>

                                  @endif
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="LOGIN"/>
                        </div>
                        <p class="loginhere">
                        Not a member ? <a href="{{ route('register') }}" class="loginhere-link">Signup Here</a>
                    </p>
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection