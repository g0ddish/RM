<div class="col-md-12" style="height: 50%; background-color: #55AA55;">
<div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
  <div class="panel" style="padding: 13px;">
  <?php
  if (Input::has('id') && Input::has('email'))
  {
      try
      {
          $user = Sentry::findUserByCredentials(array(
              'student_id'      => Input::get('id')
          ));
          echo "ID Taken";
      }
      catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
      {
          $pass = str_random(8);
          try
          {
              $user = Sentry::createUser(array(
                  'student_id'     => Input::get('id'),
                  'email' => Input::get('email'),
                  'password'  => $pass,
                  'activated' => true,
              ));
          }
          catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
          {
              echo 'Login field is required.';
          }
          catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
          {
              echo 'Password field is required.';
          }
          catch (Cartalyst\Sentry\Users\UserExistsException $e)
          {
              echo 'User with this login already exists.';
          }
          Mail::send('emails.welcome', array('id' => Input::get('id'), 'pass' => $pass), function ($message) {
              $email = Input::get('email');
              $message->from('no-reply@georgebrown.ca', 'Research Monster');
              $message->to($email);
          });
      }
  }

      ?>
  </div>
  </div>
</div>
<div class="col-md-12" style="height: 50%; background-color: #116611;">

</div>
