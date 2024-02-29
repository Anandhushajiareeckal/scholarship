<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\scholarship_kpsc;
use App\Models\scholarship_reg;
use App\Models\User;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ImportController extends Controller
{
   
    public function import(Request $request) {

        $scholarship_kpsc = scholarship_kpsc::skip(100)->take(50)->get();
        
        foreach( $scholarship_kpsc as $row ){
            $user = User::where('email', $row->email )->first();
            if( !empty($user )){
                Log::info($user);
                
            } else {

                $user_data = new User();
                $user_data->name        = $row->name;
                $user_data->email       = $row->email;
                $user_data->password    = Hash::make($row->phone);//Default passwowrd phone number
                $user_data->usertype    = "user";
                $user_data->save(); //
                $user_id                = $user_data->id;
 

                $data                   =  new scholarship_reg();
                $data->name	            = $row->name;
                $data->email	        = $row->email;
                $data->number	        = $row->phone;
                $data->parent_numb	    = $row->parent_phone;
                $data->sex	            = $row->gender;
                $data->scholarship	    = $row->scholarship; 
                $data->adress	        = $row->address;
                $data->school	        = $row->school;
                $data->qualification 	= $row->qualification;
                $data->user_id 	        = $user_id;

                $data->save(); //
                
            }
            //
           
        }
        dd( "Successfully imported data");
    }
}
