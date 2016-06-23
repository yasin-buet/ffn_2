<?php
use Phinx\Seed\AbstractSeed;

/**
 * Countries seed.
 */
class CountriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
              'name'    => 'Albenia',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Austria',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Brazil',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Spain',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Russia',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Chilie',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'USA',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Ireland',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('countries');
        $table->insert($data)->save();
    }
}
