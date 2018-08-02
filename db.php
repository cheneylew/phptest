<?php
/**
 * Created by IntelliJ IDEA.
 * User: apple
 * Date: 2018/7/26
 * Time: 下午9:29
 */

require 'vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'test',
    'server' => '127.0.0.1',
    'port' => '3306',
    'username' => 'root',
    'password' => 'cnldj1988'
]);

$state = $database->query("CREATE TABLE `test`.`user` (
  `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`user_id`));");

$database->insert("user",[
    "username"=>"cheneylew",
    "password"=>"111111",
]);
$res = $database->query("select count(*) as count from user;")->fetchAll();
print_r($res);
$res = $database->query("select * from user;")->fetchAll();
print_r($res);