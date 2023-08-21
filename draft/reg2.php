<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="assets/img/plsplogo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/regstyle.css">
    <script src="https://kit.fontawesome.com/686fc6ad61.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="bg-dark">shesh</div>
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">FIRST NAME <span>*</span>
                </label> <br>
                <input type="text" class="form-control" name="firstname" placeholder="ENTER FIRST NAME">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">MIDDLE NAME
                </label> <br>
                <input type="text" class="form-control" name="middlename" placeholder="ENTER MIDDLE NAME">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">LAST NAME <span>*</span>
                </label> <br>
                <input type="text" class="form-control" name="lastname" placeholder="ENTER LAST NAME">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">EXTENSION NAME
                </label> <br>
                <input type="text" class="form-control" name="extension" placeholder="ENTER EXTENSION">

            </div>

        </div>
        <br>
        <div class="bg-dark">shesh</div>
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-6">

                <label for="cs">CIVIL STATUS</label>
                <select id="cs" name="civil" class="form-control">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>

                </select>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-6">

                <label for="gender">GENDER</label>
                <select id="gender" name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

            </div>

            <div class="col-md-2 col-lg-2col-sm-6">


                <label for="" class="">DATE OF BIRTH
                </label> <br>
                <input type="date" name="datebirth" class="form-control">

            </div>

            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">PLACE OF BIRTH
                </label> <br>
                <input type="text" class="form-control" name="placebirth" placeholder="ENTER PLACE OF BIRTH">

            </div>

            <div class="col-md-3 col-lg-3 col-sm-6">


                <label for="" class="">CITIZENSHIP
                </label> <br>
                <input type="text" class="form-control" name="citizen" placeholder="ENTER CITIZENSHIP">

            </div>

        </div>
        <br>
        <div class="bg-dark">shesh</div>
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="">Email</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone"></i>

                        </span>
                    </div>


                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="">MOBILE NUMBER</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-mobile">
                            </i>
                        </span>
                    </div>

                    <input type="number" class="form-control" name="mobilenum" placeholder="MOBILE NUMBER">
                </div>

            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="">ADDRESS</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-map-marker">
                            </i>
                        </span>
                    </div>

                    <input type="text" class="form-control" name="address"
                        placeholder="STREET/BLDG/SUBDIVISION BARANGAY">
                </div>


            </div>
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="">CITY</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-building">
                            </i>
                        </span>
                    </div>

                    <input type="text" class="form-control" name="city" placeholder="ENTER CITY">
                </div>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="">PROVINCE</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="">P
                            </i>
                        </span>
                    </div>

                    <input type="text" class="form-control" name="province" placeholder="ENTER PROVINCE">
                </div>

            </div>
        </div>
        <br>
        <div class="bg-dark">shesh</div>
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="by">BATCH YEAR</label>
                <select id="by" name="batchyear" class="form-control">
                    <option value="Single">2020</option>
                    <option value="Married">2021</option>
                    <option value="Widowed">2022</option>

                </select>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-6">


                <label for="">STUDENT NUMBER</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i>
                        </span>
                    </div>

                    <input type="text" class="form-control" name="studentnumber" placeholder="61-2930">
                </div>


            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">

                <label for="ppp">PROGRAM</label>
                <select id="ppp" name="program" class="form-control">
                    <option value="select" class="text-muted">Select</option>
                    <option value="Bachelor of Science Information Technology">Bachelor of Science Information
                        Technology</option>
                    <option value="Bachelor of Science Information System">Bachelor of Science Information System
                    </option>
                    <option value="Bachelor of Science Computer Engineer">Bachelor of Science Computer Engineer
                    </option>

                </select>

            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="">MAJOR</label> <br>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-star">
                            </i>
                        </span>
                    </div>

                    <input type="text" class="form-control" name="major" placeholder="LEAVE IF NONE">
                </div>


            </div>
        </div>
        <br>
        <div class="bg-dark">shesh</div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="es">EMPLOYMENT STATUS</label>
                <select id="es" name="emplostat" class="form-control">
                    <option value="select" class="text-muted">Select</option>
                    <option value="EMPLOYED">EMPLOYED</option>
                    <option value="UNEMPLOYED">UNEMPLOYED</option>
                    <option value="STUDENT">STUDENT</option>
                    <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>

                </select>

            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="" class="">COMPANY NAME
                </label> <br>
                <input type="text" class="form-control" name="companyname" placeholder="ENTER COMPANY NAME">

            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="" class="">WORK POSITION / TITLE
                </label> <br>
                <input type="text" class="form-control" name="workpos" placeholder="ex. WEB DEVELOPER">

            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="" class="">YEAR OF SEVICE <span>*</span>
                </label> <br>
                <input type="text" class="form-control" name="yearservice" placeholder="ex. 10 Years">

            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">

                <label for="">INDUSTRY</label>
                <select id="" name="industry" class="form-control">
                    <option value="select" class="text-muted">Select</option>
                    <option value="SAMPLE1">SAMPLE1</option>
                    <option value="SAMPLE2">SAMPLE2</option>
                    <option value="SAMPLE3">SAMPLE3</option>

                </select>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-6">


                <label for="" class="">OTHERS <span>*</span>
                </label> <br>
                <input type="text" class="form-control" name="others" placeholder="OTHER INDUSTRY">



            </div>


        </div>

        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#staticBackdrop"
            id="submitbutton">
            Submit
        </button>

        <a href="index.php" class="btn btn-primary mt-2" id="backbutton">Back</a>

    </div>

 





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>