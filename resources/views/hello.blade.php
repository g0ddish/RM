<?php
$msg = Session::get('message');
if(isset($msg)){
    $msg = "<div class='alert alert-success'>$msg</div>";
}
?>
<div class="col-md-12 text-center" style="height: 50%; background-color: #55AA55;">
    <div class="col-md-4" style="margin-top: 30px">
        <a href="./login" class="btn btn-lg btn-block btn-custom">Login</a>
        <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 200px;"> Already got an account? Click Login</p>
    </div>

    <div class="col-md-4">
    <h1 style="color:#ffffff;">Research Monster</h1>
            {!! $msg or '' !!}
         <img style="position:relative;z-index: 100; margin-top:30px" src="{{asset('img/monsters/bigmon.png')}}" alt="Monster 1" />
    </div>

    <div class="col-md-4" style="margin-top: 30px">
        <a href="./register" class="btn btn-lg btn-block btn-custom" style="">Register</a>
        <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 200px;"> {{ $message or 'An easy way for George Brown students' }}</p>
    </div>
</div>
<div class="col-md-12" style="height: 50%; background-color: #116611;">
    <div class="col-md-4"><p class="text-center" style="color: #ffffff; font-size: 20px;">Need to register? Click Register</div>
    <div class="col-md-4"></div>
    <div class="col-md-4"><p class="text-center" style="color: #ffffff; font-size: 20px;"> {{ $message or 'to participate in Research Projects' }}</p>
    </div>

</div>
