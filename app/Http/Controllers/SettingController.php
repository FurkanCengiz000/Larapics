<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
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
    
    public function update(UpdateSettingRequest $request)
    {
        $request->user()->updateSettings($request->getData());
        return back()->with('message', 'Your changes has been saved');
    }
}
