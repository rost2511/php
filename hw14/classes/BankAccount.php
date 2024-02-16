<?php

/**
 * Class for storing bank account information and interacting with it
 */
class BankAccount
{
    private int $accountNumber;
    private float $balance;

    /**
     * Class constructor for setting default account number and balance values
     *
     * @param int $accountNumber
     * @param float $balance
     *
     * @throws Exception
     */
    public function __construct(int $accountNumber, float $balance)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

    /**
     * Method for setting account number
     * @param int $accountNumber
     * @throws Exception
     */
    private function setAccountNumber(int $accountNumber): void
    {
        if ($accountNumber < 0) {
            throw new Exception("Number must be positive.");
        }
        $this->accountNumber = $accountNumber;
    }

    /**
     * Method for get account number
     * @return int
     */
    private function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    /**
     * Method for setting balance
     * @param float $balance
     * @throws Exception
     */
    private function setBalance(float $balance): void
    {
        if ($balance < 0) {
            throw new Exception("Balance cannot be less than zero.");
        }
        $this->balance = $balance;
    }

    /**
     * Method for get balance
     * @return int
     */
    private function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * Method for adding money to balance
     * @param float $plusMoney
     * @return float
     */
    public function plusMoney(float $plusMoney): float
    {
        return $this->balance += $plusMoney;
    }

    /**
     * Method for minus money from balance
     * @param float $minusMoney
     * @return float
     * @throws Exception
     */
    public function minusMoney(float $minusMoney): float
    {
        if ($this->balance - $minusMoney < 0) {
            throw new Exception("There is not enough money in the balance.");
        }
        return $this->balance -= $minusMoney;
    }

    /**
     * Method print account number
     * @return void
     */
    public function printAccountNumber(): void
    {
        echo "Account number: " . $this->getAccountNumber() . PHP_EOL;
    }

    /**
     * Method print money balance
     * @return void
     */
    public function printBalance(): void
    {
        echo "Balance: " . $this->getBalance() . "$" . PHP_EOL;
    }
}