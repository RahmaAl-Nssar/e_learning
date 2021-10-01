<?php

namespace App\Http\Controllers;

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTeacher(TeacherRequest $request)
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
           DB::commit();
       
           return response()->json(['message' => 'user updated suucessfully', 'alert_type' => 'success']);
            }catch(\Exception $e){
                return response()->json(['message' => 'something wrong', 'alert_type' => 'error']);
            }

    }
    
 
}
