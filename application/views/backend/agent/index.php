<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">announcement</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"><?php echo $page_title; ?></h4>
                        <a href="<?php echo backend_url('agent/create'); ?>" class="btn btn-block btn-info">Create</a>
                    </div>
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
                                    <tbody>
                                        <?php if( $agent_cnt > 0 ): ?>
                                            <?php 
                                                $no = 1; 
                                                foreach ($agent as $key => $val): 
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $val->name; ?></td>
                                                    <td><?php echo $val->info; ?></td>
                                                    <td><?php //echo $val->description; ?></td>
                                                    <td>
                                                        <a href="<?php echo backend_url('city/delete').'/'.$val->id; ?>" onclick="return confirmDelete($(this));" class="btn btn-simple btn-danger btn-icon remove pull-right"><i class="material-icons">close</i></a>
                                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit pull-right"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            <?php 
                                                $no++;
                                                endforeach; 
                                            ?>
                                        <?php endif; ?>
                                    </tbody>
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
    $(document).ready(function() {
        $('.datatables').DataTable();
    });
</script>