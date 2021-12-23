<?php

use Phinx\Migration\AbstractMigration;

class CoreResetAddressPositionToDefaulValue extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $addon_data = $this->fetchRow("SELECT addon, status FROM {$pr}addons WHERE addon = 'step_by_step_checkout'");
        $is_step_by_step_checkout_active = !empty($addon_data['status']) && $addon_data['status'] == 'A';

        if ($is_step_by_step_checkout_active) {
            return;
        }

        $section = $this->fetchRow("SELECT section_id FROM {$pr}settings_sections WHERE name = 'Checkout' AND type = 'CORE'");

        if (empty($section)) {
            return;
        }

        $this->query("UPDATE {$pr}settings_objects SET value = 'shipping_first' WHERE name = 'address_position' AND section_id = {$section['section_id']}");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}