<?php


namespace patterns\DI;


class Storage
{
    public function getItemsDirect()
    {
        return ['one', 'two', 'three'];
    }

    public function getItemsCallback($callback)
    {
        $items = $this->getItemsDirect();
        // ...

        $result = $callback($items);
        // ...


        return $result;
    }
}