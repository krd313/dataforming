<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function cuscustomer(){
        return $this->belongsTo(CusCustomer::class,'cuscustomer_id','id');
    }

    public function customerjob(){
        return $this->belongsTo(CustomerJob::class,'customerjob_id','id');
    }

    public function customerjoborder(){
        return $this->belongsTo(CustomerJob::class,'customerjob_order','id');
    }
}
