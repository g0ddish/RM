{{ HTML::script('js/ckeditor/ckeditor.js') }}

<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Basic Info</h3>
  </div>
  <div class="panel-body">
   <form role="form">
     <div class="form-group">
       <label for="exampleInputEmail1">Email address</label>
       <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Password</label>
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
     </div>
     <div class="form-group">
       <label for="exampleInputFile">File input</label>
       <input type="file" id="exampleInputFile">
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
  <div class="panel-body">
<textarea class="ckeditor" name="editor1"></textarea>
  </div>
</div>
</div>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Experience</h3>
  </div>
  <div class="panel-body">
<textarea class="ckeditor" name="editor1"></textarea>
  </div>
</div>
</div>
</div>