<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['name'];
    // ['name','notlpn'] kalo lebih dari 1
    //memberikan akses data apa asaja yang bisa diisi
    protected $fillable = ['name'];
    //mencatat waktu pembuatan data update data otomatis
    public $timestamps = true;

    //membuat relasi on to many
    public function books()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "Book" memalui fk "author_id"

        return $this->hasMany('App\Models\Book','author_id');
    }

}
