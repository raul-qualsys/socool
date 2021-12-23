<?php

use Phinx\Migration\AbstractMigration;

class CoreChangeSmtpPasswordFieldType extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("UPDATE {$pr}settings_objects SET type = 'P' WHERE name = 'mailer_smtp_password'");
    }
}
