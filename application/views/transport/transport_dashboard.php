<?php
$this->load->view('header');
$id=$this->session->userdata('user_id');

?>
<div class="page-wrapper">
    
<div class="container-fluid">




    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                <button class="w3-btn w3-blue card card-hover" name="add_data" id="add_data">
                                   <i class=" fas fa-car w3-text-black"></i>  Add Vehicle
                                </button>
                                </h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>owner Name</th>
                                                <th>reg no#</th>
                                                <th>vehicle</th>
                                                <th>color</th>
                                                <th>engine no#</th>
                                                <th>chasis no#</th>
                                                <th>model</th>
                                                <th>type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            foreach($data as $data):?>
                                            <tr>
                                                <td><?=$data['vehicle_owner']?></td>
                                                <td><?=$data['reg_no']?></td>
                                                <td><?=$data['vehicle_name']?></td>
                                                <td><?=$data['vehicle_color']?></td>
                                                <td><?=$data['engine_no']?></td>
                                                <td><?=$data['chasis_no']?></td>
                                                <td><?=$data['vehicle_model']?></td>
                                                <td><?=$data['vehicle_type']?></td>
                                                <td><?=$data['status']?></td>
                                            </tr>
<?php endforeach;?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>


</div>

</div>
<!-- The Modal -->
<div class="modal w3-animate-zoom" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Basic Form Example</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <h3>Vehicle Details</h3>
                                <section>
                                    <label for="userName">Vehicle Name *</label>
                                    <input id="vehicle_name" name="vehicle_name" type="text" placeholder="e.g Honda City" class="required form-control">
                                    <label for="vehicle_owner">Owner Name *</label>
                                    <input id="vehicle_owner" name="vehicle_owner" type="text" value="<?= $id->first_name;?>"class="required form-control">
                                    <label for="vehicle_color">Vehicle Color *</label>
                                    <input id="vehicle_color" name="vehicle_color" type="text" placeholder="white" class="required form-control">
                                    <label for="vehicle_model">Vehicle Model *</label>
                                    <input id="vehicle_model" name="vehicle_model" type="text" placeholder="e.g 2019" class="required form-control">
                                  
                                    <p>(*) Mandatory</p>
                                </section>
                                <h3>Engine Detail</h3>
                                <section>
                                <label for="engine_no">Engine No# *</label>
                                    <input id="engine_no" name="engine_no" type="text" class="required form-control">
                                    <label for="chasis_no">chasis NO# *</label>
                                    <input id="chasis_no" name="chasis_no" type="text" class="required form-control">
                                    <label for="chasis_no">Seat Capacity *</label>
                                    <input id="seat_capacity" name="seat_capacity" type="text" class="required form-control">
                                    <label for="chasis_no">Vehicle Type *</label>
                                    <input id="vehicle_type" name="vehicle_type" type="text" class="required form-control">
                                    <label for="chasis_no">Registration NO#</label>
                                    <input id="reg_no" name="reg_no" type="text" class="required form-control">
                                    
                                    <p>(*) Mandatory</p>
                                </section>
                               
                                <h3>Finish</h3>
                                <section>
                                    <div>
                                    <span class="w3-wide w3-text-red">
                                    <input type="hidden" id="user_name"  class="required form-control" name="user_name" value="<?= $id->first_name;?>">
                                    <input type="hidden" id="user_id" name="user_id" value="<?= $id->id;?>">
                                        After Add vehicle information you must verified your vehicle with uploading complete your 
                                        vehicle documents.
                                    </span>
                                    </div> <br>
                                    
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<link href="<?=base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?=base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url('assets/extra-libs/multicheck/datatable-checkbox-init.js');?>"></script>
    <script src="<?= base_url('assets/extra-libs/multicheck/jquery.multicheck.js')?>"></script>
    <script src="<?=base_url('assets/extra-libs/DataTables/datatables.min.js');?>"></script>
    <script src="<?=base_url();?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?=base_url();?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
   
 var dataTable = $('#zero_config').DataTable({   
           "columnDefs":[  
                {  
                     "targets":[0, 3,8],  
                     "orderable":false, 
                },  
           ],  
      }
 );



    $('#add_data').click(function() {
/* Act on the event */

            $('#myModal').modal('show');
           
            $('.modal-title').text('Add Vehicle Informatin');


    });


    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {

            var form_data = form.serialize();
            $.ajax({
                    url: "<?php echo base_url() ?>transport/TransportController/store_vehicle_info",
                    method:"post",
                    data:form_data,
                   //dataType:"json",
                    success:function(data)
                    {
                        $('#myModal').modal('hide');
                        $('#zero_config').DataTable().ajax.reload();
                            // $('#form_output').html(data.success);
                            // $('#student_form')[0].reset();
                            // $('#action').val('Add');
                            // $('.modal-title').text('Add Data');
                            // $('#button_action').val('insert');
                            // $('#student_table').DataTable().ajax.reload();

                    
                    }
                });
            // $('#myModal').modal('hide');
           
            // $('#zero_config').DataTable().ajax.reload();

        }
    });

</script>



<?php
$this->load->view('footer');

?>