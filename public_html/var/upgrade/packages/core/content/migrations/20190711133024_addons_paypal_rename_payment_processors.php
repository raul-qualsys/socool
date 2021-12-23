<?php

use Phinx\Migration\AbstractMigration;

class AddonsPaypalRenamePaymentProcessors extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $addon_status = $this->fetchRow("SELECT addon FROM {$pr}addons WHERE addon = 'paypal'");

        if (!$addon_status) {
            return;
        }

        $this->execute("UPDATE {$pr}payment_processors SET processor = 'Website Payments Pro' WHERE processor_script = 'paypal_pro.php'");
    }
}