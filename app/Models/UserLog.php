<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    public $timestamps  = false;
    protected $table = 'UserLog';
    protected $primaryKey = 'idSysLog';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idClient',
    ];

    protected $casts = [
        'idClient' => 'integer',
    ];

    /**
     * The sysLog of an auction
     */
    public function systemManagerLog() {
        return $this->belongsTo('App\Models\SystemManagerLog', 'idSysLog' , 'idSysLog');
    }

    /**
     * The sysLog of an auction
     */
    public function client() {
        return $this->belongsTo('App\Models\Client', 'idClient' , 'idClient');
    }
}
