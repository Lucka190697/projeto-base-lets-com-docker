<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class Has extends Criteria
{
    private $values;
    private $operator;
    private $field;

    public function __construct($field, $operator = null, $values = null)
    {
        $this->values = $values;
        $this->operator = $operator;
        $this->field = $field;
    }

    public function apply($queryBuilder, Repository $repository)
    {
        return ($this->values)
            ? $queryBuilder->has($this->field, $this->operator, $this->values)
            : $queryBuilder->has($this->field, $this->operator);
    }
}
