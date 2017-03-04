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
            'id' => $project->id,
            'client_id' => $project->client_id,
            'client_id2' => $project->client_id,
            'owner_id' => $project->owner_id,
            'name' => $project->name,
            'description' => $project->description,
            'progress' => $project->progress,
            'status' => $project->status,
            'due_date' => $project->due_date,
        ];

    }

}