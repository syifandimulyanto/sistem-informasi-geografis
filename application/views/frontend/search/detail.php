<div class="listing-slider mfp-gallery-container margin-bottom-0">
    <?php foreach ($images as $key => $val): ?>
        <a href="<?php echo frontend_url($val->path.$val->image); ?>" data-background-image="<?php echo frontend_url($val->path.$val->image); ?>" class="item mfp-gallery"></a>
    <?php endforeach; ?>
</div>
<div class="container">
    <div class="row sticky-wrapper">
        <div class="col-lg-8 col-md-8 padding-right-30">

            <div id="titlebar" class="listing-titlebar">
                <div class="listing-titlebar-title">
                    <h2><?php echo $detail->name; ?> <span class="listing-tag"><?php echo $category->name; ?> </span></h2>
                    <span>
                        <a href="#listing-location" class="listing-address">
                            <i class="fa fa-map-marker"></i>
                            <?php echo $detail->address; ?>
                        </a>
                    </span>
                </div>
            </div>

            <div id="listing-nav" class="listing-nav-container">
                <ul class="listing-nav">
                    <li><a href="#listing-overview" class="active">Overview</a></li>
                    <li><a href="#listing-location">Location</a></li>
                </ul>
            </div>
            
            <div id="listing-overview" class="listing-section">
                <p><?php echo $detail->description; ?></p>
                <?php if( isset($facilities) ): ?>
                    <h3 class="listing-desc-headline">Fasilitas</h3>
                    <ul class="listing-features checkboxes margin-top-0">
                        <?php foreach ($facilities as $key => $val): ?>
                            <li><?php echo $val->name; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div id="listing-location" class="listing-section">
                <h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>
                <div id="singleListingMap-container">
                    <div id="singleListingMap" data-latitude="<?php echo $detail->latitude; ?>" data-longitude="<?php echo $detail->longitude; ?>" data-map-icon="im im-icon-Hamburger"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 margin-top-75 sticky">
            <div class="boxed-widget">
                <h3><i class="sl sl-icon-pin"></i> Contact</h3>
                <ul class="listing-details-sidebar">
                    <li><i class="sl sl-icon-phone"></i> (123) 123-456</li>
                    <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li>
                    <li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="1b72757d745b7e637a766b777e35787476">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                </ul>

                <ul class="listing-details-sidebar social-profiles">
                    <li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
                    <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                </ul>

                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <div class="small-dialog-header">
                        <h3>Send Message</h3>
                    </div>
                    <div class="message-reply margin-top-0">
                        <textarea cols="40" rows="3" placeholder="Your message to Burger House"></textarea>
                        <button class="button">Send Message</button>
                    </div>
                </div>

                <a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
            </div>
            
            <div class="listing-share margin-top-40 margin-bottom-40 no-border">
                <button class="like-button"><span class="like-icon"></span> Bookmark this listing</button> 
                <span>159 people bookmarked this place</span>
                <ul class="share-buttons margin-top-40 margin-bottom-0">
                    <li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                    <li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var coordinate  = {lat: $('#singleListingMap').data('latitude'), lng: $('#singleListingMap').data('longitude')};
    var map_property, marker_property;
    // var iconsDefault  = backend_asset_url + 'images/maps-and-flags.png';
    
    function initMap() 
    {
        map_property = new google.maps.Map(document.getElementById('singleListingMap'), {
          center: coordinate,
          scrollwheel: false,
          zoom: 12,
        });
        marker_property = new google.maps.Marker({
            position: coordinate,
            map: map_property,
            // icon: iconsDefault,
            draggable:true,
            title: 'Klik untuk memilih area'
        });

    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS1B2dFDmvb6SmAGVdBltiOCMKogFf2jA&callback=initMap&libraries=places" async defer></script>