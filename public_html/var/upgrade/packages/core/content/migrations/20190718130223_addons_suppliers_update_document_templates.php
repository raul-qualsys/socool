<?php

use Phinx\Migration\AbstractMigration;

class AddonsSuppliersUpdateDocumentTemplates extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $snippet = [
            'default_template' => "<h3 style=\"padding: 0px 0px 10px 1px; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;\">{{__(\"ship_to\")}}:</h3>
<p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.firstname }} {{ u.lastname }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_address }} {{ u.s_address_2 }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_city }} {{ u.s_state_descr }} {{ u.s_zipcode }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_country_descr }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.phone }}
                    </p>
                    {% for field in u.s_fields %}
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">{{ field.name }}: {{ field.value }}
                    </p>
                    {% endfor %}",
            'type' => 'supplier_order_invoice',
            'code' => 'ship_to',
            'addon' => 'suppliers'
        ];

        $this->execute("UPDATE {$pr}template_snippets SET default_template = '" . addslashes($snippet['default_template']) . "' WHERE type = '{$snippet['type']}' AND code = '{$snippet['code']}' AND addon = '{$snippet['addon']}'");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}