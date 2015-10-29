
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
  protected $host_name = 'localhost';
  protected $user_name = '';
  protected $password = '';
  protected $db_name = '';
  protected $port = '';
  public $connection = '';

     /**
  * __construct
  * Variable function takes in three parameters and sets the host_name as a
  * constant.
  * @param String host_name - Host name of database server
  * @param String user_name - User name to connect to the database
  * @param String password - Password to connect to the database
  * @param String db_name - The name of the database being connected to
  *
  * @return void
  */

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
  *
  * @return SQLi object $connection - database connection
  */
  public function db_connect()
    if (isset($this->port))
    {
      $this->connection =  @mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name, $this->port);
    }
    else
    {
      $this->connection = @mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
    }

    return $this->connection;
  }

    /**
  * db_connect_fail
  * Variable function takes in SQLi object as a parameter and checks for an
  * error. Pending on if the connection is erroneous, a success/fail mesage will
  * appear. If connection failed, reconnect using a different localhost value.
  * @param Object $connection - SQLi database connection.
  *
  * @return String - error or success message to be displayed.
  */
  public function db_connect_fail($connection) {
    if ($connection->connect_errno) {
      $this->hostname = '127.0.0.0.8';
      $this->db_connect();

      return "The database connection has failed.";

    }
    else {
      return "The function db_connect() is successful.";
  }

    /**
  * query
  * Variable function takes in SQL statement and formats the results in array
  * form.
  *
  * @param Object $sql - Query results to be displayed.
  *
  * @return Array $query - Query results stored in array form.
  */
  public function query($sql) {
    /* Define $result to equal the MySQL query */
    $result = $this->connection->query($sql);

    /* Condition if $result is invalid */
    if ($result) {

      /* While $result is valid, fetch the MySQL query object array */
      $obj = $result->fetch_object();
      while ($obj) {

        /* Define $data array to equal $results */
        $data[] = $result;
      }

      /* Instantiate $query as a new standard Class */
      $query = new \stdClass();

      /* Return the first row of queried data if not null or returns no value */
      $query->row = isset($data[] ? $data[0] : $data[0]='');

      /* Return all rows of queried data */
      $query->rows = $data;

      /* Clear queried data */
      unset($data);

      /* Return stored results in an Object array */
      return $query;
    }

  }
?>
