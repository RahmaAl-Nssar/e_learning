<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Traits\uploadImage;
class ProfileController extends Controller
{
    use uploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request)
    {
        
        DB::beginTransaction();
        try{
        $user = User::where('id',auth()->id())->first();

          $user->name = $request->name;
          $user->email = $request->email;
          
          if($request->has('image')){
            $user->image = $this->uploadFile($request->image,'users');
          }
         
         $user->save();
         
         $user->teacher->job = $request->job;
         $user->teacher->bio = $request->bio;
        
         $user->teacher->save();
        // return response()->json(['message' => 'user updated suucessfully', 'alert_type' => 'success']);
        toast('user updated suucessfully!', 'success');
         return response()->json(['redirect' => route('home')]);
           DB::commit();
           
            }catch(\Exception $e){
                return response()->json(['message' => 'something wrong', 'alert_type' => 'error']);
            }

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
