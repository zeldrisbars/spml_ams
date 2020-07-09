<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [

    	'emp_firstname',
    	'emp_lastname', 
    	'emp_nickname',
    	'emp_middlename',
    	'emp_department',
    	'emp_num',
        'emp_image',
    	'emp_password',
    	'position',
        'status',
    ];
    protected $table = 'employee_infos';

    protected $softDelete = true;

    protected $primaryKey = 'id';

    public function dtr_emp()
    {
        return $this->belongsTo('App\DailyTimeRecord','emp_num');
    }
}
