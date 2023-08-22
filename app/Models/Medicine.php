<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function vendor_details(){
        return $this->belongsTo(Vendor_Details::class);
    }
}
