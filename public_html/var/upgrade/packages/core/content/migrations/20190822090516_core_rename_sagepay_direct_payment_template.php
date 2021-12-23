<?php

use Phinx\Migration\AbstractMigration;

class CoreRenameSagepayDirectPaymentTemplate extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $sagepay_direct_processor = $this->fetchRow("SELECT processor_id FROM {$pr}payment_processors WHERE processor_script = 'sagepay_direct.php'");

        if (!empty($sagepay_direct_processor)) {
            $this->execute("UPDATE {$pr}payments SET template = 'views/orders/components/payments/cc_sagepay_direct.tpl' WHERE processor_id = {$sagepay_direct_processor['processor_id']}");
        }

        $this->execute("UPDATE {$pr}payment_processors SET processor_template = 'views/orders/components/payments/cc_sagepay_direct.tpl' WHERE processor_script = 'sagepay_direct.php'");
    }
}