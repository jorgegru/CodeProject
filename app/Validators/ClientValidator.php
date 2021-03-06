<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 06/12/2015
 * Time: 17:56
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name'=>'required|max:255',
        'responsible'=>'required|max:255',
        'email'=>'required|email',
        'phone'=>'required',
        'address'=>'required',
    ];
}