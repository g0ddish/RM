<div class="col-md-12" style="height: 50%; background-color: #55AA55;">
<div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
  <div class="panel" style="padding: 13px;">
   {{ Form::open(array('action' => 'RegisterController@store')) }}
   <div class="form-group">
    <label for="id">Student ID</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID">
   </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
   </div>
   <button type="submit" class="btn btn-default">Register</button>
   </form>
  </div>
  </div>
</div>
<div class="col-md-12" style="height: 50%; background-color: #116611;">

</div>
