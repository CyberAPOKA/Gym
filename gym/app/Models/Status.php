<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
    
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    public $table = 'status';

    public $fillable = [
        'id',
        'status',
        'description',
    ];

        /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [
        'status'        => 'string',
        'description'  => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status'      => 'required',
        'description'=> 'required',
    ];

}
