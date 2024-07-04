<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Carbon\Carbon;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;
use App\Models\document;
use App\Models\user;
use App\Models\card;
use App\Models\card_transaction;
use App\Models\subscription_package;
use App\Models\subscriber_transaction;


class admincontroller extends Controller
{
    //


    public  function adminloginaction(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password'=> 'required',
          ]);
          if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'role_id' => 1])) {
            if(auth::user()->role_id == 1 && auth::user()->status == 1){ 

              $mytime = Carbon::today()->addDays(-7)->format('y-m-d');  
            
              $count =card::where('user_id',Auth::user()->id)->whereDate('recurrent_charges','>=', $mytime)->count();
 
              session(['key' => $count]);
              return redirect('admin/dashboard');
        
            }
            else{
              return back()->with(['error1'=> 'Password and Email does not match try again']);
            }
        }
          else{
            return back()->with(['error1'=> 'Password and Email does not match try again']);
          }
    }
    // Logout
    
        function  logout(){
          auth::logout();
    return redirect('/admin/login');
    
      }


       // dashboard
  public function dashboard()
  {
    $total_sub = user::where('role_id',2)->count();
  
    $active_sub =  user::where('role_id',2)->where('status',1)->count();
    $block_sub=  user::where('role_id',2)->where('status',0)->count();


    $total = card::where('user_id',auth()->id())->count();
    $active =  card::where('user_id',auth()->id())->where('status',1)->count();
    $block=  card::where('user_id',auth()->id())->where('status',0)->count();


    return view('admin.dashboard',compact('total','active','block','total_sub','active_sub','block_sub'));
 }



  
  //profile
  public function profile()
  {
    $id = auth::id();
   
    $user = user::find($id);
    $card =card :: where('user_id', auth()->id())->orderby('id','desc')->get();
  

    return view('admin.profile',compact('user','card'));
  } 

  // Profile edit action
   public function profile_edit_action(request $req)
   {

    $req->validate([
      'email' => 'unique:users,email,' .$req->id.',id',
      
   ]);

    $id =Auth::id();
    $update  = user::find($id);

    // Image 

    if ($req->has('image')) {
    $req->validate([
    'image' => 'mimes:jpeg,jpg,bmp,png',
 ]);
     $image_path = 'storage/app/' . $update->image;
    //  dd($image_path);
     File::delete($image_path);
     $filename = $req->file('image')->store('media');
    
    }
   else {
    $filename = $update->image;
    }

     user::where('id',$id)->update([
      'name'=>$req->name,
      'email'=>$req->email,
      'contact'=>$req->contact,
      'image'=>$filename,
      'ssn' =>$req->ssn,
      'street1'=>$req->street1,
      'street2'=>$req->street2,

      'city'=>$req->city,
      'state'=>$req->state,
      'zip'=>$req->zip,
      'country'=>$req->country,
     
  ]);
  

  return redirect('admin/profile')->with('message1','Successfully Updated Profile');  
   }
  //update password
  public function update_password()
  {
    return view('admin.update_password');
  } 

  function update_password_action(request $req){
    
    $id =Auth::id();
    $user= user::find($id);
 
   if(password_verify($req->oldpassword,$user->password)){
 
        $user->password = bcrypt($req->newpassword);
 $user->save();
        return back()->with('message','Update');
    }
    else{
        return back()->with(['error'=> 'Old Password  does not match try again']);
      }

  }


    // Forget
       public function forget(request $req)
     {
         
         
            $req->validate([
                'email' => 'required|email',
    
            ]);
        
            $user = user::where('email', $req->email)->first();
    
            if ($user) {
                
               $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
                $user->password = bcrypt(implode($pass));
                $user->save();
                
                 $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $to = $user->email;
            $from = 'info@850th.com';
            $subject = '850th system  Password Reset';
            $message = ' <h3> Hello ' .$user->name . '</h3> 
            <p> There was a request for password  resetting 850th system generated Random password <button style="color:#040d50">'. 
    implode($pass).' </button> </p>' ;
            
             $headers .= 'From: info@850th.com'."\r\n".
            'Reply-To: info@850th.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

                if(mail($to, $subject, $message, $headers))
                {
                    return back()->with('message1','djj');
                }
                else{
                    return back()->with('message2','djj');
                }
               
             
            }
            else{
                return back()->with('message','djj');
            }
            
     } 

  public function add_card()
  {
   return view('admin.add_card');
  }

  public function stripePost(Request $request)
  {
    
   
    $mytime =    $mytime = Carbon::today()->format('Y-m-d'); 
    $newDate = date('Y-m-d', strtotime($mytime. ' + ' .$request->current_charges .' months'));
$user = user::find($request->user_id);

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

// Create a Customer:
    $customer = \Stripe\Customer::create([
    'source' => $request->stripeToken,
    'email' =>  $user->email,
]);

// Charge the Customer instead of the card:
$charge = \Stripe\Charge::create([
    'amount' => 100,
    'currency' => 'usd',
    'customer' => $customer->id,
]);



      
if ($charge->status == "succeeded"){
    card ::create([
    'recurrent_charges' => $newDate,
    'card_number' =>$charge->source->last4,
    'customer_id' => $customer->id,
    'expiration_month'=>$request->expiration_month,
    'expiration_year'=>$request->expiration_year,
    'user_id' => $request->user_id,
    'nick_name' =>$request->nick_name,
    'charges' => $request->current_charges,
    'creditor_name' => $request->creditor_name,
    'credit_limit' => $request->credit_limit,
    'opened_date'  => $request->opened_date,
    'responsibility' => $request->responsibility,

    'status' => 1
      ]);
    

      card_transaction::create([
      'card_number' => $charge->source->last4,
      'transaction_id' =>$charge->id,
      'amount' => $charge->amount/100,
      'user_id' =>$request->user_id,
      ]); 
              
       
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $user->email;
$from = 'info@850th.com';
$subject = 'Link new card on 850th System';
 $headers .= 'From: info@850th.com'."\r\n".
            'Reply-To: info@850th.com'. "\r\n" .
'X-Mailer: PHP/' . phpversion();
  $htmlContent = '
  
<!doctype html>
<html lang="en-US">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body> 
<h3> Hello ' .$user->name . '</h3> 
<p>
Thank you for adding a new card **** **** **** ' . $charge->source->last4 . ' . Now one dollar withdrawal please do the following step, set up an auto payment on the corresponding creditor bank according  to recurrent  charge. <br>
 We will send reminders until you check is 
done in your portal on 850th.com.(put a screenshot of where is the checkmark)
<br> <b>
Best regards,<br> 
850th Team
</b>
</body>
</html>';


if(mail($to, $subject, $htmlContent, $headers))
{ 

      Session::flash('success', 'Payment successful!');   
      return back();
  }
  }
  else{
      Session::flash('error', 'Something Wrong');
  }
}
  

