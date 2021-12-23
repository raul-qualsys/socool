{if $product_pixel}
    <meta property="og:title" content="{$product_pixel.title}">
    <meta property="og:url" content="{$product_pixel.url}">
    <meta property="og:image" content="{$product_pixel.image}">
    <meta property="og:image:width" content="{$product_pixel.image_width}">
    <meta property="og:image:height" content="{$product_pixel.image_height}">
    <meta property="og:site_name" content="{$product_pixel.site_name}">
    <meta property="og:type" content="{$product_pixel.type}">

    <meta property="product:brand" content="{$product_pixel.brand}">
    <meta property="product:availability" content="{$product_pixel.availability}">
    <meta property="product:condition" content="{$product_pixel.condition}">
    <meta property="product:price:amount" content="{$product_pixel.price}">
    <meta property="product:price:currency" content="{$product_pixel.currency}">
    <meta property="product:retailer_item_id" content="{$product_pixel.id}">
{/if}

{if $facebook_pixel_ids}
    <!-- Facebook Pixel Code -->
    <script type="text/javascript" data-no-defer>
        {literal}
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        {/literal}
        {foreach $facebook_pixel_ids as $pixel_id}
            {if $pixel_id}
                fbq('init', {$pixel_id});
            {/if}
        {/foreach}
        fbq('track', 'PageView');
    </script>
    {foreach $facebook_pixel_ids as $pixel_id}
        {if $pixel_id}
            <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id={$pixel_id}&ev=PageView&noscript=1"
            /></noscript>
        {/if}
    {/foreach}
    <!-- End Facebook Pixel Code -->
{/if}
