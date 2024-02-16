<?php

/**
 * Class with worker properties
 */
class Worker
{
    protected string $name;
    protected string $position;
    protected array $jobs = ['manager', 'developer', 'tester'];

    public function __construct(string $name, string $position, array $jobs = [])
    {
        $this->setName($name);
        $this->setPosition($position, $this->jobs);
    }

    protected function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception('To short name!');
        }

        $this->name = $name;
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function setPosition(string $position, array $jobs): void
    {
        if (!in_array($position, $jobs)) {
            throw new Exception('Unknown job!');
        }

        $this->position = $position;
    }

    protected function getPosition(): string
    {
        return $this->position;
    }

    public function printWorkerProperties(): void
    {
//        return "Name: $this->name" .  PHP_EOL .  "Job: $this->position";                      // вариант при котором не используем getName и getPosition
        echo "Name: " . $this->getName() . PHP_EOL . "Job: " . $this->getPosition() . PHP_EOL;  // вариант с использованием getName и getPosition
    }
}