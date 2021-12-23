<?php

use Phinx\Migration\AbstractMigration;

class AddonsBuyTogetherAddProductIdIndex extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $addon_status = $this->fetchRow("SELECT addon FROM {$pr}addons WHERE addon = 'buy_together'");

        if (empty($addon_status)) {
            return;
        }

        if ($this->hasTable("{$pr}buy_together")) {
            $table = $this->table("{$pr}buy_together");
            if (!$table->hasIndex('product_id')) {
                $table
                    ->addIndex('product_id', [
                        'name' => 'product_id'])
                    ->update();
            }
        }
    }
}