<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            User List
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                                
                                    <button type="submit" class="btn btn-danger waves-effect m-r-20" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="true" aria-controls="collapseFilter">Filter</button>
                                                
                                </li>
                                <li class="dropdown">
                                <!--<form name="export" id="export" method="POST" action="export_users">-->
                                    <button type="submit" id="export-users-excel" class="btn btn-danger waves-effect m-r-20">Export</button>
                                <!--</form>-->
                            </li>
                        </ul>
                    </div>
                    <!--<div class="header">
                                    <b>Filter</b>
                                    <ul class="header-dropdown m-r-/-5">
                                        <li class="dropdown">
                                            
                                                <button type="submit" class="btn btn-danger waves-effect m-r-20">Filter</button>
                                            
                                        </li>
                                    </ul>
                                    </div>-->
                                    <div style="border: none; padding: 20px 30px;">
                                    <div class=" collapse" id="collapseFilter" aria-expanded="false">
                                        <form id="filterForm" method="POST">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control user_alias" name="user_alias" id="user_alias" maxlength="75" value="">
                                                        <label class="form-label">Alias Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control user_mail" name="user_mail" id="user_mail" maxlength="75" value="">
                                                        <label class="form-label">Email Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="input-group date" id="from_datetimepicker">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="start_date" id="start_date" readonly="readonly" value="" style="background-color: transparent;">
                                                            <label class="form-label">Created Start Date</label>
                                                        </div>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="input-group date" id="to_datetimepicker">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="end_date" id="end_date" readonly="readonly" value="" style="background-color: transparent;">
                                                            <label class="form-label">Created End Date</label>
                                                        </div>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="offset" id="offset" readonly="readonly" value="0" style="background-color: transparent;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 align-center">
                                                <button id="filterdata" type="submit" class="btn btn-danger waves-effect">APPLY FILTER</button>
                                                <button id="clearfilter" type="submit" class="btn btn-danger waves-effect">CLEAR FILTER</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                    <div class="body">
                        <div class="">
                            <!-- js-basic-example -->
                            <table class="table table-responsive table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th># Sr. No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Alise</th>
                                        <th>Location</th>
                                        <th>Party</th>
                                        <th class="text-center">Is Active</th>
                                        <th class="text-center">Created Date</th>
                                        <th class="text-right">Active</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="recordsContainer">
                                    <?php
                                    foreach ( $users as $key => $p ):
                                            if($p[ 'id' ] != 2 ){
                                            $ischecked = ($p[ 'is_active' ] == 1) ? "checked" : "";
                                            $isapproved = 1;//$isapproved = ($p[ 'is_approved' ] == "1") ? "Yes" : "No";
                                            $num = $key + 1;
                                            
                                            $update_right_answer = '';
                                            
                                            /*if ( strtotime( $p[ 'end_date' ] ) < strtotime( date( "Y-m-d" ) ) ) {
                                                    $update_right_answer = ($p[ 'right_choice' ] == "") ? '<a href="' . base_url() . 'Poll/details/' . $p[ 'id' ] . '"><i class="material-icons">info_outline</i></a>' : '';
                                            }*/
                                            echo '<tr>'
                                            . '<td>' . $num . '</td>'
                                            . '<td>' . $p[ 'name' ] . '</td>'
                                            . '<td><p class="multiline-ellipsis" data-lines="1">' . $p[ 'email' ] . '</p></td>'
                                            . '<td><p class="multiline-ellipsis" data-lines="3">' . $p[ 'alise' ] . '</p></td>'
                                            . '<td class="text-center">' . $p[ 'location' ] . '</td>'
                                            . '<td class="text-center">' . $p[ 'party' ] . '</td>'
                                            . '<td class="text-center">' . $isapproved . '</td>'
                                            . '<td class="text-center">' . date( "d-m-Y", strtotime( $p[ 'created_date' ] ) ) . '</td>'
                                            . '<td class="text-center">
                                                <a class="switch changeactivepoll" data-id="' . $p[ 'id' ] . '" data-type="polls" data-status=' . $p[ 'is_active' ] . '>
                                                    <label><input type="checkbox" ' . $ischecked . '><span class="lever switch-col-bluenew"></span></label>
                                                </a>
                                            </td>'
                                            . '<td class="text-center">
                                                <!--<a href="' . base_url() . 'User/index?id=' . $p[ 'id' ] . '" data-id="' . $p[ 'id' ] . '" data-editjson=\'' . json_encode( $p ) . '\'><i class="material-icons">&#xE254;</i></a>-->
                                                <a href="' . base_url() . 'User/details?id=' . $p[ 'id' ] . '"><i class="material-icons">remove_red_eye</i></a>
                                                ' . $update_right_answer . '
                                                </td></tr>';
                                                }
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div style="padding-bottom: 25px;">
                        <center>
                            <button id="loadUsers" class="btn btn-danger waves-effect m-r-20" data-offset="10">Load More</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

