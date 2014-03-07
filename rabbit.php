<?php 
include 'config/rabbit_config.php';

$rabbitmq = new AMQPConnection($credentials);
$rabbitmq->connect();

$channel =  new AMQPChannel($rabbitmq);
$channelId = $channel->getChannelId();

$exchange = new AMQPExchange($channel);
$exchange->setName('events');
$message = 'from php client';
$result = $exchange->publish($message);
