<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'portfolio_category_id',
        'type',
        'title',
        'url',
        'client',
        'date',
        'details',
        'image',
    ];

    public function category(){
        $this->belongsTo(PortfolioCategory::class,'portfolio_category_id','id');
    }
}
