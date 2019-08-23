<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Basic Admin Functionality Starts Here
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                //return redirect()->action('AdminController@dashboard');//This thing works fine.
                return redirect('admin/dashboard');
            }

            else {
                // echo "Error";die;
                //return Redirect::back()->withErrors(['msg', 'Invalid Username or Password']);
                return redirect()->back()->with('msg', 'Invalid Username or Password');
            }
        }
        
        return view('adminview/admin_login');
    }

    public function dashboard(){
        $user = Auth::user();
        return view('adminview/dashboard',[
            'user' => $user,
        ]);
    }

    public function settings(){
        $user = Auth::user();
        
        return view('adminview/settings',[
            'user' => $user,
        ]);
    }

    public function chckPassword(Request $request){
        $user = Auth::user();
        $current_pass = $request->current_pwd;

        if(Hash::check($current_pass, $user->password)){
            //echo "true";die;//This works too
            return "true";
        }
        
        else {
            //echo "false";die;//This works too
            return "false";
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $user = Auth::user();
            $current_pass = $request->current_pwd;
            $new_password = $request->new_pwd;

            if(Hash::check($current_pass, $user->password)){ //Current pass matches user password
                if(Hash::check($new_password, $user->password)){//New password matches current password. That means User didn't change password
                    return redirect('admin/settings')->with('update_pwd_fail','New Password Matches Current Password');
                }

                else {
                    $request->user()->fill(['password' => Hash::make($new_password)])->save();
                    return redirect('admin/settings')->with('update_pwd_success','Password Updated Successfully');
                }
            }

            else {
                return redirect('admin/settings')->with('update_pwd_fail',"Current Password is Incorrect");
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin')->with('logout_msg', 'Logged out Successfully');
        // return redirect()->action('AdminController@login');
    }
    //Basic Admin Functionality Ends Here
}
