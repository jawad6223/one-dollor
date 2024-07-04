<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriber_transaction extends Model
{
    use HasFactory;
    protected $table='subscriber_transaction';
    
    protected $fillable = ['card_number','transaction_id','created_at','amount','user_id'];

     
    public function user_info (){
        
        return $this->belongsTo(user::class,'user_id');    
    }
}
