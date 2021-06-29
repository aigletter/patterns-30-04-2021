<?php


namespace patterns\Observer;


class Order implements \SplSubject
{
    protected $status;

    /**
     * @var ObserverInterface[]
     */
    protected $observers = [];

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver  $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($item === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeStatus($status)
    {
        $this->status = $status;
        $this->notify();
    }
}