<?php

namespace App\Http\Controllers;

use Activation;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\FrontendRequest;
use App\Mail\Register;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use File;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mail;
use Redirect;
use Reminder;
use Validator;
use Sentinel;
use URL;
use View;
use stdClass;
use App\Mail\Contact;
use App\Mail\ContactUser;
use App\Mail\ForgotPassword;
use App\Models\Country;
use App\Models\Consultation;
use App\Models\Newsletter;
use App\Models\Institution;
use App\Models\Programme;

class FrontEndController extends JoshController
{

    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = false;

    /**
     * Account sign in.
     *
     * @return View
     */
    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('application');
        }
        // Show the login page
        return view('login');
    }

    /**
     * Account sign in form processing.
     *
     * @return Redirect
     */
    public function postLogin(Request $request)
    {

        try {
            // Try to log the user in
            if ($user=  Sentinel::authenticate($request->only('email', 'password'), $request->get('remember-me', 0))) {
                //Activity log for login
                activity($user->full_name)
                    ->performedOn($user)
                    ->causedBy($user)
                    ->log('LoggedIn');

                return Redirect::route("application")->with('success', trans('auth/message.login.success'));
            } else {
                return redirect('login')->with('error', 'Email or password is incorrect.');
            }
        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_banned'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }
    /** Let user choose an action */
    public function application()
    {
        return view('application');
    }

    /**L
     * get user details and display
     */
    public function myAccount()
    {
        $user = Sentinel::getUser();
        $countries = Country::all();
        $institutions = Institution::orderBy('institution_name', 'ASC')->get();
        $programmes = Programme::select('degree')->orderBy('degree', 'ASC')->distinct()->get();
        $programme_choices = Programme::select('department')->orderBy('department', 'ASC')->distinct()->get();
        $payment_details = Institution::all()->where('institution_name', $user->institution);
        $required_data = array($user->first_name,
                        $user->last_name,
                        $user->email,
                        $user->pic,
                        $user->institution,
                        $user->degree,
                        $user->faculty,
                        $user->department,
                        $user->address,
                        $user->telephone,
                        $user->postal,
                        $user->dob,
                        $user->pob,
                        $user->bio,
                        $user->gender,
                        $user->country,
                        $user->first_language,
                        $user->g_name,
                        $user->g_email,
                        $user->g_telephone,
                        $user->g_occupation,
                        $user->g_address,
                        $user->previous_inst1,
                        $user->previous_inst2,
                        $user->previous_inst3,
                        $user->previous_inst1_from,
                        $user->previous_inst2_from,
                        $user->previous_inst3_from,
                        $user->previous_inst1_to,
                        $user->previous_inst2_to,
                        $user->previous_inst3_to

                        );

        //return dd(count($required_data));
        
        for ($i=0; $i<count($required_data); $i++)
        {   
          $needed = $required_data;
        }
        
        
        return view('user_account', compact('user', 'countries', 'institutions', 'programmes', 'programme_choices', 'payment_details', 'needed'));
    }

    /**
     * update user details and display
     *
     * @param  Request $request
     * @param  User    $user
     * @return Return Redirect
     */
    public function update(FrontendRequest $request)
    {
        $user = Sentinel::getUser();
        $data['myForm'] = $request->all();
        $countries = Country::all();
        $institutions = Institution::orderBy('institution_name', 'ASC')->get();
        $programmes = Programme::select('degree')->orderBy('degree', 'ASC')->distinct()->get();
        $programme_choices = Programme::select('department')->orderBy('department', 'ASC')->distinct()->get();
        $payment_details = Institution::all()->where('institution_name', $user->institution);
        //update values
        $user->update($request->except('password', 'pic', 'password_confirm'));

        if ($password = $request->get('password')) {
            $user->password = Hash::make($password);
        }
        // Upload files
        if ($file = $request->file('pic')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->pic)) {
                File::delete(public_path() . $folderName . $user->pic);
            }
            //save new file path into db
            $user->pic =url('/').'/uploads/users/'.$safeName;
        }
        if ($file = $request->file('doc1')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/documents/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->doc1)) {
                File::delete(public_path() . $folderName . $user->doc1);
            }
            //save new file path into db
            $user->doc1 =url('/').'/uploads/documents/'.$safeName;
        }
        if ($file = $request->file('doc2')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/documents/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->doc2)) {
                File::delete(public_path() . $folderName . $user->doc2);
            }
            //save new file path into db
            $user->doc2 =url('/').'/uploads/documents/'.$safeName;
        }
        if ($file = $request->file('doc3')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/documents/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->doc3)) {
                File::delete(public_path() . $folderName . $user->doc3);
            }
            //save new file path into db
            $user->doc3 =url('/').'/uploads/documents/'.$safeName;
        }
        if ($file = $request->file('doc4')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/documents/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->doc4)) {
                File::delete(public_path() . $folderName . $user->doc4);
            }
            //save new file path into db
            $user->doc4 =url('/').'/uploads/documents/'.$safeName;
        }

        // Was the user updated?
        if ($user->save()) {
            // Prepare the success message
            $success = trans('Application saved');
            //Activity log for update account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('Application saved');
            // Redirect to the user page
            
           // return Redirect::route('my-account')->with(['success' =>  $success, 'data' => $data]);
            //return redirect()->route('confirmation')->with('data', $data);
            return view('user_account', compact('success','user', 'countries', 'institutions', 'programmes', 'programme_choices', 'payment_details'));//->with('success', $success);
        }

        // Prepare the error message
        $error = trans('Application not saved');


        // Redirect to the user page
        return Redirect::route('my-account')->withInput()->with('error', $error);
    }

    public function confirmation(Request $request)
    {
        $data['myForm'] = $request->all();
        return $request->session()->get('data', $data);
    }

    /**
     * Account Register.
     *
     * @return View
     */
    public function getRegister()
    {
        // Show the page
        return view('register');
    }

    /**
     * Account sign up form processing.
     *
     * @return Redirect
     */
    public function postRegister(UserRequest $request)
    {

        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable
        try {
            // Register the user
            $user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password', 'gender']), $activate);
            //add user to 'User' role
            $role = Sentinel::findRoleByName('User');
            $role->users()->attach($user);
            //if you set $activate=false above then user will receive an activation mail
            if (!$activate) {
                // Data to be used on the email view

                $data=[
                    'user_name' => $user->first_name .' '. $user->last_name,
                    'activationUrl' => URL::route('activate', [$user->id, Activation::create($user)->code]),
                ];
                // Send the activation code through email
                Mail::to($user->email)
                    ->send(new Register($data));
                //Redirect to login page
                return redirect('login')->with('success', trans('auth/message.signup.success'));
            }
            // login user automatically
            Sentinel::login($user, false);
            //Activity log for new account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New Account created');
            // Redirect to the home page with success menu
            return Redirect::route("my-account")->with('success', trans('auth/message.signup.success'));
        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param number $userI``d
     * @param string $activationCode
     */
    public function getActivate($userId, $activationCode)
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('application');
        }

        $user = Sentinel::findById($userId);

        if (Activation::complete($user, $activationCode)) {
            // Activation was successfull
            return Redirect::route('login')->with('success', trans('auth/message.activate.success'));
        } else {
            // Activation not found or not completed.
            $error = trans('auth/message.activate.error');
            return Redirect::route('login')->with('error', $error);
        }
    }

    /**
     * Forgot password page.
     *
     * @return View
     */
    public function getForgotPassword()
    {
        // Show the page
        return view('forgotpwd');
    }

    /**
     * Forgot password form processing page.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function postForgotPassword(Request $request)
    {
        $data = new stdClass();
        try {
            // Get the user password recovery code
            $user = Sentinel::findByCredentials(['email' => $request->email]);
            if (!$user) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_email_not_found'));
            }

            $activation = Activation::completed($user);
            if (!$activation) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_activated'));
            }

            $reminder = Reminder::create($user);
            // Data to be used on the email view
            $data->user_name = $user->first_name .' ' .$user->last_name;
            $data->forgotPasswordUrl = URL::route('forgot-password-confirm', [$user->id, $reminder->code]);
            // Send the activation code through email
            Mail::to($user->email)
                ->send(new ForgotPassword($data));
        } catch (UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return back()->with('success', trans('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm(Request $request, $userId, $passwordResetCode = null)
    {
        if (!$user = Sentinel::findById($userId)) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_found'));
        }

        if ( $reminder = Reminder::get($user, $passwordResetCode) && Reminder::exists($user)) {
                return view('forgotpwd-confirm', compact(['userId', 'passwordResetCode']));
        } else {
            return 'does not exists';
        }
    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param  string $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm(PasswordResetRequest $request, $userId, $passwordResetCode = null)
    {

        $user = Sentinel::findById($userId);
        if (!$reminder = Reminder::complete($user, $passwordResetCode, $request->get('password'))) {
            // Ooops.. something went wrong
            return Redirect::route('login')->with('error', trans('auth/message.forgot-password-confirm.error'));
        }

        // Password successfully reseted
        return Redirect::route('login')->with('success', trans('auth/message.forgot-password-confirm.success'));
    }

    /**
     * Contact form processing.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function postContact(Request $request)
    {
        $data = [
            'contact-name' => $request->get('contact-name'),
            'contact-email' => $request->get('contact-email'),
            'contact-msg' => $request->get('contact-msg'),
        ];


        // Send Email to admin
        Mail::to('email@domain.com')
            ->send(new Contact($data));

        // Send Email to user
        Mail::to($data['contact-email'])
            ->send(new ContactUser($data));

        //Redirect to contact page
        return redirect('contact')->with('success', trans('auth/message.contact.success'));
    }

    public function showFrontEndView($name = null)
    {
        if (View::exists($name)) {
            return view($name);
        } else {
            abort('404');
        }
    }


    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        if (Sentinel::check()) {
            //Activity log
            $user = Sentinel::getuser();
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('LoggedOut');
            // Log the user out
            Sentinel::logout();
        }
        // Redirect to the users page
        return redirect('login')->with('success', 'You have successfully logged out!');
    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newsletter(Request $request)
    {
        
    
        if($request->has('newsletter')) 
        {
            $this -> validate($request,[
                'email' => 'required'
            ]);

            $newsletter = new Newsletter;
            $newsletter->email = $request->input('email');
            $newsletter->save();
            if ($newsletter->id) {
                return Redirect::route("home")->with('success', trans('Thank you for subscribing to our newsletter'));
                //return redirect('user_dashboard')->with('success', trans('admin/blog/message.success.create'));
            } else {
                return Redirect::route("home")->with('error', trans('Oups! an error occured'));
            }
        }
        if($request->has('consultation'))
        {
            $this -> validate($request, [

                'name' => 'required',
                'email' => 'required',
                'country' => 'required',
                'telephone' => 'required',
                'company' => 'nullable',
                'website' => 'nullable',
                'city' => 'required',
                'service' => 'required',
                'service_type' => 'required',
                'consultation_time' => 'required'
            ]);

            $consultation = new Consultation;
            $consultation->name = $request->input('name');
            $consultation->email = $request->input('email');
            $consultation->country = $request->input('country');
            $consultation->telephone = $request->input('telephone');
            $consultation->company = $request->input('company');
            $consultation->website = $request->input('website');
            $consultation->city = $request->input('city');
            $consultation->service =$request->input('service');
            $consultation->service_type = $request->input('service_type');
            $consultation->consultation_time = $request->input('consultation_time');
            $consultation->save();

            if($consultation->id) 
            {
                return redirect('/')->with('success', 'Consultation Request Sent Successfully');
            }

        else{
            return redirect('/')->with('error', 'Something went wrong');
        }
        }

    }

    public function partners(){
        return view('partners');
    }
}
