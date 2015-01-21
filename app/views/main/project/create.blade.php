<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Create Project</h3>
  </div>
  <div class="panel-body">
      {{ Form::open(array('url' => 'project/store')) }}
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label for="skills">Skills</label>
              <input type="text" class="form-control" id="skills" placeholder="Required Skills">
          </div>
          <div class="form-group">
              <label for="desc">Description</label>
              <textarea name="desc" id="desc" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputFile">Associated Files</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Diagrams, Images, PDF...</p>
          </div>
          <button type="submit" class="btn btn-success btn-lg">List My Project</button>
          {{ Form::close() }}
  </div>
</div>
</div>




</div>