<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacientesFixture
 */
class PacientesFixture extends TestFixture
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
                'cpf' => 'Lorem ipsum ',
                'data_nascimento' => '2025-07-26',
                'created' => '2025-07-26 23:21:59',
                'modified' => '2025-07-26 23:21:59',
            ],
        ];
        parent::init();
    }
}
