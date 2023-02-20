<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-md-6 col-sm-6">
                            <div class="page-header-title" style="text-align:left">
                                <div class="d-inline">
                                    <h4>Task detail</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="page-header-breadcrumb" style="text-align:right">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url('Job_list_c') ?>"> <i class="icofont icofont-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Task Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Task-detail-right start -->
                        <div class="col-xl-4 col-lg-12 push-xl-8">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="fa fa-clock-o m-r-10"></i>Actual Preventive Duration</h5>
                                </div>
                                <div class="card-block">
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h2 id='count-day'>00</h2>
                                                <p>Days</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <h2 id='count-hour'>00</h2>
                                                <p>Hours</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <h2 id='count-min'>00</h2>
                                                <p>Minutes</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <h2 id='count-sec'>00</h2>
                                                <p>Seconds</p>
                                            </div>
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of yourCountdown -->
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="btnStartStopPreventive" class="btn btn-info btn-block notif-start m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'notif-start']);">Start Preventive</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> Tools Details</h5>
                                    <div class="tool-box f-right">
                                        <div class="icon-btn">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <button type="button" id='btnPersonel' class="btn btn-outline-primary btn-icon"><i class="icofont icofont-users"></i></button>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <button type="button" data-toggle="modal" data-target="#tabbed-form" class="btn btn-outline-primary  btn-icon"><i class="icofont icofont-info"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><i class="icofont icofont-contrast"></i> Tooling Name:</td>
                                                <td class="text-right"><span class="f-right"><a href="#"> <?php echo $tool->CHR_TOOL_NAME; ?> </a></span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-contrast"></i> Model/Serial:</td>
                                                <td class="text-right"><span class="f-right"><a href="#"><?php echo $tool->CHR_SERIAL_NUMBER; ?></a></span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-meeting-add"></i> Date Est:</td>
                                                <td class="text-right"><?php echo $tool->DAT_RELEASE_YEAR; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-spinner-alt-3"></i> Location:</td>
                                                <td class="text-right"><?php echo $tool->CHR_LOCATION; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-spinner-alt-3"></i> Std. Stroke:</td>
                                                <td class="text-right"><?php echo $tool->INT_STD_STROKE; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-spinner-alt-3"></i> Total. Stroke:</td>
                                                <td class="text-right"><?php echo $tool->INT_TOTAL_STROKE; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-spinner-alt-3"></i> Last P/M Stroke:</td>
                                                <td class="text-right"><?php echo $tool->INT_LAST_STROKE; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-id-card"></i> PIC:</td>
                                                <td class="text-right"><?php echo $tool->CHR_PIC; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <!-- Task-detail-right start -->

                        <!-- Task-detail-left start -->
                        <div class="col-xl-8 col-lg-12 pull-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="fa fa-tasks m-r-5"></i> Preventive Tooling - <?php echo $tool->CHR_TOOL_NAME; ?></h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                            <thead>
                                                <tr role="row" class="text-center">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Item Check Name</th>
                                                    <th class="text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php $no = 1;
                                                foreach ($data as $key) { ?>
                                                    <tr>
                                                        <td><?php echo $key->INT_SEQUENCE_ITEM_CHECK; ?></td>
                                                        <td><?php echo $key->CHR_ITEM_CHECK_NAME; ?></td>
                                                        <td><button type="button" class="btn btn-primary waves-effect" onclick="getDetail(<?php echo $key->INT_ID; ?>,<?php echo $key->INT_SEQUENCE_ITEM_CHECK; ?>)"><?php echo $key->CHECKED . ' / ' . $key->COUNT_ITEM; ?></button></td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="icofont icofont-image m-r-5"></i>Capture Image (Before)</h5>
                                </div>
                                <div class="card-block">
                                    <input type="file" capture="camera" name="files[]" accept="image/*" id="filer_input" multiple="multiple">
                                    <!-- <input type="file" capture="camera" name="files[]" accept="image/*" id="filer_input1" multiple="multiple"> -->
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="icofont icofont-comment m-r-5"></i>Voice Recorders (Before)</h5>
                                </div>
                                <div class="card-block">
                                    <div class="new-message">
                                        <div class="message-box">
                                            <span class="onair">
                                                <span class="icon icon-recording"></span> Recording audio:</span>
                                            <span class="timer">
                                            </span>
                                        </div>
                                        <textarea class="message-box" rows=1 placeholder="Type your message..."></textarea>
                                        <button class="audio"><span class="icon icon-mic"></span></button>
                                        <button class="send"><span class="icon icon-send"></span></button>
                                    </div>
                                    <div class="messages"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Task-detail-left end -->

                        <!-- tabbed form modal start -->
                        <div id="tabbed-form" class="modal fade mixed-form" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content card">
                                    <div class="modal-body card-block">
                                        <div class="login-card-modal">
                                            <form class="md-float-material">
                                                <div class="tabbed-modal">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#drawing_tool" role="tab">
                                                                <h6>Drawing Tool</h6>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#drawing_product" role="tab">
                                                                <h6>Drawing Product</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="drawing_tool" role="tabpanel">
                                                            <div class="card-block task-attachment">
                                                                <ul class="media-list">
                                                                    <?php foreach ($wis_tool as $key => $value) { ?>
                                                                        <li class="media d-flex m-b-10">
                                                                            <div class="m-r-20 v-middle">
                                                                                <i class="icofont icofont-file-<?php echo $value->format_type; ?> f-28 text-muted"></i>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="<?php echo base_url($value->CHR_URL) ?>" class="m-b-5 d-block"><?php echo $value->CHR_WIS_NAME . "." . $value->CHR_EXT; ?></a>
                                                                                <div class="text-muted">
                                                                                    <span><?php echo $value->CHR_WIS_DESC; ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f-right v-middle text-muted">
                                                                                <i class="icofont icofont-eye-alt"></i>
                                                                            </div>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="drawing_product" role="tabpanel">
                                                            <div class="card-block task-attachment">
                                                                <ul class="media-list">
                                                                    <?php foreach ($wis_product as $key => $value) { ?>
                                                                        <li class="media d-flex m-b-10">
                                                                            <div class="m-r-20 v-middle">
                                                                                <i class="icofont icofont-file-<?php echo $value->format_type; ?> f-28 text-muted"></i>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="<?php echo base_url($value->CHR_URL) ?>" class="m-b-5 d-block"><?php echo $value->CHR_WIS_NAME . "." . $value->CHR_EXT; ?></a>
                                                                                <div class="text-muted">
                                                                                    <span><?php echo $value->CHR_WIS_DESC; ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f-right v-middle text-muted">
                                                                                <i class="icofont icofont-eye-alt"></i>
                                                                            </div>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabbed form modal end -->

                        <!-- normal form modal start -->
                        <div id="personel-form" class="modal fade mixed-form" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content card">
                                    <div class="modal-body card-block">
                                        <div class="card-block user-box assign-user">
                                            <?php foreach ($personel as $key => $value) { ?>
                                                <div class="media">
                                                    <div class="media-left media-middle photo-table">
                                                        <a href="#">
                                                            <img class="img-radius" src="<?php echo base_url('assets/images/profile.jpg') ?>" alt="chat-user">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><strong><?php echo $value->CHR_USERNAME; ?></strong></h6>
                                                        <div class="text-muted">
                                                            <p><?php echo $value->CHR_NAME; ?></p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#!" class="text-muted"> <i class="icon-options-vertical"></i></a>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- normal form modal end -->

                        <div id="modal-item-check" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <?php echo form_open(base_url('Item_check_c/update')); ?>
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="item-check-name">Item Check Detail</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body" id="item-check-detail">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                                        <button id="update-item" class="btn btn-primary">Submit</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Page-body end -->

            </div>
        </div>
    </div>
</div>
<script>
    const personelBtn = document.getElementById('btnPersonel');
    personelBtn.addEventListener('click', function(e) {

        $('#personel-form').modal('show', {
            backdrop: 'static',
            keyboard: false
        });

    })

    function getDetail(id, sequence) {

        var item_detail = document.getElementById('item-check-detail');

        $('#modal-item-check').modal('show', {
            backdrop: 'static',
            keyboard: false
        });

        $.ajax({
            type: 'GET',
            url: "<?php echo base_url('Job_list_c/getById/') ?>" + id + '/' + sequence,
            data: {},
            dataType: 'json',
            beforeSend: function() {
                $("#item-check-detail").html('');
            },
            success: function(result) {

                $("#item-check-name").html(result.item_name);

                let norow = 1;
                for (let index = 0; index < result.data.length; ++index) {
                    let element = result.data[index]
                    let selected_ok = '';
                    let selected_ng = '';

                    if (element.CHR_VALUE == element.CHR_OK_STD) {
                        selected_ok = 'selected';
                    } else if (element.CHR_VALUE == element.CHR_NG_STD) {
                        selected_ng = 'selected';
                    } else {
                    }

                    var div = document.createElement('div');

                    div.className = 'form-group row';

                    div.innerHTML = `
                    <div class='col-md-1'>
                        <label class='block'>` + norow + `</label>
                    </div>
                    <div class='col-md-4'>
                        <label class='block'>` + element.CHR_ITEM_CHECK_DETAIL_NAME + `</label>
                    </div>
                    <div class='col-md-3'>
                        <label class='block'>` + element.CHR_METHOD_NAME + `</label>
                    </div>
                    <div class='col-md-4'>
                        <select name='' class='form-control'>
                            <option ` + selected_ok + ` value=` + element.CHR_OK_STD + `>` + element.CHR_OK_STD + `</option>
                            <option ` + selected_ng + ` value=` + element.CHR_NG_STD + `>` + element.CHR_NG_STD + `</option>
                        </select>
                    </div>`;

                    item_detail.appendChild(div);
                    norow++;
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            }
        });
    }

    var timer = null,
        interval = 1000,
        totalSeconds = 0;

    document.querySelector(".notif-start").onclick = function() {

        if ($("#btnStartStopPreventive").html() == 'Start Preventive') {
            swal("Waktu Dimulai!", "Perhitungan dimulainya eksekusi preventive sudah dimulai");

            if (timer !== null) return;
            timer = setInterval(function() {
                ++totalSeconds;

                var day = Math.floor(totalSeconds / 86400);
                var hour = Math.floor(totalSeconds / 3600);
                var minute = Math.floor((totalSeconds - hour * 3600) / 60);
                var seconds = totalSeconds - (hour * 3600 + minute * 60);

                if (day < 10)
                    day = "0" + day;
                if (hour < 10)
                    hour = "0" + hour;
                if (minute < 10)
                    minute = "0" + minute;
                if (seconds < 10)
                    seconds = "0" + seconds;

                document.getElementById("count-day").innerHTML = day
                document.getElementById("count-hour").innerHTML = hour
                document.getElementById("count-min").innerHTML = minute
                document.getElementById("count-sec").innerHTML = seconds

            }, interval);

            $("#btnStartStopPreventive").html('Stop Preventive');
            $("#btnStartStopPreventive").removeClass();
            $("#btnStartStopPreventive").addClass("btn btn-danger btn-block notif-start m-b-10");
        } else {
            clearInterval(timer);
            timer = null
            $("#btnStartStopPreventive").html('Start Preventive');
            swal("Waktu Distop!", "Perhitungan dimulainya eksekusi preventive sudah selesai");
            $("#btnStartStopPreventive").removeClass();
            $("#btnStartStopPreventive").addClass("btn btn-info btn-block notif-start m-b-10");
        }

    };

    // const filer_input1 = document.getElementById('filer_input1');

    // filer_input1.on('change', function(e) {
    //     $data = e.originalEvent.target.files[0];
    //     $reader = new FileReader();
    //     reader.onload = function(evt) {
    //         $('#your_img_id').attr('src', evt.target.result);
    //         reader.readAsDataUrl($data);
    //     }
    // });

</script>