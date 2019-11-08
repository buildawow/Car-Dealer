<?php namespace App\Services\Search;

class Search 
{
    /**
     * Undocumented function
     *
     * @param Illuminate\Database\Eloquent\Builder $builder
     * @param integer $paginateNumber
     * @return void
     */
    public function query($model, $columns, $paginateNumber = 10)
    {
        $query = request('query');
        $groups = ($model);
        foreach ($columns as $column) {
            $groups = $groups->$column($query);
        }
        $groups = $groups->paginate($paginateNumber);
        return $groups->appends(['query' => $query]);
    }

    /**
     * Undocumented function
     *
     * @param Illuminate\Database\Eloquent\Builder $builder
     * @param integer $paginateNumber
     * @return void
     */
    public function queryTrashed($model, $columns, $paginateNumber = 10)
    {
        $query = request('query');
        $groups = ($model);
        foreach ($columns as $column) {
            $groups = $groups->$column($query);
        }
        $groups = $groups->onlyTrashed()->paginate($paginateNumber);
        return $groups->appends(['query' => $query]);
    }



}