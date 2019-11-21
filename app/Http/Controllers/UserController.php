<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\PartyCenterBookingUser;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Session;
use Mail;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        return view('front-end.register.register');
    }
    protected function userInfoValidate($request){
        $this->validate($request, [
            'first_name' => 'required|max:30|min:2',
            'last_name' => 'required|max:30|min:2',
            'email_address' => 'email|unique:party_center_booking_users,email_address|required',
            'phone_no' => 'required|min:10',
            'national_id' => 'required|min:10',
            'address' => 'required|min:3',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'checkbox' => 'required',
        ]);
    }
    public function saveUserRegistrationInfo(Request $request){
        $this->userInfoValidate($request);
        $appUser = new PartyCenterBookingUser();
        $appUser->first_name = $request->first_name;
        $appUser->last_name = $request->last_name;
        $appUser->phone_no = $request->phone_no;
        $appUser->national_id = $request->national_id;
        $appUser->address = $request->address;
        $appUser->email_address = $request->email_address;
        $appUser->password = bcrypt($request->password);
        $appUser->save();

        $UserId = $appUser->id;
        Session::put('userId',$UserId);
        Session::put('userName',$appUser->first_name.' '.$appUser->last_name);

        return redirect('/');
    }

    public function userLogin(){

       return view('front-end.login.login');
    }
    public function adminLogin(){

       return view('front-end.login.admin-login');
    }
    public function userLoginCheck(Request $request){
        $appUser = PartyCenterBookingUser::where('email_address', $request->email_address)->first();
        //        return $appUser;

        if (!empty($appUser)) {

            if (password_verify($request->password, $appUser->password)) {
                Session::put('userId', $appUser->id);
                Session::put('userName', $appUser->first_name . ' ' . $appUser->last_name);

                return redirect('/');
            } else {
                return redirect('/user/login')->with('message', 'Please your check Email or Password');
            }
        } else {
            return redirect('/user/login')->with('message', 'Please your check Email or Password');
        }


    }

    public function userLogout() {

        Session::forget('userId');
        Session::forget('userName');

        return redirect('/');
    }
    public function userProfile(){
        $userId=Session::get('userId');
            if($userId){
                $userInfo=PartyCenterBookingUser::find($userId);

                return view('front-end.user.user-profile',[
                    'userInfo'=>$userInfo,
                ]);
            }else{
                return redirect('user/login');
            }
    }
    public function editUserInfo($id){
        $userInfo=PartyCenterBookingUser::find($id);
        return view('front-end.user.edit-profile',[
            'userInfo'=>$userInfo,
        ]);
    }

    protected function userInfoUpdateValidate($request){
        $this->validate($request, [
            'first_name' => 'required|max:30|min:2',
            'last_name' => 'required|max:30|min:2',
            'email_address' => 'email|required',
            'phone_no' => 'required|min:10',
            'national_id' => 'required|min:10',
            'address' => 'required|min:5',
        ]);
    }
    protected function saveBasicUserInfo($request){
        $id=$request->id;
        $userInfo=PartyCenterBookingUser::find($id);
        $userInfo->first_name = $request->first_name;
        $userInfo->last_name = $request->last_name;
        $userInfo->phone_no = $request->phone_no;
        $userInfo->national_id = $request->national_id;
        $userInfo->address = $request->address;
        $userInfo->email_address = $request->email_address;
        $userInfo->save();
    }
    public function updateUserInfo(Request $request){
        $this->saveBasicUserInfo($request);

        return redirect('/app/user/profile')->with('message', 'Your Profile is successfully updated');
    }
    public function addUserBySAdmin(){
        $userManagers = User::whereHas('roles', function ($query) {
            $query->where('name', '!=', 'Super Admin');
        })->orderBy('created_at', 'desc')->get();

        return view('admin.user.manage-user',[
            'userManagers'=>$userManagers,
        ]);
    }
    public function addNewUser(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            'password' => 'required|min:5',
            'password_confirmation' => 'required_with:password|same:password',

        ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->attachRole(Role::where('name', 'Manager')->first());


        return redirect()->back()->with('message', 'User Added successfully');
    }

}
