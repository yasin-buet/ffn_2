<?php
use Phinx\Seed\AbstractSeed;

/**
 * Continents seed.
 */
class ContinentsSeed extends AbstractSeed
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
              'name'    => 'Asia',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Europe',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'America',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Africa',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ],
            [
              'name'    => 'Australia',
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
            ]
            ];

        $table = $this->table('continents');
        $table->insert($data)->save();
    }
}
