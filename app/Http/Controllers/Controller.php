<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Rules\Captcha; 
use Session;
use Socialite; //sử dụng Socialite
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Mail\ForgotPW;
use Illuminate\Support\Facades\URL;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct()
	{
		$category=Category::where('category_status',1)->get();
		view()->share('category',$category);
	}
    public function getLogin()
    {
    	return view('login');
    }
    public function postLogin(Request $request)
    {
    	$this->validate($request,
			[
				'email'=>'required|email',
				'password'=>'required',
                //'g-recaptcha-response' => new Captcha(),        //dòng kiểm tra Captcha
			],
			[
				'email.required'=>'Bạn phải nhập email',
				'email.email'=>'Email sai định dạng',
				'password.required'=>'Bạn phải nhập mật khẩu',
			]);
    	$pw=md5($request->password);
    	$user=User::where('user_email',$request->email)->where('user_password',$pw)->first();
    	if($user)
    	{
            if($user->user_verify==0)
            {
                $thongbao="Email chưa được xác nhận";
                return redirect('dang-nhap')->with(compact('thongbao'));
            }
            else
            {
                if($user->status==1)
                    {
                        if($user->user_avatar!="")
                        {
                            Session::put('admin_avatar',$user->user_avatar);
                        }
                        Session::put('admin_name',$user->user_name);
                        Session::put('admin_id',$user->id);
                        return redirect('admin/dashboard');
                        
                    }
                else
                    {
                        Session::put('user_name',$user->user_name);
                        Session::put('user_id',$user->id);
                        Session::put('user',$user);
                        return redirect('/#');
                        
                    }  
            }
    	}
    	else
    	{
            $thongbao="Tài khoản hoặc mật khẩu không chính xác";
    		return redirect('dang-nhap')->with(compact('thongbao'));
    	}
    }
    public function logout()
    {
    	Session::flush();
    	return redirect('dang-nhap');
    }
}
