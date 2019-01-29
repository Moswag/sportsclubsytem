<script src='frontend/js/dynamicScript.js'></script>
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
        var allowedNumberOfEboundDynamicAdds = 4;
        var sizesEboundDynamicAdsDesktop = ['728x90'];
        var sizesEboundDynamicAdsTablet = ['728x90'];
        var sizesEboundDynamicAdsMobile = ['320x100'];
        eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

        if(typeof user_tag_config == 'undefined'){
            var user_tag_config = {};
        }
        user_tag_config['ebound_header_tag'] = {};
        user_tag_config['ebound_header_tag']['desktop'] = {};
        user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
        user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
        user_tag_config['ebound_header_tag']['tablet'] = {};
        user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
        user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
        user_tag_config['ebound_header_tag']['mobile'] = {};
        user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
        user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
    </script></div>