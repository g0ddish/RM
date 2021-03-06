{!! HTML::script('js/tag-it.js') !!}
{!! HTML::style('css/jquery.tagit.css') !!}
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<script>
    <?php
    foreach($skills as $skill => $val){
       $array[] = $val->name;
    }
    ?>
    $( document ).ready(function() {
        $("#myTags").tagit({
            autocomplete: {delay: 0, minLength: 0},
            availableTags: {!! json_encode($array)  !!},
            fieldName: "skills[]"
        });

        $(".extra-course").click(function () {
                $(".course-container").append("<div style='margin-top: 10px;' class='col-md-6'><input type='text' class='form-control' id='' name='course[]' placeholder='Course Name'></div>"+
            "<div class='col-md-6'><input  style='margin-top: 10px;'  type='text' class='form-control' id='' name='prof[]' placeholder='Professors Name'></div>");
        });

    });
</script>
<?php
$progs = array();
foreach($programs as $program){
$progs[] = $program->ProgramName;
}?>
{!! HTML::script('js/ckeditor/ckeditor.js') !!}
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<style>

</style>
 <script>
  $(function() {
    var availableTags = <?php echo json_encode($progs); ?>;
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
<div class="col-md-12" style=" padding-top:60px;">

<div class="col-md-6 col-md-offset-3">
    <?php if(isset($firstLogin)){
                echo "<div class='alert alert-warning'> $firstLogin </div>";
            }
    ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Basic Info</h3>
  </div>
  <div class="panel-body"><?php// var_dump($programs[0]); ?>
   <div class="form-group">
          <label for="sid">Student ID</label>
          <p id="sid"><?php echo $user->student_id; ?></p>
          </div>
      {!! Form::open(array('url' => 'profile/edit', 'files' => true)) !!}
   <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" value="<?php echo $user->first_name; ?>" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
        </div>
           <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" value="<?php echo $user->last_name; ?>" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank for unchanged">
      </div>
        <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" value="<?php echo $user->email; ?>" id="email" name="email" placeholder="Enter Email">
             </div>
       <div class="form-group" style="">
          <label for="tags" style="display: block;">Program</label>
           <input class="form-control" style="margin-top: 10px" name="program" id="tags" value="<?php $prgs= $user->programs()->get();
           foreach($prgs as $program){
                 echo $program->ProgramName;
           }
           ?>" placeholder="Leave blank for unchanged">
        </div>


     <div class="form-group">
         <label for="photo">Avatar</label>
         {!! HTML::image($user->avatar, 'avatar', array('class' => 'img-responsive', 'style' => 'max-width:200px; max-height:200px;')) !!}
            <div style="margin-top: 20px"> {!! Form::file('photo') !!} </div>
     </div>
      <div class="form-group">
          <label for="myTags">Skills</label>
          <ul id="myTags">
              <?php $uskills= $user->skills()->get();
              foreach($uskills as $uskill){
                  echo "<li>". $uskill->name."</li>";
                }
              ?>
          </ul>
          <p class="help-block">Ex. AutoCAD, PHP, Java</p>
      </div>
      <div class="form-group">

          <label for="">Relevant Courses</label>
            <div class="container-fluid course-container">
                <?php

                if(json_decode($user->courses) != null){

                foreach(json_decode($user->courses) as $course => $prof){
               // var_dump($prof);
             //       var_dump($course);
                   //die;
                   echo "<div class='col-md-6'>
             <input type='text' class='form-control' id='' name='course[]' value='$course' placeholder='Course Name'>
         </div>";
               echo "   <div class='col-md-6'>
         <input type='text' class='form-control' id='' name='prof[]' value='$prof' placeholder='Professors Name'>
         </div>";


                }
                    }
                ?>
          <div class="col-md-6">
              <input type="text" class="form-control" id="" name="course[]" placeholder="Course Name">
          </div>
              <div class="col-md-6">
          <input type="text" class="form-control" id="" name="prof[]" placeholder="Professors Name">
          </div>
            </div>
          <a class="btn btn-success extra-course"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          </a>
          </div>

  </div>
</div>
</div>


<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 style="" class="panel-title">Resume</h3>
  </div>
  <div class="panel-body">
<textarea class="ckeditor" name="editor1">{!!$user->summary!!}</textarea>
  </div>
</div>
</div>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Experience</h3>
  </div>
  <div class="panel-body">
<textarea class="ckeditor" name="editor2">{!!$user->experience!!}</textarea>
<button style="margin-top: 30px" class="btn btn-lg btn-block btn-success" type="submit">Save</button>
{!! Form::close() !!}
  </div>
</div>
</div>


</div>