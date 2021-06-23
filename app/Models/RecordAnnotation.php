<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordAnnotation extends Model
{
    use HasFactory;

    protected $fillable=['color','start_time','end_time','record_id'];
    //one to many relationship between record and annotations
    public function Record(){
        return $this->belongsTo(Record::class);
    }
}
