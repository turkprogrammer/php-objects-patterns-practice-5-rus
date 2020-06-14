<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

class SpaceMapper extends Mapper
{
    private $selectStmt;
    private $selectAllStmt;
    private $updateStmt;
    private $insertStmt;
    private $findByVenueStmt;

    public function __construct()
    {
        parent::__construct();
        $this->selectAllStmt = $this->pdo->prepare(
            "SELECT * FROM space"
        );
        $this->selectStmt = $this->pdo->prepare(
            "SELECT * FROM space WHERE id=?"
        );
        $this->updateStmt = $this->pdo->prepare(
            "UPDATE space SET name=?, id=? WHERE id=?"
        );
        $this->insertStmt = $this->pdo->prepare(
            "INSERT INTO space ( name, venue )
                             VALUES( ?, ?)"
        );
        $this->findByVenueStmt = $this->pdo->prepare(
            "SELECT * FROM space WHERE venue=?"
        );
    }

    protected function targetClass(): string
    {
        return Space::class;
    }

    protected function doInsert(DomainObject $object)
    {
        $venue = $object->getVenue();

        if (! $venue) {
            throw new \woo\base\AppException("cannot save without venue");
        }

        $values = [$object->getname(), $venue->getId()];
        $this->insertStmt->execute($values);
        $id = self::$PDO->lastInsertId();
        $object->setId($id);
    }

    public function update(DomainObject $object)
    {
        $values = [$object->getname(), $object->getid(), $object->getId()];
        $this->updateStmt->execute($values);
    }

    protected function selectStmt(): \PDOStatement
    {
        return $this->selectStmt;
    }

    protected function selectAllStmt(): \PDOStatement
    {
        return $this->selectAllStmt;
    }

    # custom
    protected function findByVenue($vid): SpaceCollection
    {
        $this->findByVenueStmt->execute(array( $vid ));

        return new SpaceCollection(
            $this->findByVenueStmt->fetchAll(),
            $this->getFactory()->getDomainObjectFactory()
        );
    }
    # end_custom
}