<div class="modal fade in" id="viewPollDetails" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"><span class="username"></span> User Details</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-success waves-effect btn-approve">Approve</button>
                <!--<button type="button" class="btn btn-link btn-danger waves-effect btn-reject" data-dismiss="modal" data-toggle="modal" data-target="#reject_poll">Reject</button>-->
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="reject_poll" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"><span class="username"></span> Forecasting</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-success waves-effect btn-approve">Approve</button>
                <button type="button" class="btn btn-link btn-danger waves-effect btn-reject">Reject</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        $(function () {
            $('#weekly_datetimepicker').datetimepicker({
                useCurrent: false,
                format: "DD-MM-YYYY",
                minDate: moment().millisecond(0).second(0).minute(0).hour(0),
                ignoreReadonly: true
            });


            $('#from_datetimepicker').datetimepicker({
                useCurrent: false,
                format: "DD-MM-YYYY",
                ignoreReadonly: true
            });
            $('#to_datetimepicker').datetimepicker({
                useCurrent: false,
                format: "DD-MM-YYYY",
                ignoreReadonly: true
            });

            $('#end_datetimepicker').datetimepicker({
                useCurrent: false,
                format: "DD-MM-YYYY",
                minDate: moment().millisecond(0).second(0).minute(0).hour(0),
                ignoreReadonly: true
            });

            $("#from_datetimepicker").on("dp.change", function (e) {
                $('#to_datetimepicker').data("DateTimePicker").minDate(e.date);
            });
            $("#to_datetimepicker").on("dp.change", function (e) {
                $('#from_datetimepicker').data("DateTimePicker").maxDate(e.date);
            });

            $("#end_datetimepicker").on("dp.change", function (e) {
                $("#only_end_date_change").val("1");
            });

            $(".edit-election").on("click", function (event) {
                event.preventDefault();
                var json = JSON.parse($(this).attr("data-editjson"));
                var base = "form[name='addUpdateElectionPeriod'] ";
                $(base + "#election_period_id").val(json.id);
                $(base + "#from_date").val(convertDate(json.from_date)).focus();
                $(base + "#to_date").val(convertDate(json.to_date)).focus();
                $(base + '#state_id').find("option[value='" + json.state_id + "']").prop("selected", "selected");
                $(base + '#total_seats').val(json.total_seats).focus();
                var selected = json.party_id.split(',');
                for (var x in selected) {
                    $(base + "select#optgroup").find("option[value='" + selected[x] + "']").prop("selected", "selected");
                }
                $('#optgroup').multiSelect();

                $('#state_id').selectpicker('refresh');
            });

            /*$('#filterdata').click(function(){
                //$('.recordsContainer').empty();
                var alias = $('#user_alias').val();
                var mail = $('#user_mail').val();
                var start_date = $('#start_date').val();
                var end_date = $('#end_date').val();

                var data = '';



                alert('Values as follows: '+alias+' - '+mail+' - '+start_date+' - '+end_date);

                /*var table = $('.dataTable').DataTable();
                table.clear().draw();*\/
            });*/

            $('#filterForm').submit(function(e){
                e.preventDefault();
                var data = $( '#filterForm' ).serialize();
                //data += '&paging=20';
                alert(data);
                var output = function(cb){
                    $('.recordsContainer').html(cb);
                    
                };
                ajax_call('/User/filteredList', 'POST', data, output);
                 $('#loadUsers').attr('disabled', false);
                $('#loadUsers').attr('data-offset', 10);
            });



            $('#loadUsers').click(function(){
                var offSet = $(this).attr('data-offset');
                
                //alert('Loading... '+offSet);

                
                var data = $( '#filterForm' ).serialize();
                data += '&offset='+offSet;
                //alert(data);
                var output = function(cb){
                    if (cb != "") {
                        $('.recordsContainer').append(cb);
                    } else {
                         $('#loadUsers').attr('disabled', true);
                    }
                        
                };
                ajax_call('/User/filteredList', 'POST', data, output);

                    
                offSet =  parseInt(offSet, 10);
                offSet =offSet+10;
                $(this).attr('data-offset', offSet);
            });

            $('#clearfilter').click(function(){
                //alert('Clear... ');
                $("#filterForm").trigger('reset');
            });

            $('#export-users-excel').click(function(){
                //alert('Export Data');

                var query = '';
                var req_url = '/User/export_users';

                //var data = $( '#filterForm' ).serialize();
                //alert(data);

                if($('#user_alias').val() != ""){ query += 'user_alias='+$('#user_alias').val()+'&'; }

                if($('#user_mail').val() != ""){ query += 'user_mail='+$('#user_mail').val()+'&'; }

                if($('#start_date').val() != ""){ query += 'start_date='+$('#start_date').val()+'&'; }

                if($('#end_date').val() != ""){ query += 'end_date='+$('#end_date').val(); }

                //alert(query);

                if(query.charAt(query.length-1) == '&'){ query = query.slice(0, -1); }

                if(query != ""){ req_url = req_url + '?' + query; }

                window.location.assign(req_url);
                
            });

            
        });
</script>