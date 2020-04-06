<?php

  $loader = require __DIR__ . '../vendor/autoload.php';
  $loader->addPsr4('App\\Test\\', __DIR__);

  $helloWorld = new Hello();

  echo $helloWorld;
