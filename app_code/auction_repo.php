<?php

class AuctionRepo
{
    public function GetItemDetails($itemId)
    {
        return new ItemDetails();
    }
}

class ItemDetails
{
    public $ImagePath = "path";
    public $Name = "image name";
    public $Price = 999.99;
    public $MinimumBidPrice = 999.99;
    public $Description = "Some Generic Description, 1ea Bla Blah Reatil Price: $500";
    public $Shipping = "999.99";
}
?>