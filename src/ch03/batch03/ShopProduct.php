<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch03;

/* Листинг 03.10 */

class ShopProduct
{
    public $title = 'Стандартный товар';
    public $producerMainName = 'Фамилия автора';
    public $producerFirstName = 'Имя автора';
    public $price = 0;

    public function getProducer()
    {
        return $this->producerFirstName . ' ' . $this->producerMainName;
    }
}

/* /Листинг 03.10 */
