<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Roles
 * @package App\Models
 * @version February 6, 2021, 3:47 am UTC
 *
 * @property string $role_name
 */
class Challenges extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'challenges';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name','filename','suggest'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'=>'string',
        'filename' => 'string',
        'suggest' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'filename' => 'required|string|max:255',
        'suggest' =>'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

}
