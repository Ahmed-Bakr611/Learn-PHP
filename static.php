 <?php


  class MathUtils
  {
    public static float $PI = 3.14;
    public static function square($number): float
    {
      return $number * $number;
    }
  }
  echo MathUtils::square(10) . "\n";
  var_dump(MathUtils::$PI);

  //singelton pattern

  class Connection
  {
    private static $instance = null;
    private function __construct() {}
    public static function getInstance()
    {
      if (static::$instance === null) {
        static::$instance = new static();
      }

      return static::$instance;
    }
  }

  $connection = Connection::getInstance();
  var_dump($connection);
