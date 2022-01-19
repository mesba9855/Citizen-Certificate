@extends('Layout.app')
@section('title','Apply')
@section('content')

    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Apply List</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Phone</th>
                        <th class="th-sm">Date Birth</th>
                        <th class="th-sm">Nid</th>
                        <th class="th-sm">District</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                    </thead>
                    <tbody id="MainTableData">


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('Component.loader')
    @include('Component.wrong')



    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-3">
                    <h5 class="mt-4">Do You Want To Delete?</h5>
                    <h5 id="DeleteId" class="mt-4 d-none"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                    <button id="DeleteConfirmBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">APply Update Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="FirstNameEditId" class="form-control mb-4" placeholder="First Name">
                                <input type="text" id="LastNameEditId" class="form-control mb-4" placeholder="Last Name">
                                <input type="text" id="PhoneEditId" class="form-control mb-4" placeholder="Enter Phone">
                                <input type="text" id="FatherNameEditId" class="form-control mb-4" placeholder="Father Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="MotherNameEditId" class="form-control mb-4" placeholder="Mother Name">
                                <input type="text" id="PasswordEditId" class="form-control mb-4" placeholder="Enter Password">
                            </div>
                        </div>
                    </div>

                    @include('Component.editSectionLoader')
                    @include('Component.editSectionWrong')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancle</button>
                    <button id="editConfirmBtn" type="button" class="btn btn-sm btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body p-4 text-center">
                    <div id="AddForm" class=" w-100">
                        <h5 class="mb-4">Apply Citizen Certificate</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="FirstNameAddId" class="form-control mb-4" placeholder="First Name">
                                <input type="text" id="LastNameAddId" class="form-control mb-4" placeholder="Last Name">
                                <input type="email" id="EmailAddId" class="form-control mb-4" placeholder="Enter Email">
                                <input type="text" id="PhoneAddId" class="form-control mb-4" placeholder="Enter Phone">
                                <input type="text" id="NidAddId" class="form-control mb-4" placeholder="Valid Nid">
                                <input type="date" id="DOBAddId" class="form-control mb-4" placeholder="Date of Birth">
                                <input type="text" id="FatherNameAddId" class="form-control mb-4" placeholder="Father Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" id="MotherNameAddId" class="form-control mb-4" placeholder="Mother Name">
                                <input type="text" id="DivisionAddId" class="form-control mb-4" placeholder="Enter Division">
                                <input type="text" id="DistrictAddId" class="form-control mb-4" placeholder="Enter District">
                                <input type="text" id="UpozilaAddId" class="form-control mb-4" placeholder="Enter Upozila">
                                <input type="text" id="UnionAddId" class="form-control mb-4" placeholder="Enter Union">
                                <input type="text" id="WardAddId" class="form-control mb-4" placeholder="Enter Ward">
                                <input type="text" id="PasswordAddId" class="form-control mb-4" placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button  id="AddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">

        getApplyData();

        function getApplyData(){
            axios.get('/getApplyData')
                .then(function (response){

                    if(response.status==200){
                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].fast_name + "</td>" +
                                "<td>" + jsonData[i].email +"</td>" +
                                "<td>" + jsonData[i].phone +"</td>" +
                                "<td>" + jsonData[i].dob +"</td>" +
                                "<td>" + jsonData[i].nid +"</td>" +
                                "<td>" + jsonData[i].district +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].r_id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].r_id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Course Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let r_id=$(this).data('id');
                            $('#DeleteId').html(r_id);
                            $('#deleteModal').modal('show');
                        });


                        // Course Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let r_id=$(this).data('id');
                            $('#EditId').html(r_id);
                            ApplyEdit(r_id);
                            $('#editModal').modal('show');
                        });

                        // Course data table js
                        $('#SelectTable').DataTable();
                        $('.dataTables_length').addClass('bs-select');
                        //
                    }
                    else{
                        $('#loaderDiv').addClass('d-none');
                        $('#wrongDiv').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#loaderDiv').addClass('d-none');
                    $('#wrongDiv').removeClass('d-none');
                })
        }


        // Apply Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let r_id=$('#DeleteId').html();
            ApplyDelete(r_id);
        });

        // Apply Delete Method
        function ApplyDelete(r_id){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/ApplyDelete',{
                r_id:r_id
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getApplyData();
                    }
                    else{
                        $('#deleteModal').modal('hide');
                        toastr.error('Delete Fail');
                    }
                })
                .catch(function (error){
                    $('#deleteModal').modal('hide');
                    toastr.error('Delete Fail');
                })
        }





        // Each Apply Edit Details
        function ApplyEdit(r_id){
            axios.post('/getApplyDetails',{
                r_id:r_id
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let r_id= $('#EditId').html();

                        let jsonData=response.data;

                        $('#FirstNameEditId').val(jsonData[0].fast_name);
                        $('#LastNameEditId').val(jsonData[0].last_name);
                        $('#PhoneEditId').val(jsonData[0].phone);
                        $('#FatherNameEditId').val(jsonData[0].father_name);
                        $('#MotherNameEditId').val(jsonData[0].mother_name);
                        $('#PasswordEditId').val(jsonData[0].password);

                    }
                    else{
                        $('#EditLoader').addClass('d-none');
                        $('#EditWrong').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#EditLoader').addClass('d-none');
                    $('#EditWrong').removeClass('d-none');
                })
        }

        //
        $('#editConfirmBtn').click(function (){
            let r_id= $('#EditId').html();
            let fast_name = $('#FirstNameEditId').val();
            let last_name = $('#LastNameEditId').val();
            let phone = $('#PhoneEditId').val();
            let father_name = $('#FatherNameEditId').val();
            let mother_name = $('#MotherNameEditId').val();
            let password = $('#PasswordEditId').val();

            ApplyUpdate(r_id,fast_name,last_name,phone,father_name,mother_name,password);
        })

        //Course Update Method
        function ApplyUpdate(r_id,fast_name,last_name,phone,father_name,mother_name,password){
            if (fast_name.length==0){
                toastr.error('First Name is Required !');
            }
            else if (last_name.length==0){
                toastr.error('Last name is Required !');
            }
            else if (phone.length==0){
                toastr.error('Phone is Required !');
            }
            else if (father_name.length==0){
                toastr.error('Father Name is Required !');
            }
            else if (mother_name.length==0){
                toastr.error('Mother Name is Required !');
            }
            else if (password.length==0){
                toastr.error('Password is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/ApplyUpdate',{
                    r_id:r_id,
                    fast_name:fast_name,
                    last_name:last_name,
                    phone:phone,
                    father_name:father_name,
                    mother_name:mother_name,
                    password:password,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getApplyData();
                        }
                        else{
                            $('#editModal').modal('hide');
                            toastr.error('Update Fail !');
                        }
                    })
                    .catch(function (error){
                        $('#editModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    })
            }

        }



        // Apply Add New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Apply Add Modal Save Btn
        $('#AddConfirmBtn').click(function() {
            let fast_name = $('#FirstNameAddId').val();
            let last_name = $('#LastNameAddId').val();
            let email  = $('#EmailAddId').val();
            let phone = $('#PhoneAddId').val();
            let nid = $('#NidAddId').val();
            let dob = $('#DOBAddId').val();
            let father_name = $('#FatherNameAddId').val();
            let mother_name = $('#MotherNameAddId').val();
            let division = $('#DivisionAddId').val();
            let district = $('#DistrictAddId').val();
            let upozila  = $('#UpozilaAddId').val();
            let union = $('#UnionAddId').val();
            let ward = $('#WardAddId').val();
            let password = $('#PasswordAddId').val();

            ApplyAdd(fast_name,last_name,email,phone,nid,dob,father_name,mother_name,division,district,upozila,union,ward,password);
        })

        // Apply Add Method
        function ApplyAdd(fast_name,last_name,email,phone,nid,dob,father_name,mother_name,division,district,upozila,union,ward,password) {
            let EmailRegx=/\S+@\S+\.\S+/;
            if (fast_name.length==0){
                toastr.error('First Name is Required !');
            }
            else if (last_name.length==0){
                toastr.error('Last name is Required !');
            }
            else if (email.length==0){
                toastr.error('Email is Required !');
            }
            else if(!EmailRegx.test(email)){
                toastr.error("Email Invalid");
            }
            else if (phone.length==0){
                toastr.error('Phone is Required !');
            }
            else if (nid.length==0){
                toastr.error('Nid is Required !');
            }
            else if (dob.length==0){
                toastr.error('Birth Date is Required !');
            }
            else if (father_name.length==0){
                toastr.error('Father Name is Required !');
            }
            else if (mother_name.length==0){
                toastr.error('Mother Name is Required !');
            }
            else if (division.length==0){
                toastr.error('Division is Required !');
            }
            else if (district.length==0){
                toastr.error('District is Required !');
            }
            else if (upozila.length==0){
                toastr.error('Upozila is Required !');
            }
            else if (union.length==0){
                toastr.error('Union is Required !');
            }
            else if (ward.length==0){
                toastr.error('Ward is Required !');
            }
            else if (password.length==0){
                toastr.error('Password is Required !');
            }

            else{
                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation....
                axios.post('/ApplyAdd', {
                    fast_name:fast_name,
                    last_name:last_name,
                    email:email,
                    phone:phone,
                    nid:nid,
                    dob:dob,
                    father_name:father_name,
                    mother_name:mother_name,
                    division:division,
                    district:district,
                    upozila:upozila,
                    union:union,
                    ward:ward,
                    password:password,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200 && response.data == 1){
                            $('#addModal').modal('hide');
                            toastr.success('Add Success');
                            getApplyData();

                            $('#FirstNameAddId').val('');
                            $('#LastNameAddId').val('');
                            $('#EmailAddId').val('');
                            $('#PhoneAddId').val('');
                            $('#NidAddId').val('');
                            $('#DOBAddId').val('');
                            $('#FatherNameAddId').val('');
                            $('#MotherNameAddId').val('');
                            $('#DivisionAddId').val('');
                            $('#DistrictAddId').val('');
                            $('#UpozilaAddId').val('');
                            $('#UnionAddId').val('');
                            $('#WardAddId').val('');
                            $('#PasswordAddId').val('');
                        }
                        else{
                            $('#addModal').modal('hide');
                            toastr.error('Something Went Wrong !');
                        }
                    })
                    .catch(function(error) {
                        $('#addModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    });
            }

        }





    </script>
@endsection


