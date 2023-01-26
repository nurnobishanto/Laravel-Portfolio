<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'portfolio_category_id',
        'title',
        'url',
        'client',
        'date',
        'details',
        'images',
    ];

    public function category(){
        $this->belongsTo(PortfolioCategory::class);
    }
}
