<?php
$message2 = Session::pull('message');
if(isset($message2)){
    $msg = "<div class='alert alert-success'>$message2</div>";
} ?>

        <div class="col-md-12 text-center" style="margin-bottom: 20px;">
            <h1 class=" animated bounceInUp" style="color:#ffffff;">Research Monster</h1>


            <div class="col-md-12">
            <img class="img-responsive center-block animated bounceInUp" style="margin-top:10px; max-height: 200px;" src="{{asset('img/monsters/bigmon.png')}}" alt="Monster 1" />
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="animated fadeIn" style="animation-delay: 2s;  -webkit-animation-delay: 2s; ">  {!! $msg or '' !!}</div>
                <div class="panel panel-default animated bounceInLeft" style="animation-delay: 1s;  -webkit-animation-delay: 1s; ">
                    <div class="panel-body">
                        <p style="font-size: 1.25em" class="text-success">Congratulations as a student enrolled in George Brown College
                            programs you can work on applied research projects, gaining <strong>valuable skills</strong> relevant to
                            any future career and earn <strong>course credit</strong> or as a <strong>part time paid</strong> applied
                            research assistant!</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-md-offset-2 animated bounceInLeft" style="animation-delay: 1s;  -webkit-animation-delay: 1s; ">
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"><b>Welcome back!</b></p>
            <a href="./login" class="btn btn-lg btn-block btn-success"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Login</a>
        </div>
        <div class="col-md-4 animated bounceInLeft" style="animation-delay: 1s;  -webkit-animation-delay: 1s; ">
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"> <b>{{ $message or 'How many projects have you missed out on?' }}</b></p>
            <a href="./register" class="btn btn-lg btn-block btn-success" style=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Register</a>
        </div>

