<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitorsTable Test Case
 */
class VisitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitorsTable
     */
    protected $Visitors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Visitors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Visitors') ? [] : ['className' => VisitorsTable::class];
        $this->Visitors = $this->getTableLocator()->get('Visitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Visitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
