<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedicosFixture
 */
class MedicosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'especialidade' => 'Lorem ipsum dolor sit amet',
                'crm' => 'Lorem ipsum dolor ',
                'created' => '2025-07-26 23:22:01',
                'modified' => '2025-07-26 23:22:01',
            ],
        ];
        parent::init();
    }
}
