<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function viewnews(){
        
        $news = DB::select('select * from createnews');
        return view('createnews',['news'=>$news]);

    }
    function viewpage1(){
        $news = DB::select('select * from createnews');
        return view('page1',['news'=>$news]);
    }
    function viewSignUp(){
        return view('signup');
    }

    function viewSignin(){
        return view('signin');
    }
   
    function viewFeedback(){
        return view('feedback');
    }
    function viewDonate(){
        return view('donate');
        // $donations = DB::select('select amount from donationkashmir');
        // $totalDonation = $donations;
        // foreach ($donations as $donation){
        //     $totalDonation = $totalDonation + intval($donation);
        // }['totalDonation'=>$totalDonation]
        
    }
    function viewContactUs(){
        return view('contactus');
    }
   

    function signup(Request $req) {
        $fname=  $req->input('firstName');
        $lname=  $req->input('lastName');
        $uemail =  $req->input('emailf');
        $upass=  $req->input('passwordf');
        $uphone=  $req->input('contactnum');

        $loginData = DB::select('select email from users where email = ?', [$uemail]);

        if (count($loginData) > 0){

            foreach ($loginData as $tablepass) {

                if (($tablepass->email) == $uemail){
                    $error='Account already exists with the given email';
                    return view('signin')->with('error',$error);
                }

            }
        }

        DB::insert('insert into users (firstname, lastname, email, password, contact) values (?, ?, ?, ?, ?)', [$fname, $lname, $uemail, $upass, $uphone]); //sqlinjection
            return view('signup');
    }
    function feedback(Request $req) {
        $name=  $req->input('fname');
        $mail=  $req->input('emailf');
        $message=  $req->input('gfeedback');
     

        DB::insert('insert into feedbacknew (name,email, message) values (?,?, ?)', [$name,$mail, $message]); //sqlinjection
        echo '<script>alert("Your response has been submitted!")</script>';
        return view('feedback');
    }


    public function news(Request $req) {
  
        $text=  $req->input('news');
        $title=  $req->input('title');
        $pic = $req->file('pic');
        $picName = $pic->getClientOriginalName();
        $picType = $pic->getClientOriginalExtension();
        $picSize = $pic->getSize();

        $pic->move('img',$picName);
        $destination = 'img/'.$picName;

        DB::insert('insert into createnews (title, text, picture) values (?,?,?)', [$title, $text, $destination]); //sqlinjection
        $news = DB::select('select * from createnews');
        return view('createnews',['news'=>$news]);
    }


    function delete(Request $req){
        $dmail=$req->input('emailform1');

            DB::delete("delete from feedbacknew where email = '$dmail'");
         
            return redirect('/feedback');
    }
   function login(Request $req){
        $uemail = $req->input('email');
        $upass = $req->input('passwordf');
        $adminpass="admin123";

        $loginData = DB::select('select password from users where email = ?', [$uemail]);
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $adminpass){
                    
                    $req->session()->put('data',$req->input()); 
                    $news = DB::select('select * from createnews');
                    return view('createnews',['news'=>$news]);
                }
                else if (($tablepass->password) == $upass){
                    
                    $req->session()->put('data',$req->input()); 
                    return view('donate');
                }
                else{
                    $error='Password does not match';
                    return view('signin')->with('error',$error);
                }
            }
        }     
        else{
            $error='Username not Found.';
            return view('login')->with('error',$error);
        }
    }

    function giveDonationKashmir(Request $req){
        $email = $req->input('emailform1');
        $cc= $req->input('ccform1');
        $amount = $req->input('amountform1');
        $msg = $req->input('msgform1');


        $data = DB::select('select email from users where email = ?', [$email]);

        if (count($data) > 0){
            $auth = 'Donation Added Successfully';
            DB::insert('insert into donationkashmir (email, creditcard, amount, message) values (?, ?, ?, ?)', [$email, $cc, $amount, $msg]); //sqlinjection
            return response()->json([
                'user'=>'Action Successful',
            ]);
        }
        return response()->json([
            'user'=>'Email not already registered',
        ]);
        
    }
    function giveDonationPalastine(Request $req){
        $email = $req->input('emailform2');
        $cc= $req->input('ccform2');
        $amount = $req->input('amountform2');
        $msg = $req->input('msgform2');


        $data = DB::select('select email from users where email = ?', [$email]);

        if (count($data) > 0){
            $auth = 'Donation Added Successfully';
            DB::insert('insert into donationpalastine (email, creditcard, amount, message) values (?, ?, ?, ?)', [$email, $cc, $amount, $msg]); //sqlinjection
            return response()->json([
                'user'=>'Action Successful',
            ]);
        }
        return response()->json([
            'user'=>'Email not already registered',
        ]);
        
    }
    function giveDonationUkraine(Request $req){
        $email = $req->input('emailform3');
        $cc= $req->input('ccform3');
        $amount = $req->input('amountform3');
        $msg = $req->input('msgform3');


        $data = DB::select('select email from users where email = ?', [$email]);

        if (count($data) > 0){
            $auth = 'Donation Added Successfully';
            DB::insert('insert into donationukraine (email, creditcard, amount, message) values (?, ?, ?, ?)', [$email, $cc, $amount, $msg]); //sqlinjection
            return response()->json([
                'user'=>'Action Successful',
            ]);
        }
        return response()->json([
            'user'=>'Email not already registered',
        ]);
        
    }
    function giveDonationAfrica(Request $req){
        $email = $req->input('emailform4');
        $cc= $req->input('ccform4');
        $amount = $req->input('amountform4');
        $msg = $req->input('msgform4');


        $data = DB::select('select email from users where email = ?', [$email]);

        if (count($data) > 0){
            $auth = 'Donation Added Successfully';
            DB::insert('insert into donationafrice (email, creditcard, amount, message) values (?, ?, ?, ?)', [$email, $cc, $amount, $msg]); //sqlinjection
            return response()->json([
                'user'=>'Action Successful',
            ]);
        }
        return response()->json([
            'user'=>'Email not already registered',
        ]);
        
    }
}

