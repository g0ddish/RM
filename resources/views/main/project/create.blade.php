{!! HTML::script('js/tag-it.js') !!}
{!! HTML::style('css/jquery.tagit.css') !!}

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
            availableTags: {!! json_encode($array)  !!},
            fieldName: "skills[]"
        });
    });

</script>
<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Create Project</h3>
  </div>
  <div class="panel-body">
      {!! Form::open(array('url' => 'projects', 'files' => true)) !!}
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="">
              <p class="help-block">Ex. Web Design for Prestige Worldwide</p>
          </div>
          <div class="form-group">
              <label for="myTags">Skills</label>
              <ul id="myTags">
                  <!-- Existing list items will be pre-added to the tags -->
              </ul>
              <p class="help-block">Ex. AutoCAD, PHP, Java</p>
          </div>
          <div class="form-group">
              <label for="desc">Description</label>
                    <textarea name="desc" class="form-control"></textarea>

          </div>
      <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" id="status" name="status">
              <option value="1">Open</option>
              <option value="2">Closed</option>
          </select>
      </div>
      <div class="form-group">
          <label for="start">Start Date</label>
          <input type="text" class="form-control" name="start" id="start" placeholder="">

      </div>
          <div class="form-group">
              <label for="exampleInputFile">Associated Files</label>
              <input type="file" name="file" id="exampleInputFile">
              <p class="help-block">Diagrams, Images, PDF...</p>
          </div>
          <button type="submit" class="btn btn-success btn-lg">List My Project</button>
          {!! Form::close() !!}
  </div>
</div>
</div>




</div>