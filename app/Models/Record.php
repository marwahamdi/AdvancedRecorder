<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable=['name','duration','size','type','path','started_at','ended_at',];

    //one to one relation between record and text file
    public function TextFile(){
        return $this->hasOne(TextFile::class);
    }

   //one to many relation between record and topics
   public function Topics(){
       return $this->hasMany(Topic::class);
   }

   //one to many relationship between record and annotations
   public function RecordAnnotations(){
       return $this->hasMany(RecordAnnotation::class);
   }
}
