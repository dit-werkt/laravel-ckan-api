<?php

namespace Germanazo\CkanApi\Repositories;

class DatastoreRepository extends BaseRepository
{
    protected $action_name = 'datastore';

    /**
     * @param array $data
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.revision_list
     *
     * @return array
     */
    public function all($data)
    {
        $defaults = [];

        $data = array_merge($defaults, $data);

        return parent::list($data);
    }
}