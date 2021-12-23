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

use Tygh\Registry;

if (defined('PAYMENT_NOTIFICATION')) {

    if ($mode == 'success') {
        if (
            !empty($_REQUEST['order_id'])
            && !empty($_REQUEST['merchant_order_id'])
            && !empty($_REQUEST['preference_id'])
        ) {
            if (fn_check_payment_script(MERCADOPAGO_PAYMENT_PROCESSOR, $_REQUEST['order_id'])) {

                $pp_response['reason_text'] = __('transaction_approved').' '.__('order_id').':'.$_REQUEST['merchant_order_id'];
                $pp_response['order_status'] = 'P';
                $pp_response['transaction_id'] = $_REQUEST['preference_id'];
                fn_finish_payment($_REQUEST['order_id'], $pp_response);
                fn_order_placement_routines('route', $_REQUEST['order_id'], false);
            }
        }
    } elseif ($mode == 'cancel') {
        if (!empty($_REQUEST['order_id'])) {
            if (fn_check_payment_script(MERCADOPAGO_PAYMENT_PROCESSOR, $_REQUEST['order_id'])) {

                $pp_response['reason_text'] = __('text_transaction_cancelled');
                $pp_response['order_status'] = 'N';
                fn_finish_payment($_REQUEST['order_id'], $pp_response);
                fn_order_placement_routines('route', $_REQUEST['order_id'], false);
            }
        }
    } elseif ($mode == 'pending') {
        if (
            !empty($_REQUEST['order_id'])
            && !empty($_REQUEST['merchant_order_id'])
            && !empty($_REQUEST['preference_id'])
        ) {
            if (fn_check_payment_script(MERCADOPAGO_PAYMENT_PROCESSOR, $_REQUEST['order_id'])) {

                $pp_response['reason_text'] = __('pending').' '.__('order_id').':'.$_REQUEST['merchant_order_id'];
                $pp_response['order_status'] = 'O';
                $pp_response['transaction_id'] = $_REQUEST['preference_id'];
                fn_finish_payment($_REQUEST['order_id'], $pp_response);
                fn_order_placement_routines('route', $_REQUEST['order_id'], false);
            }
        }
    }

} else {
    $pp_curr = $processor_data['processor_params']['currency'];

    require_once (Registry::get('config.dir.addons') . 'sd_mercadopago/vendor/autoload.php');
    MercadoPago\SDK::setAccessToken($processor_data['processor_params']['access_token']);
    MercadoPago\SDK::setClientId($processor_data['processor_params']['client_id']);
    MercadoPago\SDK::setClientSecret($processor_data['processor_params']['client_secret']);

    $preference = new MercadoPago\Preference();

    $goods_desc = '';
    if (!empty($order_info['products'])) {
        $last_product = array_keys($order_info['products']);
        $last_item_id = end($last_product);
        foreach ($order_info['products'] as $item_id => $product) {
            $goods_desc .= $item_id == $last_item_id ? $product['product'] . '.' : $product['product'] . ', ';
        }
    }

    $item = new MercadoPago\Item();
    $item->id = $order_id;
    $item->title = htmlspecialchars(strip_tags($goods_desc));
    $item->quantity = 1;
    $item->currency_id = $pp_curr;
    $item->unit_price = ($pp_curr != CART_PRIMARY_CURRENCY) ? fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, $pp_curr) : $order_info['total'];

    $payer = new MercadoPago\Payer();
    $payer->email = $order_info['email'];
    $payer->phone = array(
        'area_code' => '',
        'number' => $order_info['b_phone']
    );

    $payer->address = array(
        'street_name' => $order_info['b_address'] . ' ' . $order_info['b_address_2'],
        'zip_code' => $order_info['b_zipcode']
    );

    $preference->items = array($item);
    $preference->payer = $payer;

    $preference->back_urls = array(
        'success' => fn_url("payment_notification.success?payment=mercado_pago_payment&order_id=$order_id", AREA, 'current'),
        'failure' => fn_url("payment_notification.cancel?payment=mercado_pago_payment&order_id=$order_id", AREA, 'current'),
        'pending' => fn_url("payment_notification.pending?payment=mercado_pago_payment&order_id=$order_id", AREA, 'current')
    );

    $preference->auto_return = 'approved';

    $preference->save();

    $init_point = $preference->init_point;

    if (!empty($init_point)) {
        echo(__('text_cc_processor_connection', array(
            '[processor]' => $processor_data['processor']
        )));
        fn_redirect($init_point, true);
        exit;
    } else {
        $pp_response['reason_text'] = __('error');
        $pp_response['order_status'] = 'F';
    }
}
