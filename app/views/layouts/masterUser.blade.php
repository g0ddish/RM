<html>
<head>
    <title>{{ $title }}</title>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

  {{ HTML::style('css/bootstrap.min.css') }}
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <style>
    body{
    background-color: #55AA55;
      font-family: 'Oswald', sans-serif;
    }
    .event .panel-body {
      color: #ffffff;
      background: #A0CFA0;
      border: 1px solid #55AA55;
      padding:0;
      margin:0;
      height:86px;
    }
    .event .panel-body > div {
      padding: 0 10px;
    }
    .event .panel-body .rsvp {
      border-left: none;
      padding: 0;
      text-align: center;
      position: relative;
      background: #66B266;
      color: white;
      height: 100%;
    }

    .event .rsvp > div {
      font-size: 12px;
      position: absolute;
      bottom: 0;
      background: #55AA55;
      width: 100%;
    }

    .event .rsvp i {
      font-size: 2em;
      display: block;
      position:relative;
      top:17%;
      margin-bottom:5px;
    }
    .event .rsvp i:last-of-type{
      font-size:1.5em;
      margin-top:-23px;
    }

    .event .rsvp span {
      cursor: pointer;
      padding: 0 5px;
      margin: 5px 0;
      width:45%;
    }
    .event .rsvp span:first-of-type{
      border-right: 1px solid white;
    }
    .event .rsvp span:hover{
      color: #55AA55;
    }

    .event .info{
      font-size: 28px;
    }

    .event .info > div, .event .info > ul{
      font-size: 12px;
    }

    .event .author .profile-image {
      position: absolute;
      background: white;
      padding: 3px;
      width: 5em;
      border-radius: 50%;
      border: 1px solid #55AA55;
      box-sizing: content-box;
      z-index: 1;
      top:4px;
    }

    .event .author img {
      width:100%;
      border-radius:50%;
    }

    /* Overwrites */
    .nav-tabs a {
      background: #66B266;
      color: white;
    }
    .info .nav-tabs li.active a {
      background-color: #55AA55;
      color: white;
    }
    .info .nav-tabs li:hover a, .info .nav-tabs li.active:hover a {
      background: #55AA55;
      color: white;
    }
    .tab-content {
      color: #000000;
      background: white;
      border-radius: 0 10px;
      padding: 10px;
    }

    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
      .event .panel-body {
        height:158px;
      }

      .event .rsvp {
        min-height:100%;
      }

      .event .rsvp i {
        font-size:4em;
        top:5%;
      }

      .event .panel-body .author {
        position: relative;
        color: #66B266;
        padding:10px;
        height:100%;
      }
      .event .profile {
        position: relative;
        z-index: 0;
        border-left: 2px solid #55AA55;
        top: -5px;
        padding-left: 55px;
        height: 100%;
        left: 10%;
      }
      .event .profile strong {
        display: block;
        color: #ffffff;
        font:20px bold 'Fredoka One', serif;
        margin-bottom: 5px;
      }
      .event .author .profile i {
        color:  #55AA55;
        padding-left: 0;
      }
      .event .profile .links {
        position: absolute;
        bottom: 0;
      }
      .event .profile article {
        padding:0 41px 0 0;
      }
      .event .author .profile i:hover{
        color:  #55AA55;
      }
      .event .author .profile-image {
        position: absolute;
        background: white;
        padding: 3px;
        width: 30%;
        border-radius: 50%;
        border: 1px solid #55AA55;
        box-sizing: content-box;
        z-index: 1;
        top:13px;
      }
      .event .author img {
        width: 100%;
        border-radius: 50%;
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px) {
      .event .profile {
        left: 17%;
      }
    }

    /* Large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {  }
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

  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <?php $user = Sentry::getUser();
          $segment = Request::segment(1);
          $segment2 = Request::segment(2); ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php  if($segment=="")echo "active"?>"><a href="<?php echo action('index'); ?>">Home</a></li>
        <li class="<?php  if($segment=="projects")echo "active"?>"><?php echo link_to('projects', "Projects", $attributes = array(), $secure = null)."</li>"; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <?php
            if($user->hasProjectCRUDPermission()){
              echo "<li>".link_to('projects/create', "Add Project", $attributes = array(), $secure = null)."</li>";
              echo "<li>".link_to('projects/mine', "View My Projects", $attributes = array(), $secure = null)."</li>";
            }
            ?>
          <!--  <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="<?php  if(Request::segment(2)== Sentry::getUser()->student_id)echo "active"; ?>"><?php
         echo link_to('profile/'.$user->student_id, $user->student_id, $attributes = array(), $secure = null);
         ?></li>
       <?php  if(Request::segment(2)== Sentry::getUser()->student_id){ echo "<li><a href=\"./edit\">Edit Profile</a></li>";} ?>
       <li><?php echo link_to('logout', "Logout");?></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{{ $content }}
</body>
</html>