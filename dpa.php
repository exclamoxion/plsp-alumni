<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="assets/img/plsplogo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/regstyle.css">
    <script src="https://kit.fontawesome.com/686fc6ad61.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body >


    <div class="container-fluid">

        <div class="top-bar" style="border-bottom:10px; padding-top:10px; " >
            <div class="container-xl">
                <div class="row d-flex align-items-center px-md-5">
                    
                    <div class="col-md-6 col-sm-8">

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header text-center h4 py-3">
                PAMANTASAN NG LUNGSOD NG SAN PABLO
                <br>PRIVACY INFORMATION FOR ALUMNI

            </div>
            <div class="card-body">
                <div style="width: 100%; height: 400px; overflow-y: scroll;" >
                    <b>Privacy Policy for Pamantasan ng Lungsod ng San Pablo </b>
                    <p class="text-center">We are dedicated to keeping your personally identifiable information ("Personal Information") accurate, confidential, and secure. Our privacy policy governs our actions regarding the collection, use, and disclosure of personal information as part of this commitment and is based on the values established by Republic Act No. 10173, or the Data Privacy Act of 2012.

                    </p>



                  
                    <br>

                    <strong>1. Introduction</strong>

                    <br>
                    We are in charge of keeping and safeguarding the Personal Information under our control. We have designated an individual or individuals who are in charge of ensuring that our privacy policy is followed.
                    <br>
                    <br>



                    <strong> 2. Identifying Purposes </strong>

                    <br>
                    The purposes for which we collect Personal Information will be identified prior to or at the time of collection.

                    <br>
                    <br>


                    <strong> 3. Consent </strong>

                    <br>
                    Knowledge and consent are required for the collection, use, or disclosure of Personal Information except where required or permitted by law. Providing us with your Personal Information is always your choice.
                    <br>

                    <br>

                    <strong> 4. Limiting Collection </strong>

                    <br>
                    The Personal Information collected will be limited to the details required for the purposes identified by us. We may collect Personal Information from you in person, over the phone, or by email with your permission.
                    <br>
                    <br>



                    <strong> 5. Retention </strong><br>


                    Personal information will be retained only for the time necessary to fulfill the purpose for which it was collected or as required by law.

                    <br>
                    <br>


                    <strong> 6. Accuracy </strong><br>
                    Personal information will be kept in the most accurate, complete, and up-to-date form possible in order to fulfill the purposes for which it is intended. 
                    <br>
                    <br>

                    <strong> 8. Openness </strong><br>
                    We will provide you with information about our policies and practices regarding the management of your Personal Information.
                    <br> <br>

                    <strong> 9. Customer Access</strong><br>
                    You will be informed of the existence, use, and disclosure of your Personal Information upon request, and you will be given access to it. You can check the accuracy and completeness of your Personal Information and, if necessary, request that it be corrected. We will not, however, disclose certain information to you unless required by law. For example, if other people are mentioned or if there are legal, security, or commercial proprietary restrictions, we may not disclose information about you.
                    <br>
                    <br>
                    <strong> 10. Handling Customer Complaints and Suggestions </strong><br>
                    You may direct any questions or inquiries with respect to our privacy policy or our practices by sending an email to <strong> <a href="mailto:plsp.official@plsp.edu.ph" style="color:black">plsp.emisoffice@plsp.edu.ph</strong>.

                    <br>
                    <br>


                </div>
            </div>
            <div class="card-footer">
                <label>
                    <input type="checkbox" id="myCheckbox"> I have read, understood, and agree to the Privacy
                    Information for Alumni.
                </label>
                <div class=""> <a href="#" id="myLink" onclick="return false;" class="btn btn-primary">NEXT </a>
                </div>

            </div>
        </div>
    </div>
    <script>
        const myCheckbox = document.getElementById('myCheckbox');
        const myLink = document.getElementById('myLink');

        myCheckbox.addEventListener('change', function() {
            if (this.checked) {
                myLink.href = 'registration';
                myLink.onclick = null;
            } else {
                myLink.href = '#check';
                myLink.onclick = function() {
                    return false;
                };
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>