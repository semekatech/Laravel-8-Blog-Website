@extends('auth.layout')
@section('content')


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="{{ route('login.post') }}" method="POST"class="signup-form">
					 @csrf
                    <h2 style="color:black; text-align:center;"><b><span style="color: green;">ADMIN</span><span style="color: red;">LOGIN</span></b></h2>
 
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="username" placeholder="username" required=""/>
							@if ($errors->has('username'))

                                      <span class="text-danger">{{ $errors->first('email') }}</span>

                                  @endif
                        </div>
                              <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="password" required=""/>
							@if ($errors->has('password'))

                                      <span class="text-danger">{{ $errors->first('password') }}</span>

                                  @endif
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="LOGIN"/>
                        </div>
                       
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection