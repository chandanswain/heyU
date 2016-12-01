<?php

namespace App\Http\Controllers;

use App\Social;
use App\Posts;
use App\Visibility_status;
use App\User;
use Auth;
use Session;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         * Get user details
         * */
        if (Auth::check()) {

            $userDetails = Auth::user();

            Session::set('userId',$userDetails->id);
            Session::set('user_type_id',1);
            Session::set('first_name',$userDetails->first_name);
            Session::set('last_name',$userDetails->last_name);
            Session::set('email',$userDetails->email);

            $userInfo = Social::where('user_id', '=', $userDetails->id)->firstOrFail();
            $VisibilityList = Visibility_status::all();

            //dd(User::find(2)->posts);
            return view('home/home')->with('VisibilityList', $VisibilityList);

        }else{
            return redirect('/');
        }

    }
    public function profile()
    {
        return view('layouts/profile');
    }


    public function savePost(Request $request){

        if( $request->ajax() ) {
            $inputData = Input::get('formData');
            parse_str($inputData, $formFields);

            if($formFields['post_text']!=''){
                $data = [
                    'user_id'           => Session::get('userId'),
                    'user_type_id'      => Session::get('user_type_id'),
                    'visibility_id'     => $formFields['post_type'],
                    'post'              => $formFields['post_text'],
                    'image'             => '',
                ];
                $post = Posts::create($data);
                if($post->id >0){
                    return Response()->json(['msg' => 'true' , 'data' => Posts::where('post_id', $post->id)->firstOrFail()]);
                }
            }
            return Response()->json(['msg' => 'false' , 'data' => []]);
        }
    }

}
