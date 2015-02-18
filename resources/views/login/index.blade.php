<?php if(isset($message)){
        $message = "<div class='alert alert-warning'>".$message."</div>";
    }
    ?>
<div class="col-md-12" style="height: 100%; background-color: #55AA55;">
<div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
    <img class="img-responsive center-block" style="max-height: 300px;" src="{{asset('img/monsters/login2.png')}}" alt="Monster 1" />
    <div class="panel panel-default">
    <div class="panel-body">
{!! Form::open(array('action' => 'LoginController@store')) !!}
   <div class="form-group">
     <label for="id">Student ID</label>
     <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID">
   </div>
   <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
       <input type="hidden" name="login" value="1">
   </div>
   <div class="checkbox">
     <label>
       <input type="checkbox"> Remember me
     </label>
   </div>
        {!! $message or '' !!}
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
 </div>
  </div>
</div>
</div>

