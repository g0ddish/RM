<!-- Delete User Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="deleteModalLabel">Delete User</h4>
      </div>
      {{ Form::open(array('url' => 'control/users')) }}
      <div class="modal-footer">
         <input type="hidden" id="deleteid" class="deleteid" name="delid"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="editModalLabel">Modal title</h4>
      </div>
      {{ Form::open(array('url' => 'control/users')) }}
      <div class="modal-body">
  <div class="form-group">
          <label for="sid">Student ID*</label> <input type="text" class="form-control" id="sid"
          name="sid" placeholder="Enter Student ID" />
        </div>

        <div class="form-group">
          <label for="email">Email*</label> <input type="email" class="form-control" id="email"
          name="email" placeholder="Enter Email" />
        </div>

        <div class="form-group">
          <label for="pass">Password*</label> <input type="password" class="form-control" id="pass"
          name="pass" placeholder="Enter Password" />
        </div>

        <div class="form-group">
          <label for="fname">First Name</label> <input type="text" class="form-control" id="fname"
          name="fname" placeholder="Enter First Name" />
        </div>

        <div class="form-group">
          <label for="lname">Last Name</label> <input type="text" class="form-control" id="lname"
          name="lname" placeholder="Enter Last Name" />
    <input type="hidden" class="edit-field" id="edit-field" name="edit-field">

        </div>
            <?php $groups = Sentry::findAllGroups();
            foreach($groups as $group):
            ?>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="permissions[<?php echo $group->id ?>]"> <?php echo $group->name ?>
            </label>
          </div>

          <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>


<!-- Add User Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      {{ Form::open(array('url' => 'control/users')) }}
      <div class="modal-body">

        <div class="form-group">
          <label for="sid">Student ID*</label> <input type="text" class="form-control" id="sid"
          name="sid" placeholder="Enter Student ID" />
        </div>

        <div class="form-group">
          <label for="email">Email*</label> <input type="email" class="form-control" id="email"
          name="email" placeholder="Enter Email" />
        </div>

        <div class="form-group">
          <label for="pass">Password*</label> <input type="password" class="form-control" id="pass"
          name="pass" placeholder="Enter Password" />
        </div>

        <div class="form-group">
          <label for="fname">First Name</label> <input type="text" class="form-control" id="fname"
          name="fname" placeholder="Enter First Name" />
        </div>

        <div class="form-group">
          <label for="lname">Last Name</label> <input type="text" class="form-control" id="lname"
          name="lname" placeholder="Enter Last Name" />
        </div>
            <?php $groups = Sentry::findAllGroups();
            foreach($groups as $group):
            ?>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="permissions[<?php echo $group->id ?>]"> <?php echo $group->name ?>
            </label>
          </div>

          <?php endforeach; ?>
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
            $("#editModalLabel").text("Edit User " + ($(this).val()));
         $("#editModal").modal({
             show: true
         });
         $("#edit-field").val($(this).val());
         $("#sid").val($("."+$(this).val() + "-sid").html());
         $("#email").val($("."+$(this).val() + "-em").html());
         $("#fname").val($("."+$(this).val() + "-fn").html());
         $("#lname").val($("."+$(this).val() + "-ln").html());
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
<div class="col-md-2 pull-right" style="padding-top:60px; padding-bottom: 10px;"><a  data-toggle="modal" data-target="#myModal" class="btn btn-block btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Add New User</a></div>
<div class="col-md-12">
<p>
<?php  if(isset($newuser)){ echo "<div class='alert alert-success'>New group created successfully!";}?>
</p>
<table class="table">
  <tr>
    <td class="active">ID</td>
    <td class="active">Student ID</td>
    <td class="active">First Name</td>
    <td class="active">Last Name</td>
    <td class="active">Email</td>
    <td class="active">Avatar</td>
    <td class="active">Permissions</td>
    <td class="active">Last Login</td>
    <td class="active">Created At</td>
    <td class="active">Updated At</td>
    <td class="active">Modify</td>
  </tr><?php if(isset($users)): foreach($users as $user):?>
    <tr>
      <td class="active <?php echo $user->id;?>-id"><?php echo $user->id;?></td>
      <td class="active <?php echo $user->id;?>-sid"><?php echo $user->student_id;?></td>
      <td class="active <?php echo $user->id;?>-fn"><?php echo $user->first_name;?></td>
            <td class="active <?php echo $user->id;?>-ln"><?php echo $user->last_name;?></td>
       <td class="active <?php echo $user->id;?>-em"><?php echo $user->email;?></td>
            <td class="active s-a"><?php echo $user->avatar;?></td>
            <td class="active"><?php
             foreach($user->getGroups() as $grp){
             echo "<p><span class='label label-default'>". $grp->name. "</span></p><br>";
             }
            ?></td>
                  <td class="active"><?php echo $user->last_login;?></td>


      <td class="active"><?php echo $user->created_at;?></td>
      <td class="active"><?php echo $user->updated_at;?></td>
      <td class="active"><p><button value="<?php echo $user->id;?>" id="" class="btn btn-default edit-btn">Edit</button></p>
       <p><button value="<?php echo $user->id;?>" class="btn btn-warning delete-btn" style="">Delete</button></p></td>
    </tr><?php endforeach; endif;?>
</table>

</div>