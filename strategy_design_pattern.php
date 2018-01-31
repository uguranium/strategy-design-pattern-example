<?php

interface Logger
{
  public function log($data);
}

class LogToFile implements Logger {
  public function log($data) {
    var_dump('Log to file.');
  }
}

class LogToDatabase implements Logger {
  public function log($data) {
    var_dump('Log to Database.');
  }
}

class LogToXWebService implements Logger {
  public function log($data) {
    var_dump('Log to Any Web Service.');
  }
}

class App {
  public function log($data, Logger $logger) {
    $logger->log($data);
  }
}

$app = new App;
$app->log('Some data is here', new LogToDatabase);

// or $app->log('Some data is here', new LogToFile); 
// or $app->log('Some data is here', new LogToXWebService);
