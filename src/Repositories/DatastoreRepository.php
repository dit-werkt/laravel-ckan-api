<?php

namespace Germanazo\CkanApi\Repositories;

class DatastoreRepository extends BaseRepository
{
    protected $action_name = 'datastore';


    public function search($id, $params = [])
    {
        $data = ['id' => $id] + $params;

        return $this->query(__FUNCTION__, $data);
    }
}