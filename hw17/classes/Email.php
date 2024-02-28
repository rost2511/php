<?php

class Email
{
    use Validation;

    private string $email;

    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * @throws Exception
     */
    public function checkValidEmail(): bool
    {
        return $this->validateValue($this->email);
    }
}