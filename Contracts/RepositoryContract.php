<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Contracts;

interface RepositoryContract
{
    /**
     * Find record by ID
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function findById($id);

    /**
     * Returns true on success delete else false.
     *
     * @param mixed $id
     *
     * @return bool
     */
    public function delete($id): boolean;
}