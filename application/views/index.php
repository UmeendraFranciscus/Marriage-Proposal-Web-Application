

<header class="bg-primary text-white" style="text-align: left;
        background: #ff5e74 !important; 
        min-height: 165px;
        text-align: left;">

</header>
<style>



    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div id="map-canvas"></div>


            </div>
        </div>
    </div>
</section>


<div class="container-fluid">
    <div class="row">

        <div class="col-lg-6">

            <br>

            <div class="panel panel-danger">
                <div class="panel-heading" style="font-size: 20px">     
                    Post your Info
                    <br>
                    Wait for True love
                    <br>
                    It Is Free

                    <br>
                    <button onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">Sign Up</button>

                </div>

            </div>

        </div>
        <div class="col-lg-6">
            <br>
            <div class="jumbotron">
                <form action="">
                    <div>

                        <?php echo $this->lang->line('Name'); ?>
                        <input type="text" value="" class="form-control" id="name" name="name" required="true">
                    </div>
                    <div>
                        Phone:
                        <input type="text" value="" class="form-control" id="phone" name="phone" required="true">
                    </div>
                    <div>
                        Password
                        <input type="text" value="" class="form-control" id="password" name="password" required="true">
                    </div>
                    <div>
                        Confirm
                        <input type="text" value="" class="form-control" id="confrmpass" name="confrmpass" required="true">
                    </div>

                    <div>
                        <input type="submit" value="Login" class="btn btn-success" id="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" action="<?= site_url('Account/signup') ?>" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required class="form-control">

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required class="form-control">

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required class="form-control">

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
        // Get the modal
            var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </div>

</div>


