<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;
    protected $table='card';
    protected $fillable = ['user_id','nick_name','charges','status','recurrent_charges','creditor',
    'card_number','customer_id','expiration_month','expiration_year','creditor_name','credit_limit','opened_date','responsibility'];
    
      public function user_info (){
        
        return $this->belongsTo(user::class,'user_id');    
    }


}
