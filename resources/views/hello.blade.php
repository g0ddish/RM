
        <div class="col-md-12 text-center" style="margin-bottom: 20px;">
            <h1 style="color:#ffffff;">Research Monster</h1>
            {!! $msg or '' !!}
            <img class="img-responsive center-block" style="margin-top:10px; max-height: 300px;" src="{{asset('img/monsters/bigmon.png')}}" alt="Monster 1" />
        </div>
        <div class="col-md-4 col-md-offset-2">
            <a href="./login" class="btn btn-lg btn-block btn-custom">Login</a>
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"><b> Already have an account? Click Login to participate in Research Projects</b></p>
        </div>
        <div class="col-md-4">
            <a href="./register" class="btn btn-lg btn-block btn-custom" style="">Register</a>
            <p class="text-center" style="color: #ffffff; font-size: 20px; margin-top: 20px;"> <b>{{ $message or 'Need to register? Click Register' }}</b></p>
        </div>

