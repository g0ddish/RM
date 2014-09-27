<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">
<div class="col-md-3">
 <img height="256" width="256" src="{{asset('img/avatars/10633980_566385213488545_6934520668813179828_o.jpg')}}"/>
</div>
<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Basic Info</h3>
  </div>
  <div class="panel-body">
  <p><h3><span class="label label-default"><?php echo $user->first_name . " " . $user->last_name; ?></span></h3></p>
   <?php
   $groups = $user->getGroups();
   foreach($groups as $group):
    ?>
    <span class="label label-primary"><?php echo $group->name; ?></span>

<?php endforeach; ?>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Past Projects</h3>
  </div>
  <div class="panel-body">
    None
  </div>
</div>
</div>
<div class="col-md-12" style="margin-top:5px;">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Summary</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Skills</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Experience</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>
</div>