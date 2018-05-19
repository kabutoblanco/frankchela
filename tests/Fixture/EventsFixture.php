<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 *
 */
class EventsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'place_reservation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'thematic_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cost' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'active' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'started' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'events_place_reservations_id_fk' => ['type' => 'index', 'columns' => ['place_reservation_id'], 'length' => []],
            'events_event_types_id_fk' => ['type' => 'index', 'columns' => ['event_type_id'], 'length' => []],
            'events_thematics_id_fk' => ['type' => 'index', 'columns' => ['thematic_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'events_event_types_id_fk' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'events_place_reservations_id_fk' => ['type' => 'foreign', 'columns' => ['place_reservation_id'], 'references' => ['place_reservations', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'events_thematics_id_fk' => ['type' => 'foreign', 'columns' => ['thematic_id'], 'references' => ['thematics', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'place_reservation_id' => 1,
                'event_type_id' => 1,
                'thematic_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'cost' => 1,
                'active' => 1,
                'created' => '2018-05-12 22:48:10',
                'modified' => '2018-05-12 22:48:10',
                'started' => '2018-05-12 22:48:10'
            ],
        ];
        parent::init();
    }
}
