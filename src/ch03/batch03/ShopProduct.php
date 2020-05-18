<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch03;

/* Листинг 03.10 */

class ShopProduct
{
    public string $title = 'Стандартный товар';
    public string $producerMainName = 'Фамилия автора';
    public string $producerFirstName = 'Имя автора';
    public float $price = 0;

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerFirstName . ' '
            . $this->producerMainName;
    }
}

/* /Листинг 03.10 */
