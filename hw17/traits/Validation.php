<?php

trait Validation
{
    /**
     * @throws Exception
     */
    private function IsEmpty(int|string $string): bool
    {
        if (empty($string)) {
            throw new Exception('Value is empty!');
        }
        return true;
    }

    /**
     * @throws Exception
     */
    private function validLength(string $value): bool
    {
        if (strlen($value) < 2) {
            throw new Exception('Invalid length!');
        }
        return true;
    }

    /**
     * @throws Exception
     */
    private function validateValue($value): bool
    {
        if ($this->IsEmpty($value) && ($this->validLength($value))) {
            return true;
        } else {
            return false;
        }
    }
}