function view_card(){

  $card =card :: where('user_id', auth()->id())->orderby('id','desc')->get();
  
  return view('admin.view_card',compact('card'));
}


public function card_delete($id){
  $card = card::find($id);
  $card->delete();
  return back()->with('delete','delete');

}
// Card Transaction
function card_transaction(){

  $trans =card_transaction :: where('user_id', auth()->id())->orderby('id','desc')->get();
  
  return view('admin.card_transaction',compact('trans'));
}

// Card Transaction
function subscriber_transaction(){

  $trans =subscriber_transaction ::orderby('id','desc')->get();
  
  return view('admin.subscriber_transaction',compact('trans'));
}


public function subscription_package(){
  $sub =subscription_package::first();

  return view('admin.subscription_package',compact('sub'));
}

public function edit_pkg_action(Request $req)
{
  
  subscription_package::where('id',$req->id)->update([
 'tittle' =>$req->tittle,
 'month' =>$req->month,
 'price' =>$req->price,
 'description' =>$req->description
  ]);

  return back()->with('message','Added');

} 

function active_subscriber(){
  $sub = user::where('role_id',2)->where('status',1)->orderby('id','desc')->get();
  return view('admin.active_subscribers',compact('sub'));
}

function block_subscriber(){
  $sub = user::where('role_id',2)->where('status',0)->orderby('id','desc')->get();
  return view('admin.blocked_subscribers',compact('sub'));
}



