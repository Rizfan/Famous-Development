@extends('layouts.main')

@section('title','Login')

@section('css')
<style type="text/css">
.imglog{
    width: 120px;
    height: 120px;
    border-radius: 100%;
    border: 5px solid #dcdee4;
    margin-left: 170px;
    margin-bottom: 20px;
}
body{
    background: rgb(53,171,255);
    background: linear-gradient(17deg, rgba(53,171,255,1) 0%, rgba(85,255,202,1) 100%);
    width: 100%;
    height: 100vh;
}

.eh{
    border-radius: 50px;
    background :none;
}
.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}
.card{
    padding: 20px;
    border-radius: 30px;
}
.btn{
    border-radius: 50px; 
}
@media screen and (max-width: 768px){
    .imglog{
        margin-left: 90px;
    }
}

#footer, #nav, .footer, .lll{
    display: none;
}

.txtb span::before{
  content: attr(data-placeholder);
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  z-index: -1;
  transition: .5s;
}
</style>
@endsection

@section('content')

<div class="spacer2"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->
                <!-- <div class="card-header"> -->
                    <!-- </div> -->

                    <div class="card-body">
                        <img src="{{'/img/crop_image.jpg'}}" class="imglog">
                        <br>
                        <div class="text-center">
                            <h3><b>LOGIN</b></h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group justify-content-center row">

                                <div class="col-md-11 txtb">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror eh" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group justify-content-center row ">

                                <div class="col-md-11">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror eh" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
<!-- 
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Login') }}
                                </button><!-- 

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
  $(".txtb input").on("focus",function(){
    $(this).addClass("focus");
});

  $(".txtb input").on("blur",function(){
    if($(this).val() == "")
        $(this).removeClass("focus");
});

</script>
@endsection
