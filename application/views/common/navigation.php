<?php
//$_SESSION['User'];
// echo $this->session->userdata('User');
//echo '<pre>'; print_r($this->session->all_userdata());exit;
if (empty($this->session->userdata('user'))) {
    header("location:http://localhost/HANDME/front/indexfront.php");
}
?>


<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
        margin-bottom: 4px;
        border-radius: 0;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }
    .navbar-brand
    {
        padding:5px 40px;
    }
    .navbar-brand:hover
    {
        background-color:#ffffff;
    }
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none; 
        }
    }
</style>

<body>
    <style>
        .box
        {
            width: 100%;
            max-width: 1390px;
            border-radius: 5px;
            border:1px solid #ccc;
            padding: 15px;
            margin: 0 auto;                
            margin-top:50px;
            box-sizing:border-box;
        }


        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a, #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
            padding: 5px;
            padding-left: 1em;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #1A1A1D !important" id="mainNav">
        <a class="navbar-brand" href="#">  <?php echo "<span  style=\"color: #fff !important\">Welcome, ".$this->session->userdata('user')."</span>" ?></a>
        <div >

            <input type="button" value="SIN" class="btn btn-default" style="border: #0E895D;
                   background-color: #0E895D;
                   color: #fff;
                   font-size: 12px;" id="btnLang" name="btnLang">
            <input type="button" value="ENG" class="btn btn-default" style="border: #0E895D;
                   background-color: #0E895D;
                   color: #fff;
                   font-size: 12px;" id="btnLang2" name="btnLang2">

        </div>
      
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <?php if ($this->session->userdata('type') == "1") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?= site_url("Welcome/dashboard_School") ?>">

                            <i class="fa fa-fw fa-map"></i>
                            <span class="nav-link-text">Location</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->session->userdata('type') == "1") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?= site_url("Welcome/Grade") ?>">

                            <i class="fa fa-fw fa-suitcase"></i>
                            <span class="nav-link-text">Hall</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('type') == "1") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?= site_url("Welcome/Subject") ?>">

                            <i class="fa fa-fw fa-neuter"></i>
                            <span class="nav-link-text">Subject</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('type') == "1" || $this->session->userdata('type') == "3") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?= site_url("Welcome/Student") ?>">

                            <i class="fa fa-fw fa-group"></i>
                            <span class="nav-link-text">Student</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('type') == "1") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?= site_url("Welcome/Teacher") ?>">
                            <i class="fa fa-fw fa-soccer-ball-o"></i>
                            <span class="nav-link-text">Teacher</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('type') == "1" || $this->session->userdata('type') == "3") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?= site_url("Welcome/RateTeachers") ?>">
                            <i class="fa fa-fw fa-shield"></i>
                            <span class="nav-link-text">Rate the Teachers</span>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="<?= site_url("Welcome/StudyMaterial") ?>">
                        <i class="fa fa-fw fa-list-alt"></i>
                        <span class="nav-link-text">Study Materials</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('type') == "1" || $this->session->userdata('type') == "2") { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?= site_url("Welcome/Exam") ?>">
                            <i class="fa fa-fw fa-pencil"></i>
                            <span class="nav-link-text">Exams</span>
                        </a>
                    </li>

                <?php } ?>


            </ul>

            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url("Welcome/logOut") ?>">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>

</body>

<script type="text/javascript">

    $(document).ready(function () {






        $("#btnLang").click(function () {

            $.ajax({
                url: "<?= base_url('index.php/LanguageSwitcher/switchLang') ?>",
                type: "post",
                data: {lang: "sinhala"},
                success: function (response) {
                    // you will get response from your php page (what you echo or print) 
                    location.reload();

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });

        });

        $("#btnLang2").click(function () {

            $.ajax({
                url: "<?= base_url('index.php/LanguageSwitcher/switchLang') ?>",
                type: "post",
                data: {lang: "english"},
                success: function (response) {
                    // you will get response from your php page (what you echo or print) 
                    location.reload();

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });

        });







    });

</script>