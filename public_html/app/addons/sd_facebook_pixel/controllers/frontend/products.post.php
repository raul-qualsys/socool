<?php
 use Tygh\Registry; defined('BOOTSTRAP') or die('Access denied'); if ($_SERVER['REQUEST_METHOD'] == 'POST') { return array(CONTROLLER_STATUS_OK); } if ($mode == 'view' || $mode == 'quick_view') { $product = Tygh::$app['view']->getTemplateVars('product'); $settings = Registry::get('settings.sd_facebook_pixel'); if (!empty($product) && $settings['catalog']['enable_microdata_tags'] == 'Y') { $product_pixel = sd_NzlmMTJmMzBjYzdlOGI4MWUxMDI4ZWQx($product, $auth); Tygh::$app['view']->assign('product_pixel', $product_pixel); } $breadcrumbs = Tygh::$app['view']->getTemplateVars('breadcrumbs'); array_shift($breadcrumbs); array_pop($breadcrumbs); $categories = fn_array_column($breadcrumbs, 'title'); $categories_pixel = implode(' > ', $categories); Tygh::$app['view']->assign('categories_pixel', $categories_pixel); } 