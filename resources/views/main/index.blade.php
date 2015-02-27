<div class="col-md-12" style=" padding-top:60px;"><?php $user = Sentry::getUser();
            if(!isset($user->first_name) && !isset($user->last_name) && !isset($user->email) && !isset($user->avatar)):
        ;?>
   {{ "<div class='alert alert-warning'>You haven't filled out all of your profile yet. <a href='./profile/edit'>Do that here.</a></div>" }}
   <?php endif;     $message = Session::get('message');
    if(isset($message)){
        $message = "<div class='alert alert-success'>$message</div>";
    }

    ?>

   <div class="col-md-9">
       {!! $message or '' !!}

             <?php $i = 0; ?>
                 @foreach ($projects as $project)
                     <?php $i++;
                     $authors = $project->user()->get();
                     foreach ($authors as $author){
                         $creator = $author->first_name . " " . $author->last_name;
                         $primary = $author;
                         break;
                     }
                     ?>
                 <div class="panel panel-default event">
                     <div class="panel-body">
                         <div class="rsvp col-sm-2 hidden-xs">
                             <i> {!! date("j", $project->start_date)  !!}</i>
                             <i> {!! date("F", $project->start_date)  !!}</i>
                             <div class="hidden-xs">
                                 Deadline
                             </div>
                         </div>
                         <div class="info col-xs-8 col-sm-7">
                             {!! link_to("projects/$project->id",str_limit($project->title, 35)) !!}

                             <div class="" style="margin-bottom: 5px">
                                 <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation" class="active"><a href="#desc-{{$i}}" aria-controls="desc-{{$i}}" role="tab" data-toggle="tab">Description</a></li>
                                     <li role="presentation"><a href="#skills-{{$i}}" aria-controls="skills-{{$i}}" role="tab" data-toggle="tab">Skills</a></li>
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-{{$i}}">
                                         {!! str_limit($project->description, 235) !!}

                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-{{$i}}">
                                         @foreach ($project->skills()->get() as $skill)
                                             <p class="label label-success">{!! $skill->name !!}</p>
                                         @endforeach                                     </div>
                                 </div>
                             </div>



                         </div>
                         <div class="author col-xs-4 col-sm-3">
                             <div class="profile-image">


                                {!! HTML::image($primary->avatar, 'avatar')  !!}


                             </div>
                             <div class="profile hidden-xs">

                                 <strong>{!! $creator !!}</strong>
                                 <article>Creator</article>
                                 <div class="links hidden-sm" style=";">
                             <?php
                             if($project->status_id == 1){
                                 echo "<span style='color:#ffffff; font-size: 2.5em' class='glyphicon glyphicon-search' aria-hidden='true'></span>";
                             }else if($project->status_id == 2){
                                 echo "<span style='color:#ff0000; font-size: 2.5em' class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                             }else if($project->status_id == 3){
                                 echo "<span style='color:limegreen; font-size: 2.5em' class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
                             }   ?>

                                 </div>

                             </div>
                             <a  style="margin-top: 40px"  href="./projects/{!! $project->id !!}" class="btn btn-block btn-success visible-md hidden-lg hidden-sm hidden-xs">More Info</a>

                             <a   style="max-width:210px;margin-top: 15px" href="./projects/{!! $project->id !!}" class="btn btn-block btn-success hidden-md visible-lg hidden-sm hidden-xs">More Info</a>
                             <a  href="./projects/{!! $project->id !!}" class="btn  btn-block btn-success visible-xs hidden-lg hidden-md hidden-sm" style="margin-top: 85px; margin-bottom: 4px;margin-right:0; padding-left:10%;">More Info</a>
                             <a href="./projects/{!! $project->id !!}" class="btn btn-lg btn-block btn-success hidden-xs hidden-lg hidden-md visible-sm" style="margin-top: 85px; margin-bottom: 4px;">More Info</a>

                         </div>
                     </div>
                 </div>
                 @endforeach

   </div>
   <div class="col-md-3">

             <?php  $one = true; $noskill = true; ?>
            <div class="list-group">
                @foreach ($skills as $skill)


                    <?php if($one && !$noskill): ?>
                    <a href="#" class="list-group-item active">{{{ $skill->name }}}</a>
                    <?php $one = false; else:
                        if($skill->projects()->count() >= 1):
                        ?>

                        <a href="{{action('ProjectController@index'). "?skills=" . $skill->name}}" class="list-group-item">

                            {{{ $skill->name }}}
                            <span class="badge">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $skill->users()->count(); ?></span>
                            <span class="badge"><span style="margin-right:2px;" class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                <?php echo $skill->projects()->count(); ?> </span>
                        </a>

                    <?php endif; endif; ?>
                @endforeach

      </div>
   </div>
</div>