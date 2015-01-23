<style>
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
</style>
<div class="col-md-12" style="background-color: #55AA55; padding-top:60px;"><?php $user = Sentry::getUser();
            if(!isset($user->first_name) && !isset($user->last_name) && !isset($user->email) && !isset($user->avatar)):
        ;?>
   {{ "<div class='alert alert-warning'>You haven't filled out all of your profile yet. <a href='./profile/edit'>Do that here.</a></div>" }}
   <?php endif; ?>
            {{ Session::get('message')}}

   <div class="col-md-9">
      <div class="panel panel-default">
         <div class="panel-body">
             <?php $i = 0; ?>
                 @foreach ($projects as $project)
                     <?php $i++; ?>
                 <div class="panel panel-default event">
                     <div class="panel-body">
                         <div class="rsvp col-xs-2 col-sm-2">
                             <i> {{{ date("j", $project->start_date)  }}}</i>
                             <i> {{{ date("F", $project->start_date)  }}}</i>
                             <div class="hidden-xs">
                                 Deadline
                             </div>
                         </div>
                         <div class="info col-xs-8 col-sm-7">
                             {{{ str_limit($project->title, 35) }}}
                             <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
                             <div class="hidden-xs">
                                 <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation" class="active"><a href="#desc-{{$i}}" aria-controls="desc-{{$i}}" role="tab" data-toggle="tab">Description</a></li>
                                     <li role="presentation"><a href="#skills-{{$i}}" aria-controls="skills-{{$i}}" role="tab" data-toggle="tab">Skills</a></li>
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-{{$i}}">
                                         {{{ $project->description }}}

                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-{{$i}}">
                                         @foreach ($project->skills()->get() as $skill)
                                             <p class="label label-success">{{{ $skill->name }}}</p>
                                         @endforeach                                     </div>
                                 </div>
                             </div><?php $authors = $project->user()->get();
                             $primary;  //I was inebriated don't laugh
                             $creator;
                             foreach ($authors as $author){
                                 $creator = $author->first_name . " " . $author->last_name;
                                 $primary = $author;
                                 break;
                             }

                             ?>
                         </div>
                         <div class="author col-xs-2 col-sm-3">
                             <div class="profile-image">
                                 <img src="{{ $primary->avatar }}"/>
                             </div>
                             <div class="profile hidden-xs">

                                 <strong>{{{ $creator }}}</strong>
                                 <article>Founder of this project</article>
                                 <div class="links hidden-sm">
                                     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
                 @endforeach
         </div>
      </div>
   </div>
   <div class="col-md-3">
      <div class="panel panel-success">
         <div class="panel-heading">
            <h3 class="panel-title">Project Tags</h3>
         </div>
         <div class="panel-body">
             <?php   $skills =  Skill::all(); $one = true; ?>
            <div class="list-group">
                @foreach ($skills as $skill)
                    <?php if($one): ?>
                    <a href="#" class="list-group-item active">{{{ $skill->name }}}</a>
                    <?php $one = false; else: ?>
                        <a href="#" class="list-group-item">{{{ $skill->name }}}</a>
                    <?php endif; ?>
                @endforeach
            </div>
         </div>
      </div>
   </div>
</div>