
<?php
   /**
* Class db (Database)
* Class object takes in database and server parameters in the constructor and
* passes them onto db_connect which connects to the database using MySQLi.
* @param String host_name - Host name of database server
* @param String user_name - User name to connect to the database
* @param String password - Password to connect to the database
* @param String db_name - The name of the database being connected to
*/
private class db {
  private $host_name = 'localhost';
  private $user_name = '';
  private $password = '';
  private $db_name = '';
  private $port = '';

     /**
  * __construct
  * Variable function takes in three parameters and sets the host_name as a
  * constant.
  * @param String host_name - Host name of database server
  * @param String user_name - User name to connect to the database
  * @param String password - Password to connect to the database
  * @param String db_name - The name of the database being connected to
  * @return void
  */
  public function __construct($user_name, $password, $db_name) {
    $this->host_name = 'localhost';
    $this->user_name = $user_name;
    $this->password = $passowrd;
    $this->db_name = $db_name;

    return void;
  }

  public function __construct($user_name, $password, $db_name, $port) {
    $this->host_name = 'localhost';
    $this->user_name = $user_name;
    $this->password = $passowrd;
    $this->db_name = $db_name;
    $this->port = $port;

    return void;
  }
    /**
  * db_connect
  * Variable function uses properties set-up in the constructor function and
  * sets up the database connection.
  * @return SQLi object $connection - database connection
  */
  public function db_connect()
    if ($this->port != '')
    {
      $connection =  @mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name, $this->port);
    }
    else
    {
      $connection = @mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
    }

    return $connection;
  }
    /**
  * db_connect_fail
  * Variable function takes in SQLi object as a parameter and checks for an
  * error. Pending on if the connection is erroneous, a success/fail mesage will
  * appear.
  * @param Object $connection - SQLi database connection.
  * @return String - error or success message to be displayed.
  */
  public function db_connect_fail($connection) {
    if ($connection->connect_errno) {
      return "The database connection has failed.";
    }
    else {
      return "The function db_connect() is successful.";
  }
?>
