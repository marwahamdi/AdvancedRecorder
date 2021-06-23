<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable=['title','record_id','textFile_id'];

     //one to many relation between record and topics
     public function Record(){
     return $this->belongsTo(Record::class);
     }

     //one to many relation between text file and topics
     public function TextFile(){
         return $this->belongsTo(TextFile::class);
     }
}
