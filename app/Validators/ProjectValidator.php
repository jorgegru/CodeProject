<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 06/12/2015
 * Time: 17:56
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id'=>'required',
        'client_id'=>'required',
        'name'=>'required',
        'progress'=>'required',
        'status'=>'required',
        'due_date'=>'required'
    ];
}