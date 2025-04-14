<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Http\Controllers\Controller;


use Carbon\Carbon;
use Illuminate\Http\Request;


class SubscribeController extends Controller
{
    //
    public function index(){

            $rows= Subscribe::paginate(10);
        return view('admin.subscribe.index',compact('rows'));
    }

    public function destroy($id)
    {
        $row = Subscribe ::find($id);
        $row-> delete();
        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('subscribers.index');
    }
}
