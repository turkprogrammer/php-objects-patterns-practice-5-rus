<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

use popp\ch13\batch04\Venue;
use popp\ch13\batch04\DomainObject;

/* Листинг 13.32 */
class VenueObjectFactory extends DomainObjectFactory
{
    public function createObject(array $row): DomainObject
    {
/* /Листинг 13.32 */
        $old = $this->getFromMap(Venue::class, $row['id']);

        if ($old) {
            return $old;
        }
/* Листинг 13.32 */
        $obj = new Venue((int)$row['id'], $row['name']);
/* /Листинг 13.32 */
        $this->addToMap($obj);
        //$space_mapper = new SpaceMapper();
        //$space_collection = $space_mapper->findByVenue( $row['id'] );
        //$obj->setSpaces( $space_collection );
/* Листинг 13.32 */

        return $obj;
    }
}
