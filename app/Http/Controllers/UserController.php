<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
	public function create(Request $request) {
		return view('users.create');
	}

	public function show(User $user) {
		return view('users.show', compact('user'));
	}

	public function store(Request $request) {
		$this->validate($request, [
				'name'     => 'required|max:50',
				'email'    => 'required|email|unique:users|max:255',
				'password' => 'required|confirmed|min:6',
			]);
		return;
	}

}
