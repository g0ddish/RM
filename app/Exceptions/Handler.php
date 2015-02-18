<?php namespace ResearchMonster\Exceptions;

use Exception;
use Session;
use Redirect;
use Input;
use Sentry;
use Mail;
use ResearchMonster\Models\User;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Cartalyst\Sentry\Users\UserExistsException ;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException'
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        if ($e instanceof UserNotFoundException && Input::has('register') && Input::has('id') && Input::has('email')) {
            $id = Input::get('id');
            $email = Input::get('email');
            if (is_numeric($id) && strlen($id) == 9) {
                $usertest1 = User::where('email', $email)->first();
                $usertest2 = User::where('student_id', $id)->first();
                if (count($usertest1) == 0 && count($usertest2) == 0) {

                    $pass = str_random(8);
                    $user = Sentry::createUser(array(
                        'student_id' => $id,
                        'email' => $email,
                        'password' => $pass,
                        'activated' => true,
                    ));
                    Mail::send('emails.welcome', array('id' => Input::get('id'), 'pass' => $pass), function ($message) {
                        $email = Input::get('email');
                        $message->from('no-reply@georgebrown.ca', 'Research Monster');
                        $message->to($email)->subject('Welcome!');
                    });

                    return Redirect::to('/')->with('message', 'Registered successfully, a password has been email to you.');
                } else {

                    return Redirect::to('/register')->with('message', 'Malformed info');
                }
            } elseif ($e instanceof UserExistsException) {
                return Redirect::to('/')->with('message', 'User with this login already exists.');
            } elseif ($e instanceof UserNotFoundException) {
                return Redirect::to('/')->with('message', 'Incorrect info');
            } else {
                return parent::report($e);
            }
        }

    }
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($this->isHttpException($e)) {
            return $this->renderHttpException($e);
        } else {
            if ($e instanceof UserNotFoundException && Input::has('register') && Input::has('id') && Input::has('email')) {
                $id = Input::get('id');
                $email = Input::get('email');
                if (is_numeric($id) && strlen($id) == 9) {
                    $usertest1 = User::where('email', $email)->first();
                    $usertest2 = User::where('student_id', $id)->first();
                    if (count($usertest1) == 0 && count($usertest2) == 0) {

                        $pass = str_random(8);
                        $user = Sentry::createUser(array(
                            'student_id' => $id,
                            'email' => $email,
                            'password' => $pass,
                            'activated' => true,
                        ));
                        Mail::send('emails.welcome', array('id' => Input::get('id'), 'pass' => $pass), function ($message) {
                            $email = Input::get('email');
                            $message->from('no-reply@georgebrown.ca', 'Research Monster');
                            $message->to($email)->subject('Welcome!');
                        });

                        return Redirect::to('/')->with('message', 'Registered successfully, a password has been email to you.');
                    } else {

                        return Redirect::to('/register')->with('message', 'Malformed info');
                    }
                } elseif ($e instanceof UserExistsException) {
                    return Redirect::to('/')->with('message', 'User with this login already exists.');
                } elseif ($e instanceof UserNotFoundException) {
                    return Redirect::to('/')->with('message', 'Incorrect info');
                } else {
                    return parent::render($request, $e);
                }
            }

        }
    }
}
