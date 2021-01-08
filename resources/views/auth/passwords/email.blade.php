<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 08:41:08 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Reset Password</title>
@include('partials.user_header_resourse')
</head>
<body>

<!-- Header 01
================================================== -->
<header class="header_01 header_inner">
  <div class="header_main">
    <div class="header_menu fixed-top">
      <div class="container">
        @include('partials.user_header_top')
      </div>
    </div>
    <div class="header_btm">
      <h2>Reset Password</h2>
    </div>
  </div> 
</header>

<main>
  <div class="only-form-pages">
    <div class="container">
      <div class="row">
        
            @if (session('status'))
            <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         </div>
                    @endif
       
        <div class="col-md-12">
            <div class="only-form-box">     
                     <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="com_class_form">
                            <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer Container
================================================== -->
@include('partials.user_footer')