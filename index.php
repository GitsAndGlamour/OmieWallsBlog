<?php

 /* Requite Composer Autoloader */
2 require 'vendor/autoload.php';
4
 /* Set Default Timezone */
 date_default_timezone_set('America/New_York');

 /* Instantiation of Slim Class */
 $application = new \Slim\Slim();

/* Temporarily Route HTTP requests to echo statements using Slim get() function */
 function addr_router($address, $application) {
   $application->get("'/" . $address . "'", function() {
     echo "Hello, this is the " . $address . " page.";
   })
 }
 $this->addr_router(null, $application);
 $this->addr_router('test', $application);

 $application->run();
 ?>
