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
                              </tr>";

                     foreach($interestedusers as $iuser){
                        echo " <tr>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->student_id</a></td>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->first_name $iuser->last_name</a></td>";
                         echo "<td><a href='./profile/$iuser->student_id'>$iuser->email</a></td>";
                         echo"  </tr>";

                     }
                        echo"    </table>";

                 }

             ?>



      </div>
   </div>

</div>


