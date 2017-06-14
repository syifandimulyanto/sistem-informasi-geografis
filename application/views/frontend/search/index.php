<style type="text/css">
    .leaflet-control-layers-base input{
        height: 20px!important;
    }

    .leaflet-control-layers-overlays input{
        height: 20px!important;
    }

    .leaflet-control-layers label {
        font-size: 12px!important;
    }

    .leaflet-popup
    {
        height: 0px;
    }

    .leaflet-popup-content-wrapper, .leaflet-popup-tip {
        background: none!important;
        box-shadow: none;
        -webkit-box-shadow: none;
    }

</style>
<div class="fs-container">
    <div class="fs-inner-container content">
        <div class="fs-content">
            <section class="search">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row with-forms">
                                <div class="col-fs-6">
                                    <div class="input-with-icon">
                                        <i class="sl sl-icon-magnifier"></i>
                                        <input type="text" name="q" placeholder="What are you looking for ?" value="<?php echo @$filter['q']; ?>" />
                                    </div>
                                </div>
                                <div class="col-fs-6">
                                    <div class="input-with-icon location">
                                        <input type="text" name="address" placeholder="Address" value="<?php echo @$filter['address']; ?>" />
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                </div>
                                <div class="col-fs-12">
                                    <div class="panel-dropdown">
                                        <a href="#">Facilities</a>
                                        <div class="panel-dropdown-content checkboxes">
                                            <div class="row">
                                                <?php 
                                                    $no = 1;
                                                    foreach ($facilities as $key => $val): 
                                                ?>
                                                <div class="col-md-6">
                                                    <input id="facilities-check-<?php echo $no; ?>" type="checkbox" name="facilities[]" value="<?php echo $val->id; ?>" <?php if( @in_array($val->id, $filter['facilities'] ) ) echo 'checked'; ?> class="all">
                                                    <label for="facilities-check-<?php echo $no; ?>"><?php echo $val->name; ?></label>
                                                </div>  
                                                <?php 
                                                    $no++;
                                                    endforeach; 
                                                ?>
                                            </div>
                                            <div class="panel-buttons">
                                                <button class="panel-cancel">Cancel</button>
                                                <button type="submit" class="panel-apply">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-dropdown wide">
                                        <a href="#">Destination Type</a>
                                        <div class="panel-dropdown-content checkboxes">
                                            <div class="row">
                                                <?php 
                                                    $no = 1;
                                                    foreach ($category as $key => $val): 
                                                ?>
                                                <div class="col-md-6">
                                                    <input id="category-check-<?php echo $no; ?>" type="checkbox" name="category[]" value="<?php echo $val->id; ?>"  <?php if( @in_array($val->id, $filter['category'] ) ) echo 'checked'; ?> class="all">
                                                    <label for="category-check-<?php echo $no; ?>"><?php echo $val->name; ?></label>
                                                </div>  
                                                <?php 
                                                    $no++;
                                                    endforeach; 
                                                ?>
                                            </div>
                                            <div class="panel-buttons">
                                                <button class="panel-cancel">Cancel</button>
                                                <button type="submit" class="panel-apply">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-dropdown">
                                        <a href="#">Filter District</a>
                                        <div class="panel-dropdown-content checkboxes">
                                            <div class="row">
                                                <?php 
                                                    $no = 1;
                                                    foreach ($district as $key => $val): 
                                                ?>
                                                <div class="col-md-4">
                                                    <input id="district-check-<?php echo $no; ?>" type="checkbox" name="district[]" value="<?php echo $val->id; ?>"  <?php if( @in_array($val->id, $filter['district'] ) ) echo 'checked'; ?> class="all">
                                                    <label for="district-check-<?php echo $no; ?>"><?php echo $val->name; ?></label>
                                                </div>  
                                                <?php 
                                                    $no++;
                                                    endforeach; 
                                                ?>
                                            </div>
                                            <div class="panel-buttons">
                                                <button class="panel-cancel">Cancel</button>
                                                <button type="submit" class="panel-apply">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <section class="listings-container margin-top-30">
                <div class="row fs-switcher">
                    <div class="col-md-6">
                        <p class="showing-results"><?php echo sizeof(json_decode($list)); ?> Results Found </p>
                    </div>
                </div>
                <div class="row fs-listings">
                <?php foreach (json_decode($list) as $key => $val): ?>
                    <div class="col-lg-6 col-md-6">
                        <a href="<?php echo frontend_url('search/detail/'.$val->slug); ?>" class="listing-item-container compact" data-marker-id="1">
                            <div class="listing-item">
                                <img src="<?php echo frontend_url($val->path.$val->image); ?>" alt="">
                                <div class="listing-badge now-open">Now Open</div>
                                <div class="listing-item-content">
                                    <div class="numerical-rating" data-rating="3.5"></div>
                                    <h3><?php echo $val->name; ?></h3>
                                    <span><?php echo $val->address; ?></span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>

        </div>
    </div>
    <div class="fs-inner-container map-fixed">
        <div id="map-container">
            <div id="map" data-map-zoom="9" data-map-scroll="true">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&key=AIzaSyCS1B2dFDmvb6SmAGVdBltiOCMKogFf2jA"></script>
<?php echo frontend_asset_js('maps/leaflet/dist/leaflet.js'); ?>
<?php echo frontend_asset_js('maps/pancontrol/L.Control.Pan.js'); ?>
<?php echo frontend_asset_js('maps/Google.js'); ?>
<?php echo frontend_asset_js('maps/Bing.js'); ?>

