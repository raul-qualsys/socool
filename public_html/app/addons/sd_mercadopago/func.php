<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

/**
 * delete payment processors
 * @return void
 */
function fn_sd_mercadopago_delete_payment_processors()
{
    $processor_id = db_get_field('SELECT processor_id FROM ?:payment_processors WHERE processor_script = ?s', MERCADOPAGO_PAYMENT_PROCESSOR);
    if (!empty($processor_id)) {
        $payment_ids = db_get_fields('SELECT payment_id FROM ?:payments WHERE processor_id = ?i', $processor_id);
        if (!empty($payment_ids)) {
            foreach ($payment_ids as $payment_id) {
                fn_delete_payment($payment_id);
            }
        }
        db_query('DELETE FROM ?:payment_processors WHERE processor_script = ?s', MERCADOPAGO_PAYMENT_PROCESSOR);
    }
}

/**
 * Return available currencies
 * @return array
 */
function fn_sd_mercadopago_get_currencies()
{
    $mercadopago_currencies = fn_get_schema('mercadopago', 'currencies');

    $currencies = fn_get_currencies();

    foreach ($mercadopago_currencies as $key => &$item) {
        $item['active'] = isset($currencies[$key]);
    }

    return $mercadopago_currencies;
}
