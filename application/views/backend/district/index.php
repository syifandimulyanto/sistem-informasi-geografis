<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <form id="form_input" action="<?php echo backend_url('district/save') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="0">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">announcement</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title"><?php echo $page_title; ?> Forms</h4>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Name
                                    <small>*</small>
                                </label>
                                <input type="text" class="form-control" name="name" required="true">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Description
                                </label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Parent
                                </label>
                                <select name="city_id" class="selectpicker" data-style="select-with-transition" title="Choose parent">
                                    <option disabled> Choose parent</option>
                                    <?php foreach ($city as $key => $val): ?>
                                        <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="category form-category">
                                <small>*</small> Required fields
                            </div>
                            <div class="form-footer text-right">
                                <button type="reset" class="btn btn-default btn-fill">Reset</button>
                                <button type="submit" class="btn btn-info btn-fill">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"><?php echo $page_title; ?> Data</h4>
                        <div class="toolbar">
                        </div>
                        <div class="material-datatables">
                            <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <?php foreach ($field as $key => $val): ?>
                                            <?php if($val == "Actions"): ?>
                                                <th class="disabled-sorting text-right"> <?php echo $val; ?> </th>
                                            <?php else: ?>
                                                <th> <?php echo $val; ?> </th>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('.datatables').DataTable( {
                        ajax: backend_url+'district/get_data'
                    });
        setFormValidation('#form_input');
    });


    function reload_table()
    {
        table.ajax.reload(null,false);
        $('.selectpicker').selectpicker('refresh');
    }

    function editData(id)
    {
        $.ajax({
            url         : backend_url+'district/detail',
            type        : 'POST',
            data        : 'id='+id,
            dataType    : 'JSON',
            beforeSend  : function()
            {
                
            },
            success: function(data)
            {
                $('#form_input').find('input[name=id]').val(data.id);
                $('#form_input').find('input[name=name]').val(data.name);
                $('#form_input').find('textarea[name=description]').val(data.description);
                $('#form_input').find('select[name=city_id]').val(data.city_id);
                $('.selectpicker').selectpicker('refresh')
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                element.find('button[type=submit]').html('SAVE');
                swal({
                    title               : 'Error',
                    text                : 'Kesalahan pada server, ulangi lagi',
                    buttonsStyling      : false,
                    confirmButtonClass  : "btn btn-danger"
                });

            }         
        });
    }

    $(document).on('submit', '#form_input', function(e){
        e.preventDefault();
        var element = $(this);
        $.ajax({
            url         : element.attr('action'),
            type        : element.attr('method'),
            data        : new FormData(this),
            dataType    : 'JSON',
            mimeType    : element.attr('enctype'),
            contentType : false,
            cache       : false,
            processData : false,
            beforeSend  : function()
            {
                element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function(data)
            {
                if(data.status)
                {
                    element[0].reset();
                    swal({
                        title               : data.notif.title,
                        text                : data.notif.desc,
                        buttonsStyling      : false,
                        confirmButtonClass  : "btn btn-info",
                        type                : "success"
                    });
                    reload_table();
                    
                }else
                {
                    swal({
                        title               : data.notif.title,
                        text                : data.notif.desc,
                        buttonsStyling      : false,
                        confirmButtonClass  : "btn btn-danger"
                    });
                }
                element.find('button[type=submit]').html('SAVE');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                element.find('button[type=submit]').html('SAVE');
                swal({
                    title               : 'Error',
                    text                : 'Kesalahan pada server, ulangi lagi',
                    buttonsStyling      : false,
                    confirmButtonClass  : "btn btn-danger"
                });

            }         
        });
    });
</script>