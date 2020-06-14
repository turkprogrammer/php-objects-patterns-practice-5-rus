<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

class VenuePersistenceFactory extends PersistenceFactory
{
    public function getMapper(): Mapper
    {
        return new VenueMapper();
    }

    public function getDomainObjectFactory(): DomainObjectFactory
    {
        return new VenueObjectFactory();
    }

    public function getCollection(array $row): Collection
    {
        return new VenueCollection($row, $this->getDomainObjectFactory());
    }
}
