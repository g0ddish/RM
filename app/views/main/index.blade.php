<div class="col-md-12" style="background-color: #55AA55; padding-top:60px;"><?php $user = Sentry::getUser();
            if(!isset($user->first_name) && !isset($user->last_name) && !isset($user->email) && !isset($user->avatar)):
        ;?>
   {{ "<div class='alert alert-warning'>You haven't filled out all of your profile yet. <a href='./profile/edit'>Do that here.</a></div>" }}
   <?php endif; ?>
            {{ Session::get('message')}}

   <div class="col-md-9">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="list-group">
                 <a href="#" class="list-group-item">
                       <h4 class="list-group-item-heading">PHP Research Project</h4>
                      <p class="list-group-item-text">
<img src="http://placehold.it/256x256">

                    </p>
                </a>
              <a href="#" class="list-group-item">
                   <h4 class="list-group-item-heading">PHP Research Project</h4>
                    <p class="list-group-item-text">
<img src="http://placehold.it/256x256">

                   </p>
               </a>
               <a href="#" class="list-group-item">
                                  <h4 class="list-group-item-heading">PHP Research Project</h4>
                                   <p class="list-group-item-text">
<img src="http://placehold.it/256x256">

                                  </p>
                              </a>


            </div>
         </div>
      </div>
   </div>
   <div class="col-md-3">
      <div class="panel panel-success">
         <div class="panel-heading">
            <h3 class="panel-title">Project Tags</h3>
         </div>
         <div class="panel-body">
            <div class="list-group">
               <a href="#" class="list-group-item active">
               PHP
               </a>
               <a href="#" class="list-group-item">C#</a>
               <a href="#" class="list-group-item">Balsamiq</a>
               <a href="#" class="list-group-item">AutoCAD</a>
               <a href="#" class="list-group-item">SQL</a>
               <a href="#" class="list-group-item">More...</a>
            </div>
         </div>
      </div>
   </div>
</div>