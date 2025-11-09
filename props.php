<?php
enum Props: string
{
  case balance = "balance";
};
class BankAccount
{
  private float $balance = 0;
  public function getBalance()
  {
    return $this->balance;
  }
  public function deposit(float $amount): void
  {
    if ($amount > 0) {
      $this->balance += $amount;
    }
  }
  public function withdraw(float $amount): void
  {
    if ($this->balance - $amount >= 0) {
      $this->balance -= $amount;
    }
  }
}
$account = new BankAccount();
$account->deposit(100);
$account->withdraw(10);
echo $account->getBalance();
