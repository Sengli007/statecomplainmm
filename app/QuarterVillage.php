<?php

namespace App;
use App\Township;
use App\ComplainPlace;


use Illuminate\Database\Eloquent\Model;

class QuarterVillage extends Model
{
    protected $fillable = [
        'name','township_id','complainplace_id',
    ];

    public function township($value=''){
        return $this->belongsTo('App\Township');
    }
    
    public function complain_place($value=''){
        return $this->belongsTo('App\ComplainPlace','complainplace_id');
    }


   
}
