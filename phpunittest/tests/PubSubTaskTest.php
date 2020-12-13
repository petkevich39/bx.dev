<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/PubSubTask.php');

class PubSubTaskTest extends TestCase
{
	/** @test */
	public function saveOrderTest(): void
	{
		$order = new Order();
		$order->addObserver( new TelegramSender() );
		$order->addObserver( new EmailSender() );
		$orderId = $order->getNumber();
		$res = $order->save();
		self::assertEquals('Message was sent via telegram: Order number '.$orderId.' was saved', $res[0]);
		self::assertEquals('Message was sent via e-mail: Order number '.$orderId.' was saved', $res[1]);
	}
}