<head>
    <meta charset="utf-8" />
    <title>Portal Registeration | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="YAsClinicGroup" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Plugins css -->
    <link href="assets/dashboard/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> -->
    <!-- Sweet Alert-->
    <link href="assets/dashboard/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Select CSS  -->
    <link href="assets/dashboard/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>
<style>
    /*basic reset*/
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
        /*Image only BG fallback*/

        /*background = gradient + image pattern combo*/
        background: linear-gradient(135deg, #003A70 0%, #bb6dec 100%);
    }

    body {
        font-family: montserrat, arial, verdana;
    }

    /*form styles*/
    #msform {
        width: 75%;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    #msform input,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }

    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: #003A70;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #003A70;
    }

    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 19.99%;
        float: left;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #003A70;
        color: white;
    }
</style>
<!-- multistep form -->
<form id="msform" action="portalrequest.php" method="POST">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Y/N Questions</li>
        <li>Contact Information</li>
        <li>Profile Information</li>
        <li>Personal Attachments</li>
        <li>Insurance</li>
    </ul>

    <fieldset>
        <h2 class="fs-title">Y/N Questions</h2>
        <h3 class="fs-subtitle"></h3>
        <h3>Are you registering for yourself?</h3>
        <div>
            <input type="radio" id="q1a" value="1" name="q1a">
            <label for="male">Yes</label>
        </div>

        <div>
            <input type="radio" id="q1a" value="2" name="q1a">
            <label for="female">No</label>
        </div>
        <h3>Are you registering on behalf of others?</h3>
        <div>
            <input type="radio" id="q2a" value="1" name="q2a">
            <label for="male">Yes</label>
        </div>

        <div>
            <input type="radio" id="q2a" value="2" name="q2a">
            <label for="female">No</label>
        </div>

        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Contact Information</h2>

        <input type="text" id="fname" name="fname" placeholder="First Name" required />
        <input type="text" id="lname" name="lname" placeholder="Last Name" required />
        <input type="text" id="email" name="email" placeholder="Email" />
        <input type="text" id="phone" name="phone" placeholder="Phone No. ( please start With Country code )" required/>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Profile Information</h2>
        <h3 class="fs-subtitle"> If No National ID, Please put Your Passport Number </h3>
        <input type="text" id="uuid" name="uuid" placeholder="NationalID / PassportNumber" required />
        <input id="birthdate" placeholder="BirthDate" class="textbox-n" type="text" onfocus="(this.type='date')" />
        <input type="text" id="jobtitle" name="jobtitle" placeholder="Job Title" />
        <input type="text" id="nationality" name="nationality" placeholder="Nationality" required />
        <textarea name="address" id="address" placeholder="Address"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Attachments</h2>
        <h3 class="fs-subtitle">Please Upload Your National ID</h3>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mt-3">
                                    <input type="file" id="idfront" name="idfront" data-plugins="dropify" data-max-file-size="3M" />
                                    <p class="text-muted text-center mt-2 mb-0">Front Side</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mt-3">
                                    <input type="file" id="idback" name="idback" data-plugins="dropify" data-max-file-size="3M" />
                                    <p class="text-muted text-center mt-2 mb-0">Back Side</p>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Insurance</h2>
        <h3 class="fs-subtitle">You Can Get This data From Your Insurance Card / If no insurance please leave it blank</h3>
        <input type="text" id="insurancecompany" name="insurance-company" placeholder="Insurance Company" />
        <input type="text" id="planename" name="planename" placeholder="Plan Name" />
        <input type="text" id="policynumber" name="policy-number" placeholder="Policy Number" />
        <input type="text" id="groupnumber" name="group-number" placeholder="Group Number" />
        <input id="policydate" name="policy-date" placeholder="Policy Start Date" class="textbox-n" type="text" onfocus="(this.type='date')" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>

</form>





<script src="vendor/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script src="vendor/materialize.min.js"></script>

<script>
    $(document).ready(function() {
        // msform
        $("#msform").on('submit', function(event) {
            var formData = new FormData()

            formData.append("fname", $("#fname").val());
            formData.append("lname", $("#lname").val());
            formData.append("fname", $("#fname").val());
            formData.append("email", $("#email").val());
            formData.append("phone", $("#phone").val());
            formData.append("uuid", $("#uuid").val());
            formData.append("birthdate", $("#birthdate").val());
            formData.append("jobtitle", $("#jobtitle").val());
            formData.append("nationality", $("#nationality").val());
            formData.append("address", $("#address").val());
            formData.append("insurancecompany", $("#insurancecompany").val());
            formData.append("planename", $("#planename").val());
            formData.append("policynumber", $("#policynumber").val());
            formData.append("groupnumber", $("#groupnumber").val());
            formData.append("policydate", $("#policydate").val());
            formData.append('idfront', $('#idfront')[0].files[0]);
            formData.append('idback', $('#idback')[0].files[0]);

                $.ajax({
                    type: "POST",
                    url: "portalrequest.php",
                    data: formData,

                    contentType: false,

                    cache: false,

                    processData: false,

                    encode: true,
                }).done(function(data) {
                    console.log("adata", data)
                    Swal.fire({
                            title: "Success !",
                            text: "Portal Registeration Request Has Been Sent!",
                            icon: "success"
                        })
                        $('#msform').trigger("reset");
                });
            


            event.preventDefault();

        });
    });
</script>
<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    // $(".submit").click(function(e) {

    //     // return false;
    //     e.preventDefault();
    //     console.log("Osama" , e)
    //     Swal.fire({
    //         title: "Success !",
    //         text: "Portal Registeration Request Has Been Sent",
    //         icon: "success"
    //     })

    // })
</script>
<!-- Plugins js -->
<script src="assets/dashboard/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/dashboard/assets/libs/dropify/js/dropify.min.js"></script>

<!-- Init js-->
<script src="assets/dashboard/assets/js/pages/form-fileuploads.init.js"></script>

<script src="assets/dashboard/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Sweet alert init js-->
<script src="assets/dashboard/assets/js/pages/sweet-alerts.init.js"></script>