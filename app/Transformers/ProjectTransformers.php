<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 09/12/2015
 * Time: 21:40
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\Project;
use League\Fractal\TransformerAbstract;

class ProjectTransformers extends TransformerAbstract
{

    public function transform(Project $project){

        return [
           
            'description' => $project->description,
            'progress' => $project->progress,
            'status' => $project->status,
            'due_date' => $project->due_date,
        ];

    }

}