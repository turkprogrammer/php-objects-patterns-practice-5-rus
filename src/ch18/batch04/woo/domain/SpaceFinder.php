<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch18\batch04\woo\domain;

interface SpaceFinder extends Finder
{
    public function findByVenue($id);
}
