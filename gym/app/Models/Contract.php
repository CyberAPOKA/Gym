<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
    
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    public $table = 'contracts';

    public $fillable = [
        'id',
        'client_id',
        'total_value',
        'installments',
        'payment_type',
        'asaas_installment_id'
    ];

        /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [
        'client_id'           => 'integer',
        'total_value'         => 'double',
        'installments'        => 'integer',
        'payment_type'        => 'string',
        'asaas_installment_id'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'client_id'           => 'required',
        'total_value'         => 'required',
        'installments'        => 'required',
        'payment_type'        => 'required',
        'asaas_installment_id'=> 'required',
    ];

}
