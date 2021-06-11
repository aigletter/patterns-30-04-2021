<?php


namespace patterns\Composite;


abstract class CompositeAbstract implements CompositeInterface
{
    protected $elements = [];

    protected $tag = 'span';

    protected $text;

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    public function add(CompositeInterface $element)
    {
        $this->elements[] = $element;
    }

    public function remove(CompositeInterface $element)
    {
        foreach ($this->elements as $key => $item) {
            if ($element === $item) {
                unset($this->elements[$key]);
            }
        }
    }

    public function render()
    {
        $output = '<' . $this->tag . '>';
        $output .= $this->text;
        foreach ($this->elements as $child) {
            $output .= $child->render();
        }
        $output .= '</' . $this->tag . '>';

        return $output;
    }
}