<?php

use Phinx\Migration\AbstractMigration;

class CoreUpdateDocumentTemplates extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $document = [
                'default_template' => "<table class=\"main-table\" style=\"height: 100%; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" rel=\"height: 100%; border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tbody>
<tr>
    <td style=\"width: 100%; height: 100%; padding: 24px 0; font-family: Helvetica, Arial, sans-serif;\" align=\"center\">
        <div style=\"background-color: #ffffff; margin: 0px auto; padding: 0px 44px 0px 46px; width: 510px; text-align: left; font-family: Helvetica, Arial, sans-serif;\">
            <table style=\"border-collapse: separate; padding-top: 32px; font-family: Helvetica, Arial, sans-serif;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr valign=\"top\">
                <td style=\"border-bottom: 1px dashed #000000; padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"center\" width=\"100%\">
                    <h3 style=\"font-size: 17px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; padding: 0px 0px 3px 1px; margin: 0px;\">{{ __(\"ship_to\") }}:</h3>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.firstname }} {{ u.lastname }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_address  }} {{ u.s_address_2 }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_city }} {{ u.s_state_descr }} {{ u.s_zipcode }}
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        {{ u.s_country_descr }}
                    </p>
                    {% for field in u.s_fields %}
                    <p style=\"font-family: Helvetica, Arial, sans-serif;\">{{ field.name }}: {{ field.value }}
                    </p>
                    {% endfor %}
                </td>
            </tr>
            <tr class=\"scissors\" valign=\"top\">
                <td style=\"padding-left: 20px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\">
                    <img style=\"vertical-align: top;\" src=\"{{ runtime.images_dir }}/scissors.gif\" border=\"0\">
                </td>
            </tr>
            </tbody>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr>
                <td style=\"width: 50%; padding: 14px 0px 0px 2px;\">
                    <h2 style=\"font-size: 12px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; margin: 0px 0px 3px 0px;\">{{ c.name }}</h2>
                    <p style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">{{ snippet(\"company_address\") }}
                    </p>
                    <p style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">{{ snippet(\"company_info\") }}<br>
                    </p>
                </td>
                <td style=\"padding-top: 14px; font-family: Helvetica, Arial, sans-serif;\" valign=\"top\">{{ snippet(\"order_date\") }}
                </td>
            </tr>
            </tbody>
            </table>
            <table style=\"padding: 20px 0px 24px 0px; font-family: Helvetica, Arial, sans-serif;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr valign=\"top\">
                <td style=\"font-family: Helvetica, Arial, sans-serif;\" width=\"54%\">
                    {{snippet(\"bill_to\")}}
                </td>
                <td style=\"font-family: Helvetica, Arial, sans-serif;\" width=\"54%\">
                    {% if pickup_point.is_selected %}
                    {{ snippet(\"pickup_point\") }}
                    {% else %}
                    {{ snippet(\"ship_to\") }}
                    {% endif %}
                </td>
            </tr>
            </tbody>
            </table>
            <div style=\"font-family: Helvetica, Arial, sans-serif;\">
                {{ snippet(\"order_info\") }}
            </div>
            <div style=\"font-family: Helvetica, Arial, sans-serif;\">
                {{ snippet(\"products_table\") }}
                <br>{{ snippet(\"notes\") }}
            </div>
        </div>
    </td>
</tr>
</tbody>
</table>",
                'type' => 'packing_slip',
                'code' => 'default',
                'addon' => ''
        ];

        $snippets = [
            [
                'default_template' => "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">{{__(\"ship_to\")}}</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>{{u.firstname}} {{u.lastname}}</strong>
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>{{u.phone}}</bdi>
    </p>",
                'type' => 'order_invoice',
                'code' => 'ship_to',
                'addon' => ''
            ],
            [
                'default_template' => "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">{{__(\"ship_to\")}}</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{u.firstname}} {{u.lastname}}</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <bdi>{{u.phone}}</bdi>
    </p>",
                'type' => 'order_summary',
                'code' => 'ship_to',
                'addon' => ''
            ],
            [
                'default_template' => "<h3 style=\"padding: 0px 0px 10px 1px; font-weight: 600; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;\">{{__(\"ship_to\")}}:</h3>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{u.firstname}} {{u.lastname}}
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        <bdi>{{u.phone}}</bdi>
    </p>",
                'type' => 'packing_slip_default',
                'code' => 'ship_to',
                'addon' => ''
            ]
        ];

        $this->execute("UPDATE {$pr}template_documents SET default_template = '" . addslashes($document['default_template']) . "' WHERE type = '{$document['type']}' AND code = '{$document['code']}' AND addon = '{$document['addon']}'");

        foreach ($snippets as $snippet) {
            $this->execute("UPDATE {$pr}template_snippets SET default_template = '" . addslashes($snippet['default_template']) . "' WHERE type = '{$snippet['type']}' AND code = '{$snippet['code']}' AND addon = '{$snippet['addon']}'");
        }
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}