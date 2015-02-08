<style>.panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }</style>
<div class="col-md-12" style="padding-top:60px;">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-dashboard"></span> Admin Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <a href="<?php echo action('AdminController@show', 'users');?>" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
                          <a href="<?php echo action('AdminController@show', 'groups');?>" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Groups</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>