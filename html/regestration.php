
<html>
<?php//if(isset($_POST['submit'])){
//    include_once ("functions.php");
//    $name = $_POST['name'];
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    $confirm_password=$_POST['confirm_password'];
//    $email=$_POST['email'];
//    $phone_no = $_POST['phone_no'];
//    $landmark=$_POST['landmark'];
//    $role=$_POST['role'];
//    $state  = $_POST['state'];
//    $city= $_POST['city'];
//    $street= $_POST['street'];
//    $district= $_POST['district'];
//    $taluka= $_POST['taluka'];
//
//    processRegistration($name,$username,$password,$confirm_password,$email,$phone_no,$landmark,$role,$district,$city,$state,$street,$taluka);
//}
//?>
<head>
    <link rel="shortcut icon" href="../img/drop-of-water-1.png">
    <title>ShetBazar</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../vendors/Animate/animate.css">
</head>

<body>
<!--.LOGIN SECTION-->
    <section id="login" class="form-section">
        <!--FORM-->
        <form action="connect.php" method="post">


        <div class="form-cover wow animated fadeIn">
            <div class="container">
                <div class="form-heading">
                    <h3 class="text-heading">Fill up the form!!</h3>
                    <div class="form-heading-underline"></div>
                </div>
                <!--.form-heading-->

                <div class="form-fields">
                    <div class="radio-style">
                        <!--.CHOICE-->
                        <input type="radio"  class="farmer" value="farmer" name="role"><label>Farmer</label>
                        <input type="radio"  class="customer" value="customer" name="role"><label>Customer</label>
                    </div>
                    <!--.radio-style-->

                    <div class="form-style">
                        <!--FIRST NAME-->
                        <div class="text-style">
                            <label class="label-style">Name:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="Your name"  name="name" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--USERNAME NAME-->
                        <div class="text-style">
                            <label class="label-style">UserName:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="your  username" name="username" class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->


                        <!--EMAIL-->
                        <div class="text-style">
                            <label class="label-style">Email:</label>
                            <div class="entry-style">
                                <input type="email" placeholder="example@email.com" name="email"class="form-control">
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--PASSWORD-1-->
                        <div class="text-style">
                            <label class="label-style">Create Password:</label>
                            <div class="entry-style">
                                <input type="password" placeholder="create password" name="password" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--PASSWORD-2-->
                        <div class="text-style">
                            <label class="label-style">Verify Password:</label>
                            <div class="entry-style">
                                <input type="password" placeholder="verify password" name="confirm_password" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--PHONE NUMNER-->
                        <div class="text-style">
                            <label class="label-style">Phone No.:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="your phone no." name="phoneno"class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--ADDRESS-->
                        <!--LANDMARK-->
                        <div class="text-style">
                            <label class="label-style">LandMark:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="landmark" class="form-control" name="landmark" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--STREET-->
                        <div class="text-style">
                            <label class="label-style">Street:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="street" name="street"class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--CITY-->
                        <div class="text-style">
                            <label class="label-style">City:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="city" name="city" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--STATE-->
                        <div state-style>
                            <label class="label-style">State:</label>
                            <select class="option-style"  name="state" required>
                                <option selected>--Select--</option>
                                <option >Andaman and Nicobar Islands</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dader and Nagar Haveli</option>
                                <option>Daman and Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Puducherry(Pondicherry)</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>
                            </select>
                        </div>
                        <!--.state-style-->

                        <!--DISTRICT-->
                        <div class="text-style">
                            <label class="label-style">District:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="district" name="district" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--TALUKA-->
                        <div class="text-style">
                            <label class="label-style">Taluka:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="taluka" name="taluka" class="form-control" required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->
                        <div class="check-style">
                            <!--.TERMS AND CONDITION-->
                            <input type="checkbox" required><label>I accept the terms &amp; conditions</label>
                        </div>
                        <!--.check-style-->
                         <div class="btn-style">
                            <!--.SUBMIT BUTTON-->
                            <input type="submit" value="Submit" name="submit" class="btn-general btn-green"><br />

                            <!--.CANCEL BUTTON-->
                            <input type="submit" value="cancel" name="cancel" class="btn-general btn-green"><br />
                        </div>
                        <!--.btn-style-->
                    </div>
                    <!--.form-style-->
                </div>
                <!--.form-fields-->
            </div>
            <!--.container-->
        </div>
        <!--.form-cover-->
        </form>
        <!--.END OF FORM-->
    </section>
<!--END OF LOGIN SECTION-->



<!--CORE JS-->
<script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="../vendors/wow/wow.min.js"></script>
<!--END OF CORE JS-->

<!--CUSTOM JS-->
<script src="../js/script.js"></script>
<!--END OF CUSTOM JS-->
</body>

</html>