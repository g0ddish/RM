<style>.panel-body .btn:not(.btn-block) { width:140px;height:75px;margin-bottom:10px; }</style>
<div class="col-md-12" style="padding-top:60px;">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-th"></span> Admin Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                            <div class="row">
                          <a href="<?php echo action('AdminController@show', 'users');?>" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-wrench"></span> <br/>Manage Users</a>
                          </div>
                            <div class="row">
                                <a href="<?php echo action('AdminController@show', 'groups');?>" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-th-large"></span><span class="glyphicon glyphicon-wrench"></span> <br/>Manage Groups</a>
                            </div>
                            <div class="row">
                                <a href="<?php echo action('AdminController@show', 'tags');?>" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span><span class="glyphicon glyphicon-wrench"></span> <br/>Manage Tags</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>