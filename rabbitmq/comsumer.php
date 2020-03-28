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
    $channel->basic_qos(null,3,null);
    $callback = function ($msg) {
        echo $msg->body.PHP_EOL;
        $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
    };

    $channel->basic_consume($queueName, '', false, false, false, false, $callback);

    while(count($channel->callbacks)) {
        $channel->wait();
    }

}catch (Exception $e){
    exit($e->getMessage());
}
