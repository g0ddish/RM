<?php $user = Sentry::getUser(); ?>
{!! HTML::script('js/tag-it.js') !!}
{!! HTML::style('css/jquery.tagit.css') !!}
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<script>
    <?php
    foreach($skills as $skill){
       $array[] = $skill->name;
    }
    ?>
    $( document ).ready(function() {
                    $( "#datepicker" ).datepicker();
        $("#myTags").tagit({
            autocomplete: {delay: 0, minLength: 0},
            availableTags: {!! json_encode($array)  !!},
            fieldName: "skills[]"
        });
    });

</script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"  style="">
                <h4 class="modal-title" id="myModalLabel">Edit Project</h4>
                {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}

                <button type="submit"name="id" style="" value="{{$project->id}}" class="btn pull-right btn-danger">Remove project</button>
                {!!Form::close()!!}


            </div>

            <div class="modal-body">
                {!! Form::open(['route' => ['projects.update', $project->id], 'method' => 'put', 'files' => true]) !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{!!$project->title!!}" placeholder="">
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
                    <textarea name="desc" class="form-control">{!! $project->description !!}</textarea>

                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1">Open</option>
                        <option value="2">Closed</option>
                        <option value="3">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="start">Start Date</label>
                    <input type="text" class="form-control" value="{!! date('Y-m-d', $project->start_date) !!}" name="start" id="datepicker" placeholder="">

                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Associated Files</label>
                    {!!  Form::file('pfile')     !!}
                    <p class="help-block">Diagrams, Images, PDF...</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save changes</button>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
    </div>

<div class="container" style=" padding-top:60px;"><?php
            if(!isset($user->first_name) && !isset($user->last_name) && !isset($user->email) && !isset($user->avatar)):
        ;?>
   {!! "<div class='alert alert-warning'>You haven't filled out all of your profile yet. <a href='./profile/edit'>Do that here.</a></div>" !!}
   <?php endif; ?>
            {!! Session::get('message') !!}
   <div class="col-md-12">
                     <?php
                     if($project->status_id == 1){
                         echo "<div class='alert alert-info' role='alert'>This project is currently looking for people; you may apply below.</div>";
                     }else if($project->status_id == 2){
                         echo "<div class='alert alert-danger' role='alert'>This project is currently closed; you will be unable to apply.</div>";

                     }else if($project->status_id == 3){
                         echo "<div class='alert alert-success' role='alert'>This project has already been successfully filled; you will be unable to apply.</div>";

                     }   ?>


                 <div class="panel panel-default event">
                     <div class="panel-body">
                         <div class="rsvp col-xs-2 col-sm-2">
                             <i> {!! date("j", $project->start_date)  !!}</i>
                             <i> {!! date("F", $project->start_date)  !!}</i>
                             <div class="hidden-xs">
                                 Deadline
                             </div>
                         </div>
                         <div class="info col-xs-8 col-sm-7">
                             {!! str_limit($project->title, 35) !!}
                             <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
                             <div class="hidden-xs">
                                 <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation" class="active"><a aria-controls="desc-" role="tab">Description</a></li>
                                 </ul>
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-">
                                         {!! $project->description !!}
                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-"></div>
                                 </div> <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation"><a href="#skills-" aria-controls="skills-" role="tab">Skills</a></li>
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="desc-">
                                         <?php foreach ($project->skills as $skill): ?>
                                             <p class="label label-success">{!! $skill->name !!}</p>
                                         <?php endforeach; ?>
                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="skills-">

                                     </div>

                                 </div>

                                 <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation" class="active"><a aria-controls="desc-" role="tab">Files</a></li>
                                 </ul>
                                 <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" style="height: auto;" id="desc-">
                                             <?php     foreach ($project->files as $pfile){
                                         $types = explode("/", $pfile->file_type);
                                                    switch($types[0]){
                                                        case "application":
                                                            switch($types[1]){
                                                                case "pdf":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<div class='col-md-12'><div class='  embed-responsive embed-responsive-16by9'> <iframe class='embed-responsive-item' src = '$link' allowfullscreen webkitallowfullscreen></iframe></div></div>";
                                                                    echo "<div style='position: relative;' class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download PDF</p></div></div>";
                                                                    break;
                                                                case "msword":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src='$link' allowfullscreen webkitallowfullscreen></iframe>";
                                                                    echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Word Document</p></div></div>";
                                                                    break;
                                                                case "vnd.android.package-archive":  //Apk

                                                                    echo HTML::link($pfile->file_location, "Dowload APK", array('id' => 'linkid','download' => $pfile->file_name));

                                                                    break;
                                                                case "json":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<pre>$data</pre>";
                                                                    break;
                                                                case "x-msaccess":
                                                                    break;
                                                                case "vnd.ms-excel":
                                                                    echo HTML::link($pfile->file_location, "Dowload Excel", array('id' => 'linkid','download' => $pfile->file_name));
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src='$link' allowfullscreen webkitallowfullscreen></iframe>";

                                                                    break;
                                                                case "vnd.ms-powerpoint":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src='$link' allowfullscreen webkitallowfullscreen></iframe>";
                                                                     echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download PowerPoint</p></div></div>";
                                                                    break;
                                                                case "vnd.ms-project":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item'  src = '$link' allowfullscreen webkitallowfullscreen></iframe>";

                                                                    break;
                                                                case "x-mspublisher":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src = '$link' allowfullscreen webkitallowfullscreen></iframe>";

                                                                    break;
                                                                case "vnd.visio":
                                                                    break;
                                                                case "vnd.oasis.opendocument.presentation":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src = '$link' allowfullscreen webkitallowfullscreen></iframe>";
                                                                    break;
                                                                case "vnd.oasis.opendocument.spreadsheet":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src = '$link' allowfullscreen webkitallowfullscreen></iframe>";
                                                                    break;
                                                                case "vnd.oasis.opendocument.text":
                                                                    $link = "http://docs.google.com/gview?url=".URL::to('/')."/". $pfile->file_location."&embedded=true";
                                                                    echo "<iframe class='embed-responsive-item' src = '$link' allowfullscreen webkitallowfullscreen></iframe>";
                                                                    break;
                                                                case "x-rar":
                                                                    echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Rar</p></div></div>";
                                                                    break;
                                                                case "x-tar":
                                                                    echo HTML::link($pfile->file_location, "Dowload Tar", array('id' => 'linkid','download' => $pfile->file_name));
                                                                    break;
                                                                case "vnd.wordperfect":
                                                                    break;
                                                                case "xml":
                                                                    break;
                                                                case "zip":
                                                                    echo "<div class='panel panel-default center-block text-center '><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Zip</p></div></div>";
                                                                    break;
                                                            }
                                                            break;
                                                        case "image":
                                                            switch($types[1]){
                                                                case "jpeg":
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                   echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                                case "png":
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                    echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                   echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                   echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                                case "gif":
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                               echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                               echo "<p>Download Image</p></div></div>";


                                                                    break;
                                                                case 'tga':
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                       echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                      echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                      echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                                case 'tif':
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                    echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                   echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                   echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                                case 'bmp':
                                                                    echo HTML::image($pfile->file_location, 'a picture', array('class' => 'img-responsive'));
                                                                     echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                            }
                                                            break;
                                                        case "text":
                                                            switch($types[1]){
                                                                case "css":
                                                                    echo HTML::link($pfile->file_location, "Dowload CSS", array('id' => 'linkid','download' => $pfile->file_name));
                                                                    $data = file_get_contents(base_path()."/".$pfile->file_location);
                                                                    echo "<pre>$data </pre>";
                                                                    break;
                                                                case "richtext":
                                                                    echo HTML::link($pfile->file_location, "Dowload Rich Text", array('id' => 'linkid','download' => $pfile->file_name));
                                                                    $data = file_get_contents(base_path()."/".$pfile->file_location);
                                                                    echo "<pre>$data </pre>";
                                                                    break;
                                                                case "plain":
                                                                    $data = file_get_contents(base_path()."/".$pfile->file_location);
                                                                    echo "<pre>".  str_limit($data, 400)."</pre>";
                                                                     echo "<div class='panel panel-default center-block text-center'><div class='panel-body' style='background-color: #cccccc; border-color: white; color: #009926'>";
                                                                    echo "<a class='text-center' href='". asset($pfile->file_location) ."' download='$pfile->file_location'>".HTML::image('img/download.png', 'a picture', array( 'style' => 'max-height:100px; max-width:100px;'))."</a>";
                                                                    echo "<p>Download Image</p></div></div>";

                                                                    break;
                                                                case 'yaml':
                                                                    break;
                                                            }
                                                            break;
                                                    }
                                         }   ?>
                                           </div>
                                     <div role='tabpanel' class='tab-pane' id='skills-'></div>
                                 </div>
                             </div>
                      </div>
                         </div>
                 </div>
                                  <?php       if($user->hasProjectCRUDPermission()){
                             echo "  <div class='col-md-2 pull-right'>
             <button data-toggle='modal' data-target='#myModal' class='btn btn-block btn-warning'>Edit</button>
                </div>";
                         }else{
                             $test = $project->interestedUsers;
                             foreach($test as $object){
                                 if($object instanceof User){
                                     if($object->id == $user->id){
                                         $already = true;
                                     }}
                             }
                             if($project->status_id == 1 && !isset($already)){
                             echo "<div class='col-md-2 pull-right'>Form::open(['route' => ['projects.update', $project->id], 'method' => 'put'])<button type='submit' name='interested' value='$project->id' class='btn btn-block btn-lg btn-success'>I'm Interested</button>
Form::close()</div>";
                         }elseif(isset($already)){
                                 echo " <div class='col-md-2 pull-right'>You've applied for this project already.</div>";
                             }
                             } ?>
</div>
</div>
