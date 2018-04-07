<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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
     * @param int|null $perPage
     * @param string $pageName
     * @param int|null $page
     *
     * @return LengthAwarePaginator
     */
    public function paginate(
        ?int $perPage = null,
        string $pageName = 'page',
        int $page = null
    ): LengthAwarePaginator;

    /**
     * Returns true on success delete else false.
     *
     * @param mixed $id
     *
     * @return bool
     */
    public function delete($id): bool;

    /**
     * Save model.
     *
     * @param ModelContract $model
     *
     * @return ModelContract
     */
    public function save(ModelContract $model): ModelContract;
}