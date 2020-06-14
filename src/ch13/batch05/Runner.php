<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here
        $factory = new VenueObjectFactory();
        $venue = $factory->createObject(
            [
                "id" => -1,
                "name" => "The Venue"
            ]
        );
        print_r($venue);
    }

    public static function run2()
    {
        $raw = [
            [
                "id" => -1,
                "name" => "The Venue"
            ],
            [
                "id" => -1,
                "name" => "The Other Venue"
            ]
        ];

        $collection = new VenueCollection($raw, new VenueObjectFactory());

        foreach ($collection as $venue) {
            print_r($venue);
        }
    }
}
