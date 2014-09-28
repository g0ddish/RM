<?php
$progs = array();
foreach($programs as $program){
$progs[] = $program->ProgramName;
}?>
{{ HTML::script('js/ckeditor/ckeditor.js') }}
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
<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Basic Info</h3>
  </div>
  <div class="panel-body"><?php// var_dump($programs[0]); ?>
   <div class="form-group">
          <label for="sid">Student ID</label>
          <p id="sid"><?php echo $user->student_id; ?></p>
          </div>
      {{ Form::open(array('url' => 'profile/edit', 'files' => true)) }}
   <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" value="<?php echo $user->first_name; ?>" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
        </div>
           <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" value="<?php echo $user->last_name; ?>" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                </div>
        <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" value="<?php echo $user->email; ?>" id="email" name="email" placeholder="Enter Email">
             </div>
       <div class="form-group" style="">
          <label for="tags" style="display: block;">Program</label>
          <?php $prgs= $user->programs()->get();

           foreach($prgs as $program){

           ?>
           <div class="checkbox">
               <label>
                 <input type="checkbox" name="del-prog[<?php echo $program->ProgramName;?>]"  value="" > <?php echo $program->ProgramName;?>
               </label>
             </div>
            <?php
           }
           ?>
            <p class="help-block">Checked Programs will be removed.</p>
         <input class="form-control" style="" name="program" id="tags">
        </div>


     <div class="form-group">
       <div class="col-md-12">
       <div class="col-md-4">
       {{ HTML::image($user->avatar, 'avatar', array('class' => 'img-responsive')) }}
       </div>
       </div>
       <label for="photo">File input</label>

        {{ Form::file('photo') }}
       <p class="help-block">Example block-level help text here.</p>
     </div>
     <div class="checkbox">
       <label>
         <input type="checkbox"> Check me out
       </label>
     </div>
     <button type="submit" class="btn btn-default">Submit</button>
   </form>
  </div>
</div>
</div>


<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Summary</h3>
  </div>
  <div class="panel-body">{{ Form::open(array('url' => 'profile/edit')) }}
<textarea class="ckeditor" name="editor1">{{$user->summary}}</textarea>
<button class="btn btn-default" type="submit">Save</button>
{{ Form::close() }}
  </div>
</div>
</div>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Experience</h3>
  </div>
  <div class="panel-body">{{ Form::open(array('url' => 'profile/edit')) }}
<textarea class="ckeditor" name="editor2">{{$user->experience}}</textarea>
<button class="btn btn-default" type="submit">Save</button>
{{ Form::close() }}


  </div>
</div>
</div>


</div>