<!-- Delete User Group Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="deleteModalLabel">Delete Group</h4>
      </div>
      {!! Form::open(array('url' => 'control/groups')) !!}
      <div class="modal-footer">
         <input type="hidden" id="deleteid" class="deleteid" name="delid"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Edit User Group Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="editModalLabel">Modal title</h4>
      </div>
      {!! Form::open(array('url' => 'control/groups')) !!}
      <div class="modal-body">

                  <div class="form-group">
                    <label for="groupname">Group Name</label>
                    <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Enter Group Name">
                    <input type="hidden" id="groupnameedit" class="edit-field" name="editid"/>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adminmenu"> Admin Menu
                    </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="crudprojects"> Add/Edit Projects
                      </label>
                  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>


<!-- Add User Group Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      {!! Form::open(array('url' => 'control/groups')) !!}
      <div class="modal-body">

          <div class="form-group">
            <label for="groupname">Group Name</label>
            <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Enter Group Name">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="adminmenu"> Admin Menu
            </label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>
 <script>
 $(function() {
     $(".edit-btn").click(function() {
            $("#editModalLabel").text("Edit Group " + ($(this).val()));
         $("#editModal").modal({
             show: true
         });
         $(".edit-field").val($(this).val());
         $("#groupname").val($(this).val());
     });

      $(".delete-btn").click(function() {
       $("#deleteModalLabel").text("Delete Group " + ($(this).val()));
              $("#deleteModal").modal({
                  show: true
              });
              $(".deleteid").val($(this).val());
          });

 });
  </script>
  <div class="col-md-2" style="padding-top:60px; padding-bottom: 10px;"><a href="./" class="btn btn-block btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Admin Panel</a></div>
<div class="col-md-2 pull-right" style="padding-top:60px; padding-bottom: 10px;"><a  data-toggle="modal" data-target="#myModal" class="btn btn-block btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Add New Group</a></div>
<div class="col-md-12">
<p>
<?php  if(isset($group)){ echo "<div class='alert alert-success'>New group created successfully!";}?>
</p>
<table class="table">
  <tr>
    <td class="active">Name</td>
    <td class="active">Permissions</td>
    <td class="active">Created At</td>
    <td class="active">Updated At</td>
    <td class="active">Modify</td>
  </tr><?php if(isset($groups)): foreach($groups as $grp):?>
    <tr>
      <td class="active"><?php echo $grp->name;?></td>
      <td class="active"><?php foreach($grp->permissions as $permissionname => $permissionvalue){ echo $permissionname.": ".$permissionvalue." "; }?></td>
      <td class="active"><?php echo $grp->created_at;?></td>
      <td class="active"><?php echo $grp->updated_at;?></td>
      <td class="active"><button value="<?php echo $grp->name;?>" id="" class="btn btn-default edit-btn">Edit</button>
       <button value="<?php echo $grp->name;?>" class="btn btn-warning delete-btn" style="margin-left: 5px;">Delete</button></td>
    </tr><?php endforeach; endif;?>
</table>

</div>