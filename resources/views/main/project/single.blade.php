<?php $user = Sentry::getUser(); ?>
{{ HTML::script('js/tag-it.js') }}
{{ HTML::style('css/jquery.tagit.css') }}
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<script>
    <?php
         $array = array();
    foreach($skills as $skill => $val){
       $array[] = $val->name;
    }
    ?>
    $( document ).ready(function() {
        $("#myTags").tagit({
            autocomplete: {delay: 0, minLength: 0},
            availableTags: {{ json_encode($array)  }},
            fieldName: "skills[]"
        });
    });

</script>

<div class="col-md-12" style="background-color: #55AA55; padding-top:60px;"><?php
            if(!isset($user->first_name) && !isset($user->last_name) && !isset($user->email) && !isset($user->avatar)):
        ;?>
   {{ "<div class='alert alert-warning'>You haven't filled out all of your profile yet. <a href='./profile/edit'>Do that here.</a></div>" }}
   <?php endif; ?>
            {{ Session::get('message')}}
   <div class="col-md-12">
      <div class="panel panel-default">
         <div class="panel-body">

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
                                     <li role="presentation" class="active"><a aria-controls="desc-" role="tab">Description</a></li>
                                 </ul>
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-">
                                         {{{ $project->description }}}

                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-">
                                                              </div>
                                 </div> <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation"><a href="#skills-" aria-controls="skills-" role="tab">Skills</a></li>
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-">
                                         @foreach ($project->skills()->get() as $skill)
                                             <p class="label label-success">{{{ $skill->name }}}</p>
                                         @endforeach

                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-">
                                     </div>
                                 </div>
                             </div>
                      </div>
                         </div>


                 </div>

             <?php      if($user->hasProjectCRUDPermission()):  ?>
                <div class="col-md-2 pull-right">
             <button data-toggle="modal" data-target="#myModal" class="btn btn-block btn-warning">Edit</button>
                </div>
             <?php endif; ?>
         </div>

      </div>
   </div>

</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"  style="">
                <h4 class="modal-title" id="myModalLabel">Edit Project</h4>
                {{ Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) }}

                <button type="submit"name="id" style="" value="{{$project->id}}" class="btn pull-right btn-danger">Remove project</button>
                {{Form::close()}}


            </div>

            <div class="modal-body">
<style>
    .ui-autocomplete {
        z-index: 5000;
    }
</style>

                {{ Form::open(['route' => ['projects.update', $project->id], 'method' => 'put']) }}



                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" placeholder="">
                                    <p class="help-block">Ex. Web Design for Prestige Worldwide</p>
                                </div>
                                <div class="form-group">
                                    <label for="myTags">Skills</label>
                                    <ul id="myTags">
                                        <?php $uskills= $project->skills()->get();
                                        foreach($uskills as $uskill){
                                            echo "<li>". $uskill->name."</li>";
                                        }
                                        ?>                                    </ul>
                                    <p class="help-block">Ex. AutoCAD, PHP, Java</p>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea name="desc" class="form-control">{{$project->description}}</textarea>

                                </div>
                                <div class="form-group">
                                    <label for="start">Start Date</label>
                                    <input type="text" class="form-control" value="{{$project->start_date}}" name="start" id="start" placeholder="">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Associated Files</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Diagrams, Images, PDF...</p>
                                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save changes</button>
                {{Form::close()}}
            </div>

        </div>
    </div>
</div>