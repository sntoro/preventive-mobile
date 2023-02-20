<div class="pcoded-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-md-6 col-sm-6">
                        <div class="page-header-title" style="text-align:left">
                            <div class="d-inline">
                                <h4>Home</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="page-header-breadcrumb" style="text-align:right">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url('Menu_c') ?>"> <i class="icofont icofont-home"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- bug list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text"><i class="fa fa-note m-r-10"></i> Job List Planning</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                        <thead>
                                            <tr>
                                                <th>Item Check</th>
                                                <th>Tool Name</th>
                                                <th>Area</th>
                                                <th>Plan Duration (m)</th>
                                                <th>Plan MP</th>
                                                <th>Last Check At</th>
                                                <th>Schedule At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $key) { ?>
                                                <tr>
                                                    <td><?php echo $key->CHR_ITEM_NAME; ?></td>
                                                    <td><?php echo $key->CHR_TOOL_NAME; ?></td>
                                                    <td><?php echo $key->CHR_LOCATION; ?></td>
                                                    <td><?php echo $key->INT_DURATION; ?></td>
                                                    <td><?php echo $key->INT_MP; ?></td>
                                                    <td><i class="fa fa-calendar-o"></i>&nbsp; <?php echo $key->DATE_LAST_CHECKED_AT; ?></td>
                                                    <td><i class="fa fa-calendar-o"></i>&nbsp; <?php echo $key->DATE_SCHEDULE_AT; ?></td>
                                                    <td><button onclick="getSelectedData(<?php echo $key->INT_ID; ?>)" type="button" class="btn btn-primary waves-effect">Start Preventive</button></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Item Check</th>
                                                <th>Tool Name</th>
                                                <th>Area</th>
                                                <th>Plan Duration (m)</th>
                                                <th>Plan MP</th>
                                                <th>Schedule At</th>
                                                <th>Last Check At</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="modal fade" id="modal-scan" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Scan Barcode Tool</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-block">
                                                    <input type="hidden" id="item_id" name="item_id"></input>
                                                    <div id="tool_code"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- bug list card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
</div>

<script>
    let baseurl = '<?php echo base_url() ?>' + '';

    function getSelectedData(id) {
        $('#modal-scan').modal('show', {
            backdrop: 'static',
            keyboard: false
        });

        html5QrcodeScanner.render(onScanSuccess);
        document.getElementById("item_id").value = id;
    }

    function onScanSuccess(tool_code, decodedResult) {

        let item_id = document.getElementById("item_id").value;

        $.ajax({
            type: 'GET',
            url: "<?php echo base_url('Tool_c/getById/') ?>" + tool_code + '/' + item_id ,
            data: {},
            dataType: 'json',
            beforeSend: function() {},
            success: function(result) {
                if (result) {
                    window.location = baseurl + 'Job_list_c/view/' + tool_code;
                } else {
                    alert('data not found');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            }
        });

    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "tool_code", {
            fps: 10,
            qrbox: 200
        }
    );
</script>