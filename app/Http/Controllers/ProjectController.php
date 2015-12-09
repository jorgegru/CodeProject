<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ProjectRepository;
use CodeProject\Services\ProjectService;
use Illuminate\Http\Request;

use CodeProject\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    private $service;

    public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->findWhere(['owner_id'=>\Authorizer::getResourceOwnerId()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if($this->checkProjectOwner($id)==false){
            return ['error'=>'sem permissão'];
        }

        return $this->repository->find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($this->checkProjectOwner($id)==false){
        return ['error'=>'sem permissão'];
    }

        return $this->service->update($request->all(),$id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->checkProjectOwner($id)==false){
            return ['error'=>'sem permissão'];
        }
       return $this->repository->delete($id);
    }

    private function checkProjectOwner($projectId){
        $userId = \Authorizer::getResourceOwnerId();

       return $this->repository->isOwner($projectId, $userId);


    }
}
