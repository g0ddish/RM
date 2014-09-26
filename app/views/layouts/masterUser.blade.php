<html>
<head>
    <title>{{ $title }}</title>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    <style>
    body{
    background-color: #55AA55;
    }
.navbar-custom {
  background-color: #116611;
  border-color: #0c4a0c;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#189218), to(#116611));
  background-image: -webkit-linear-gradient(top, #189218, 0%, #116611, 100%);
  background-image: -moz-linear-gradient(top, #189218 0%, #116611 100%);
  background-image: linear-gradient(to bottom, #189218 0%, #116611 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff189218', endColorstr='#ff116611', GradientType=0);
}
.navbar-custom .navbar-brand {
  color: #ffffff;
  padding-top:5px;

}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #e6e6e6;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #c0c0c0;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #c0c0c0;
  background-color: #0c4a0c;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#0c4a0c), to(#147514));
  background-image: -webkit-linear-gradient(top, #0c4a0c, 0%, #147514, 100%);
  background-image: -moz-linear-gradient(top, #0c4a0c 0%, #147514 100%);
  background-image: linear-gradient(to bottom, #0c4a0c 0%, #147514 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0c4a0c', endColorstr='#ff147514', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #0c470c;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #0c4a0c;
  color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #c0c0c0;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #c0c0c0;
    background-color: #0c4a0c;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #ffffff;
}
.navbar-custom .navbar-link:hover {
  color: #c0c0c0;
}
    </style>
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="{{asset('img/monsters/mon2.png')}}"/></a>
    </div>
    <?php $user = Sentry::getUser(); ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo action('HomeController@index'); ?>">Home</a></li>
        <li><a href="<?php echo action('HomeController@index'); ?>">Projects</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo action('ProfileController@index'); echo '/'.$user->student_id;?>"><?php echo $user->student_id;?></a></li>
       <li><a href="./logout">Logout</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{{ $content }}
</body>
</html>