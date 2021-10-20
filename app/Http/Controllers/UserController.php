<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Task;
use App\Models\Tag;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('role:user');
    }
    public function index(){
        $uid=Auth::id();
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $tasks = Task::where('user_id', $uid)->where('day',$today)->get();        
        $tags = Tag::all();
        $proj = Project::all();
        //dd($proj);
        return view('user.newindex', ['today' => $today,'tasks' => $tasks, 'tags' => $tags, 'proj' => $proj]);
    }
    public function destroy(User $user){
        $user->delete();
        $message="User deleted successfully";
        return back()->with('message',$message);
    }
    public function profile(){
        $user=Auth::user();
        return view ('user.profile',['user' => $user]);
    }
    public function test(Request $request){
        dd($request);
    }
    public function changepass(){
        return view ('user.changepass');
    }
    public function changep(Request $request){
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
        public function changejob(){
            return view ('user.changejob'); 
        }
        public function changej(Request $request){
           // dd($request);
            $user=Auth::user();
            $user->job =$request->get('new_job');
            $user->save();
            return back()->with('success','Job changed successfully');
            
            }
        public function newindex(){
            $uid=Auth::id();
            $today = \Carbon\Carbon::now()->format('Y-m-d');
            $tasks = Task::where('user_id', $uid)->where('day',$today)->get();    
            $tags = Tag::all();
            $proj = Project::all();
           
        return view('user.newindex', ['today' => $today,'tasks' => $tasks, 'tags' => $tags, 'proj' => $proj]);
        }
        public function newprofile(){
            $user=Auth::user();
            return view ('user.newprofile',['user' => $user]);
        }
        public function chdate($date){
            $uid=Auth::id();
            $today = $date;
            //dd($date);
            $tasks = Task::where('user_id', $uid)->where('day',$date)->get();    
            $tags = Tag::all();
            $proj = Project::all();
           
        return view('user.newindex', ['today' => $today,'tasks' => $tasks, 'tags' => $tags, 'proj' => $proj]);
        }
}
