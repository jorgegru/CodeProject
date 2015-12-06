<?php
/**
 * Created by PhpStorm.
 * User: jgsite
 * Date: 06/12/2015
 * Time: 16:25
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model(){
        return Client::class;
    }
}