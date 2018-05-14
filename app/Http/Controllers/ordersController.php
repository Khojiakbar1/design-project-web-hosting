<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders');
    }

    function insert(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone'); 
        $plan = $req->input('plan');
        $domain = $req->input('domain');
        $project = $req->input('project');
        $user_id=$req->input('user_id');

        $data = array('namme'=>$name, "email"=>$email, "phone"=>$phone, "plan"=>$plan, "domain"=>$domain, "project"=>$project, "user_id"=>$user_id);

        DB::table('orders')->insert($data);

        echo "Success";
    }

}
