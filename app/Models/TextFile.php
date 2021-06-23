<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextFile extends Model
{
    use HasFactory;

    protected $fillable=['record_id','name','path'];


    //one to one relation between record and text file
    public function Record(){
        return $this->belongsTo(Record::class);
    }

    //one to many relation between text file and topics'
    public function Topics(){
        return $this->hasMany(Topic::class);
    }
}
