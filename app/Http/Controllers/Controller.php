<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
