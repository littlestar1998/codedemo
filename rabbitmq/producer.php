<?php
require 'vendor/autoload.php';

$exchangeName = 'sh_ex'; //交换机名
$queueName = 'sh_update_queue'; //队列名称
$routingKey = 'updatekey'; //路由关键字(也可以省略)
try {
    $conn = new \PhpAmqpLib\Connection\AMQPStreamConnection('127.0.0.1','5672','guest','guest','/');
    $channel = $conn->channel();
    $channel->exchange_declare($exchangeName,'direct');
    $channel->queue_declare($queueName);
    $channel->queue_bind($queueName,$exchangeName,$routingKey);

    $msg = json_encode(["test1"=>[],"test2"=>[]]);
    $message = new \PhpAmqpLib\Message\AMQPMessage($msg);

    $a = $channel->basic_publish($message,$exchangeName,$routingKey);
    var_dump($a);
}catch (Exception $e) {
    exit($e->getMessage());
}
