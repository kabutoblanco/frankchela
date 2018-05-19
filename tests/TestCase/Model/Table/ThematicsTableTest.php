<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThematicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThematicsTable Test Case
 */
class ThematicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ThematicsTable
     */
    public $Thematics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.thematics',
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
        $config = TableRegistry::exists('Thematics') ? [] : ['className' => ThematicsTable::class];
        $this->Thematics = TableRegistry::get('Thematics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Thematics);

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
