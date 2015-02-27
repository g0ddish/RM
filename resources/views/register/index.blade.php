<?php if(isset($message)){
    $message = "<div class='alert alert-warning'>".$message."</div>";
}
?>
<div class="col-md-12" style="">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
        <img class="img-responsive center-block" style="max-height: 200px;" src="{{asset('img/monsters/pinkmonbig.png')}}" alt="Monster 1" />
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('action' => 'RegisterController@store')) !!}
                <div class="form-group">
                    <label for="id">Student ID</label>
                    <input type="text" class="form-control" maxlength="9" id="id" name="id" placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                    <input type="hidden" name="register" value="1">
                </div>
                {!! $message or '' !!}
                <button type="submit" class="btn btn-block btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>


