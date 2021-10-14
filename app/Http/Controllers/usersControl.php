<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\peoplem;
use Illuminate\Database\QueryException;



class usersControl extends Controller
{

     static function httpPost($url, $data)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function json_error($array,$status) {
        header('HTTP/1.1 '.$status);
        die(json_encode($array));
    }
    function login(Request $request){
          $data=  usersControl::httpPost(
                'http://frontend.urlat.cc/api/login',
                array('email'=>$request->email,'password'=>$request->password)
            );
          session_start();
        $data=(json_decode($data));

        //echo isset($data->error)?$data->error:$data->token;
        if(isset($data->success)){
            $_SESSION['token']=$data->token;
            $this->json_error(['success' => $data->success], 200);
        }
        else {
           // return response()->json(['error'=>$data->error]);
            $this->json_error(['error' => $data->error], 404);
        }


    }
    function report($type){
        return redirect(route('report.objects', compact('type')));
    }
    function getCategories(){
         $data=file_get_contents("http://frontend.urlat.cc/api/categories");
        $data=(json_decode($data));
      return response('');
    }
    function postReports(Request $request){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $paths='';
        $array=array();
        $paths=  usersControl::httpPost(
            'http://frontend.urlat.cc/api/uploadImage',
            array()
        );
        if($request->image1) {
            $array+=array('image1'=>$request->image1);
           
        }if($request->image2) {
            $array+=array('image2'=>$request->image2);

        }if($request->image3) {
            $array+=array('image3'=>$request->image3);
        }
        $paths=  usersControl::httpPost(
            'http://frontend.urlat.cc/api/uploadImage',
            $array
        );
        
     //   echo $paths;
        $post=array(
            'category'=>$request->categories,
            'type'=>$request->type ,
            'color'=>$request->color ,
            'location'=>$request->location ,
            'description'=>$request->description ,
            'name'=>$request->name ,
            'date'=>$request->date ,
            'model'=>$request->model ,
            'imei'=>$request->imei ,
            'serial'=>$request->serial ,
            'sex'=>$request->sex ,
            'age'=>$request->age ,
            'registration'=>$request->registration ,
            'company'=>$request->company ,
            'height'=>$request->height ,
            'brand'=>$request->brand,
            'token'=>$_SESSION['token'],
            'images'=>$paths
        );
       // print_r($post)
        $data=  usersControl::httpPost(
            'http://frontend.urlat.cc/api/report',$post
        );
       
        return redirect(route('my-post'));
    }

    public function getPost($id){
        return redirect(route('posts', compact('id')));
       
    }

    public static function validatePost($post_id){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['token'])){
            $validate= usersControl::httpPost(
                'http://frontend.urlat.cc/api/validateByPost',array('token'=>$_SESSION['token'],'post_id'=>$post_id)
                );
                $validate=json_decode($validate);
               return $validate->user;
            }
            else return false;
        
    }

    function room(Request $request){
        $bool= usersControl::httpPost(
            'http://frontend.urlat.cc/api/sendMessage',array('token'=>$_SESSION['token'],'post_id'=>$request->post_id,'message'=>$request->message)
            );
       return redirect()->back();
    }
     static function getChats(){
    $chats= usersControl::httpPost(
        'http://frontend.urlat.cc/api/getChats',array('token'=>$_SESSION['token'])
        );
       // $chats=json_decode($chats);
     //  return $validate->user;
     return $chats;
  }

        function uploadImage(Request $request){
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $paths='';
        if($request->image1) {
            $rand=substr(str_shuffle($permitted_chars), 0, 15);
            $request->image1->storeAs('images', $rand.'.jpg');
            $paths.='public/images/'.$rand.'.jpg ';
        }if($request->image2) {
            $rand=substr(str_shuffle($permitted_chars), 0, 15);
            $request->image2->storeAs('images', $rand.'.jpg');
            $paths.='public/images/'.$rand.'.jpg ';

        }if($request->image3) {
            $rand=substr(str_shuffle($permitted_chars), 0, 15);
            $request->image3->storeAs('images', $rand.'.jpg');
            $paths.='public/images/'.$rand.'.jpg ';
        }
        return $paths;
        }

        function gap(){
            $getAllPosts=file_get_contents('http://frontend.urlat.cc/api/getAllPost');
            $getAllPosts=json_decode($getAllPosts);
            return $getAllPosts;
        }
        function gaps(){
            $getSpecficPosts=file_get_contents('http://frontend.urlat.cc/api/specficPost');
            $getSpecficPosts=json_decode($getSpecficPosts);
            return $getSpecficPosts;
        }

        function delete($post_id){
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $bool= usersControl::httpPost(
                'http://frontend.urlat.cc/api/delete',array('token'=>$_SESSION['token'],'post_id'=>$post_id)
                );
                return redirect(route('my-post')); 

        }
        function register(Request $request){
            $data=  usersControl::httpPost(
                'http://frontend.urlat.cc/api/register',
                array('data'=>$request->email,'password'=>$request->password)
            );
          session_start();
        $data=(json_decode($data));

        //echo isset($data->error)?$data->error:$data->token;
        if(isset($data->success)){
            $_SESSION['token']=$data->token;
            $this->json_error(['success' => $data->success], 200);
        }
        else {
           // return response()->json(['error'=>$data->error]);
            $this->json_error(['error' => $data->error], 404);
        }

        }

        function forgetPassword(Request $r){
          usersControl::httpPost(
                'http://frontend.urlat.cc/api/frogetPassword',array('email'=>$r->email)
                );
               // return redirect(route('my-post')); 
        }
        function forget_Password(Request $r){
            if(peoplem::where('email',$r->email)->exists()){
                    
            };
                 // return redirect(route('my-post')); 
          }



}
