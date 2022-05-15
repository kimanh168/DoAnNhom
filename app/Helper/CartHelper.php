<?php

namespace App\Helper;

class CartHelper 
{
    public $items = [];
    public $total_quantity = 0;
    public $total_price = 0;

    public function __construct()
    {
        //
        $this->items = session('cart') ?  session('cart') : [];
        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();

    }

    public function add($product,$quantity = 1)
    {
        $item = [
            'id' => $product->id,
            'product_name' => $product->product_name,
            'price' => $product->sale_price,
            'image' => $product->image,
            'quantity' => $quantity,
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] += $quantity;
        }else {
            $this->items[$product->id] = $item;
        }
        session(['cart'=>$this->items]);
        //
      
    }

    public function remove($id)
    {
        //
        if(isset($this->items[$id])) 
        {
            unset($this->items[$product->id]);
        }
        session(['cart'=>$this->items]);
    }

    public function update($product,$quantity = 1)
    {
        //
        if(isset($this->items[$id])){
            $this->items[$product->id]['quantity'] = $quantity;
        }
        session(['cart'=>$this->items]);
    }

    public function clear()
    {
        //
        session(['cart'=>'']);
    }

    private function get_total_price()
    {
        $t = 0;
        foreach($this->items as $item){
            $t += $item['price']*$item['quantity'];
        }
        return $t;
        //
    }

    private function get_total_quantity()
    {
        //
        $t = 0;
        foreach($this->items as $item){
            $t += $item['quantity'];
        }
        return $t;
    }
}

?>