<script type="text/javascript">        

    var data            = JSON.stringify(<?php echo $list; ?>);
    var server_data     = data.replace(/\n/g, "\\n")
                              .replace(/\r\n/g, "\\n");
    var maps_data       = JSON.parse(server_data);
    var frontend_url    = '<?php echo frontend_url(); ?>';

    var googleRoadmap   = new L.Google('ROADMAP');
    var cloudmade       = new L.TileLayer('http://{s}.tile.cloudmade.com/4c09f91134dc40008537e4bbdf6b606e/22677/256/{z}/{x}/{y}.png');
    var mpn             = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    var qst             = new L.TileLayer('http://otile1.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png');
    var googleSatellite = new L.Google('SATELLITE');
    var googleHybrid    = new L.Google('HYBRID');
    var bingMap         = new L.BingLayer("Anqm0F_JjIZvT0P3abS6KONpaBaKuTnITRrnYuiJCE0WOhH6ZbE4DzeT6brvKVR5");
    var baseMaps        = {
                            'Cloudmade'         : cloudmade, 
                            'Mapnik'            : mpn, 
                            'MapQuest'          : qst, 
                            'Google Roadmap'    : googleRoadmap, 
                            'Google Satellite'  : googleSatellite, 
                            'Google Hybrid'     : googleHybrid, 
                            'BING'              :bingMap
                        };
        
    var toursLayer      = new L.LayerGroup();
    var villaLayer      = new L.LayerGroup();
    var hotelsLayer     = new L.LayerGroup();
    var souvenirsLayer  = new L.LayerGroup();


    function infoBox(name, address, image, slug)
    {
        var pop = '<div class="infoBox" style="width: 270px;  position: absolute; visibility: visible;  cursor: default;">';
                pop += '<div class="map-box">';
                    pop += '<a href="'+frontend_url+'search/detail/'+slug+'" class="listing-img-container">';
                        pop += '<img src="'+frontend_url+image+'" alt="">';
                        pop += '<div class="listing-item-content">';
                            pop += '<h3>'+name+'</h3>';
                            pop += '<span>'+address+'</span>';
                        pop += '</div>';
                    pop += '</a>';
                    pop += '<div class="listing-content">';
                        pop += '<div class="listing-title">';
                            pop += '<div class="star-rating" data-rating="3.5">';
                                pop += '<div class="rating-counter">(46 reviews)</div>';
                                pop += '<span class="star"></span>';
                                pop += '<span class="star"></span>';
                                pop += '<span class="star"></span>';
                                pop += '<span class="star half"></span>';
                                pop += '<span class="star empty"></span>';
                            pop += '</div>';
                        pop += '</div>';
                    pop += '</div>';
                pop += '</div>';
            pop += '</div>';

        return pop;
    }

    function infoMarker(icon)
    {
        var html = '<div class="map-marker-container">';
                html += '<div class="marker-container">';
                    html +='<div class="marker-card">';
                        html +='<div class="front face">';
                            html +='<i class="im '+icon+'"></i>';
                        html +='</div>';
                        html +='<div class="back face">';
                            html +='<i class="im '+icon+'"></i>';
                        html +='</div>';
                        html +='<div class="marker-arrow"></div>';
                    html +='</div>';
                html +='</div>';
            html +='</div>';

        return html;
    }

    jQuery.each( maps_data, function( key, val ) {
        

        var custom_ico = L.divIcon({
            className  : 'map-marker',
            iconSize   : null,
            html       : infoMarker(val.icon)
        });

        var LatLng = new L.LatLng(val.latitude, val.longitude);
        if(val.cat_name == 'Wisata')
        {
            var toursMaker  = L.marker(LatLng, {icon: custom_ico}).bindPopup( infoBox(val.name, val.address, val.path+val.image, val.slug) );
            toursLayer.addLayer(toursMaker);
        }
        else if(val.cat_name == 'Villa')
        {
            var villaMaker  = L.marker(LatLng, {icon: custom_ico}).bindPopup( infoBox(val.name, val.address, val.path+val.image, val.slug) );
            villaLayer.addLayer(villaMaker);
        }
        else if(val.cat_name == 'Hotel')
        {
            var hotelMaker  = L.marker(LatLng, {icon: custom_ico}).bindPopup( infoBox(val.name, val.address, val.path+val.image, val.slug) );
            hotelsLayer.addLayer(hotelMaker);
        }
        else if(val.cat_name == 'Oleh -  oleh')
        {
            var souvenirsMaker  = L.marker(LatLng, {icon: custom_ico}).bindPopup( infoBox(val.name, val.address, val.path+val.image, val.slug) );
            souvenirsLayer.addLayer(souvenirsMaker);
        }
    });

    var baseLayer = {
                        'Wisata' : toursLayer,
                        'Villa'  : villaLayer,
                        'Hotel'  : hotelsLayer,
                        'Pusat Oleh - Oleh'  : souvenirsLayer,
                    };

    var map = new L.Map('map', {center: new L.LatLng(-7.871153, 112.526925),
        zoom    : 14, 
        layers  : [googleRoadmap, toursLayer, villaLayer, hotelsLayer, souvenirsLayer]});

    map.addControl(new L.Control.Scale());
    map.addControl(new L.Control.Layers(baseMaps, baseLayer));
        
</script>
