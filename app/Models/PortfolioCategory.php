<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    public function portfolios(){
        $this->hasMany(Portfolio::class,'portfolio_category_id','id');
    }

}
