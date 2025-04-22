<?php

namespace App\Http\Controllers;

use App\Code;
use App\Http\Controllers\Controller;
use App\Subscribe;
use App\Service;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){

        $messages = Contact::orderBy('id','desc')->get();
        $services = Service::all();
        $subscribers = Subscribe::all();


        return view('admin.dashboard',compact('messages','services','subscribers'));
    }

}