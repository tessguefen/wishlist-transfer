<?php

/**
* WishlistItem
*/

class WishlistItem
{
    
    public $id;
    public $wishlistId;
    public $productId;
    public $dateAdded;
    public $quantity;
    public $notes;



    public function setId($id) {

        $this->id = $id;

    }

    public function setWishlistId($wishlistId) {

        $this->wishlistId = $wishlistId;

    }

    public function setProductId($productId) {

        $this->productId = $productId;

    }

    public function setDateAdded($dateAdded) {

        $this->dateAdded = $dateAdded;

    }

    public function setQuantity($quantity) {

        $this->quantity = $quantity;

    }

    public function setNotes($notes) {

        $this->notes = $notes;

    }

    public function getId() {

        return $this->id;

    }

    public function getWishlistId() {

        return $this->wishlistId;

    }

    public function getProductId() {

        return $this->productId;

    }

    public function getDateAdded() {

        return $this->dateAdded;

    }

    public function getQuantity() {

        return $this->quantity;

    }

    public function getNotes() {

        return $this->notes;

    }

}