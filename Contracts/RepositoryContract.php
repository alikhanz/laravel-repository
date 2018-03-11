<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Contracts;

use Illuminate\Support\Collection;

interface RepositoryContract
{
    /**
     * @param array $attributes
     *
     * @return ModelContract
     */
    public function create(array $attributes): ModelContract;

    /**
     * Find record by ID.
     *
     * @param mixed $id
     *
     * @return ModelContract|null
     */
    public function findOne($id): ?ModelContract;

    /**
     * Find record by ID.
     *
     * @param array $id
     *
     * @return \Illuminate\Support\Collection
     */
    public function findMany(array $id): ?Collection;

    /**
     * Returns true on success delete else false.
     *
     * @param mixed $id
     *
     * @return bool
     */
    public function delete($id): bool;
}