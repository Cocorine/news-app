<?php

namespace Core\Services\Contracts;

use Core\Repository\EloquentRepositoryInterface;
use Core\Services\Contracts\AbstractServiceInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Abstract class BaseService
 * @package Core\Services\Contracts
 */
class BaseService implements AbstractServiceInterface
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change variable $model or $this->repository
     * @property Repository $repository;
     */

    /**
     * @var repository
     */
    protected $repository;

    /**
     * BaseService constructor.
     *
     * @param BaseRepository $repository
     */
    public function __construct(EloquentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }



    /**
     * Instanciate Model
     *
     * @return Model
    */
    public function newInstance(): Model
    {
        return $this->repository->newInstance();
    }
    

    /**
     * count all occurence of Model
     *
     * @return int
     */
    public function getCount(): int 
    {
        return $this->repository->getCount();
    }


    /**
     * Get all models.
     *
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function all(array $columns = ['*'], array $relations = []): Collection 
    {
        try {

            return $this->repository->all($columns, $relations);

        } catch (\Throwable $th) {

            return null;
        
        }
    }

    /**
     * Get all trashed models.
     *
     * @return Collection
     */
    public function allTrashed(): Collection {

        try {

            return $this->repository->allTrashed();

        } catch (\Throwable $th) {

            return null;
        
        }

    }

    /**
     * Find model by id.
     *
     * @param int $modelId
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {

        try {

            return $this->repository->findById($modelId, $columns, $relations, $appends);

        } catch (\Throwable $th) {

            return null;
        
        }

    }


    /**
     * Find model by attribut.
     *
     * @param string $attributName
     * @param string $attributValue
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findByAttribute(
        string $attributName,
        string $attributValue,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {

        return $this->repository->findByAttribute($attributName, $attributValue, $columns, $relations, $appends);

    }


    /**
     * Find trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findTrashedById(int $modelId): ?Model
    {
        try {

            return $this->repository->findTrashedById($modelId);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Find only trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findOnlyTrashedById(int $modelId): ?Model 
    {
        try {

            return $this->repository->findOnlyTrashedById($modelId);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload): ?Model 
    {
        try {

            return $this->repository->create($payload);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Update existing model.
     *
     * @param int $modelId
     * @param array $payload
     * @return bool
     */
    public function update(int $modelId, array $payload): bool 
    {
        try {

            return $this->repository->update($modelId, $payload);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteById(int $modelId): bool 
    {
        try {

            return $this->repository->deleteById($modelId);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Restore model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function restoreById(int $modelId): bool
    {
        try {

            return $this->repository->all($modelId);

        } catch (\Throwable $th) {

            throw new Exception($th->getMessage(), 500);
        
        }
    }

    /**
     * Permanently delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function permanentlyDeleteById(int $modelId): bool
    {
        try {

            return $this->repository->all($modelId);

        } catch (\Throwable $th) {
            
            throw new Exception($th->getMessage(), 500);
        
        }
    }

}