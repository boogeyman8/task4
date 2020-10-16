<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{

	public function __construct(){
		$this->middleware('CheckIfCanPost');
	}


    public function index(){
    	return view('task.index');
    }
    public function show(Request $req){
    	    	Task::create([
    		'title'=>$req->input('title'),
    		'text'=>$req->input('text'),
    		'desc'=>$req->input('desc') 	
    	]);

    	$tasks = Task::get();

    	return view('task.show',["tasks"=>$tasks]);
    	
    }
    public function redirect(){
    	return view('task.redirect');
    }

}
