<?php
namespace App\Model;

class Cart{
	public $items = null;
	public $totalQuanty = 0;
	public $totalPrice = 0;
	public function __construct($oldCart)
	{
		if($oldCart)
		{
			$this->items = $oldCart->items;
			$this->totalQuanty = $oldCart->totalQuanty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($items, $id)
	{
		$giohang = ['quanty' => 0, 'price' => $items->price, 'items' => $items];
		if($this->items)
		{
			if(array_key_exists($id, $this->items))
			{
				$giohang = $this->items[$id];
			}
		}
		$giohang['quanty']++;
		$giohang['price'] = $items->price * $giohang['quanty'];
		$this->items[$id] = $giohang;
		$this->totalQuanty++;
		$this->totalPrice += $items->price;
	}

	public function deleteCart($id)
	{
		$this->items[$id]['quanty']--;
		$this->items[$id]['price'] -= $this->items[$id]['items']['price'];
		$this->totalQuanty--;
		if($this->items[$id]['quanty' <= 0])
		{
			unset($this->items[$id]);
		}
	}

	public function removeItem($id)
	{
		$this->totalQuanty -= $this->items[$id]['quanty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}