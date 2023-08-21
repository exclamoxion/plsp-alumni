<?php
include('connection.php');
$connection = Connection();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="assets/img/plsplogo.png" rel="icon">
    <link rel="stylesheet" href="assets/css/animatecss.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/regform.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script defer src="assets/js/formvalidate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="assets/js/custom.js"></script>
   
</head>

<body>




    <div class="container">

        <form id="myForm" method="POST" action="mail.php" autocomplete="off">
            <div class="row mt-3 ">
                <h1 class="">Personal Information</h1>
                <hr>
                <br>
                <div class="col-md-6">

                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="firstname" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for="" class="form__label">Firstname</label>
                        <span id="fnameError" class=""></span>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="middlename" id="mname" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for="" class="form__label">Middlename</label>
                        <span id="mnameError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="lastname" id="lname" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for="" class="form__label">Lastname</label>
                        <span id="lnameError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="extension" id="exname" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for="" class="form__label">EXTENSION NAME</label>
                        <span id="eError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <select name="civil" id="" class="form__input form-control">
                            <option value=" ">Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                        <label for="" class="form__label">Civil Status</label>
                        <span id="civilError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <select class="form__input form-control" name="gender" id="">
                            <option value="Select">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="" class="form__label ">Sex</label>
                        <span id="genderError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="date" class="form__input form-control" name="datebirth" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()" style="display: grid;">
                        <label for=" " class="form__label ">Date of Birth</label>
                        <span id="dbirthError" class="s"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="placebirth" id="placebirth"
                            placeholder=" " oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Place of Birth</label>
                        <span id="placebError" class="s "></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="citizen" id="citizen" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Citizenship</label>
                        <span id="citiError" class="s "></span>
                    </div>
                </div>

            </div>

            <br>

            <div class="row">
                <h1 class="">Contact Information</h1>
                <hr>
                <br>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="email" class="form__input form-control eform" name="email" id="email" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Email</label>
                        <span id="emailError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">
                        <input type="number" class="form__input form-control" name="mobilenum" id="mobilenum"
                            placeholder=" " oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Mobile No.</label>
                        <span id="mobileErr" class="s "></span>
                    </div>
                </div>

            </div>


            <br>

            <div class="row">
                <h1 class="">Address Information</h1>
                <hr>
                <br>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="hidden" class="form__input " name="region" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <select id="region" class="form__input form-control"></select>
                        <label for=" " class="form__label ">Region</label>
                        <span id="regionError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">
                        <input type="hidden" class="form__input" name="province" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <select id="province" class="form__input form-control"></select>
                        <label for=" " class="form__label ">Province</label>
                        <span id="provinceError" class="s "></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__div">
                        <input type="hidden" class="form__input" name="city" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <select id="city" class="form__input form-control"></select>
                        <label for=" " class="form__label ">city</label>
                        <span id="cityError" class="s "></span>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form__div">
                        <input type="hidden" class="form__input" name="barangay" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <select id="barangay" class="form__input form-control"></select>
                        <label for=" " class="form__label ">Barangay</label>
                        <span id="brgyError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="street" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Street / House No. </label>
                        <span id="streetError" class="s "></span>
                    </div>
                </div>





            </div>

            <br>

            <div class="row">
                <h1 class="">Alumni Information</h1>
                <hr>
                <br>

                <div class="col-md-6">
                    <div class="form__div">

                        <select name="batchyear" id="" class="form__input form-control">
                            <option value=" ">Select</option>
                            
                            <?php $fetch = mysqli_query($connection, "SELECT * FROM batchyear"); while($rows = mysqli_fetch_assoc($fetch)){?><option><?=$rows['year']; }?></option>

                        </select>
                        <label for=" " class="form__label ">Batch Year</label>
                        <span id="byError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="studentnumber" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Student Number</label>
                        <span id="studentnoError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">

                        <select name="program" id="" class="form__input form-control">
                            <option value="">Select</option>
                            <?php $fetcgP = mysqli_query($connection, "SELECT * FROM program"); while($rowa = mysqli_fetch_assoc($fetcgP)){?>
                            <option><?=" (".$rowa['title'] .") ".$rowa['description']; }?></option>
                            

                        </select>
                        <label for=" " class="form__label ">Program</label>
                        <span id="programssError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="major" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">

                        <label for=" " class="form__label ">Major</label>
                        <span id="majorError" class="s "></span>
                    </div>
                </div>



            </div>



            <br>

            <div class="row ">
                <h1 class="mb-4 ">Employment Information</h1>
                <hr>
                <br>
                <div class="col-md-6">
                    <div class="form__div">


                        <select id="emp-status" name="emplostat" class="form__input form-control"
                            onchange="onEmpStatusSelect()">
                            <option value="select" class="text-muted">Select</option>
                            <option value="EMPLOYED">EMPLOYED</option>
                            <option value="UNEMPLOYED">UNEMPLOYED</option>

                            <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>

                        </select>
                        <label for="emp-status" class="form__label">EMPLOYMENT STATUS</label>
                        <span id="empError" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6 empbox">
                    <div class="form__div ">
                        <input type="text " class="form__input form-control" name="companyname" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Company Name</label>
                        <span id="mySpan " class="s "></span>
                    </div>
                </div>

                <div class="col-md-6 empbox">
                    <div class="form__div">
                        <input type="text " class="form__input form-control" name="workpos" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">
                        <label for=" " class="form__label ">Work Position</label>
                        <span id="mySpan " class="s "></span>
                    </div>
                </div>

                <div class="col-md-6 empbox">
                    <div class="form__div">
                        <input type="text" class="form__input form-control" name="yearservice" placeholder=" "
                            oninput="this.value = this.value.toUpperCase()">

                        <label for=" " class="form__label">Year of Service</label>
                        <span id="mySpan" class="s "></span>
                    </div>
                </div>

                <div class="col-md-6 empbox">
                    <div class="form__div">
                        <select name="industry" id="industry" class="form__input form-control">
                            <option value=" ">Select</option>
                           <?php $fetchI = mysqli_query($connection, "SELECT * FROM industry"); while($rowas = mysqli_fetch_assoc($fetchI)){?>
                            <option ><?=$rowas['industry_name']; }?></option>
                        </select>
                        <label for=" " class="form__label">Industry</label>
                        <span id="mySpan " class="s "></span>
                    </div>
                </div>

                <div class="col-md-6 empbox">
                    <div class="form__div">
                        <input type="text " name="others" class="form__input form-control"
                            oninput="this.value = this.value.toUpperCase()">

                        <label for=" " class="form__label ">Others</label>
                        <span id="mySpan " class="s "></span>
                    </div>
                </div>

                <div class="col-md-12 ">


                    <div class="">
                        <div class="form-group">

                            <div class="g-recaptcha" data-sitekey="6LdKAGIlAAAAABYxmz-Md89Oa9zPb493zQ9hTAoa"></div>
                            <span id="gerrorpa"></span>

                        </div>
                    </div>
                </div>




            </div>


            <div class="row mt-2">
                <div class="form__div">

                    <input type="submit" class="btn btn-success" name="submitBtn" value="Submit">

                </div>
            </div>



        </form>
    </div>



    <!-- ++++++++++++++++++++++++++++++++++++++++++++  JAVASCRIPT API   +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="assets/js/jquery.ph-location.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var my_handlers = {
            fill_provinces: function() {
                var region_code = $(this).val();
                $('#province').ph_locations('fetch_list', [{
                    "region_code": region_code
                }]);
            },
            fill_cities: function() {
                var province_code = $(this).val();
                $('#city').ph_locations('fetch_list', [{
                    "province_code": province_code
                }]);
            },
            fill_barangays: function() {
                var city_code = $(this).val();
                $('#barangay').ph_locations('fetch_list', [{
                    "city_code": city_code
                }]);
            }
        };
        $('#region').ph_locations({
            'location_type': 'regions'
        });
        $('#province').ph_locations({
            'location_type': 'provinces'
        });
        $('#city').ph_locations({
            'location_type': 'cities'
        });
        $('#barangay').ph_locations({
            'location_type': 'barangays'
        });

        $('#region').on('change', function() {
            var region = $("#region option:selected").text();
            $('input[name=region]').val(region);

        }).ph_locations('fetch_list');

        $('#province').on('change', function() {
            var province = $("#province option:selected").text();
            $('input[name=province]').val(province);

        }).ph_locations('fetch_list');



        $('#barangay').on('change', function() {
            var barangay = $("#barangay option:selected").text();
            $('input[name=barangay]').val(barangay);

        }).ph_locations('fetch_list');

        $('#city').on('change', function() {
            var city = $("#city option:selected").text();
            $('input[name=city]').val(city);

        }).ph_locations('fetch_list');

        $('#region').change(my_handlers.fill_provinces);
        $('#province').change(my_handlers.fill_cities);
        $('#city').change(my_handlers.fill_barangays);

    });
    </script>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++ Onchange ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <script>
    function onEmpStatusSelect() {
        if ($("#emp-status").val() == "UNEMPLOYED" || $("#emp-status").val() == "select") {
            $(".empbox").hide();
        } else {
            $(".empbox").show();

        }
    }
    onEmpStatusSelect();
    </script>


    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</body>

</html>