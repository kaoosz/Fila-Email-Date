<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Jobs\EmailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    public function store(UserRequest $request)
    //public function store()
    {
        //dd(request()->all());
        //dd($values = date_parse_from_format('Y-m-d-H-i','2015-07-27 10-01'));
        //dd($values = date_parse_from_format('Y-m-d H:i',$request->dat));
        $values = date_parse_from_format('Y-m-d H:i',$request->dat);

        //dd($values);

        //dd(Carbon::createFromFormat('Y-m-d-H-i','2015-07-27 10:01'));

      //  dd(Carbon::createFromFormat('Y-m-d H:i',$request->dat));

        EmailJob::dispatch()->delay(now()
        ->addMinutes($values['minute'])
        ->addSeconds($values['second']));

        //EmailJob::dispatch()->delay(now()->adds);
        //EmailJob::dispatch()->delay(now()->addSeconds(20));

    }
}
