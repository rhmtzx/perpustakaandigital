<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];


    public function bukus()
    {
        return $this->belongsTo(Buku::class, 'bukuid', 'id');
    }
    public function users()
    {
    	return $this->belongsTo(User::class, 'userid', 'id');
    }
}
