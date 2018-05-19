<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaceReservationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaceReservationsTable Test Case
 */
class PlaceReservationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaceReservationsTable
     */
    public $PlaceReservations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.place_reservations',
        'app.places',
        'app.events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PlaceReservations') ? [] : ['className' => PlaceReservationsTable::class];
        $this->PlaceReservations = TableRegistry::get('PlaceReservations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlaceReservations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
