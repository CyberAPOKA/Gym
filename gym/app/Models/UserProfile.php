<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
    
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    public $table = 'user_profiles';

    public $fillable = [
        'id',
        'user_id',
        'name',
        'phone_number',
        'gym_plan_id',
        'birthday',
        'city',
        'province',
        'address',
        'address_number',
        'asaas_client_id'
    ];

        /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [
        'user_id'        => 'integer',
        'name'           => 'string',
        'phone_number'   => 'string',
        'gym_plan_id'    => 'integer',
        'birthday'       => 'date',
        'city'           => 'string',
        'province'       => 'string',
        'address'        => 'string',
        'address_number' => 'string',
        'asaas_client_id'=> 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id'       => 'required',
        'name'          => 'required',
        'phone_number'  => 'required',
        'birthday'      => 'required',
        'city'          => 'required',
        'province'      => 'required',
        'address'       => 'required',
        'address_number'=> 'required',
    ];

    

    public function enrollments()
    {
        return $this->hasMany(\App\Models\Enrollment::class, 'contract_id');
    }

    public function unit()
    {
        return $this->belongsTo(\App\Models\Unit::class, 'unit_id');
    }
}
