<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|digits:10',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);

            $user->save();

            return back()->with('success', 'You have registered successfully.');
        } catch (\Exception $e) {
            return back()
                ->with('fail', 'Something went wrong. Please try again.')
                ->withInput();
        }
    }

    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                // Redirect to welcome page after login
                return redirect('/')->with('success', 'Login successful.');
            } else {
                return back()
                    ->with('fail', 'Incorrect password.')
                    ->withInput();
            }
        } else {
            return back()
                ->with('fail', 'This email is not registered.')
                ->withInput();
        }
    }

    public function dashboard()
    {
        if (Session::has('loginId')) {
            $user = User::find(Session::get('loginId'));
            return view('dashboard', compact('user'));
        }
        return redirect('login')->with('fail', 'You must be logged in.');
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
