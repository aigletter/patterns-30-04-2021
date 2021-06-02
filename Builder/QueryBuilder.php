<?php


namespace patterns\Builder;


class QueryBuilder
{
    protected $table;
    protected $select;
    protected $orderBy;
    protected $groupBy;
    protected $join;
    protected $where;

    /**
     * @param mixed $table
     * @return QueryBuilder
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @param mixed $select
     * @return QueryBuilder
     */
    public function setSelect($select)
    {
        $this->select = $select;
        return $this;
    }

    /**
     * @param mixed $orderBy
     * @return QueryBuilder
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * @param mixed $groupBy
     * @return QueryBuilder
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
        return $this;
    }

    /**
     * @param mixed $join
     * @return QueryBuilder
     */
    public function setJoin($join)
    {
        $this->join = $join;
        return $this;
    }

    /**
     * @param mixed $where
     * @return QueryBuilder
     */
    public function setWhere($where)
    {
        $this->where = $where;
        return $this;
    }

    public function build()
    {
        return new Query($this->table, $this->select, $this->orderBy, $this->groupBy, $this->join, $this->where);
    }
}