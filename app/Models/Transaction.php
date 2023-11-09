<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = ['name', 'amount', 'type', 'user_id', 'category_id'];
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }
    

}
