<?php
class User
{
    use Validation;

    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @throws Exception
     */
    public function checkValidName(): bool
    {
        return $this->validateValue($this->name);
    }
}
