<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use LaravelThings\Repository\Contracts\ModelContract;
use LaravelThings\Repository\Contracts\RepositoryContract;
use LaravelThings\Repository\Exceptions\NullRepositoryModelException;

class BaseRepository implements RepositoryContract
{
    /**
     * @var string $model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param ModelContract|Model $model
     */
    public function __construct(ModelContract $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return ModelContract|Model
     */
    public function create(array $attributes): ModelContract
    {
        return $this->query()->create($attributes);
    }

    /**
     * Find record by ID.
     *
     * @param mixed $id
     *
     * @return ModelContract|null
     */
    public function findOne($id): ?ModelContract
    {
        return $this->query()->whereKey($id)->first();
    }

    /**
     * Find record by ID.
     *
     * @param array $id
     *
     * @return \Illuminate\Support\Collection
     */
    public function findMany(array $id): ?Collection
    {
        return $this->query()->whereKey($id)->get();
    }

    /**
     * Returns true on success delete else false.
     *
     * @param ModelContract|mixed $identifier
     *
     * @return bool
     */
    public function delete($identifier): bool
    {
        $key = $identifier instanceof ModelContract ? $identifier->getKey() : $identifier;

        $affectedRowsCount = $this->query()->getQuery()->delete($key);

        return $affectedRowsCount > 0;
    }

    /**
     * @return Builder
     * @throws NullRepositoryModelException
     */
    protected function query(): Builder
    {
        if ($this->model === null)
        {
            throw new NullRepositoryModelException(
                sprintf('$model property must be declared for repository [%s]', get_class($this))
            );
        }

        return $this->model->newQuery();
    }
}