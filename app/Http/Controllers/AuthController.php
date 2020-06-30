<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
 public function welcome(Request $request)
 {
 	return view('welcome', [
 		'first_name' => strtoupper($request->first_name),
 		'last_name' => strtoupper($request->last_name)
 	]);
 }
 public function form()
 {
 	return view('register');
 }
}
