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


class usercontroller extends Controller
{
    public function user_login_action(request $req){
    
        $req->validate([
          'email' => 'required|email',
          'password'=> 'required',
        ]);
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'role_id' => 2])) {
          if(auth::user()->role_id== 2 && auth::user()->status == 1){
               
              $mytime = Carbon::today()->addDays(-7)->format('y-m-d');  
              $count =card::where('user_id',Auth::user()->id)->whereDate('recurrent_charges','>=', $mytime)->count();
              session(['key' => $count]);

              return redirect('user/dashboard');

          }
          else{
            return back()->with(['error1'=> 'Password and Email does not match try again']);
          }
      }
        else{
          return back()->with(['error1'=> 'Password and Email does not match try again']);
        }
      
      }
     
      
      
    //   Signup
      public function signup()
      {
      
        return view('user.signup');
      }
      
      public function signup_action(request $req)
      {
      
         $req->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|max:16|min:6',
                'confirm_password' => 'required|max:16|min:6',
        ]);
        
         $randomNumber = random_int(100000, 999999);
           
        $user11 = User::create([
           'name'=>$req->name,
           'email'=>$req->email,
           'password'=>bcrypt($req->password),
           'role_id'=> 2,
           'image' =>'public\assets\images\profile.png',
           'verification' => $randomNumber
        ]);
        
     
    if($user11){
         $from = "info@850th.com";
        $headers = "From:" . $from;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
     
            $to = $req->email;
         
            $subject = '850th system SignUp (OTP) Confirmation';
            $message = '<h3> Hello ' .$user11->name . '</h3> <p> Thanks you for chossing 850th System use the following OTP to complete your SignUp procedures.</p>  <button style="color:#040d50">'. 
$randomNumber.' </button>';
        
            
            'Reply-To: info@850th.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
       
            if(mail($to, $subject, $message, $headers))
            {
                
                  return redirect('user/verification/'.$user11->id);
            }
            else{
                return redirect('user/signup/');
            
            }
      
  }
                    
                  
      
      }
    //   verification
    public function verification($id){
        return view('user.verification',compact('id'));
    }
    
    public function verification_action(request $req){
       

   $user_check=  user::find($req->user_id);
   
   if($user_check->verification == $req->otp ){
       
    user::where('id',$req->user_id)->update([
      
      'verification'=>null,
  ]);
     return redirect('user/subscription/' . $req->user_id);
   }
   else{
        return back()->with('error','incorrect otp try again!!');
   }
  
       
    }
    
    public function again_verification_action($id){
        
        $user = user::find($id);
        
           $randomNumber = random_int(100000, 999999);
           
        $user11 = user::where('id',$id)->update([
          
          'verification'=> $randomNumber,
      ]);
        
        if($user){
         
               
             $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $to = $user->email;
            $from = 'info@850th.com';
            $subject = '850th system Again SignUp (OTP) Confirmation';
            $message = '<h3> Hello ' .$user->name . '</h3> <p> Thanks you for chossing 850th System use the following OTP to complete your SignUp procedures.</p>  <button style="color:#040d50">'. 
$randomNumber.' </button>';
            
             $headers .= 'From: info@850th.com'."\r\n".
            'Reply-To: info@850th.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
       
            if(mail($to, $subject, $message, $headers))
            {
                  return redirect('user/verification/'.$user->id);
            }
      
          
      }
    
    }

    // subscription

    function subscription($id){
return  view ('user.subscription' ,compact('id'));
    }
    
    
  public function stripePost1(Request $request)
  {
   $sub = subscription_package::first();
$user = user::find($request->user_id);

    

// Create a Customer:
    $customer = \Stripe\Customer::create([
    'source' => $request->stripeToken,
    'email' =>  $user->email,
]);

// Charge the Customer instead of the card:
$charge = \Stripe\Charge::create([
    'amount' => $sub->price * 100,
    'currency' => 'usd',
    'customer' => $customer->id,
]);



      
if ($charge->status == "succeeded"){

    user::where('id', $request->user_id)->update([
    'status' => 1
      ]);
    

      subscriber_transaction::create([
      'card_number' => $charge->source->last4,
      'transaction_id' =>$charge->id,
      'amount' => $charge->amount/100,
      'user_id' =>$request->user_id,
      ]); 
      
       
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $user->email;
$from = 'info@850th.com';
$subject = 'Member of our 850th family';
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
Thank you for being a part member of our outstanding family. 850th was created to help and educate all the members to develop and maintain their credit life to the maximum possible. <br> 
The program does maintain a minimum charge to create a credit history and does not allow the card to be in inactive status for the bank to close it, hurting your already built credit. You will be charged an annual membership for accessing this benefit on all added personal and business credit cards!
<br> <b>
Best regards,<br> 
850th Team
</b>
</body>
</html>';


if(mail($to, $subject, $htmlContent, $headers))
{ 
  
      Session::flash('success', 'Payment successful!');   
      return redirect('user/login');
}
      
  }
  else{
      Session::flash('error', 'Something Wrong');
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

     public function dashboard(){
        $total = card::where('user_id',auth()->id())->count();
        $active =  card::where('user_id',auth()->id())->where('status',1)->count();
        $block=  card::where('user_id',auth()->id())->where('status',0)->count();
        return view('user.dashboard',compact('total','active','block'));
     }


     

  
  //profile
  public function profile()
  {
    $id = auth::id();
   
    $user = user::find($id);
    $card =card :: where('user_id', auth()->id())->orderby('id','desc')->get();
  

    return view('user.profile',compact('user','card'));
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
  

  return redirect('user/profile')->with('message1','Successfully Updated Profile');  
   }
  //update password
  public function update_password()
  {
    return view('user.update_password');
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



  public function add_card()
  {
   return view('user.add_card');
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
    
    'creditor_name' => $request->creditor_name,
    'credit_limit' => $request->credit_limit,
    'opened_date'  => $request->opened_date,
    'responsibility' => $request->responsibility,

    'charges' => $request->current_charges,
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
  else{
      Session::flash('error', 'Something Wrong');
  }
}
  }

function view_card(){

  $card =card :: where('user_id', auth()->id())->orderby('id','desc')->get();
  
  return view('user.view_card',compact('card'));
}


public function card_delete($id){
  $card = card::find($id);
  $card->delete();
  return back()->with('delete','delete');

}
// Card Transaction
function card_transaction(){

  $trans =card_transaction :: where('user_id', auth()->id())->orderby('id','desc')->get();
  
  return view('user.card_transaction',compact('trans'));
}

public function subscription_package(){
  $sub =subscription_package::first();

  return view('user.subscription_package',compact('sub'));
}

// Card Transaction
function subscriber_transaction(){

    $trans =subscriber_transaction :: where('user_id', auth()->id())->orderby('id','desc')->get();
    
    return view('user.subscriber_transaction',compact('trans'));
  }


  // Docs

  function docs(){
            $id = auth::id();
            $docs = document::where('user_id',$id)->get();
            
return view('user.docs',compact('docs'));
  }


  
  public  function dropzoneFileUpload1(Request $req)  
  {  
   

      $image = $req->file('file');
      

      $ext = $image->extension();
  
  
      $imageName =  uniqid().'.'.$ext; 



   $one  = document::create([
              'user_id'=>$req->user_id,
              'file'=>$imageName
              ]); 

     $saveimage = $image->move(public_path('files'),$imageName);  

      return response()->json(['success'=>$imageName]);
  }

function docs_delete($id){
$docs = document::find($id);

  $destinationPath = 'public/files/'.$docs->file;


  if(file::exists($destinationPath)){   

   file::delete($destinationPath);
   $docs->delete();
   return back()->with('delete','delete');
  }
}
 // Logout
    
 function  logout(){
    auth::logout();
return redirect('/user/login');

}
}