// API

function card_expiry(){
     $mytime = $now = Carbon::now();
  
     $card = card::with(['user_info'])->where('expiration_year',$mytime->year)->where('expiration_month',$mytime->month)->get();
     
   
     foreach($card as $card) {
       

     $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $card->user_info->email;
$from = 'info@850th.com';
$subject = '850th system expiration reminder';
$headers .= 'From: info@850th.com'."\r\n".
'Reply-To: info@850th.com'. "\r\n" .
'X-Mailer: PHP/' . phpversion();
  $htmlContent = '
  
<!doctype html>
<html lang="en-US">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Bootstrap 4 Admin HTML Theme - New Account Email Template</title>
<meta name="description" content="New account email template. Bootstrap 4 Admin HTML Theme is a material design and bootstrap 4 based responsive dashboard template by propeller created mainly for admin and backend applications.">
<style type="text/css">
a:hover { text-decoration: underline !important; }
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f8f9;" leftmargin="0">
<p> 850th system reminder your card expire ' . $card->expiration_month .'/' .$card->expiration_year .' </p>
</body>
</html>';


if(mail($to, $subject, $htmlContent, $headers))
{ 
    return 1;
}
  
}

      }
        
 function card_renew(){
$mytime = Carbon::today()->addDays(-5)->format('y-m-d');  

$card =card::with(['user_info'])->whereDate('recurrent_charges','<=', $mytime)->get();
             
    
     foreach($card as $card) {
  
   $newDate = date('Y-m-d', strtotime($card->recurrent_charges. ' + ' .$card->charges .' months'));
  
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

$charge = \Stripe\Charge::create([
    'amount' => 100,
    'currency' => 'usd',
    'customer' => $card->customer_id, // Previously stored, then retrieved
]);



      
if ($charge->status == "succeeded"){
    card ::where('id',$card->id)->update([
    'recurrent_charges' => $newDate,
      ]);
    

      card_transaction::create([
      'card_number' => $charge->source->last4,
      'transaction_id' =>$charge->id,
      'amount' => $charge->amount/100,
      'user_id' =>$card->user_id,
      ]); 
      
      
    
     $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $card->user_info->email;
$from = 'info@850th.com';
$subject = '850th system Automatic payment';
$headers .= 'From: info@850th.com'."\r\n".
'Reply-To: info@850th.com'. "\r\n" .
'X-Mailer: PHP/' . phpversion();
  $htmlContent = '
  
<!doctype html>
<html lang="en-US">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Bootstrap 4 Admin HTML Theme - New Account Email Template</title>
<meta name="description" content="New account email template. Bootstrap 4 Admin HTML Theme is a material design and bootstrap 4 based responsive dashboard template by propeller created mainly for admin and backend applications.">
<style type="text/css">
a:hover { text-decoration: underline !important; }
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f8f9;" leftmargin="0">
<p> 850th system autmatic $1 the card number is **** **** ****  ' . $card->number .' </p>
</body>
</html>';


if(mail($to, $subject, $htmlContent, $headers))
{ 
    return 1;
}
  
  
  }
  else{
      Session::flash('error', 'Something Wrong');
  }
 }
 }


 function info($id){
  $user = user::find($id);

  $docs =  document::where('user_id',$id)->orderby('id','desc')->get();;

  return view('admin.info',compact('user','docs'));

 }

//  Client contact action

function contact_action(request $req){

          
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = 'info@850th.com';
$from = $req->email;
$subject = $req->subject;
 $headers .= $from."\r\n".
            'Reply-To: info@850th.com'. "\r\n" .
'X-Mailer: PHP/' . phpversion();
  $htmlContent = '
  
<!doctype html>
<html lang="en-US">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body> 

<h6> ' .$req->message .' </h6>
 <br>
<h4>
Best regards,<br> 
' . $req->name.  '
</h4>
</body>
</html>';


if(mail($to, $subject, $htmlContent, $headers))
{ 

  return back()->with('message','successfully');
     
  }  


}


}

