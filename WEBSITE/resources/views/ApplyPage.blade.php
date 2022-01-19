@extends('Layout.app')
@section('content')

    <div class="container AboutPageMT">
        <div class="row justify-content-center d-flex mt-5 mb-5">
            <div class="col-lg-10 col-md-10 col-sm-12 card shadow border-0">
                <h3 class="text-center mt-5 citizenTitleText"><u>Apply for Citizen Certificate</u></h3>
                <form  action=" "  class="p-5">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">First Name</label>
                                <input id="FirstName" required type="text" class="form-control placeholderText" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Last Name</label>
                                <input id="LastName" required type="text" class="form-control placeholderText" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Email</label>
                                <input id="Email" required type="email" class="form-control placeholderText" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Phone</label>
                                <input id="Phone" required type="text" class="form-control placeholderText" placeholder="Enter Phone Number">
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">NID/Birth Certificate</label>
                                <input id="NID" required type="text" class="form-control placeholderText" placeholder="Enter NID/Birth Certificate">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Date Of Birth</label>
                                <input id="DOB" required type="date" class="form-control placeholderText" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Father's Name</label>
                                <input id="FatherName" required type="text" class="form-control placeholderText" placeholder="Enter Father's Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Mother's Name</label>
                                <input id="MotherName" required type="text" class="form-control placeholderText" placeholder="Enter Mother's Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Division</label>
                                <select class="form-control placeholderText" id="Division">
                                    <option selected>Select a division</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="kumilla">kumilla</option>
                                    <option value="Maymonshing">Maymonshing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">District</label>
                                <select class="form-control placeholderText" id="District">
                                    <option selected>Select a district</option>
                                    <option>Gaibandha</option>
                                    <option>Rangpur</option>
                                    <option>Lalmonirhat</option>
                                    <option>Kurigram</option>
                                    <option>Dinajpur</option>
                                    <option>Panchagor</option>
                                    <option>Thakurgoan</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Upozila</label>
                                <select class="form-control placeholderText" id="Upozila">
                                    <option selected>Select a upozila</option>
                                    <option value="Gaibandha_Sadar">Gaibandha Sadar</option>
                                    <option value="Fulchari">Fulchari</option>
                                    <option value="Sundargonj">Sundargonj</option>
                                    <option value="Sadullahpur">Sadullahpur</option>
                                    <option value="Godindagonj">Godindagonj</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Union/Pourosova</label>
                                <select class="form-control placeholderText" id="Union">
                                    <option selected>Select a union</option>
                                    <option value="Kholahati">Kholahati</option>
                                    <option value="Gidari">Gidari</option>
                                    <option value="Kamarjani">Kamarjani</option>
                                    <option value="Malibari">Malibari</option>
                                    <option value="Bollomjhar">Bollomjhar</option>
                                    <option value="Kuptola">Kuptola</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Ward No</label>
                                <select class="form-control placeholderText" id="Ward">
                                    <option selected>Select a ward</option>
                                    <option value="1">ward 1</option>
                                    <option value="2">ward 2</option>
                                    <option value="3">ward 3</option>
                                    <option value="4">ward 4</option>
                                    <option value="5">ward 5</option>
                                    <option value="6">ward 6</option>
                                    <option value="7">ward 7</option>
                                    <option value="8">ward 8</option>
                                    <option value="9">ward 9</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="LevelText" for="exampleInputEmail1">Password</label>
                                <input id="Password" required type="password" class="form-control placeholderText" id="exampleInputEmail1 " aria-describedby="emailHelp" placeholder="Enter User Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button id="AddConfirmBtn" name="submit" type="submit" class="btn ApplyBtn">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">

        // Apply Add Modal Save Btn
        $('#AddConfirmBtn').click(function() {
            let fast_name = $('#FirstName').val();
            let last_name = $('#LastName').val();
            let email  = $('#Email').val();
            let phone = $('#Phone').val();
            let nid = $('#NID').val();
            let dob = $('#DOB').val();
            let father_name = $('#FatherName').val();
            let mother_name  = $('#MotherName').val();
            let division = $('#Division').val();
            let district = $('#District').val();
            let upozila = $('#Upozila').val();
            let union  = $('#Union').val();
            let ward = $('#Ward').val();
            let password = $('#Password').val();

            RegistrationApply(fast_name,last_name,email,phone,nid,dob,father_name,mother_name,division,district,upozila,union,ward,password);
        })

        function RegistrationApply(fast_name,last_name,email,phone,nid,dob,father_name,mother_name,division,district,upozila,union,ward,password) {
                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation....
                axios.post('/RegistrationApply', {
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
                    password:password
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status===200 && response.data === 1){
                            alert("sucessfull");
                        }
                        else{
                            alert("Apply Failed");
                        }
                    })
                    .catch(function(error) {
                        alert("Apply Failed");
                    });

        }

    </script>
@endsection
