<?php
/*
trait => 
a way of adding methods to classes 
without inheritance
*/

trait Loggeable
{
  public function log($message)
  {
    echo "[LOG]: $message\n";
  }
}
class User
{
  use Loggeable;
  public function __construct(public string $name) {}

  public function save(): void
  {
    $this->log("user {$this->name} saved.");
  }
}
$user = new User("Bakr");
$user->save();
