<?php
class Basket extends Eloquent
{
    protected $table = 'baskets';

    /**
     * Propiedad dinamica
     */
    public function products()
    {
        return $this->hasMany('BasketProduct', 'basket_id');
    }
}