<?php
$msg = Session::get('message');
if(isset($msg)){
    $msg = "<div class='alert alert-success'>$msg</div>";
}
?>
    <div class="container-fluid text-center" style="height: 100%; background-color: #55AA55;">
        <div class="col-md-12" style="margin-bottom: 20px;">
    <h1 style="color:#ffffff;">Research Monster</h1>
            {!! $msg or '' !!}
         <img class="img-responsive center-block" style="margin-top:10px" src="{{asset('img/monsters/bigmon.png')}}" alt="Monster 1" />
        </div>
        <div class="col-md-4 col-md-offset-2">
            <a href="./login" class="btn btn-lg btn-block btn-custom">Login</a>
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"> Already got an account? Click Login to participate in Research Projects</p>
        </div>
        <div class="col-md-4">
            <a href="./register" class="btn btn-lg btn-block btn-custom" style="">Register</a>
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"> {{ $message or 'An easy way for George Brown students Need to register? Click Register' }}</p>
        </div>
    </div>
