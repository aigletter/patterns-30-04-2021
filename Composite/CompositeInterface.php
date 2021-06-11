<?php


namespace patterns\Composite;


interface CompositeInterface
{
    public function add(CompositeInterface $element);

    public function remove(CompositeInterface $element);

    public function render();
}