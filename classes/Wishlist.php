<?php

/**
* Wishlist
*/

class Wishlist
{
    
    public $id;
    public $title = 'My wish list';
    public $notes = '';
    public $shared = 0;
    public $customerId;



    public function setId($id) {

        $this->id = $id;

    }

    public function setTitle($title) {

        $this->title = $title;

    }

    public function setNotes($notes) {

        $this->notes = $notes;

    }

    public function setShared($shared) {

        $this->shared = $shared;

    }

    public function setCustomerId($customerId) {

        $this->customerId = $customerId;

    }

}