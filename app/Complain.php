<?php

namespace App;

use App\Township;
use App\ComplainPlace;
use App\QuarterVillage;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'title','image','description','user_id','township_id','quartervillage_id','status_id'
    ];

    public function township($value=''){
        return $this->belongsTo('App\Township');
    }

    public function quarter_village($value=''){
        return $this->belongsTo('App\QuarterVillage','quartervillage_id');
    }

    public function complain_place($value=''){
        return $this->belongsTo('App\ComplainPlace');
    }

    public function status($value=''){
        return $this->belongsTo('App\Status');
    }
}
