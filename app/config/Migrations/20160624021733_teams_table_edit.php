<?php
use Migrations\AbstractMigration;

class TeamsTableEdit extends AbstractMigration
{
    public function up()
    {
        $this->table('teams')
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->update();
        $this->table('players')
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->update();
    }

    public function down()
    {
        $this->table('teams')
            ->removeColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
        ]);
        $this->table('players')
            ->removeColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
        ]);
    }
}
