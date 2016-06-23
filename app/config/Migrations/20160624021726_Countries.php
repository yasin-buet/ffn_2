<?php
use Migrations\AbstractMigration;

class Countries extends AbstractMigration
{
    public function up()
    {
        $this->table('continents')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('countries')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('teams')
            ->removeColumn('country', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->removeColumn('continent', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('country_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('continent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
                ])
            ->addIndex(
                [
                    'continent_id',
                ]
            )
            ->addIndex(
                [
                    'country_id',
                ]
            )
            ->update();

    }

    public function down()
    {
        $this->table('teams')
            ->addColumn('country', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('continent', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->dropForeignKey(
                'continent_id'
            )
            ->dropForeignKey(
                'country_id'
            );

        $this->dropTable('continents');
        $this->dropTable('countries');
    }
}
