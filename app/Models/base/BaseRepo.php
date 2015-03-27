<?php namespace App\Models\base;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract function getModel();

    /**
     * devolver coleccion de todas las filas de un modelo
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * devuelve todos los registros de un modelo paginados
     *
     * @return mixed
     */
    public function paginate()
    {
        return $this->model->paginate();
    }

    /**
     * Filtra y pagina los resultados obtenidos
     *
     * @return mixed
     */
    public function filterAndPaginate()
    {
        $data = func_get_args();

        $query = $this->model->select('*');

        foreach($data as $element)
        {
            $query->where(function ($query) use ($element){
                foreach($element as $col => $term)
                {
                    if( is_array($term) )
                    {
                        foreach($term as $or_col => $or_term)
                        {
                            if( trim($or_term) != '' )
                            {
                                $query->orWhere($or_col, 'like', "%$or_term%");
                            }
                        }
                    }
                    else
                    {
                        if( trim($term) != '' )
                        {
                            $query->where($col, 'like', "%$term%");
                        }
                    }
                }
            });
        }

        return $query->paginate();
    }

    /**
     * eliminar una fila o una collecion de filas de un modelo según su id
     * $id puede ser un valor entero o un arreglo de valores enteros
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        try
        {
            return $this->model->destroy($id);
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return false;
        }
    }

    /**
     * crea y guarda un nuevo registro en la bd
     *
     * @param array $data
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * devolver una fila o una coleccion de filas según su id
     * $id puede ser un valor entero o un arreglo de valores enteros
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /*
     * Buscar un registro de la base de datos y devolverlo o
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /*
     * devolver una fila o una coleccion de filas que han sido eliminadas
     * con softDelete segun su id
     *
     * @param   int $id
     * @return  mixed
     */
    public function findTrashed($id)
    {
        return $this->model->withTrashed()->find($id);
    }

    /**
     * devolver la primera fila de un modelo
     *
     * @return mixed
     */
    public function first()
    {
        return $this->model->first();
    }

    /**
     * devolver una coleccion de filas con una o dos columnas
     * para generar la lista de opciones de un elemento select de HTML
     *
     * @param string $column
     * @param null   $key
     * @return array
     */
    public function lists($column, $key=null)
    {
        return ( is_null($key) ) ? $this->model->lists($column) : $this->model->lists($column, $key);
    }

    /**
     * devolver una columna de la primer fila de un modelo
     *
     * @param  string $column
     * @return mixed
     */
    public function pluck($column)
    {
        return $this->model->pluck($column);
    }

    /**
     * Borrar todas las filas de un modelo
     *
     * @return mixed
     */
    public function truncate()
    {
        return $this->model->truncate();
    }

    /**
     * devolver coleccion de todas las filas de un modelo
     *
     * @param string $paginate devolver toda la colleccion en forma de arreglo o paginada
     * @param string $column   columna para ordenar la coleccion
     * @param string $order    orden en que se devolvera la coleccion (ASC|DESC)
     * @return mixed
     */
    public function getAll($paginate=true, $column='id', $order='ASC')
    {
        $q = $this->model->orderby($column, $order);

        return ( $paginate ) ? $q->get() : $q->paginate();
    }

    /**
     * devolver coleccion de todas las filas que han sido eliminadas
     * con soft delete de un modelo
     *
     * @param string $paginate devolver toda la colleccion en forma de arreglo o paginada
     * @param string $column   columna para ordenar la coleccion
     * @param string $order    orden en que se devolvera la coleccion (ASC|DESC)
     * @return mixed
     */
    public function getTrashed($paginate=true, $column='id', $order='ASC')
    {
        $q = $this->model->onlyTrashed()->orderby($column, $order);

        return ( $paginate ) ? $q->get() : $q->paginate();
    }

}
