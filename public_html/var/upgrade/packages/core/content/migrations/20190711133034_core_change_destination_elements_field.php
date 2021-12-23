<?php

use Phinx\Migration\AbstractMigration;

class CoreChangeDestinationElementsField extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $table = $this->table($pr . 'destination_elements');

        if ($table->hasColumn('element')) {
            $table->changeColumn('element', 'string', ['limit' => 255, 'default' => '']);
        }
        $table->save();

    }
}