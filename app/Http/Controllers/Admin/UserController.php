<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function users()
    {
        $user  =auth()->user();
        // $user->newSubscription('default', 'price_1OUwwKDuZ1C8Kw7Lk5qCj328')->add();
        $users = User::latest()->paginate(5);


        return view('user.users.users', compact('users'));
    }
    public function toggleUserStatus(User $user)
    {
        // dd(auth()->user()->roles);

        $user->active = !$user->active;
        $user->save();

        // toastr()->success('User Account '.($user->status ? 'Activated' : 'Deactivated'));
        // dd($user);

        return back();
    }

    public function userDetail(User $user){
        // dd($user->getFirstMediaUrl('UserCoverImage'));
        return view('user.users.user-detail', compact('user'));

    }
}
