<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        $messages=DB::connection('pgsql')->table('test_table')->get();
        return view('demo', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'message' => 'required|max:255',
        ]);
        if($request->username == 'CLEAR' || $request->message == 'CLEAR')
        {
            $programs= DB::connection('pgsql');
            DB::statement('drop table if exists test_table cascade');
            DB::statement('create table test_table (username text, msg text, time text);');
        }
        else
        {
            $programs= DB::connection('pgsql')->table('test_table')->insert([
                'username' => $request->username,
                'msg' => $request->message,
                'time' => date("g:ia F d Y", strtotime('-5 hours', strtotime(now()))),
            ]);
        }
        
        return redirect()->route('demo');
    }
}