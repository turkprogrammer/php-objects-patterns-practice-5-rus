<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch07;

/* Листинг 13.45 */

class VenueSelectionFactory extends SelectionFactory
{
    public function newSelection(IdentityObject $obj): array
    {
        $fields = implode(',', $obj->getObjectFields());
        $core = "SELECT $fields FROM venue";
        list($where, $values) = $this->buildWhere($obj);

        return [$core . " " . $where, $values];
    }
}
