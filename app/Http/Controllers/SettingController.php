<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function edit()
    {
        return view('setting', [
            'user' => auth()->user()
        ]);
    }
    
    public function update(Request $request)
    {
        dd($request->all());
    }
}
