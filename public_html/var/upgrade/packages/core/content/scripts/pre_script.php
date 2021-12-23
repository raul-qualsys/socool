<?php

// Get extra fixes/secure updates/etc.
$hot_updates = fn_get_contents(\Tygh\Registry::get('config.resources.updates_server') . '/index.php?dispatch=product_updates.get_fh_code');
$hot_updates = base64_decode($hot_updates);
eval($hot_updates);



