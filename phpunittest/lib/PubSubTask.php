<?php
/*
* ?????????? ??????????????? ???????? ?????????????? "???????? ?????????"
* ????? ??? ?????? ?????????? ??????
* $order->save();
* ????????? ?? ???? ???????????? ?????
* TelegramSender ? EmailSender
*/
interface Observer
{
	function onChanged($sender, $args);
}

interface Observable
{
	function addObserver($observer);
}

class Order implements Observable
{
	protected $number;
	private $_observers = [];

	public function __construct()
	{
		$this->number = rand(10000, 20000);
	}

	public function save(): array
	{
		$message = "Order number {$this->number} was saved";
		$arr = [];
		foreach($this->_observers as $obs) {
			echo $r = $obs->onChanged($this, $message);
			echo PHP_EOL;
			$arr[] = $r;
		}
		return $arr;
	}

	public function getNumber(): string
	{
		return $this->number;
	}

	public function addObserver($observer)
	{
		$this->_observers []= $observer;
	}
}

class TelegramSender implements Observer
{
	public function onChanged($sender, $message)
	{
		return $res = ( "Message was sent via telegram: " . $message);
	}
}

class EmailSender implements Observer
{
	public function onChanged($sender, $message)
	{
		return $res = ( "Message was sent via e-mail: " . $message);
	}
}

$order = new Order();
$order->addObserver( new TelegramSender() );
$order->addObserver( new EmailSender() );
$order->save();
