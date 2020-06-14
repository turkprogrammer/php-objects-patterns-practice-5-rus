<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch18\batch04\woo\domain;

interface Finder
{
    public function find($id);
    public function findAll();

    public function update(DomainObject $object);
    public function insert(DomainObject $obj);
    //function delete();
}
