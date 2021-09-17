<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Code;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (array_key_exists('code', $data)) {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'job'      => 'required',
                'bio'      => 'required',
                'code'     => function ($attribute, $value, $fail) use ($data) {
                    $code = Code::where('name', $value)->first();
                    if (!is_null($code)) {
                        $code_registered = Teacher::where('code', $value)->first();
                        if (!is_null($code_registered)) {
                            $fail('الكود مستخدم من قبل');
                        }
                    } else {
                        $fail('الكود غير صحيح');
                    }
                }
            ]);
        } else {
            return  Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone_number'  => 'required',
                'level_id'     => 'required'
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (array_key_exists('code', $data)) {
            $user =  User::create([
                'role'   => 'teacher',
                'name'   => $data['name'],
                'email'  => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            Teacher::create([
                'user_id'  => $user->id,
                'job'     => $data['job'],
                'bio'      => $data['bio'],
                'code'     => $data['code']
            ]);
            return response()->json(['message' => 'Teacher add successfully', 'alert_type' => 'success']);
        } else {

            $user =  User::create([
                'role'   => 'student',
                'name'   => $data['name'],
                'email'  => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            Student::create([
                'user_id'  => $user->id,
                'level_id' => $data['level_id'],
                'phone_number' => $data['phone_number']
            ]);
        }
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        $this->guard()->login($user);
        return response()->json(['message' => 'Student add successfully', 'alert_type' => 'success']);
    }
}
