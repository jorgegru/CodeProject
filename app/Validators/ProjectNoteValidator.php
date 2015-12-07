<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 06/12/2015
 * Time: 17:56
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id'=>'required',
        'title'=>'required',
        'note'=>'required'
    ];
}