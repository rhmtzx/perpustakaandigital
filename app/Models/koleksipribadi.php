<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksipribadi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }
    public function bukus()
    {
        return $this->belongsTo(Buku::class, 'bukuid', 'id');
    }
}
