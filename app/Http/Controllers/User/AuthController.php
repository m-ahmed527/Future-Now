<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\User\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AuthController extends Controller
{

    public function register(UserCreateRequest $request)
    {
        // dd($request->sanitized());
        $user = User::create($request->sanitized());
        $user->is_admin = false;
        $user->save();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            Auth::login(Auth::getLastAttempted());
            toastr()->addSuccess('Welcome '.$user->name );
            return redirect(route('home'));
        }
    }
    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if ( $user && !$user->is_admin) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                Auth::login(Auth::getLastAttempted());
                toastr()->addSuccess('Welcome Back ' . auth()->user()->name);
                return redirect(route('dashboard'));
            }
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('user.login'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile.profile-view', compact('user'));
    }
    public function uploadCover(Request $request)
    {
        $request->validate([
            'coverImage' => 'required|file',
        ]);
        $user = auth()->user();
        if ($request->hasFile('coverImage')) {

            $user->addMedia($request->coverImage)->toMediaCollection('UserCoverImage');
            return redirect(route('editProfile'));
        }
    }

    public function uploadProfile(Request $request)
    {
        $request->validate([
            'profileImage' => 'required|file',
        ]);
        $user = auth()->user();
        if ($request->hasFile('profileImage')) {

            $user->addMedia($request->profileImage)->toMediaCollection('UserProfileImage');
            return redirect(route('editProfile'));
        }
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' =>'required|current_password',
            'new'=>'required|confirmed',
        ]);

        $user = auth()->user();
        $user->password = Hash::make($request->new);
        $user->save();
        toastr()->addSuccess('Password has been changed');
         return redirect()->back()->with('success', 'Password has been changed');
    }

    public function userEdit(Request $request){
        $request->validate([
            'name' =>'required|string',
            'email'=>'required|email',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        toastr()->addSuccess('Profile Information has been changed');
         return redirect()->back()->with('success', 'Profile Information has been changed');
    }
}
