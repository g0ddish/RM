<html>
<head>
    <title>{{ $title }}</title>
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/jquery-ui.css') !!}
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <style>
        .ui-autocomplete {
            z-index: 5000;
        }
    body{
    background-color: #55AA55;
      font-family: 'Oswald', sans-serif;
        background: url("{{asset('img/test.png')}}") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    a, a:hover {
      color: inherit; /* blue colors for links too */
      text-decoration: inherit; /* no underline */
    }
    .event .panel-body {
      color: #ffffff;
      background: #A0CFA0;
      border: 1px solid #55AA55;
      padding:0;
      margin:0;
      height:auto;

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
      height: auto;
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
        height:auto;

      }

      .event .rsvp {
        min-height:130px;
      }

      .event .rsvp i {
        font-size:4em;
        top:5%;
      }

      .event .panel-body .author {
        position: relative;
        color: #66B266;
        padding:10px;

        height:auto;
      }
      .event .profile {
        position: relative;
        z-index: 0;
        border-left: 2px solid #55AA55;
        top: -5px;
        padding-left: 55px;
          margin-right: 40px;
        height:auto;
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
          padding-bottom: 5px;
        position: relative;
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
          max-height: 90px;
      }
      .event .author img {
        width: 100%;
        border-radius: 50%;
          max-height: 90px;
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px) {
      .event .profile {
        left: 17%;
      }
    }

    .navbar-default {
        background-color: #00457d;
        border-color: #00447D;
    }
    .navbar-default .navbar-brand {
        color: #ffffff;
    }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
        color: #b8d2de;
    }
    .navbar-default .navbar-text {
        color: #ffffff;
    }
    .navbar-default .navbar-nav > li > a {
        color: #ffffff;
    }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
        color: #b8d2de;
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        color: #b8d2de;
        background-color: #005ca8;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        color: #b8d2de;
        background-color: #005ca8;
    }
    .navbar-default .navbar-toggle {
        border-color: #005ca8;
    }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
        background-color: #005ca8;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #ffffff;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #ffffff;
    }
    .navbar-default .navbar-link {
        color: #ffffff;
    }
    .navbar-default .navbar-link:hover {
        color: #b8d2de;
    }

    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #ffffff;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #b8d2de;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #b8d2de;
            background-color: #005ca8;
        }
    }
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! html_entity_decode(link_to('', HTML::image('img/monsters/mon2.png'), $attributes = array('class' => "navbar-brand"))) !!}
    </div>
    <?php $user = Sentry::getUser();
          $segment = Request::segment(1);
          $segment2 = Request::segment(2); ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php  if($segment=="")echo "active"?>">{!! link_to('', "Home", $attributes = array(), $secure = null) !!}</li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <?php
            echo "<li>".link_to('/projects', "Search Projects", $attributes = array(), $secure = null)."</li>";

              if($user->hasProjectRequestPermission()){
                  echo "<li class='divider'></li>";
                  echo "<li>".link_to('/projects/request', "Request Project", $attributes = array(), $secure = null)."</li>";
              }

                  echo "</ul>";
               if($user->hasProjectCRUDPermission()): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
        <li>{!! link_to('projects/create', "Add Project", $attributes = array(), $secure = null) !!}</li>

            <?php
            echo "<li class='divider'></li>";
           echo "<li>". link_to('applicants', "View Applicants", $attributes = array(), $secure = null)."</li>";

            endif;
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
          <?php     if($user->hasAdminPermission()): ?>
          <li class="<?php  if(Request::segment(1)== "control")echo "active"; ?>"><?php echo link_to('control', "Admin Panel");?></li>
      <?php endif; ?>
      <li class="<?php  if(Request::segment(2)== "edit")echo "active"; ?>"><?php echo link_to('profile/edit', "Edit Profile");?></li>
       <li><?php echo link_to('logout', "Logout");?></li>
      </ul>
</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{!! $content !!}
</body>
</html>