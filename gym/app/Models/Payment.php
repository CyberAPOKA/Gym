<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
    
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    public $table = 'payments';

    public $fillable = [
        'id',
        'contract',
        'value',
        'parcel_number',
        'original_due_date',
        'due_date',
        'status',
        'asaas_payment_id'
    ];

        /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [
        'contract'         => 'integer',
        'value'            => 'double',
        'parcel_number'    => 'integer',
        'original_due_date'=> 'date',
        'due_date'         => 'date',
        'status'           => 'integer',
        'asaas_payment_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contract'        => 'required',
        'value'           => 'required',
        'parcel_number'   => 'required',
        'due_date'        => 'required',
        'status'          => 'required',
        'asaas_payment_id'=> 'required',
    ];

}
