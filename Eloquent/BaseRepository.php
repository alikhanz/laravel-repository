<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Eloquent;

use LaravelThings\Repository\Contracts\RepositoryContract;

class BaseRepository implements RepositoryContract
{
    /**
     * Find record by ID
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    /**
     * Returns true on success delete else false.
     *
     * @param mixed $id
     *
     * @return bool
     */
    public function delete($id): boolean
    {
        // TODO: Implement delete() method.
    }
}