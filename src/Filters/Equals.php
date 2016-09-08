<?php namespace Jnet\Api\Filters;

use Illuminate\Database\Eloquent\Builder;

class Equals extends FilterAbstract implements FilterInterface
{
    public function filter(Builder $query)
    {
        return $query->where($this->key, $this->value);
    }
}
