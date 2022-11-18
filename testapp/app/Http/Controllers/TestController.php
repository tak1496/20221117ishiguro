<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function add(ClientRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        $form = $request->all();
        Lesson::create([
            'name' => $form['name'],
            'email' => $form['email'],
        ]);

        return view('thanks');
    }
}
