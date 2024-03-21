<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribukurelasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    
	public function bukus()
    {
        return $this->belongsTo(Buku::class, 'bukuid', 'id');
    }

    public function kategoris()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategoriid', 'id');
    }

    public function raks()
    {
        return $this->belongsTo(Rakbuku::class, 'rakid', 'id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
