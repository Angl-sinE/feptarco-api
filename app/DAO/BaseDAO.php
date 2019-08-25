<?php
namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

abstract class BaseDAO
{

    protected $class = '';

    /**
     * BaseDAO constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        if (! class_exists($this->class)){
            throw new \Exception(self::class. ':: $class does not exists');
        }
    }

    /**
     * @param Model $model
     */
    public function create(Model $model)
    {
        $model->save();
    }

    /**
     * @param Model $model
     * @throws \Exception
     */
    public function delete(Model $model)
    {
        $model->delete();
    }

    /**
     * @param $fields
     * @param Model $model
     */
    public function update(Model $model, $fields = null)
    {
        $model->update($fields);

    }


    /**
     * Finds model with id
     *
     * @param $id
     * @return Model
     */
    public function find($id)
    {
        $model = (new $this->class())::select(['*']);

        return $model->find($id);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function findBy(array $params)
    {
        $model = (new $this->class())::select(['*']);

        foreach ($params as $key => $value) {
            $model->where($key, $value);
        }

        return $model->get();
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function findOneBy(array $params)
    {
        $model = (new $this->class())::select(['*']);

        foreach ($params as $key => $value) {
            $model->where($key, $value);
        }

        return $model->first();
    }

    /**
     * Finds all records
     * @return mixed
     */
    public function findAll()
    {
        return (new $this->class())::all();
    }

    /**
     * @param Model $model
     * @param $id
     * @return mixed
     */
    public function findOrFail(Model $model, $id){
        $model::findOrFail($id);

        return $model->get();
    }
}
