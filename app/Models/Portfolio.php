<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'portfolios';
    //Primary key
    public $primaryKey = 'id';

    protected $fillable = [
        'id',
        'portfolio_category_id',
        'type',
        'title',
        'url',
        'client',
        'date',
        'about',
        'details',
        'image',
    ];

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'portfolio_category_id');
    }
}
