<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //use HasFactory;
    protected $fillable = [
        'name',
        'address', 
        'number_tlp', 
        'order_date', 
        'catalogs_id', 
        'package', 
        'total_product',
    ];

    public function catalog() {
        return $this->belongsTo(Catalog::class, 'catalogs_id');
    }
    }
        
        

