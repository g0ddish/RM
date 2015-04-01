<?php $user = Sentry::getUser(); ?>


            {!! Session::get('message') !!}
   <div class="col-md-12">
      <div class="panel panel-default" style="margin-top: 60px;">
         <div class="panel-body">

        <?php $myprojects = $user->ownedProjects()->get();


                 foreach($myprojects as $project){
                     $interestedusers = $project->interestedUsers()->get();

                     echo $project->title . " has " . count($interestedusers) . " interested users.";

                     echo "<table class='table table-striped'>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th></th>
                                <th>Action</th>
                              </tr>";

                     foreach($interestedusers as $iuser){
                         $applicantrow = DB::table('project_user')->where('user_id', $iuser->id)->where('project_id', $project->id)->first();


                         echo " <tr class=''>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->student_id</a></td>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->first_name $iuser->last_name</a></td>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->email</a></td>";
                        echo "<td>";
                         if($applicantrow->status == 1){
                             echo "<span style='font-size: x-large' class='glyphicon glyphicon-ok text-success' aria-hidden='true'></span>";
                         }elseif($applicantrow->status == 2){
                             echo "<span  style='font-size: x-large' class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></span>";
                         }
                         echo "</td>";
                         echo "<td>";

                         echo "
                                <form style='margin: 0; padding: 0; display: inline' method='post'>
                                <button class='btn btn-success' type='submit' value='1' name='accept'>Accept</button>
                                <input type='hidden' name='project-id' value='$project->id' />
                                <input type='hidden' name='iuser-id' value='$iuser->id' />
                                </form>
                                <form style=' display: inline' method='post'>
                                <button class='btn btn-danger' type='submit' value='1' name='deny'>Deny</button>
                                <input type='hidden' name='project-id' value='$project->id' />
                                <input type='hidden' name='iuser-id' value='$iuser->id' />
                                </form>
                                </td>";
                         echo"  </tr>";

                     }
                        echo"    </table>";

                 }

             ?>



      </div>
   </div>

</div>


