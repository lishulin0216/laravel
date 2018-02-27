<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        //显示视图
        return view('home/login');
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //验证码
    public function code()
    {
        $builder = new CaptchaBuilder;
        $builder ->build();
        session(['code' => $builder->getPhrase()]);
        header('Content-type: image/jepg');
        $builder->output();
    }

    //登录验证
    public function ldl(Request $request)
    {
        $res = input::all();

        //判断验证码是否正确
        if(session('code')!==$res['code']){
            return view('home/login')->with('msg','验证码错误!');

        }

        //判断name是否正确
        $login = login::where('name',$res['name'])->frist();
        session(['id'=>$login->id]);

        if($login->name == $res['name'] && $login->password == $res['pwd']){

          return redirect('');  
        }
        return redirect('/login');

       
    }

    //注册
    public function create()
    {
        return view('home/login/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //注册验证
    public function store(Request $request)
    {

        $arr = $request->except('_token');

        //判断验证码是否正确
        if(session('code')!==$res['code']){
            return view('home/login')->with('msg','验证码错误!');
           
        }
        //判断两次密码是否输入正确
        if($arr['pwd']!==$arr['password']){
            return redirect('login/register');
        }
        $res = user::create($arr);
        //把添加的变成array
        $res = $res->toArray();

        if($res){
            return redirect('login');
        }else{
            return back()->with('xxxx');
        }
    }
   

   //忘记验证码
   public function pass()
   {
    return view('home/login/password');
   }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
