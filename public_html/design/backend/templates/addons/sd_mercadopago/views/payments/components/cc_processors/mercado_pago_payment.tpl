<p>{__("addons.sd_mercadopago.processor_info")}</p>
{$mercadopago_currencies = fn_sd_mercadopago_get_currencies()}

<div class="control-group">
    <label class="control-label" for="access_token">{__("addons.sd_mercadopago.access_token")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][access_token]" id="access_token" value="{$processor_params.access_token}" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="client_id">{__("addons.sd_mercadopago.client_id")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][client_id]" id="client_id" value="{$processor_params.client_id}" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="client_secret">{__("addons.sd_mercadopago.client_secret")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][client_secret]" id="client_secret" value="{$processor_params.client_secret}" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency">{__("currency")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            {foreach $mercadopago_currencies as $currency}
                <option value="{$currency.code}"{if !$currency.active} disabled="disabled"{/if}{if $processor_params.currency == $currency.code} selected="selected"{/if}>{$currency.name}</option>
            {/foreach}
        </select>
    </div>
</div>
