<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 06/12/2015
 * Time: 17:35
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Validators\ProjectNoteValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ProjectNoteService
{

    /**
     * @var ClientRepository
     */
    protected $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;

    }

    public function create(array $data){

        try{
            $this->validator->with($data)->passesOrFail();

            return $this->repository->create($data);
        }catch(ValidatorException $e){
            return [
                'error'=>true,
                'message'=>$e->getMessageBag()
            ];
        }




    }

    public function update(array $data, $id){

        try{
            $this->validator->with($data)->passesOrFail();

            return $this->repository->update($data,$id);
        }catch(ValidatorException $e){
            return [
                'error'=>true,
                'message'=>$e->getMessageBag()
            ];
        }
    }
}