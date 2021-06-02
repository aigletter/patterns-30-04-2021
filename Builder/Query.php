<?php


namespace patterns\Builder;


class Query
{
    protected $table;
    protected $select;
    protected $orderBy;
    protected $groupBy;
    protected $join;
    protected $where;

    public function __construct($table, $select, $orderBy = null, $groupBy = null, $join = null, $where = null)
    {
        $this->table = $table;
        $this->select = $select;
        $this->orderBy = $orderBy;
        $this->groupBy = $groupBy;
        $this->join = $join;
        $this->where = $where;
    }

    public function query()
    {
        return $this;
    }
}