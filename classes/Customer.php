<?php

/**
* Customer
*/

class Customer
{
    
    public $id;
    public $wishlistId;



    public function setId($id) {

        $this->id = $id;

    }

    public function setWishlistId($id) {

        $this->wishlistId = $id;

    }

    public function getId() {

        return $this->id;

    }

    public function getWishlistId() {

        return $this->wishlistId;
        
    }

}