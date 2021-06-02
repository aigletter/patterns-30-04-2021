<?php

/**
 * @version 1.0
 * @author Yurii Orlyk <orlyk.yurii@itea.ua>
 */


namespace patterns\Decorator;


use patterns\Decorator\NotificatorInterface;

/**
 * Абстрактный класс для декораторов нотификатора
 *
 * Для расширения функциональности нотификаторов применяйте то-то и то-то.
 * Принимеет параметрами, оборачивает другой класс.
 *
 * @author aigletter@gmail.com
 * @see https://github/aigleter
 * @version 1.0.0
 */
abstract class DecoratorAbstract implements NotificatorInterface
{
    protected $component;

    /**
     * DecoratorAbstract constructor.
     * @param \patterns\Decorator\NotificatorInterface|Notificator $component
     */
    public function __construct($component)
    {
        $this->component = $component;
    }
}