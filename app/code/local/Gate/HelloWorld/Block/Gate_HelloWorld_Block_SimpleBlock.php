<?php

class Gate_HelloWorld_Block_SimpleBlock_Block_SimpleBlock extends Mage_Core_Block_Template
{

    public function methodblock()
    {
        $cart = Mage::getModel('checkout/cart')->getQuote();
        $i=0;

        foreach ($cart->getAllItems() as $item)
        {
            echo $productName = $item->getProduct()->getName();
            echo "<br>";
            $i++;
        }
        return $i/2;
    }
}