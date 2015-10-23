<?php
/*******************************************************************************
    Require Files
*******************************************************************************/
 /* Requite Composer Autoloader */
 require 'vendor/autoload.php';

 /* Require Database Class */
 require 'database/database.php';

 /* Require Config.php */
 require 'config.php';

 /*******************************************************************************
     Set-up Defaults
 *******************************************************************************/
 /* Set Default Timezone */
 date_default_timezone_set('America/New_York');

/*******************************************************************************
    Slim Framework Set-up
*******************************************************************************/
 /* Instantiation of Slim Class */
 $application = new \Slim\Slim();

/* Temporarily Route HTTP requests to echo statements using Slim get function */
/* TODO: Create Router.php for routing HTTP requests*/
 function addr_router($address, $application) {
   $application->get("'/" . $address . "'", function() {
     echo "Hello, this is the " . $address . " page.";
   })
 }
 $this->addr_router(null, $application);
 $this->addr_router('test', $application);

/* Run Slim Framework */
 $application->run();

/*******************************************************************************
     Database Connection Set-up
*******************************************************************************/
 /* Instantiation of Database Class */
 $db = new db(db_username, db_password, db_name, db_port);

 /* Connect to Server */
 $connection = $db->db_connect();

/* Test Connection to Server */
 $test_connection = $db->db_connect_fail($connection);

 ?>
