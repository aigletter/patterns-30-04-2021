<?php


namespace patterns\DI;


class Injector implements InjectorInterface
{
    public function getInstance(string $className)
    {
        $reflectionClass = new \ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();

        $dependencies = [];
        if ($constructor) {
            $dependencies = $this->resolveDependencies($constructor);
        }

        $instance = $reflectionClass->newInstanceArgs($dependencies);

        return $instance;
    }

    protected function resolveDependencies(\ReflectionMethod $method): array
    {
        $dependencies = [];
        foreach ($method->getParameters() as $parameter) {
            $name = $parameter->getName();
            $type = $parameter->getType();
            $instance = $this->getInstance($type);
            $dependencies[$name] = $instance;
        }

        return  $dependencies;
    }
}