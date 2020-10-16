<?php

namespace App\Models;

class Cart
{
    public $items = null;
    public $totalqty = 0;
    public $totalprice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalqty = $oldCart->totalqty;
            $this->totalprice = $oldCart->totalprice;
        }
    }
    public function add($item , $id){
        $storeItem = ['qty' => 0 , 'price' => $item->price , 'item' => $item];
        if($this->items){
            if(array_key_exists($id , $this->items)){
                $storeItem = $this->items['id'];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalqty++;
        $this->totalprice+= $item->price;
    }

}
