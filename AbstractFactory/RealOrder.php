<?php


namespace patterns\AbstractFactory;


class RealOrder implements OrderInterface
{
    /**
     * @var ProductInterface[]
     */
    protected $products = [];

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function calculateSum()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }

        return $sum;
    }
}