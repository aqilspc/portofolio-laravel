<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Session;
use DB;
class WebController extends Controller
{
	public function index(Request $request) 
	{
		$data = [];

		$data['left'] = json_decode(json_encode(DB::table('data')->where('section','left')->get()),true);
		$data['center'] = json_decode(json_encode(DB::table('data')->where('section','center')->get()),true);
		$data['right'] = json_decode(json_encode(DB::table('data')->where('section','right')->get()),true);
		
		$arr = [];
		foreach ($data['left'] as $key => $value) {
			$arr['left'][$value['label']] = $value['text'];
		}

		foreach ($data['center'] as $key => $value) {
			$arr['center'][$value['label']] = $value['text'];
		}

		foreach ($data['right'] as $key => $value) {
			$arr['right'][$value['label']] = $value['text'];
		}

		//dd($arr);
		return view('index',compact('arr'));
	}

	public function loginIndex()
	{
		return view('login');
	}

	public function login(Request $request) 
    {
    	$credential = $request->all();

    	$user = User::where('email', $credential['user'])->first();
        if ($user) {
            if (! Hash::check($credential['password'], $user->password)) {
                return redirect()->back()->with('error', 'Sorry, the password you entered is incorrect, please check again!');
            }
            $user = User::find($user->id);
            Auth::login($user);
            return redirect('home');
        }else{
            $user = User::where('username', $credential['user'])->first();
            if ($user) {
                if (! Hash::check($credential['password'], $user->password)) {
                    return redirect()->back()->with('error', 'Sorry, the password you entered is incorrect, please check again!');
                }
                $user = User::find($user->id);
                Auth::login($user);
                return redirect('home');
            }else{
                return redirect()->back()->with('error', 'Sorry, Your Username Or Email Was Not Found, Please Check Again!');
            }
        }
        return redirect()->back()->with('error', 'Sorry, Your Username Or Email Was Not Found, Please Check Again!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success','You successfully logout!');
    }

}