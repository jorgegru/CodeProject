<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 09/12/2015
 * Time: 21:53
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ProjectTransformers;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {
        // TODO: Implement getTransformer() method.
        return new ProjectTransformers();
    }
}