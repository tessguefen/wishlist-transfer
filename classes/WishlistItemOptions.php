<?php

/**
* WishlistItemOptions
*/

class WishlistItemOptions
{
    
    public $wishlistItemId;
    public $attributeId;
    public $optionId;
    public $data;
    public $dataLong;



    public function setWishlistItemId($wishlistItemId) {

        $this->wishlistItemId = $wishlistItemId;

    }

    public function setAttributeId($attributeId) {

        $this->attributeId = $attributeId;

    }

    public function setOptionId($optionId) {

        $this->optionId = $optionId;

    }

    public function setData($data) {

        $this->data = $data;

    }

    public function setDataLong($dataLong) {

        $this->dataLong = $dataLong;

    }

    public function getWishlistItemId() {

        return $this->wishlistItemId;

    }

    public function getAttributeId() {

        return $this->attributeId;

    }

    public function getOptionId() {

        return $this->optionId;

    }

    public function getData() {

        return $this->data;

    }

    public function getDataLong() {

        return $this->dataLong;

    }

}