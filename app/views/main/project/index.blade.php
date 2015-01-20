<?php
/*$progs = array();
foreach($programs as $program){
$progs[] = $program->ProgramName;
}*/?>
{{ HTML::script('js/ckeditor/ckeditor.js') }}
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<style>

</style>
 <script>
  $(function() {
    var availableTags = <?php //echo json_encode($progs); ?>;
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
  <div class="panel-body">
      1
  </div>
</div>
</div>




</div>