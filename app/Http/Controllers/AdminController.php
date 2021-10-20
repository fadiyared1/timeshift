<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Task;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Notifications\Messages\MailMessage;
use Notification;
use Illuminate\Support\Facades\Lang;
Use Mail;
use App\Mail\UserRequest;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Auth\CanConfirmEmail;
use App\Mail\ConfirmEmail;
use Carbon\Carbon;
use Session;

class AdminController extends Controller
{
   // use RedirectsUsers;
   
   public function __construct()
   {
       $this->middleware('role:administrator|superadministrator');
   }
   public function showResetForm(Request $request)
   {
       $token = $request->route()->parameter('token');
       
       return view('auth.passwords.reset')->with(
           ['token' => $token, 'email' => $request->email]
       );
   }

    public function index(){ 
        $uid=Auth::id();
        $users=User::where('id', '!=', [$uid, 1])->get();
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $tasks=Task::where('day',$today)->get();
        $i=0;
        return view('admin.test', ['today' => $today,'users' => $users, 'tasks'=> $tasks, 'i' =>$i]);
    }
    public function newuser(){ 
        $random=Str::random(10);
        $name='user'.$random;
        return view('admin.newuser', ['name' => $name]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);   
    }

    protected function ecreate(array $data)
    {
         $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verification_mail_sent_at' => now()
        ]);
        $user->attachRole('user');
        return $user;

    }
        public function adregister(Request $request)
        {
            
            $validator = $this->validator($request->all());
            $email = $request->email;
            $test =  User::where('email',$email)->first();
            //dd($test);
            if($test == null){
            $token=csrf_token();
            $this->ecreate($request->all());
            $response = $this->sendResetEmail($email, $token);
            return redirect()->back()->with('success' , 'User added successfully!');
            }
            else{
                return redirect()->back()->with('error' , 'Email already exists');
            }
        }
        protected function validateEmail(Request $request)
        {
            $request->validate(['email' => 'required|email']);
        }
    
        /**
         * Get the needed authentication credentials from the request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return array
         */
        protected function credentials(Request $request)
        {
            return $request->only('email');
        }
        
    /**
     * Get the response for a successful password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
                    ? new JsonResponse(['message' => trans($response)], 200)
                    : back()->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => [trans($response)],
            ]);
        }

        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($response)]);
    }
    public function users()
    {
        $users = User::whereRoleIs( ['user','administrator'])->get();
        //dd($users);
        return view('admin.users',['users' => $users]);
    }
    public function delete($id){
        $user = User::find($id);
        //dd($user);
        return view('admin.delete', ['user' => $user]);
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        $message="User deleted successfully";
        //return back()->with('message',$message);
        return redirect()->route('users')->with('message',$message);
    }
    public function suspend($id){
        $user = User::find($id);
        $user->suspend=1;
        $user->update();
        $message="User suspended successfully";
        return back()->with('message',$message);
    }
    public function open($id){
        $user = User::find($id);
        $user->suspend=0;
        $user->update();
        $message="User reopened successfully";
        return back()->with('message',$message);
    }
    public function edit($id){
        
       $user = User::find($id);
       return view('admin.edituser', ['user' => $user]);
    }
    public function edituser(Request $request){
        //dd($request);
        $user = User::find($request->iduser);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->job=$request->job;
        if($request->password != null){
        $user->password = bcrypt($request->get('password'));
        }
        $user->update();
        $message="User updated successfully";
        return back()->with('success',$message);
     }
    public function resend($id){
        $user = User::find($id);
        $email = $user->email;
        $token=csrf_token();
        $response = $this->sendResetEmail($email, $token);
        $user->verification_mail_sent_at=now();
        $user->update();
        $message="Verification email resent successfuly!";
        return back()->with('success',$message);
        //dd($id);
    }
    private function sendResetEmail($email, $token)
    {
    //Retrieve the user from the database
    $user = User::where('email', $email)->first();
    //Generate, the password reset link. The token generated is embedded in the link
    $link = config('base_url').'http://127.0.0.1:8000/' . 'password/emailconf/' . $token . '?email=' . urlencode($user->email);
        try {
        //Here send the link with CURL with an external email API 
        $mail = Mail::to($email)->send(new ConfirmEmail($link));
        return true;
        } catch (\Exception $e) {
           
            return false;
        }
    }
    public function resetPassword(Request $request)
    {
        //Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed',
            'token' => 'required' ]);

        //check if payload is valid before moving on
       /* if ($validator->fails()) {
            return redirect()->back()->withErrors(['email' => 'Please complete the form']);
        }*/
        
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');
        
        // Validate the token
       // $tokenData = DB::table('password_resets')
      //  ->where('token', $request->token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
       // if (!$tokenData) return view('auth.passwords.email');

        $user = User::where('email', $email)->first();
        
        // Redirect the user back if the email is invalid
        if ($user == null) {
            return redirect()->back()->with('message', 'Email not found!');
        }
        //Hash and update the new password
        $user->name = $name;
        $user->password = \Hash::make($password);
        $user->email_verified_at = now()->timestamp;
        $user->update(); //or $user->save();

        //login the user immediately they change password successfully
        Auth::login($user);
        return redirect()->route('user');
        //Delete the token
      /*  DB::table('password_resets')->where('email', $user->email)
        ->delete();

        //Send Email Reset Success Email
        if ($this->sendSuccessEmail($tokenData->email)) {
            return view('index');
        } else {
            return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
        }*/
    }

    /*public function showConfForm (){
        return view('auth/passwords.emailconf');
    }*/
    public function showConfForm(Request $request)
    {

        $usr = User::Where('email',$request->email)->first();
        if($usr->email_verified_at == null)
        {
            $start = Carbon::parse($usr->verification_mail_sent_at);
            $end = Carbon::parse(Carbon::now());
            $totalDuration =  $start->diffInMinutes($end);
            $limit=60;
            if( $totalDuration >= $limit)
            {
                Session::flush();
                return abort(403, 'Verification Link Expired! contact your admin to resend you a new link');
                
            }
            else
            {
                $token = $request->route()->parameter('token');
            
                return view('auth/passwords.emailconf')->with(['token' => $token, 'email' => $request->email]);
            }
        }
    }
    public function newindex(){ 
        $uid=Auth::id();
        $users=User::where('id', '!=', [$uid, 1])->get();
        $tasks=Task::all();
        $i=0;
        return view('admin.newindex', ['users' => $users, 'tasks'=> $tasks, 'i' =>$i]);
    }
    public function test(){
        $uid=Auth::id();
        $users=User::where('id', '!=', [$uid, 1])->get();
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        //$tasks=Task::all();
        $tasks=Task::where('day',$today)->get();
        $i=0;
        return view('admin.test', ['today' => $today,'users' => $users, 'tasks'=> $tasks, 'i' =>$i]);
        
    }
    public function chdate($date){
        $uid=Auth::id();
        $users=User::where('id', '!=', [$uid, 1])->get();
        $today = $date;
        //$tasks=Task::all();
        $tasks=Task::where('day',$today)->get();
        $i=0;
        return view('admin.test', ['today' => $today,'users' => $users, 'tasks'=> $tasks, 'i' =>$i]);
    }
    public function testusers()
    {
        $users = User::whereRoleIs( ['user','administrator'])->get();
        $random=Str::random(10);
        $name='user'.$random;
        $val ='all';
        return view('admin.testuser',['users' => $users,'name'=>$name,'val'=>$val]);
    }
    public function testusus()
    {
        $users = User::where('suspend',1)->get();
        $random=Str::random(10);
        $name='user'.$random;
        return view('admin.testuser',['users' => $users,'name'=>$name]);
    }
    public function testuinv()
    {
        $users = User::where('email_verified_at',null)->get();
        $random=Str::random(10);
        $name='user'.$random;
        return view('admin.testuser',['users' => $users,'name'=>$name]);
    }
    public function testuad()
    {
        $users = User::whereRoleIs( 'administrator')->get();
        $random=Str::random(10);
        $name='user'.$random;
        return view('admin.testuser',['users' => $users,'name'=>$name]);
    }
    public function testprofile()
    {
        $user = Auth::user();
        return view('admin.testprofile',['user' => $user]);
    }
    public function testudel($id){
       // dd($id);
        $user=User::find($id);
        $user->delete();
        $message="User deleted successfully";
        //return back()->with('message',$message);
        return back()->with('success',$message);
    }
    public function testchangep(Request $request){
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('new_password')) == 0){
            return back()->with('error','Your new password cannot be the same as the old password');
        }
        if(strcmp($request->get('new_password'),$request->get('new_password_confirmation')) != 0){
            return back()->with('error','Your new password and its confirmation must match');
        }
        $request->validate([
            'current_password'=>'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);
        $user=Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('success','Password changed successfully');
        
        }
        public function testprojects()
    {
        $users = User::all();
        return view('admin.testprojects',['users' => $users]);
    }
    public function testaddcom(Request $request){
        $id = $request->get('id');
        $txt = $request->get('text');
        $task = Task::where('id',$id)->first();
        $task->latestComment = $txt;
        $task->save();
        //dd($task);
        return back()->with('success','Comment changed successfully');
    }
    public function latesttest(){
        return view('admin.latesttest');
    }
    public function attendance(){
        $users = User::all();
        return view('admin.attendance')->with('users',$users);
    }
}
