<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-header card-header-text" data-background-color="blue">
                            <h4 class="card-title">Form Agent</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="name" required>
                                        <span class="help-block">Name of the property.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Category</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <select name="category_id" class="selectpicker" data-style="select-with-transition" title="Choose Category">
                                            <option disabled> Choose Category</option>
                                            <?php foreach ($category as $key => $val): ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Description</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea rows="4" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">District</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <select name="district_id" class="selectpicker" data-style="select-with-transition" title="Choose District">
                                            <option disabled> Choose District</option>
                                            <?php foreach ($district as $key => $val): ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Address</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea rows="4" class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Phone Number</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="phone_number" required>
                                        <span class="help-block">Phone number of the property.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Information</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea rows="4" class="form-control" name="info"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Facilities</label>
                                <div class="col-sm-10">
                                    <?php foreach ($facilities as $key => $val): ?>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                            <input type="checkbox" name="facilities[]" value="<?php echo $val->id; ?>"> <?php echo $val->name; ?>
                                        </label>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Image</label>
                                <div class="col-sm-10" id="place_image">
                                    <div class="col-sm-2">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="<?php echo backend_asset_url('assets/img/image_placeholder.jpg'); ?>" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image[]" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left"></label>
                                <div class="col-sm-10">
                                    <a href="#" class="btn btn-round btn-block btn-rose" id="more_image"> Add  More Image</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Area</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" id="area_maps">
                                        <input type="hidden" name="latitude">
                                        <input type="hidden" name="longitude">
                                        <div id="map-property" style="height: 400px;"></div>

                                    </div>
                                </div>
                            </div>
               
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Active</label>
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                            <input type="checkbox" name="active"> Activated
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var coordinate  = {lat: <?php echo $this->config->item('coordinate')['latitude']; ?>, lng: <?php echo $this->config->item('coordinate')['longitude']; ?>};
    var map_property, marker_property, autocomplete, autocompleteOptions;

    var iconsDefault    = backend_asset_url + 'images/maps-and-flags.png';
    
    function initMap() 
    {
        map_property = new google.maps.Map(document.getElementById('map-property'), {
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
        autocompleteOptions = {
            componentRestrictions: {country: 'ID'}
        };
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('area_maps')), autocompleteOptions);
        autocomplete.addListener('place_changed', function(){
            var place = autocomplete.getPlace();
            if(place.geometry){
                map_property.setCenter(place.geometry.location);
                map_property.setZoom(16);
                marker_property.setPosition(place.geometry.location);
                $('input[name=latitude]').val(place.geometry.location.lat());
                $('input[name=longitude]').val(place.geometry.location.lng());
            }else{
                document.getElementById('area_maps').placeholder = 'Masukkan Area Properti anda untuk menentukan marker di peta';
            }
        });

        map_property.addListener('click', function(event) {
            marker_property.setPosition(event.latLng);
            $('input[name=latitude]').val(event.latLng.lat());
            $('input[name=longitude]').val(event.latLng.lng());
        });
       
        marker_property.addListener('dragend', function (event) {
             $('input[name=latitude]').val(event.latLng.lat());
             $('input[name=longitude]').val(event.latLng.lng());
        });

    }

    $(document).on('click', '#more_image', function(e){
        e.preventDefault();
        var html  = '<div class="col-sm-2">';
                html += '<div class="fileinput fileinput-new text-center" data-provides="fileinput">';
                    html += '<div class="fileinput-new thumbnail">';
                        html += '<img src="'+backend_asset_url+'assets/img/image_placeholder.jpg">';
                    html += '</div>';
                    html += '<div class="fileinput-preview fileinput-exists thumbnail"></div>';
                    html += '<div>';
                        html += '<span class="btn btn-rose btn-round btn-file">';
                            html += '<span class="fileinput-new">Select image</span>';
                            html += '<span class="fileinput-exists">Change</span>';
                            html += '<input type="file" name="image[]" />';
                        html += '</span>';
                        html += '<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';

        $('#place_image').append(html);
    });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS1B2dFDmvb6SmAGVdBltiOCMKogFf2jA&callback=initMap&libraries=places" async defer></script>
