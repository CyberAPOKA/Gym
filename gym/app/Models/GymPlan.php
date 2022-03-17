<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymPlan extends Model
    
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    public $table = 'gym_plans';

    public $fillable = [
        'id',
        'title',
        'description',
        'value',
    ];

        /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [
        'title'        => 'string',
        'description'  => 'string',
        'value'        => 'double',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'      => 'required',
        'description'=> 'required',
        'value'      => 'required',
    ];

}
