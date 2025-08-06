<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admissions Open 2023 | Top-Ranked PGDM Programs at CIMR Mumbai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Admissions Open- 2023 | Take the first step towards a successful career with CIMR Mumbai's PGDM program like PGDM in retail, marketing, human resources etc.">
    <meta name="keywords"
        content="Top PGDM college of Mumbai,MBA admission process,PGDM admission,PGDM admissions,PGDM admission process,CIMR website,PGDM program,PGDM programmes,PGDM admission procedure,PGDM admission eligibility,Top recruiting companies,High-quality teaching,chetana institute,mba mumbai,mba admissions,mba admissions 2023,admissions in mumbai university,chetanas admission process,mba admission procedure,eligibility criteria,mba admission eligibility,fee structure,pgdm admissions,mba admission fees,pgdm admissions 2021">

    <meta name="keywords" content="">
     <link rel="canonical" href="https://cimr.in/admissions.php" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">


    <!--<link rel="icon" href="images/Chetanas College_Logo.webp">-->
    <!--<link rel="icon" type="image/png" href="images/Chetanas College_Favicon.webp" sizes="32*32">-->
    <link rel="icon" href="images/icon.webp">
    <!-- <link rel="shortcut icon" href="images/2106Chetanas College_Logo.ico" type="image/x-icon">
            <link rel="icon" href="images/2106Chetanas College_Logo.ico" type="image/x-icon">-->
    <script type="text/javascript">
        animateArrow = function () {
            //alert("animate arrow function..");
            $("#toTop").animate({ top: 92 + 'vh' }, 2500);
            $("#toTop").animate({ top: 96 + 'vh' }, 2500, animateArrow);
        }

        $(document).ready(function () {

            // $("#surveyFormModal").modal('hide');
            // $("#admissionsNoticeModal").modal("hide");

            // var cookieAdmissionForm = getCookie("admissionForm");
            // if (!cookieAdmissionForm) {
            //     $("#surveyFormModal").modal("hide");
            // };




            // function getCookie(cname) {
            //     var name = cname + "=";
            //     var decodedCookie = decodeURIComponent(document.cookie);
            //     var ca = decodedCookie.split(';');
            //     for (var i = 0; i < ca.length; i++) {
            //         var c = ca[i];
            //         while (c.charAt(0) == ' ') {
            //             c = c.substring(1);
            //         }
            //         if (c.indexOf(name) == 0) {
            //             return c.substring(name.length, c.length);
            //         }
            //     }
            //     return "";
            // }



            $('#banner0').css('display', 'block');

            animateArrow();

            $('#insert_form').on("submit", function (event) {
                event.preventDefault();

                if ($('#name').val() == "") {
                    $('#name').addClass("alert-danger");
                    $("#name").attr("placeholder", "Name is required");
                }


                else if ($('#mobile').val() == "") {
                    $('#mobile').addClass("alert-danger");
                    $("#mobile").attr("placeholder", "Mobile No. is required");
                }

                else if ($('#emailID').val() == "") {
                    $('#emailID').addClass("alert-danger");
                    $("#emailID").attr("placeholder", "Email ID is required");
                }

                else if ($('#course').val() == "") {
                    $('#course').addClass("alert-danger");
                    $("#course").attr("placeholder", "Course is required");
                }

                else if ($('#knowAbout').val() == "") {
                    $('#knowAbout').addClass("alert-danger");
                    $("#knowAbout").attr("placeholder", "Know About Chetna field is required");
                }

                else {
                    $.ajax({
                        url: "survey-form.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function () {

                            $('#surveySubmit').val("Inserting");
                        },
                        success: function (data) {
                            $('#insert_form')[0].reset();
                            $('#surveyFormModal').modal('hide');
                            var d = new Date();
                            d.setTime(d.getTime() + (240 * 24 * 60 * 60 * 9000)); //cookie set for 8 months
                            var expires = "expires=" + d.toUTCString();
                            document.cookie = "admissionForm" + "=" + "submitted" + ";" + expires + ";path=/";
                        }
                    });
                }
            });

            /* mobile menu */

            $('#infraLinkMobile').click(
                function () {
                    //alert("On mobile..");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                    $('#infraMenuMobile').css("display", "block");


                }
            );

            $('#infraLinkMobile').dblclick(
                function () {
                    //alert("on dblclick..");
                    window.location.href = "infrastructure.html";
                }
            );

            $('#infraMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenuMobile').css("display", "none");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                }
            );

            $('#admissionLinkMobile').click(
                function () {
                    //alert("On mobile..");

                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");
                    $('#infraMenuMobile').css("display", "none");

                    $('#admissionMenuMobile').css("display", "block");


                }
            );

            $('#admissionLinkMobile').dblclick(
                function () {
                    //alert("on dblclick..");
                    window.location.href = "admissions.php";
                }
            );

            $('#admissionMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenuMobile').css("display", "none");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                }
            );

            //alumni link 
            $('#alumniLinkMobile').click(
                function () {
                    //alert("On mobile..");


                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");
                    $('#infraMenuMobile').css("display", "none");

                    $('#admissionMenuMobile').css("display", "none");

                    $('#alumniMenuMobile').css("display", "block");


                }
            );

            $('#alumniLinkMobile').dblclick(
                function () {
                    //alert("on dblclick..");
                    window.location.href = "alumni-network.html";
                }
            );

            $('#alumniMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenuMobile').css("display", "none");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                }
            );

            //newsroom link 
            $('#newsroomLinkMobile').click(
                function () {
                    //alert("On mobile..");


                    $('#disclosuresMenuMobile').css("display", "none");

                    $('#contactusMenuMobile').css("display", "none");
                    $('#infraMenuMobile').css("display", "none");

                    $('#admissionMenuMobile').css("display", "none");

                    $('#alumniMenuMobile').css("display", "none");

                    $('#newsroomMenuMobile').css("display", "block");


                }
            );

            $('#newsroomLinkMobile').dblclick(
                function () {
                    //alert("on dblclick..");
                    window.location.href = "newsroom.html";
                }
            );

            $('#newsroomMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenuMobile').css("display", "none");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                }
            );

            //newsroom link 
            $('#disclosuresLinkMobile').click(
                function () {
                    //alert("On mobile..");




                    $('#contactusMenuMobile').css("display", "none");
                    $('#infraMenuMobile').css("display", "none");

                    $('#admissionMenuMobile').css("display", "none");

                    $('#alumniMenuMobile').css("display", "none");

                    $('#newsroomMenuMobile').css("display", "none");

                    $('#disclosuresMenuMobile').css("display", "block");


                }
            );

            $('#disclosuresLinkMobile').dblclick(
                function () {
                    //alert("on dblclick..");
                    window.location.href = "disclosures.html";
                }
            );

            $('#disclosuresMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenuMobile').css("display", "none");
                    $('#admissionMenuMobile').css("display", "none");
                    $('#alumniMenuMobile').css("display", "none");
                    $('#disclosuresMenuMobile').css("display", "none");
                    $('#newsroomMenuMobile').css("display", "none");
                    $('#contactusMenuMobile').css("display", "none");

                }
            );

            //Grievance Links
            $('#grievanceLinkMobile').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenuMobile').css('display', "block");
            });

            $('#testimonialsLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");
                    $('#programsMenuMobile').css("display", "none");
                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");
                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "block");
                    $('#aboutMenuMobile').css("display", "none");


                }
            );

            $('#testimonialsLinkMobile').dblclick(

                function () {
                    document.location.href = "testimonials.html";
                }
            );


            $('#homeLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");
                    $('#programsMenuMobile').css("display", "none");
                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");
                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "none");

                    document.location.href = "index.html";


                }
            );

            $('#aboutLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");
                    $('#programsMenuMobile').css("display", "none");
                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");
                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "block");


                }
            );

            $('#aboutLinkMobile').dblclick(

                function () {
                    document.location.href = "about-us.html";
                }
            );

            $('#aboutMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "none");

                    $('#testimonialsMenuMobile').css("display", "none");


                });

            $('#programmesLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");
                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "block");


                }
            );

            $('#programmesLinkMobile').dblclick(

                function () {
                    document.location.href = "programmes.html";
                }
            );

            $('#programmesMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "none");

                    $('#testimonialsMenuMobile').css("display", "none");


                });

            $('#facultyLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");


                    $('#corporateMenuMobile').css("display", "none");
                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "block");


                }
            );

            $('#facultyLinkMobile').dblclick(

                function () {
                    document.location.href = "faculty-research.html";
                }
            );

            $('#facultyMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "none");

                    $('#testimonialsMenuMobile').css("display", "none");


                });

            $('#corporateLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");



                    $('#chetanasMenuMobile').css("display", "none");
                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "block");


                }
            );

            $('#corporateLinkMobile').dblclick(

                function () {
                    document.location.href = "corporate-connect.html";
                }
            );

            $('#corporateMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "none");

                    $('#testimonialsMenuMobile').css("display", "none");


                });

            $('#lifeAtChetanasLinkMobile').click(

                function () {
                    // alert("on mouse hover of About...");




                    $('#testimonialsMenuMobile').css("display", "none");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "block");


                }
            );

            $('#lifeAtChetanasLinkMobile').dblclick(

                function () {
                    document.location.href = "life-at-chetanas.html";
                }
            );

            $('#chetanasMenuMobile').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenuMobile').css("display", "none");

                    $('#programmesMenuMobile').css("display", "none");

                    $('#facultyMenuMobile').css("display", "none");
                    $('#corporateMenuMobile').css("display", "none");

                    $('#chetanasMenuMobile').css("display", "none");

                    $('#testimonialsMenuMobile').css("display", "none");


                });


            /* desktop menu */

            $('#infraLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "block"); //document.style.display="block";

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            /*$('#infraLink').mouseleave(
            
                 function(){
                    //alert("on leave out of Infra...");
                     $('#admissionMenu').css("display","none"); 
                    $('#infraMenu').css("display","none"); //document.style.display="block";
            
            });*/

            $('#admissionLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#admissionMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");



                });

            /*$('#admissionLink').mouseleave(
            
                 function(){
                    //alert("on leave out of Infra...");
                     $('#admissionMenu').css("display","none"); 
                    $('#infraMenu').css("display","none"); //document.style.display="block";
            
            });*/

            $('#alumniLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#alumniMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");




                });

            $('#disclosuresLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");



                });

            $('#newsroomLink').hover(

                function () {
                    //alert("on mouse enter of NewsRoom...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");

                });

            $('#contactusLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");

                });

            /* mouse leave events */
            $('#infraMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#admissionMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#alumniMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#disclosuresMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#newsroomMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#contactusMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });


            $('#infraLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "block"); //document.style.display="block";

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            /*$('#infraLink').mouseleave(
            
                 function(){
                    //alert("on leave out of Infra...");
                     $('#admissionMenu').css("display","none"); 
                    $('#infraMenu').css("display","none"); //document.style.display="block";
            
            });*/

            $('#admissionLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#admissionMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");



                });

            /*$('#admissionLink').mouseleave(
            
                 function(){
                    //alert("on leave out of Infra...");
                     $('#admissionMenu').css("display","none"); 
                    $('#infraMenu').css("display","none"); //document.style.display="block";
            
            });*/

            $('#alumniLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#alumniMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");




                });

            $('#disclosuresLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");



                });

            $('#newsroomLink').hover(

                function () {
                    //alert("on mouse enter of NewsRoom...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");

                });

            $('#contactusLink').hover(

                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "block");

                    /*big menu items close */
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");

                });

            /* mouse leave events */
            $('#infraMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#admissionMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#alumniMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#disclosuresMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#newsroomMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });

            $('#contactusMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");



                });


            /* script for bigger menu */
            $('#aboutLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#programsMenu').css("display", "none");
                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");
                    $('#chetanasMenu').css("display", "none");
                    $('#testimonialsMenu').css("display", "none");
                    $('#aboutMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#programsLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");
                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");
                    $('#chetanasMenu').css("display", "none");
                    $('#testimonialsMenu').css("display", "none");
                    $('#programsMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#facultyLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");

                    $('#corporateMenu').css("display", "none");
                    $('#chetanasMenu').css("display", "none");
                    $('#testimonialsMenu').css("display", "none");
                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#corporateLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");


                    $('#chetanasMenu').css("display", "none");
                    $('#testimonialsMenu').css("display", "none");
                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#chetanasLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");



                    $('#testimonialsMenu').css("display", "none");
                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#testimonialsLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");




                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "block");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            $('#homeLink').hover(

                function () {
                    //alert("on mouse hover of About...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");

                    /* small menu items close */
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");


                });

            /*mouseleve events of bigger menu items */
            $('#aboutMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            $('#programsMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            $('#facultyMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            $('#corporateMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            $('#chetanasMenu').mouseleave(
                function () {
                    //alert("on mouse enter of Infra...");
                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });

            $('#testimonialsMenu').mouseleave(
                function () {

                    $('#aboutMenu').css("display", "none");

                    $('#programsMenu').css("display", "none");

                    $('#facultyMenu').css("display", "none");
                    $('#corporateMenu').css("display", "none");

                    $('#chetanasMenu').css("display", "none");

                    $('#testimonialsMenu').css("display", "none");


                });


            $('#navbarMenu').mouseleave(
                function () {
                    //alert("on hover of topnavbar..");
                    $('#infraMenu').css("display", "none");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                });

            $('#infraMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "block");
                }
            );

            $('#admissionMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "block");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "none");
                }
            );

            $('#alumniMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "block");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "none");
                }
            );

            $('#disclosuresMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "block");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "none");
                }
            );

            $('#newsroomMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "block");
                    $('#contactusMenu').css("display", "none");
                    $('#infraMenu').css("display", "none");
                }
            );

            $('#contactusMenu').mouseenter(
                function () {
                    //alert("on hover of window..");
                    $('#admissionMenu').css("display", "none");
                    $('#alumniMenu').css("display", "none");
                    $('#disclosuresMenu').css("display", "none");
                    $('#newsroomMenu').css("display", "none");
                    $('#contactusMenu').css("display", "block");
                    $('#infraMenu').css("display", "none");
                }
            );

            $(document).on('scroll', function (event) {
                //alert("On scroll of screen..");
                $('#aboutMenu').css("display", "none");

                $('#programsMenu').css("display", "none");

                $('#facultyMenu').css("display", "none");
                $('#corporateMenu').css("display", "none");

                $('#chetanasMenu').css("display", "none");

                $('#testimonialsMenu').css("display", "none");

                /* small menu items close */
                $('#infraMenu').css("display", "none");
                $('#admissionMenu').css("display", "none");
                $('#alumniMenu').css("display", "none");
                $('#disclosuresMenu').css("display", "none");
                $('#newsroomMenu').css("display", "none");
                $('#contactusMenu').css("display", "none");
            });

            $(document).on('wheel DOMMouseScroll', function (event) {
                //alert("On Mouse scroll..");
                $('#aboutMenu').css("display", "none");

                $('#programsMenu').css("display", "none");

                $('#facultyMenu').css("display", "none");
                $('#corporateMenu').css("display", "none");

                $('#chetanasMenu').css("display", "none");

                $('#testimonialsMenu').css("display", "none");

                /* small menu items close */
                $('#infraMenu').css("display", "none");
                $('#admissionMenu').css("display", "none");
                $('#alumniMenu').css("display", "none");
                $('#disclosuresMenu').css("display", "none");
                $('#newsroomMenu').css("display", "none");
                $('#contactusMenu').css("display", "none");
                //event.preventDefault();
                // $('#aboutLink').off("hover"); //event.stopEventPropogation();// removeEventListener('hover');

            });

            $('#facebookLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#fbIcon').css('background-color', "#F01A24");
            });

            $('#facebookLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#fbIcon').css('background-color', "#FFCB00");
            });

            $('#twitterLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#twitterIcon').css('background-color', "#F01A24");
            });

            $('#twitterLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#twitterIcon').css('background-color', "#FFCB00");
            });

            //
            $('#instagramLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#instagramIcon').css('background-color', "#F01A24");
            });

            $('#instagramLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#instagramIcon').css('background-color', "#FFCB00");
            });

            //
            $('#linkdlnLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#linkdlnIcon').css('background-color', "#F01A24");
            });

            $('#linkdlnLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#linkdlnIcon').css('background-color', "#FFCB00");
            });

            // Footer Social Icon events - 
            //Facebook
            $('#footerFacebookLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#footerFacebookIcon').css('background-color', "#FFCB00");
            });

            $('#footerFacebookLink').mouseleave(function (e) {
                //alert("fb mouseleave..");
                $('#footerFacebookIcon').css('background-color', "white");
            });

            //Linkdln
            $('#footerLinkdlnLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#footerLinkdlnIcon').css('background-color', "#FFCB00");
            });

            $('#footerLinkdlnLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#footerLinkdlnIcon').css('background-color', "white");
            });

            //twitter
            $('#footerTwitterLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#footerTwitterIcon').css('background-color', "#FFCB00");
            });

            $('#footerTwitterLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#footerTwitterIcon').css('background-color', "white");
            });

            //instagram
            $('#footerInstagramLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#footerInstagramIcon').css('background-color', "#FFCB00");
            });

            $('#footerInstagramLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#footerInstagramIcon').css('background-color', "white");
            });

            //google-plus
            $('#footerGoogleLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#footerGoogleIcon').css('background-color', "#FFCB00");
            });

            $('#footerGoogleLink').mouseleave(function (e) {
                //alert("fb hover..");
                $('#footerGoogleIcon').css('background-color', "white");
            });

            //Marketing SubMenu
            $('#marketingLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#marketingSubmenu').css('display', "block");
            });

            //Retails SubMenu
            $('#retailLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#marketingSubmenu').css('display', "none");
            });

            //PGDM SubMenu
            $('#pgdmLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#marketingSubmenu').css('display', "none");
            });

            /*$('#marketingLink').mouseleave(function(e) {
            
            $('#marketingSubmenu').css('display',"none");
            });*/

            //Research Journals
            $('#researchJournalsLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#researchJournalsSubmenu').css('display', "block");
            });

            $('#coreFacultyLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#researchJournalsSubmenu').css('display', "none");
            });

            $('#guestLectureLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#researchJournalsSubmenu').css('display', "none");
            });

            //Grievance Links
            $('#grievanceLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenu').css('display', "block");
            });

            $('#careersLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenu').css('display', "none");
            });

            $('#studentCommitteeLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenu').css('display', "none");
            });

            $('#antiRaggingCommitteeLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenu').css('display', "none");
            });

            $('#womensDevelopmentLink').mouseenter(function (e) {
                //alert("fb hover..");
                $('#grievanceSubmenu').css('display', "none");
            });



        });


    </script>
    <style type="text/css">
        body,
        html {
            overflow-x: hidden;
        }

        .container-fluid {
            margin: 0;
            padding: 0;
        }

        .zig-zag-top {
            background:
                linear-gradient(-135deg, #E6D7B9 1vw, transparent 0),
                linear-gradient(135deg, #E6D7B9 1vw, transparent 0);
            background-position: left top;
            background-repeat: repeat-x;
            background-size: 22px 32px;
            content: " ";
            display: block;
            height: 3vh;
            position: relative;
            //bottom: 64px;
            left: 0;
        }

        .opennavbar {
            display: none;
            position: absolute;
            top: 0;
            margin-right: 5vh;
            margin-top: 0;
            border: 1px red solid;
            margin-left: 18vh;
            height: 50vh;
            width: 52.55vw;
            //z-index:15;
        }

        .index {
            margin-right: 5vh;
            margin-top: 3vh;
            border: z-index:6;
        }

        .index2 {
            margin-right: -0.25vh;
            margin-top: 2.7vh;
            z-index: 6;
        }

        .navbar-nav>li>a {
            //border:1px red solid;
            //height:5vh;
            //line-height:5vh;
            border-top: 1.5px #E46C0A solid;
            border-bottom: 1.5px #E46C0A solid;
            color: black;
            background-color: none;
        }

        .navbar-nav>li>a:hover {
            background-color: transparent;
        }

        .nav>li>a {
            padding: 1vh 0vh;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: transparent;
            //border:none;
            color: black;
        }

        .dropdown-menu>li>a:focus,
        .dropdown-menu>li>a:hover {
            color: black;
            text-decoration: none;
            background-color: transparent;
            //text-align: left;
            //width: 250px;
        }

        .navbar-default .navbar-nav>li>a:hover {
            color: black;
            //background-color:#5FA7F0;
            background-color: transparent;
            //width:170px;
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover {
            color: white;
            background-color: transparent;
            //text-align: center;
        }

        .navbar-default .navbar-nav>.open>a:focus {
            color: black;
            background-color: red;
            //text-align: center;
        }

        .navbar-default {
            background-color: transparent;
            border: none;
        }

        .nav .open>a,
        .nav .open>a:focus,
        .nav .open>a:hover {
            color: black;
            background-color: white;
            border-top: 1.5px #E46C0A solid;
            border-bottom: 1.5px #E46C0A solid;
        }

        .dropdown:hover {
            color: black;
            background-color: transparent;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: #E46C0A;
            text-decoration: none;
        }

        #bgimage {
            background-image: url("images/infrastructure/CLASSROOMS/background.webp");
            /* The image used */
            //background-color: #cccccc; /* Used if the image is unavailable */
            //height: 500px; /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }

        /* Media Query classes */

        /* Media Query classes */
        @media (min-width: 768px) {
            .navbar-toggle {
                display: block ! important;
            }

            .navbar-collapse {
                width: auto;
                border-top: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .navbar-collapse.collapse {
                display: none ! important;
            }

            .collapse.in {
                display: block ! important;
            }

            .collapse {
                display: none ! important;
            }
        }

        @media screen and (min-width: 1000px) {
            .desktopTable {
                display: block;
            }

            .mobileTable {
                display: none;
            }

            .headerYellowBox {
                height: 16vh;
                padding: 0;
                margin: 0;
                text-align: center;
                line-height: 16vh;
            }

            .yellowBoxTitle {
                font-weight: bold;
                margin: 0 1%;
                padding: 0;
                display: inline-block;
                vertical-align: middle;
                background-color: #FFCB00;
                padding: 0.3% 3%;
                //font-size: 1.4vw;
            }

            .desktopFont {
                font-size: 1.2vw;
            }

            .accountTableLayout {
                width: 70%;
            }

            .desktopFontBig {
                font-size: 1.5vw;
            }


            .desktopFontBigModal {
                font-size: 1.41vw;
            }

            .desktopFontBigTitle {
                font-size: 2vw;
            }

            .desktopFontBigTitle2 {
                font-size: 2vw;
                color: red;
            }

            .desktopFontBigTitle1 {
                font-size: 2.2vw;
                color: red;
            }

            .desktopFontLink {
                font-size: 1.4vw;
            }

            .chetanaYellowText {
                background-color: #FFCB00;
                width: 60vh;
                height: 4vh;
                line-height: 4vh;
                text-align: center;
                margin: 0 auto;
                margin-top: 30px;
            }

            .chetanaYellowText {
                line-height: 4vh;
                font-size: 2.2vh;
                font-weight: normal;
                color: #000000;
            }

            .chetanaLifeImageClass {
                width: 145%;
                height: 50vh;
                border: 1.8px #FFCB00 solid;
                padding: 0;
                object-fit: fill;
                margin-left: 3vh;
            }

            .chetanaLifeImageSection {
                height: 50vh;
                margin-top: 5vh;
                padding: 0;
                text-align: center;
            }

            .indexPageTopText {
                height: 18vh;
                margin: 0;
                padding: 0;
                margin-bottom: 10vh;
            }

            .topTextClass {
                font-size: 1.2vw;
                text-align: justify;
                text-justify: auto;
            }

            .footerDesktop {
                display: block;
            }

            .footerMobile {
                display: none;
            }

            .programmesClassDesktop {
                display: block;
            }

            .programmesClassMobile {
                display: none;
            }

            .pillarsClassDesktop {
                display: block;
            }

            .pillarsClassMobile {
                display: none;
            }

            .headerDesktop {
                display: block;
            }

            .headerMobile {
                display: none;
            }

            .heightClass {
                height: 220vh;
            }

            .heightClassNew {
                height: 16vh;
            }

            .whiteSpaceClass {
                height: 18vh;
                margin: 0;
                padding: 0;
            }

            #applyButton {
                color: #FFCB00;
                background-color: black;
                color: #FFCB00;
                border-radius: 25px;
                border: 1px solid black;
                margin-bottom: 0vh;
                padding-top: 0;
                height: 3vh;
                width: 15vh;
                font-size: 1vw
            }

            .highlightTextYellowClass {
                text-align: center;
                height: 5.5vh;
                background-color: #FFCB00;
                margin: 0;
                padding-top: 0.2vh;
                padding-bottom: 0.2vh;
                position: absolute;
                width: 100%;
            }

            .carouselContainerClass {
                height: 76vh;
            }

            .carouselClass {
                width: 100%;
                height: 78vh;
            }

            .carouselImageClass {
                height: 78vh;
                width: 100%;
                object-fit: cover;
            }

            .bannerClass {
                padding: 0;
                margin: 0;
                height: 36vh;
            }

            .bannerImageClass {
                height: 36vh;
                width: 100%;
                border: 1.8px #FFCB00 solid;
            }

            .admissionImageClass {
                width: 80%;
            }

            .highlightText {
                font-size: 1.3vw;
                font-weight: bold;
            }

            .desktopMenuBar {
                height: 17vh;
                background-color: white;
                display: block;
            }

            .mobileMenuBar {
                //height:17vh;background-color:white;
                display: none;
            }

            .footerParent {
                width: 100%;
                padding: 0;
                //margin-bottom:2vh;
            }

            .footerChild {
                float: left;
                width: 32vw;
                //border:1px solid black;
            }

            .pillarsImagesChild {
                float: left;
                width: 14vw;
                height: 30vh;
                text-align: center;
                //border:1px solid blue;
            }

            .menuFont {
                font-size: 1.4vw;
            }

            .submenuFont {
                //font-size:1.4vw;
            }

            #toTop {
                display: block;
                text-decoration: none;
                position: fixed;
                z-index: 4;
                bottom: 14px;
                right: 3%;
                overflow: hidden;
                width: 40px;
                height: 40px;
                border: none;
                text-indent: 100%;
                background: url("images/iconsTop.webp") no-repeat 0px 0px;
                color: black;
            }

            .specialTextFont {
                font-size: 0.8vw;
            }
        }

        @media screen and (max-width: 999px) and (min-width: 100px) {
            .specialTextFont {
                font-size: 70%;
            }

            #toTop {
                display: block;
                text-decoration: none;
                position: fixed;
                z-index: 4;
                bottom: 14px;
                right: 3%;
                overflow: hidden;
                width: 40px;
                height: 40px;
                border: none;
                text-indent: 100%;
                background: url("images/iconsTop.webp") no-repeat 0px 0px;
                color: black;
            }

            .menuFont {
                font-size: 43%;
            }

            .submenuFont {
                font-size: 75%;
            }

            .desktopTable {
                display: none;
            }

            .mobileTable {
                display: block;
            }

            .headerYellowBox {
                height: 20%;
                padding: 0;
                margin: 0;
                text-align: center;
                line-height: 6vh;
                margin-bottom: 5%;
            }

            .yellowBoxTitle {
                margin: 0 1%;
                padding: 0;
                display: inline-block;
                vertical-align: middle;
                background-color: #FFCB00;
                padding: 0.3% 3%;
                font-size: 3vh;
            }

            .desktopFont {
                //font-size:1.2vw;
            }

            .accountTableLayout {
                //width:70%;
            }

            .desktopFontBig {
                //font-size:1.4vw;
            }

            .desktopFontBigModal {
                //font-size:1.4vw;
            }

            .desktopFontBigTitle {
                //font-size:1.4vw;
            }

            .desktopFontBigTitle2 {
                //font-size:1.4vw;
                color: red;
            }

            .desktopFontBigTitle1 {
                //font-size:1.4vw;
                color: red;
            }

            .desktopFontLink {
                //font-size:1.4vw;
            }

            .chetanaYellowText {
                background-color: #FFCB00;
                width: 90%;
                height: 2vh;
                line-height: 4vh;
                text-align: center;
                margin: 0 auto;
                margin-top: 30px;
            }

            .chetanaYellowText {
                line-height: 4vh;
                font-weight: normal;
                color: #000000;
            }

            .chetanaLifeImageClass {
                width: 95%;
                height: 35vh;
                border: 1.8px #FFCB00 solid;
                padding: 0;
                object-fit: fill;
                margin-left: 0vh;
            }

            .chetanaLifeImageSection {
                height: 35vh;
                margin-top: 5vh;
                padding: 0;
                text-align: center;
            }

            .indexPageTopText {
                height: 48%;
                margin: 0;
                padding: 0;
                margin-bottom: 5vh;
                margin-top: 4%;
            }

            .topTextClass {}

            .footerDesktop {
                display: none;
            }

            .footerParent {
                height: 30%;
                width: 100%;
                padding: 0;
                //margin-bottom:2vh;
            }

            .footerChild {
                float: left;
                width: 40vw;
                //border:1px solid black;
            }

            .footerMobile {
                display: block;
            }

            .programmesClassDesktop {
                display: none;
            }

            .programmesClassMobile {
                display: block;
            }

            .pillarsClassDesktop {
                display: none;
            }

            .pillarsClassMobile {
                display: block;
            }

            .headerDesktop {
                display: none;
            }

            .headerMobile {
                display: block;
            }

            .heightClass {
                //height:310vh;
            }

            .heightClassNew {
                height: 5vh;
            }

            .whiteSpaceClass {
                height: 5vh;
                margin: 0;
                padding: 0;
            }

            #applyButton {
                color: #FFCB00;
                background-color: black;
                color: #FFCB00;
                border-radius: 25px;
                border: 1px solid black;
                margin-bottom: 0vh;
                padding-top: 0;
                height: 3.5vh;
                width: 15vh;
                font-size: 2.6vw;
            }

            .highlightTextYellowClass {
                text-align: center;
                height: 7%;
                background-color: #FFCB00;
                margin: 0;
                padding-top: 0.2vh;
                padding-bottom: 0.2vh;
                position: absolute;
                width: 100%;
            }

            .carouselContainerClass {
                height: 35%;
            }

            .carouselClass {
                width: 100%;
                height: 30%;
            }

            .carouselImageClass {
                height: 35%;
                width: 100%;
            }

            .bannerClass {
                padding: 0;
                margin: 0;
                height: 20%;
            }

            .bannerImageClass {
                height: 70%;
                width: 100%;
                border: 1.8px #FFCB00 solid;
            }

            .admissionImageClass {
                width: 80%;
            }

            .highlightText {
                font-size: 180%;
                //font-weight:bold;
            }

            .desktopMenuBar {
                height: 17vh;
                background-color: white;
                display: none;
            }

            .mobileMenuBar {
                height: 17vh;
                background-color: white;
                display: block;
                //border:1px solid blue;
            }
        }

        @media screen and (min-width: 1000px) {
            .headerDesktop {
                display: block;
                //border:1px solid red;
            }

            .headerMobile {
                display: none;
            }

            .headerParent {
                width: 100%;
            }

            .headerChild {
                float: left;
                width: 36vw;
            }

            .programImagesParent {
                width: 100%;
                margin-top: 4vh;
                padding-left: 2vw;
                margin-left: 0 auto;
            }

            .programImagesChild {
                float: left;
                width: 31vw;
                height: 30vh;
                text-align: center;
                //border:1px solid red;
            }

            .programImagesChild>img {
                width: 16vw; //219.397px;
                height: 28vh; //176.0012px;
                border: 2px solid #FFCB00;
            }

            .programImagesChild>div {
                text-align: center;
                margin-left: 12vw;
                margin-top: 2vh;
                height: 4vh;
                width: 15vw;
                background-color: #FFCB00;
            }

            .headerDiv {
                text-align: center;
                margin: 0 auto;
                margin-top: 5vh;
                margin-bottom: 5vh;
                height: 4vh;
                width: 15vw;
                background-color: #FFCB00;
            }

            .contentDiv {
                width: 65vw;
                margin: 0 auto;
                //border:1px solid red;
            }

            .contentSection1 {
                float: left;
                width: 37vw;
            }

            .contentSection2 {
                float: left;
                width: 26vw;
            }

            .pillarsClass {
                margin-top: 54vh;
            }

            .pillarsImagesParent {
                width: 100%;
                margin-top: 4vh;
                padding-left: 3vw;
            }

            .pillarsImagesChild {
                float: left;
                width: 22vw;
                height: 30vh;
                text-align: center;
                //border:1px solid blue;
            }

            .pillarsImagesChild>img {
                width: 16vw;
                height: 12vw;
                border: 2px solid #FFCB00;
            }

            .pillarsImagesChild>div {
                text-align: center;
                margin-left: 6vw;
                margin-top: 2vh;
                height: 4vh;
                width: 15vw;
                background-color: #FFCB00;
            }

            .chetanasClass {
                margin-top: 50vh;
            }

            .chetanasLinks {
                text-align: center;
                margin-left: 29vw;
                margin-top: 2vh;
                height: 4vh;
                width: 35vw;
                background-color: #FFCB00;
            }

            #topnavbarMobile {
                display: none;
            }

            #topnavbar {
                display: block;
            }

            .grayLine {
                height: 0.5vh;
                background-color: #C7C7C9; //#E6D7B9;//border:1px solid red;
            }

            .footerParent {
                width: 100%;
                padding: 0;
                //margin-bottom:2vh;
            }

            .firstSectionFooter {
                float: left;
                width: 28vw;
                //border:1px solid Blue;
            }
        }

        @media screen and (max-width: 999px) and (min-width: 200px) {
            .headerDesktop {
                display: none;
            }

            .headerMobile {
                display: block;
            }

            .headerParent {
                width: 100%;
            }

            .headerChild {
                float: none;
                width: 100%;
            }

            .footerParent {
                width: 100%;
            }

            .grayLine {
                height: 0.5vh;
                background-color: #C7C7C9; //#E6D7B9;//border:1px solid red;
                margin-top: -2vh;
            }

            .programImagesParent {
                width: 100%;
                margin-top: 4vh;
            }

            .programImagesChild {
                float: none;
                width: 99%;
                height: 30vh;
                text-align: center;
                //border:1px solid blue;
            }

            .programImagesChild>img {
                width: 50%;
                height: 70%;
                border: 2px solid #FFCB00;
            }

            .programImagesChild>div {
                text-align: center;
                margin-left: 24%;
                margin-top: 2vh;
                height: 4vh;
                width: 50%;
                background-color: #FFCB00;
            }

            .pillarsClass {
                margin-top: 10%;
            }

            .pillarsImagesParent {
                width: 100%;
                margin-top: 4vh;
            }

            .pillarsImagesChild {
                float: none;
                width: 99%;
                height: 30vh;
                text-align: center;
                //border:1px solid blue;
            }

            .pillarsImagesChild>img {
                width: 50%;
                height: 70%;
                border: 2px solid #FFCB00;
            }

            .pillarsImagesChild>div {
                text-align: center;
                margin-left: 24%;
                margin-top: 2vh;
                height: 4vh;
                width: 50%;
                background-color: #FFCB00;
            }

            .chetanasClass {
                margin-top: 10%;
            }

            .chetanasLinks {
                text-align: center;
                margin-left: 30%;
                margin-top: 2vh;
                height: 4vh;
                width: 30vw;
                background-color: #FFCB00;
            }

            #topnavbarMobile {
                display: block;
            }

            #topnavbar {
                display: none;
            }
        }

        #toTop {
            display: none;
            text-decoration: none;
            position: fixed;
            z-index: 4;
            bottom: 14px;
            right: 3%;
            overflow: hidden;
            width: 40px;
            height: 40px;
            border: none;
            text-indent: 100%;
            background: url("images/iconsTop.webp") no-repeat 0px 0px;
            color: black;
        }
    </style>
</head>

<body id="admissionsPage" style="overflow-x:hidden;">
    <!-- NoPaperForms Tracking Code -->
    <script type="text/javascript">
        var npf_d = 'https://admissions.cimr.in';
        var npf_c = '5164';
        var npf_m = '1';
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://track.nopaperforms.com/js/track.js";
        document.body.appendChild(s);
    </script>
    <!-- NoPaperForms Tracking Code end -->





    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMJ7565" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container-fluid" style="height:0.6vh;background-color:#FFCB00;" style="">
    </div>
    <div class="container-fluid desktopMenuBar" style="height:17vh;background-color:white;">
        <div id="imageBox" class="col-md-4" style="height:17vh;line-height:17vh;">
            <img src="images/Chetana_Logo_May20.webp" style="width:95%;margin-left:4.75vh;" alt="chetanas logo">
        </div>
        <div class="col-md-8" style="height:17vh;margin:0;padding:0;">
            <div class="col-md-12" style="height:8vh;margin:0;padding:0;line-height:8vh;padding-top:0vh;">
                <div style="line-height:8vh;text-align:right">
                    <a href="https://facebook.com/cimr.bandra" id="facebookLink" class="facebookLink" target="_blank"><i
                            class="fa fa-facebook" id="fbIcon"
                            style="background-color:#FFCB00;font-size:2vh;padding:1vh;padding-top:0.5vh;color:white;width:3vh;height:3vh;margin-right:0.2vh;text-align:center;text-vertical-align:middle;"></i></a>
                    <!--<a href="#" id="twitterLink"><i class="fa fa-twitter" id="twitterIcon" style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:3vh;height:3vh;margin-right:0.2vh;text-align:center;"></i></a>-->
                    <a href="https://www.linkedin.com/company/chetana's-institute-of-management-&-research"
                        id="linkdlnLink" target="_blank"><i class="fa fa-linkedin" id="linkdlnIcon"
                            style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:3vh;height:3vh;margin-right:0.2vh;text-align:center;"></i></a>
                    <a href="https://instagram.com/chetanas_institutes?igshid=3wnxsukkjqdz" id="instagramLink"
                        target="_blank"><i class="fa fa-instagram" id="instagramIcon"
                            style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:3vh;height:3vh;margin-right:6vh;text-align:center;"></i></a>
                    <!-- <a href="#" id="facebookLink" class="facebookBtn" style="width:42px;height:42px;"></a>
                            <a href="#" id="facebookLink" class="facebookBtn" style="width:42px;height:42px;"></a>
                            
                             <a href="#" id="facebookLink" class="facebookBtn" style="width:42px;height:42px;"></a>
                             
                              <a href="#" id="facebookLink" class="facebookBtn" style="width:42px;height:42px;"></a> -->
                </div>
            </div>
            <div class="col-md-12 container-fluid"
                style="height:5vh;margin:-1vh;margin-top:0vh;margin-left:0vh;padding:0;line-height:5vh;text-align:right">
                <!--<a href="infrastructure.html"><div id="submenu" style="margin-top:2vh;margin-left:4vh;">Classroom</div></a>-->
                <!--<div style="margin-right:5vh"><div style="float:right; "><a id="contactusLink" href="admission.html" style=""><div class="" style="font-size:1.55vh;padding:0 1.2vh;">CONTACT US</div></a></div></div>-->
                <!--<div style="margin-right:5vh" class="bar1small"><a id="contactusLink" href="contact-us.html" style=""><div class="bar1small">CONTACT US</div></a><a id="newsroomLink" href="newsroom.html" style=""><h6 class="bar1small">NEWSROOM</h6></a><a id="disclosuresLink" href="disclosures.html" style=""><h6 class="bar1small">DISCLOSURES</h6></a><a id="alumniLink" href="alumni.html" style=""><h6 class="bar1small">ALUMNI NETWORK</h6></a><a id="admissionLink" href="admission.html" style=""><h6 class="bar1small">ADMISSION</h6></a><a id="infraLink" href="infrastructure.html" style=""><h6 class="bar1small">INFRASTRUCTURE</h6></a></div>-->
                <!--<div style="margin-right:4vh"><div style="float:right; "><a id="contactusLink" href="contact-us.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">CONTACT US</h6></a></div><div style="float:right; "><a id="newsroomLink" href="newsroom.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">NEWSROOM</h6></a></div><div style="float:right; "><a id="disclosuresLink" href="disclosures.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">DISCLOSURES</h6></a></div><div style="float:right; "><a id="alumniLink" href="alumni.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">ALUMNI NETWORK</h6></a></div><div style="float:right; "><a id="admissionLink" href="admission.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">ADMISSION</h6></a></div><div style="float:right; "><a id="infraLink" href="infrastructure.html" style=""><h6 style="font-size:1.55vh;padding:0 1.2vh;">INFRASTRUCTURE</h6></a></div></div> -->
                <div style="margin-right:3vh">

                    <div style="float:right; ">
                        <a id="contactusLink" href="careers.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">CAREERS</h6>
                        </a>
                    </div>

                    <div style="float:right; ">
                        <a id="contactusLink" href="contact-us.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">CONTACT US</h6>
                        </a>
                    </div>
                    <!-- 2 -->
                    <div style="float:right; ">
                        <a id="newsroomLink" href="newsroom.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">NEWSROOM</h6>
                        </a>
                        <div id="newsroomMenu"
                            style="text-align:left;display:none;margin-top:1vh;margin-left:0%;width:11vw;height:22vh;background-color:white;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);">
                            <!--<div class="col-md-5" style="margin-left:2vh;">
                                    <img style="width:37vh;margin-top:2vh;background-color:none;" src="images/classroom.webp">
                                    </div>-->
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <a href="newsroom.html#blogs">
                                    <div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">Blogs
                                    </div>
                                </a>
                                <a href="newsroom.html#videos">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Videos
                                    </div>
                                </a>
                                <a href="newsroom.html#achievementsAwards">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">
                                        Achievements & Awards
                                    </div>
                                </a>
                                <a href="newsroom.html#campusReport">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Campus
                                        Report
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div style="float:right; ">
                        <a id="disclosuresLink" href="disclosures.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">DISCLOSURES</h6>
                        </a>
                        <div id="disclosuresMenu"
                            style="text-align:left;display:none;margin-top:1vh;margin-left:0%;width:15vw;height:40vh;background-color:white;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);">
                            <!--<div class="col-md-5" style="margin-left:2vh;">
                                    <img style="width:37vh;margin-top:2vh;background-color:none;" src="images/Disclosures.webp">
                                    </div>-->
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <a href="PDFs/Mandatory Disclosures.pdf" target="_blank">
                                    <div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">Mandatory
                                        Disclosures
                                    </div>
                                </a>
                                <a href="disclosures.html#AICTEApprovals">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">AICTE
                                        Approvals
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <!--<a id="careersLink" href="contact-us.html#careers"><div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">Careers</div></a>-->
                                <!--<a href="contact-us.html#address"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Address</div></a>
                                        <a href="contact-us.html#phoneNo"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Phone no.</div></a>
                                        <a href="contact-us.html#socialMediaLinks"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Social Media Links</div></a>-->
                                <a id="grievanceLink" href="disclosures.html#grievanceRedressalCommittee">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Grievance
                                    </div>
                                </a>
                                <div id="grievanceSubmenu" style="display:none;margin-left:15%;">
                                    <a href="disclosures.html#grievanceRedressalCommittee">
                                        <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">
                                            Grievances Committee
                                        </div>
                                    </a>
                                    <a href="disclosures.html#grievanceForm">
                                        <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">
                                            Grievance Form
                                        </div>
                                    </a>
                                </div>
                                <a id="antiRaggingCommitteeLink" href="disclosures.html#antiRaggingSquad">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Anti
                                        Ragging Squad
                                    </div>
                                </a>
                                <a id="antiRaggingCommitteeLink" href="disclosures.html#antiRaggingCommittee">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Anti
                                        Ragging Committee
                                    </div>
                                </a>
                                <a id="studentCommitteeLink" href="disclosures.html#studentCommittee">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Student
                                        Committee
                                    </div>
                                </a>
                                <a id="womensDevelopmentLink" href="disclosures.html#womensDevelopment">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Women's
                                        Development
                                    </div>
                                </a>
                                <a id="educationNoticeLink" href="PDFs/Educational Verification Notice.pdf"
                                    target="_blank">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Education
                                        Verification Notice
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div style="float:right; ">
                        <a id="alumniLink" href="alumni-network.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">ALUMNI NETWORK</h6>
                        </a>
                        <div id="alumniMenu"
                            style="text-align:left;display:none;margin-top:1vh;margin-left:0%;width:11vw;height:18vh;background-color:white;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);">
                            <!--<div class="col-md-5" style="margin-left:2vh;">
                                    <img style="width:37vh;margin-top:2vh;background-color:none;" src="images/Alumni Network.webp">
                                    </div>-->
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <a href="alumni-network.html#CAN">
                                    <div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">CAN</div>
                                </a>
                                <a href="alumni-network.html#newsLetter">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Newsletter
                                    </div>
                                </a>
                                <a href="alumni-network.html#alumniPortal">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Alumni
                                        Portal
                                    </div>
                                </a>
                                <a href="alumni-network.html#alumniCellContact">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Alumni
                                        Cell Contact
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div style="float:right; ">
                        <a id="admissionLink" href="admissions.php" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">ADMISSIONS</h6>
                        </a>
                        <div id="admissionMenu"
                            style="text-align:left;display:none;margin-top:1vh;margin-left:0%;width:11vw;height:22vh;background-color:white;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);">
                            <!--<div class="col-md-5" style="margin-left:2vh;">
                                    <img style="width:37vh;margin-top:2vh;background-color:none;" src="images/Admission.webp">
                                    </div>-->
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <a href="admissions.php#eligibility">
                                    <div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">
                                        Eligibility
                                    </div>
                                </a>
                                <a href="admissions.php#selectionProcess">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Selection
                                        Process
                                    </div>
                                </a>
                                <a href="admissions.php#form">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Form</div>
                                </a>
                                <a href="admissions.php#enquiry">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Enquiry
                                    </div>
                                </a>
                                <a href="admissions.php#fees">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Fees</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div style="float:right; ">
                        <a id="infraLink" href="infrastructure.html" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">INFRASTRUCTURE</h6>
                        </a>
                        <div id="infraMenu"
                            style="text-align:left;display:none;margin-top:1vh;margin-left:0%;width:11vw;height:26vh;background-color:white;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);">
                            <!--<div class="col-md-5" style="margin-left:2vh;">
                                    <img style="width:37vh;margin-top:2vh;background-color:none;" src="images/INFRASTRUCTURE.webp">
                                    </div>-->
                            <div class="col-md-12" style="margin:0; padding-left:0vw;font-size:1vw;">
                                <a href="infrastructure.html#auditorium">
                                    <div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">Auditorium
                                    </div>
                                </a>
                                <a href="infrastructure.html#ITFacilities">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">IT
                                        Facilities
                                    </div>
                                </a>
                                <a href="infrastructure.html#library">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Library
                                    </div>
                                </a>
                                <a href="infrastructure.html#classrooms">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Classrooms
                                    </div>
                                </a>
                                <a href="infrastructure.html#sports">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Sports
                                    </div>
                                </a>
                                <a href="infrastructure.html#cafeteria">
                                    <div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Cafeteria
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                       <!-- 7 -->
                    <div style="float:right; ">
                        <a id="contactusLink" href="/PDFs/NIRF.pdf" target="_BLANK" style="">
                            <h6 style="font-size:1.55vh;padding:0 1.2vh;">NIRF</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12"
                style="height:4vh;margin:0;padding:0;line-height:5vh;text-align:right;margin-left:-3vh;">
                <!--<div style="margin-right:5vh;justify-content: space-evenly;"><a id="testimonialsLink" href="" style="z-index:4;"><h6 class="bar1"><b>TESTIMONIALS</b></h6></a><a id="chetanasLink" href="" style="z-index:4;"><h6 class="bar1"><b>LIFE @ CHETNA'S</b></h6></a><a id="corporateLink" href="" style="z-index:4;"><h6 class="bar1"><b>CORPORATE CONNECT</b></h6></a><a id="facultyLink" href="" style="z-index:4;"><h6 class="bar1"><b>FACULTY & RESEARCH</b></h6></a><a id="programsLink" href="" style="z-index:4;"><h6 class="bar1"><b>PROGRAMMES</b></h6></a><a id="aboutLink" href="" style="z-index:4;"><h6 class="bar1"><b>ABOUT US</b></h6></a><a id="homeLink" href="" style="z-index:4;"><h6 class="bar1"><b>HOME</b></h6></a></div>-->
                <!--<div style="margin-right:4vh;justify-content: space-evenly;border:1px solid black;"><div style="float:right; "><a id="testimonialsLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>TESTIMONIALS</b></h6></a></div><div style="float:right; "><a id="chetanasLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>LIFE @ CHETNA'S</b></h6></a></div><div style="float:right; "><a id="corporateLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>CORPORATE CONNECT</b></h6></a></div><div style="float:right; "><a id="facultyLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>FACULTY & RESEARCH</b></h6></a></div><div style="float:right; "><a id="programsLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>PROGRAMMES</b></h6></a></div><div style="float:right; "><a id="aboutLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>ABOUT US</b></h6></a></div><div style="float:right; "><a id="homeLink" href="" style="z-index:4;"><h6 style="font-size:1.55vh;padding:0 1.2vh;"><b>HOME</b></h6></a></div></div>-->
                <div style="margin-right:0vh;justify-content: space-evenly;">
                    <div style="float:right; ">
                        <a id="testimonialsLink" href="testimonials.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>TESTIMONIALS</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="chetanasLink" href="life-at-chetanas.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>LIFE @ CHETANA'S</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="corporateLink" href="corporate-connect.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>CORPORATE CONNECT</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="facultyLink" href="faculty-research.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>FACULTY & RESEARCH</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="programsLink" href="programmes.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>PROGRAMMES</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="aboutLink" href="about-us.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>ABOUT US</b></h6>
                        </a>
                    </div>
                    <div style="float:right; ">
                        <a id="homeLink" href="index.html" style="z-index:4;">
                            <h6 style="font-size:1.55vh;padding:0 0.8vh;"><b>HOME</b></h6>
                        </a>

                           <div id="aboutMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="height:34vh; width:102vh; margin-top:0vh;margin-bottom:0;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:1vh;">
                                    <img style="width:42vh" src="images/menuImages/About_Us.webp" alt="about us">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;margin-top:3vh;margin-left:1.4vw;padding-right:0vh;width:23%;border-right:1px #FFCB00 solid; font-size:1vw;">
                                    <a href="about-us.html#aboutCIMR" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">CIMR Legacy</div>
                                    </a>
                                    <a href="about-us.html#managingCommittee" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Managing Committee</div>
                                    </a>
                                    <a href="about-us.html#bog" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Board of Governors</div>
                                    </a>
                                    <a href="about-us.html#advisoryBoard" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Academic Advisory Council</div>
                                    </a>
                                    <a href="about-us.html#visionMission" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Vision Mission</div>
                                    </a>
                                </div>
                                <div class="col-md-3"
                                    style="padding:0;margin-top:3vh;font-size:1vw;margin-left:1.4vw;text-align:left;width:18%;">
                                    <a href="about-us.html#foundersMessage" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Founder's Message</div>
                                    </a>
                                    <a href="about-us.html#ceosMessage" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">CEO's Message</div>
                                    </a>
                                    <a href="about-us.html#directorsMessage" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Director's Message</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div id="programsMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="background-color:white;height:34vh; width:102vh; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh" src="images/menuImages/Programmes.webp"
                                        alt="chetanas programmes">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;width:27%;margin-top:3vh;font-size:1vw;margin-left:1.6vw;">
                                    <a id="pgdmLink" href="programmes.html#pgdm" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">PGDM</div>
                                    </a>
                                    <a id="marketingLink" href="programmes.html#pgdmMarketing" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">PGDM-MKTG</div>
                                    </a>
                                    <!---->
                                    <a id="retailLink" href="programmes.html#pgdmRetail" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">PGDM-Retail</div>
                                    </a>
                                </div>
                                <div class="col-md-3"
                                    style="margin-top:3vh;font-size:1vw;margin-left:1vw;text-align:left;width:18%;">
                                    <a href="" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div id="facultyMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="background-color:white;height:34vh; width:102vh; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh" src="images/menuImages/Faculty_&_Research.webp"
                                        alt="chetanas faculty research">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;width:32%;margin-top:3vh;font-size:1vw;margin-left:1.6vw;">
                                    <a id="coreFacultyLink" href="faculty-research.html#coreFaculty" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Core Faculty</div>
                                    </a>
                                    <a id="visitingFacultyLink" href="faculty-research.html#visitingFaculty"
                                        style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Visiting Faculty</div>
                                    </a>
                                    <a id="guestLectureLink" href="faculty-research.html#guestLecture" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Guest Lectures</div>
                                    </a>
                                    <a id="researchJournalsLink" href="#" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Research Journals</div>
                                    </a>
                                    <div id="researchJournalsSubmenu" style="display:none;margin-left:7%;">
                                        <a href="PDFs/CIMR-VII-10.pdf" target="_blank" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Volume VII, Issue 10</div>
                                        </a>
                                        <a href="PDFs/CIMR-VIII-11.pdf" target="_blank" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Volume VIII, Issue 11</div>
                                        </a>
                                        <a href="PDFs/CIMR-IX-12.pdf" target="_blank" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Volume IX, Issue 12</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3"
                                    style="margin-top:3vh;font-size:1vw;margin-left:1vw;text-align:left;width:18%;">
                                    <a href="" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                    <a href="" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div id="corporateMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="background-color:white;height:34vh; width:102vh; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh" src="images/menuImages/Corporate_Connect.webp"
                                        alt="chetanas corporate connect">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;width:28%;margin-top:3vh;border-right:1px #FFCB00 solid; font-size:1vw;margin-left:1.6vw;">
                                    <a href="corporate-connect.html#placement" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Placement Cell</div>
                                    </a>
                                    <a href="PDFs/Executive Placement Report.pdf" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Executive Placement Report</div>
                                    </a>
                                    <a href="#" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Summer Placement Report</div>
                                    </a>
                                    <a href="corporate-connect.html#listOfRecruiters" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">List of Recruiters</div>
                                    </a>
                                    <a href="PDFs/Placement Brochure.pdf" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Placement Brochure</div>
                                    </a>
                                </div>
                                <div class="col-md-3"
                                    style="margin-top:3vh;font-size:1vw;margin-left:1vw;text-align:left;width:18%;">
                                    <a href="" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">MDP</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div id="chetanasMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="background-color:white;height:34vh; width:102vh; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh" src="images/menuImages/Life@Chetan's.webp"
                                        alt="life at chetanas">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;width:27%;margin-top:3vh;border-right:1px #FFCB00 solid; font-size:1vw;margin-left:1.6vw;">
                                    <a href="life-at-chetanas.html#innovativePedogogy" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Innovative Pedogogy</div>
                                    </a>
                                    <a href="life-at-chetanas.html#eventsForumn" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Events & Forums</div>
                                    </a>
                                    <a href="life-at-chetanas.html#internationalCollaboration" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">International Collaboration
                                        </div>
                                    </a>
                                    <a href="life-at-chetanas.html#internationalConference" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">International Conference</div>
                                    </a>
                                    <a href="life-at-chetanas.html#CSRActivities" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">CSR Activities</div>
                                    </a>
                                </div>
                                <div class="col-md-3"
                                    style="margin-top:3vh;font-size:1vw;margin-left:0.4vw;text-align:left;width:17%;">
                                    <a href="life-at-chetanas.html#industrialVisit" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Industrial Visit</div>
                                    </a>
                                </div>
                            </div>
                            <!--<div style="background-color:white;height:34vh; width:112%; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                    <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh"src="images/Life @ Chetan's.webp">
                                    </div>
                                    <div class="col-md-3" style="text-align:left;width:28%;margin-top:3vh;border-right:1px #FFCB00 solid; font-size:1vw;margin-left:2vw;">
                                    <a href="" style="z-index:4"><div style="padding:0 0 0 0;line-height:3vh;">Innovative Pedogogy</div></a>
                                    <a href="" style="z-index:4"><div style="padding:1vh 0 0 0;line-height:3vh;">Events & Forums
                                    </div></a>
                                    <a href="" style="z-index:4"><div style="padding:1vh 0 0 0;line-height:3vh;">International Collaboration
                                    </div></a>
                                    <a href="" style="z-index:4"><div style="padding:1vh 0 0 0;line-height:3vh;">International Conference</div></a>
                                    <a href="" style="z-index:4"><div style="padding:1vh 0 0 0;line-height:3vh;">CSR Activities</div></a>
                                    </div>
                                    <div class="col-md-3" style="margin-top:3vh;font-size:1vw;margin-left:1vw;text-align:left;width:18%;">
                                    <a href="foundersmessage.html" style="z-index:4"><div style="padding:0 0 0 0;line-height:3vh;">Industrial Visit</div></a>
                                    
                                    </div>
                                    </div>-->
                        </div>
                        <!-- 6 -->
                        <div id="testimonialsMenu"
                            style="display:none;height:34vh;z-index:3;padding:0;position:fixed;z-index:12;">
                            <div
                                style="height:34vh; width:102vh; margin-top:0vh;margin-left:0vh;background-color:rgb(255,255,255,0.9);">
                                <div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                                    <img style="width:42vh" src="images/menuImages/Testimonials.webp"
                                        alt="chetanas testimonials">
                                </div>
                                <div class="col-md-3"
                                    style="text-align:left;width:27%;margin-top:3vh;font-size:1vw;margin-left:1.6vw;">
                                    <a href="testimonials.html#industrialTestimonials" style="z-index:4">
                                        <div style="padding:0 0 0 0;line-height:3vh;">Industry</div>
                                    </a>

                                    <a href="testimonials.html#studentsTestimonials" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Students</div>
                                    </a>

                                </div>
                                <div class="col-md-3" style="margin-top:3vh;font-size:1vw;text-align:left;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
            </div>
            <!--style="display:none;margin-top:17vh;margin-left:17vw;width:0vh;height:20vh;z-index:3;padding:0;position:fixed;z-index:12;background-color:rgb(255,255,255,0.9);border:1px solid red;">
                    <div style="height:36vh; width:110vh; margin-top:0vh;margin-bottom:0;margin-left:-11vh;background-color:rgb(255,255,255,0.9);">
                    								
                    		<div class="col-md-5" style="margin-top:3vh;margin-left:2vh;">
                    			<img style="width:45vh"src="images/About Us.webp">
                    		</div>
                    		<div class="col-md-3" style="margin-top:3vh;margin-left:1vw;border-right:1px #FFCB00 solid; font-size:1vw;">
                    			<a href="" style="z-index:4"><div style="padding:0 0 0 0">About CIMR/Timeline</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Managing Committee</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Advisory Board</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Vision</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Mission</div></a>
                    		</div>
                    		<div class="col-md-3" style="margin-top:3vh;font-size:1vw;margin-left:2vw;">
                    			<a href="foundersmessage.html" style="z-index:4"><div style="padding:0 0 0 0">Founder's Message</div></a>
                    			<a href="ceomessage.html" style="z-index:4"><div style="padding:1vh 0 0 0">CEO's Message</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Director's Message</div></a>
                    			<a href="" style="z-index:4"><div style="padding:1vh 0 0 0">Placement Head</div></a>
                    		</div>
                    
                    
                    </div>
                    
                    </div>-->

        </div>
    </div>
    <div class="container-fluid mobileMenuBar" style="">
        <div class="container-fluid col-md-12" style="padding:2%;">
            <div class="navbar-default"
                style="float:left;width:10%;padding-left:1%;padding-right:1%;background-color:white;height:60%;">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    style="margin:0;padding:0;background-color:#f8f8f8;width:90%;">
                    <span class="sr-only" style="width:100%;"></span>
                    <span class="icon-bar" style="width:100%;background-color:#FFCB00;"></span>
                    <span class="icon-bar" style="width:100%;background-color:#FFCB00;"></span>
                    <span class="icon-bar" style="width:100%;background-color:#FFCB00;"></span>
                    <span class="icon-bar" style="width:100%;background-color:#FFCB00;"></span>
                </button>
                <div style="margin-left:5%;width:100%;font-size:75%;text-align:center;"> Menu </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"></ul>
                    <ul class="nav navbar-nav navbar-right"
                        style="position:absolute;z-index:4;padding:2%;background-color:white;">
                        <li>
                            <p style="height:40%;"><a id="homeLinkMobile" href="index.html"> HOME </a></p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="aboutLinkMobile"> ABOUT US </a>
                            <div id="aboutMenuMobile"
                                style="display:none;height:34vh;z-index:3;padding:0;position:relative;z-index:12;">
                             <div
                                    style="height:34vh; margin-top:0vh;margin-bottom:0;margin-left:0vh;background-color:white;opacity:0.9;">
                                    <div class="col-md-3"
                                        style="text-align:left;margin-top:3vh;margin-left:1.4vw;padding-right:0vh;">
                                        <a href="about-us.html#aboutCIMR" style="z-index:4">
                                            <div style="padding:0 0 0 0;line-height:3vh;">CIMR Legacy</div>
                                        </a>
                                        <a href="about-us.html#managingCommittee" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Managing Committee</div>
                                        </a>
                                        <a href="about-us.html#bog" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Board of Governors
                                            </div>
                                        </a>
                                        <a href="about-us.html#advisoryBoard" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Advisory Board</div>
                                        </a>
                                        <a href="about-us.html#visionMission" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Vision Mission</div>
                                        </a>
                                        <a href="about-us.html#foundersMessage" style="z-index:4">
                                            <div style="padding:0 0 0 0;line-height:3vh;">Founder's Message</div>
                                        </a>
                                        <a href="about-us.html#ceosMessage" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">CEO's Message</div>
                                        </a>
                                        <a href="about-us.html#directorsMessage" style="z-index:4">
                                            <div style="padding:1vh 0 0 0;line-height:3vh;">Director's Message</div>
                                        </a>
                                    </div>
                                    <div class="col-md-3"
                                        style="padding:0;margin-top:3vh;margin-left:1.4vw;text-align:left;width:18%;">
                                    </div>
                                </div>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="programmesLinkMobile"> PROGRAMMES </a>
                            <div id="programmesMenuMobile" class="col-md-3"
                                style="display:none;text-align:left;margin-top:3vh;margin-left:1.6vw;">
                                <a id="pgdmLink" href="programmes.html#pgdm" style="z-index:4">
                                    <div style="padding:0 0 0 0;line-height:3vh;">PGDM</div>
                                </a>
                                <a id="marketingLink" href="programmes.html#pgdmMarketing" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">PGDM-MKTG</div>
                                </a>
                                <!---->
                                <a id="retailLink" href="programmes.html#pgdmRetail" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">PGDM-Retail</div>
                                </a>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="facultyLinkMobile"> FACULTY & RESEARCH </a>
                            <div id="facultyMenuMobile" class="col-md-3"
                                style="display:none;text-align:left;margin-top:3vh;margin-left:1.6vw;">
                                <a id="coreFacultyLink" href="faculty-research.html#coreFaculty" style="z-index:4">
                                    <div style="padding:0 0 0 0;line-height:3vh;">Core Faculty</div>
                                </a>
                                <a id="visitingFacultyLink" href="faculty-research.html#visitingFaculty"
                                    style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Visiting Faculty</div>
                                </a>
                                <a id="guestLectureLink" href="faculty-research.html#guestLecture" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Guest Lectures</div>
                                </a>
                                <a id="researchJournalsLink" href="#" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Research Journals</div>
                                </a>
                                <div id="researchJournalsSubmenu" style="display:none;margin-left:7%;">
                                    <a href="PDFs/CIMR-VII-10.pdf" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Volume VII, Issue 10</div>
                                    </a>
                                    <a href="PDFs/CIMR-VIII-11.pdf" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Volume VIII, Issue 11</div>
                                    </a>
                                    <a href="PDFs/CIMR-IX-12.pdf" target="_blank" style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Volume IX, Issue 12</div>
                                    </a>
                                    <a href="PDFs/12. a Research papers published.pdf" target="_blank"
                                        style="z-index:4">
                                        <div style="padding:1vh 0 0 0;line-height:3vh;">Research Papers Published
                                        </div>
                                    </a>
                                </div>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="corporateLinkMobile"> CORPORATE CONNECT </a>
                            <div id="corporateMenuMobile" class="col-md-3"
                                style="text-align:left;margin-top:3vh;margin-left:1.6vw;display:none;">
                                <a href="corporate-connect.html#placement" style="z-index:4">
                                    <div style="padding:0 0 0 0;line-height:3vh;">Placement Cell</div>
                                </a>
                                <a href="PDFs/Executive Placement Report2017-19.pdf" target="_blank" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Executive Placement Report</div>
                                </a>
                                <a href="#" target="_blank" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Summer Placement Report</div>
                                </a>
                                <a href="PDFs/pgdmPlacementBrochure.pdf" target="_blank" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Placement Brochure</div>
                                </a>
                                <a href="corporate-connect.html#listOfRecruiters" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">List of Recruiters</div>
                                </a>
                                <a href="" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">MDP</div>
                                </a>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="lifeAtChetanasLinkMobile"> LIFE @ CHETANA'S</a>
                            <div id="chetanasMenuMobile" class="col-md-3"
                                style="display:none;text-align:left;margin-top:3vh;margin-left:1.6vw;">
                                <a href="life-at-chetanas.html#innovativePedogogy" style="z-index:4">
                                    <div style="padding:0 0 0 0;line-height:3vh;">Innovative Pedogogy</div>
                                </a>
                                <a href="life-at-chetanas.html#eventsForumn" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Events & Forums
                                    </div>
                                </a>
                                <a href="life-at-chetanas.html#internationalCollaboration" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">International Collaboration
                                    </div>
                                </a>
                                <a href="life-at-chetanas.html#internationalConference" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">International Conference</div>
                                </a>
                                <a href="life-at-chetanas.html#CSRActivities" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">CSR Activities</div>
                                </a>
                                <a href="life-at-chetanas.html#industrialVisit" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Industrial Visit</div>
                                </a>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p style="height:40%;"><a id="testimonialsLinkMobile"> TESTIMONIALS </a></p>
                            <div id="testimonialsMenuMobile" class="col-md-3"
                                style="display:none;text-align:left;margin-top:3vh;margin-left:1.6vw;">
                                <a href="testimonials.html#industrialTestimonials" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Industry</div>
                                </a>
                                <a href="testimonials.html#studentsTestimonials" style="z-index:4">
                                    <div style="padding:1vh 0 0 0;line-height:3vh;">Students</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="float:left;width:50%;">
                <img src="images/Chetana_Logo_May20.webp" style="width:110%;margin-left:15%;" alt="chetanas logo">
            </div>
            <div class="" style="margin-left:65%;padding-right:2%;padding:0;">
                <div style="line-height:4vh;text-align:right;padding-right:2%;">
                    <a href="https://m.facebook.com/cimr.bandra" id="facebookLink" class="facebookLink"
                        target="_blank"><i class="fa fa-facebook" id="fbIcon"
                            style="background-color:#FFCB00;font-size:2vh;padding:1vh;padding-top:0.5vh;color:white;width:2.8vh;height:2.8vh;margin-right:0.2vh;text-align:center;text-vertical-align:middle;"></i></a>
                    <!--<a href="#" id="twitterLink"><i class="fa fa-twitter" id="twitterIcon" style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:3vh;height:3vh;margin-right:0.2vh;text-align:center;"></i></a>-->
                    <a href="https://www.linkedin.com/company/chetana's-institute-of-management-&-research"
                        id="linkdlnLink" target="_blank"><i class="fa fa-linkedin" id="linkdlnIcon"
                            style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:2.8vh;height:2.8vh;margin-right:0.2vh;text-align:center;"></i></a>
                    <a href="https://instagram.com/chetanas_institutes?igshid=3wnxsukkjqdz" id="instagramLink"
                        target="_blank"><i class="fa fa-instagram" id="instagramIcon"
                            style="background-color:#FFCB00;font-size: 2vh;padding-left:0vh;padding-top:0.5vh;color:white;width:2.8vh;height:2.8vh;margin-right:0.2vh;text-align:center;"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid col-md-12"
            style="position:relative;z-index:3;padding:2%;padding-right:0.5%;padding-left:1%;padding-top:3%;">
            <div style="float:left;width:2%;">
                <p style="font-size:1.4vw;">&nbsp;
                </p>
            </div>
            <div style="float:left;width:19%;">
                <p style="" class="menuFont"><a id="infraLinkMobile"> INFRASTRUCTURE </a>
                <div id="infraMenuMobile"
                    style="text-align:left;display:none;background-color:white;position:absolute;">
                    <div class="col-md-12" style="margin:0; padding-left:6%;">
                        <a href="infrastructure.html#auditorium">
                            <div id="submenu" style="margin-top:2vh;line-height:3vh;">Auditorium</div>
                        </a>
                        <a href="infrastructure.html#ITFacilities">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">IT Facilities</div>
                        </a>
                        <a href="infrastructure.html#library">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Library</div>
                        </a>
                        <a href="infrastructure.html#classrooms">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Classrooms</div>
                        </a>
                        <a href="infrastructure.html#sports">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Sports</div>
                        </a>
                        <a href="infrastructure.html#cafeteria">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Cafeteria</div>
                        </a>
                    </div>
                </div>
                </p>
            </div>
            <div style="float:left;width:13%;">
                <p style="" class="menuFont"><a id="admissionLinkMobile"> ADMISSIONS</a>
                <div id="admissionMenuMobile"
                    style="text-align:left;display:none;background-color:white;position:absolute;">
                    <div class="col-md-12" style="margin:0; padding-left:6%;">
                        <a href="admissions.php#eligibility">
                            <div id="submenu" style="margin-top:2vh;line-height:3vh;">Eligibility</div>
                        </a>
                        <a href="admissions.php#selectionProcess">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Selection Process</div>
                        </a>
                        <a href="admissions.php#form">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Form</div>
                        </a>
                        <a href="admissions.php#enquiry">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Enquiry</div>
                        </a>
                        <a href="admissions.php#fees">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Fees</div>
                        </a>
                    </div>
                </div>
                </p>
            </div>
            <div style="float:left;width:19%;">
                <p style="" class="menuFont"><a id="alumniLinkMobile"> ALUMNI NETWORK</a>
                <div id="alumniMenuMobile"
                    style="text-align:left;display:none;background-color:white;position:absolute;">
                    <div class="col-md-12" style="margin:0; padding-left:6%;">
                        <a href="alumni-network.html#CAN">
                            <div id="submenu" style="margin-top:2vh;line-height:3vh;">CAN</div>
                        </a>
                        <a href="alumni-network.html#newsLetter">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Newsletter</div>
                        </a>
                        <a href="alumni-network.html#alumniPortal">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Alumni Portal</div>
                        </a>
                        <a href="alumni-network.html#alumniCellContact">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Alumni Cell Contact</div>
                        </a>
                    </div>
                </div>
                </p>
            </div>
            <div style="float:left;width:15%;">
                <p style="" class="menuFont"><a id="disclosuresLinkMobile"> DISCLOSURES</a>
                <div id="disclosuresMenuMobile"
                    style="text-align:left;display:none;background-color:white;width:150%;position:absolute;">
                    <div class="col-md-12" style="margin:0; padding-left:1%;">
                        <a href="PDFs/Mandatory Disclosures.pdf" target="_blank">
                            <div id="submenu" style="margin-top:2vh;line-height:3vh;">Mandatory Disclosures</div>
                        </a>
                        <a href="disclosures.html#AICTEApprovals">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">AICTE Approvals</div>
                        </a>
                    </div>
                    <div class="col-md-12" style="margin:0; padding-left:1%;">
                        <!--<a id="careersLink" href="contact-us.html#careers"><div id="submenu" style="margin-top:2vh;margin-left:2vh;line-height:3vh;">Careers</div></a>-->
                        <!--<a href="contact-us.html#address"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Address</div></a>
                                <a href="contact-us.html#phoneNo"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Phone no.</div></a>
                                <a href="contact-us.html#socialMediaLinks"><div id="submenu" style="margin-top:1vh;margin-left:2vh;line-height:3vh;">Social Media Links</div></a>-->
                        <a id="grievanceLinkMobile" href="disclosures.html#grievanceRedressalCommittee">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Grievance</div>
                        </a>
                        <div id="grievanceSubmenuMobile" style="display:none;margin-left:3%;">
                            <a href="disclosures.html#grievanceRedressalCommittee">
                                <div id="submenu" style="margin-top:1vh;line-height:3vh;">Grievances Committee</div>
                            </a>
                            <a href="disclosures.html#grievanceForm">
                                <div id="submenu" style="margin-top:1vh;line-height:3vh;">Grievance Form</div>
                            </a>
                        </div>
                        <a id="antiRaggingCommitteeLink" href="disclosures.html#antiRaggingSquad">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Anti Ragging Squad</div>
                        </a>
                        <a id="antiRaggingCommitteeLink" href="disclosures.html#antiRaggingCommittee">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Anti Ragging Committee</div>
                        </a>
                        <a id="studentCommitteeLink" href="disclosures.html#studentCommittee">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Student Committee</div>
                        </a>
                        <a id="womensDevelopmentLink" href="disclosures.html#womensDevelopment">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Women's Development</div>
                        </a>
                        <a id="educationNoticeLink" href="PDFs/Educational Verification Notice.pdf" target="_blank">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Education Verification Notice
                            </div>
                        </a>
                    </div>
                </div>
                </p>
            </div>
            <div style="float:left;width:13%;">
                <p style="" class="menuFont"><a id="newsroomLinkMobile"> NEWSROOM</a>
                <div id="newsroomMenuMobile"
                    style="text-align:left;display:none;background-color:white;position:absolute;">
                    <div class="col-md-12" style="margin:0; padding-left:6%;">
                        <a href="newsroom.html#blogs">
                            <div id="submenu" style="margin-top:2vh;line-height:3vh;">Blogs</div>
                        </a>
                        <a href="newsroom.html#videos">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Videos</div>
                        </a>
                        <a href="newsroom.html#achievementsAwards">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Achievements & Awards</div>
                        </a>
                        <a href="newsroom.html#campusReport">
                            <div id="submenu" style="margin-top:1vh;line-height:3vh;">Campus Report</div>
                        </a>
                    </div>
                </div>
                </p>
            </div>
            <div style="float:left;width:16%;">
                <p style="" class="menuFont"><a id="contactusLinkMobile" href="contact-us.html"> CONTACT US</a>
                </p>
            </div>
            <div style="float:left;width:16%;">
                <p style="" class="menuFont"><a id="careersLinkMobile" href="careers.html">CAREERS</a>
                </p>
            </div>
        </div>
    </div> <!-- end of Mobile Menu Bar -->

    <!-- Modal1 start-->
    <div class="modal" id="admissionsNoticeModal" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"
                style="margin-top:15%;border:1px solid #FFCB00;position:absolute;z-index:1060;width:98.1%;">



                <div class="container-fluid  modal-body" style="">
                    <button type="button" class="close" data-dismiss="modal"
                        style="font-weight:bold;font-size:30px;">&times;</button>
                    <br />

                    <div class="yellowBoxTitle"
                        style="width:100%;margin:0;padding-left:4%;padding-right:4%;text-align:justify;justify-content:auto;">
                        <!--<p style="font-weight:bold;" class="desktopFontBig"> Students are advised not to believe in fake news being spread through WhatsApp Instagram, Facebook, etc. </p>-->
                        <p style="font-weight:bold;text-transform:uppercase;" class="desktopFontBig"> For all concerned
                            : </p>
                        <p style="" class="desktopFontBig">For all matters related to admissions, fee payment dates,
                            classes, exams, entrance tests, etc. you are advised to rely only on our official institute
                            website and social media pages. </p>
                    </div>

                    <br />
                    <br />

                    <!--<p class="desktopFontBigModal" style="text-align:justify;justify-content:space-evenly;padding-left:5.8%;padding-right:5.8%;">For all matters related to classes, exams, entrance tests, admissions, fee payment dates, request you to check announcements, instructions, and circulars posted on our official websites.
                             </p>-->
                </div>
            </div>

        </div>
    </div>
    <!-- Modal1 end -->

    <!-- Modal2 start-->
    <div class="modal" id="surveyFormModal" role="dialog" data-keyboard="false" data-backdrop="static">
        <form method="POST" id="insert_form">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="z-index:1040 ! important;position:absolute;">

                    <div class="modal-header" style="text-align:center;border-bottom:0.5px solid #FFCB00;">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        <h3 class="modal-title" style="color:red;"><b>Admissions 2023</b></h3>
                    </div>

                    <div class="modal-body" style="border-bottom:0.5px solid #FFCB00;">
                        <h3>Kindly fill the following form:</h3>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="numeric" name="mobile" class="form-control" id="mobile"
                                pattern="[1-9]{1}[0-9]{9}" title="Please enter 10 digit mobile no.">
                        </div>

                        <div class="form-group">
                            <label for="emailID">Email ID:</label>
                            <input type="email" name="emailID" class="form-control" id="emailID">
                        </div>

                        <div class="form-group">
                            <label for="course">Course:</label>
                            <select id="course" name="course">

                                <option value=""></option>
                                <option value="PGDM">PGDM</option>
                                <option value="PGDM Marketing">PGDM Marketing</option>
                                <option value="PGDM Retail">PGDM Retail</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <label for="qualification">How did you come to know about Chetana's Institute?:</label>

                            <select id="knowAbout" name="knowAbout">
                                <option value=""></option>
                                <option value="Newspaper Ads">Newspaper Ads</option>

                                <option value="MBA Universe">MBA Universe</option>
                                <option value="Shiksha.com">Shiksha.com</option>
                                <option value="Offline Campaign">Offline Campaign</option>

                                <option value="Facebook & Google Ads">Facebook & Google Ads</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Whatsapp Marketing">Whatsapp Marketing</option>
                                <option value="Email Marketing">Email Marketing</option>
                                <option value="SMS Marketing">SMS Marketing</option>
                                <option value="Word of Mouth">Word of Mouth</option>
                                <option value="College Duniya">collegedunia.com </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="anyQuery">Query (if any):</label>
                            <textarea name="anyQuery" class="form-control" id="anyQuery"></textarea>
                            <!-- <input type="text" name="anyQuery" class="form-control" id="anyQuery"> -->
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit" id="surveySubmit" name="surveySubmit"
                            class="btn btn-danger btn-lg btn-block">Submit</button>
                        <!-- style="border:1px solid #FFCB00;background-color:rgb(237,237,237);font-weight:bold;" -->
                    </div>

                </div>



            </div>
    </div>
    </form>
    </div>
    <!-- Modal end-->

    <div class="container-fluid" style="height:0.3vh;background-color:#c7c7c9">
    </div>
    </div>
    <div class="container-fluid" style="left:0;right:0;margin:0;padding:0;">
        <!-- left side bar -->
        <div class="col-md-1 heightClassNew" style="">
        </div>
        <!-- middle bar - start -->
        <div class="col-md-10 heightClassNew" style="margin:0;padding:0;">
            <div class="col-md-12" style="height:1.6vh;margin:0;padding:0">
            </div>
            <!-- top white padding -->
            <div class="col-md-12 headerDesktop" style="height:4vh;margin:0;padding:0">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="height:16vh;padding:0;margin:0;text-align:center;line-height:16vh">
                    <div style="border-bottom:1.8px #FFCB00 solid;width:28vh;display:inline-block"></div>
                    <h1 style="margin:0 1%;padding:0;letter-spacing:1px;display:inline-block;vertical-align: middle;">
                        PGDM ADMISSIONS 2023
                    </h1>
                    <div style="border-bottom:1.8px #FFCB00 solid;width:28vh;display:inline-block"></div>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="col-md-12 headerMobile" style="height:4vh;margin:0;padding:0">
                <div class="" style="text-align:center;">
                    <div class=""
                        style="float:left;width:20%;margin-left:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                    </div>
                    <div class="" style="float:left;width:45%;height:6%;text-align:center;padding-top:0;margin-top:0%;">
                        <h5 style="margin:0;padding:0"><b
                                style="letter-spacing: 2px;font-weight:normal;color:#000000;">PGDM ADMISSIONS 2023</b>
                        </h5>
                    </div>
                    <div class=""
                        style="float:left;width:20%;margin-right:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                    </div>
                </div>
            </div>
            <!-- Ori -->
            <!--<div class="col-md-12" style="height:4vh;margin:0;padding:0;margin-top:-2vh;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="text-align:center;">
                    	<div class="col-md-3" style="height:1.5vh;border-bottom:1.8px #FFCB00 solid;"></div>
                    	<div class="col-md-5" style="height:4vh;line-height:3vh;text-align:center;padding-top:0;margin-top:-0.5vh;width:50vh;">
                    		<h4 style="margin:0;padding:0"><b style="letter-spacing: 2px;font-size:3.4vh;font-weight:normal;color:#000000;">PGDM ADMISSIONS 2019</b></h4>
                    		
                    	</div>
                    	<div class="col-md-3" style="margin-left:1vh;height:1.5vh;border-bottom:1.8px #FFCB00 solid;"></div>
                    </div>
                    <div class="col-md-2"></div>
                              </div>-->
        </div>
        <!-- middle bar - end -->
        <!-- right side bar -->
        <div class="col-md-1 heightClassNew" style="">
        </div>
    </div>
    <div class="container-fluid" style="margin:0;padding:0;">
        <div class="col-md-12 container-fluid bannerClass" style="">
            <img src="images/admissions/ADMISSIONS_Top_Banner.webp" class="bannerImageClass" style=""
                alt="chetanas admissions banner">
        </div>
    </div>
    <div class="container-fluid" style="left:0;right:0;">
        <!-- left side bar -->
        <div class="col-md-1" style="">
        </div>
        <!-- middle bar - start -->
        <div class="col-md-10 container-fluid" style="margin:0;padding:0;margin-bottom:8vh;">
            <div class="col-md-12" style="height:2vh;margin:0;padding:0">
            </div>
            <!-- top white padding -->
            <!--<div class="col-md-12 container-fluid" style="height:4vh;margin:0;padding:0">
                    <div style="width:50vw;margin: 0 auto; padding-top:0vh;font-size:1.1vw;font-style:italic;text-align:center;">
                       <p> With state of the art equipment and spaces designed to encourage creative and innovative thinking, <br/>
                    Chetana's Institute of Management and Research is fully equipped to help students to unlock their full potential</p>
                    </div>
                              </div>-->
            <div class="col-md-12 container-fluid" style="margin:0;padding:0;margin-top:4vh;">
                <div class="col-md-12 container-fluid">
                    <div style="font-weight: bold; font-size: large; background-color: #FFCB00; margin:auto;">
                        <marquee behavior="scroll" direction="left">Ranked 4 amongst the Top 10 B Schools in Mumbai and Ranked 22 amongst the top private B Schools in India *
                        </marquee>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12 container-fluid" style="margin:0;padding:0;">
                        <div class="text-right specialTextFont" style="">* Times of India Ranking April 2023
                        </div>
                        <div class="desktopFont" style=""> <span style="font-weight:bold;">Email: </span><span
                                style="color:#F01A24;">admissions@cimr.in </span></div>

                    </div>

                    <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                        <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;">CIMR ADMISSION PROCESS AT A GLANCE</h4>-->
                    </div>


                    <div id="eligibility" class="col-md-12 container-fluid" id="">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 headerYellowBox" style="">
                            <h3 class="yellowBoxTitle" style="">ELIGIBILITY CRITERIA</h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <p>Bachelors degree with 50% (45% for Reserved Category) marks in aggregate from a
                                recognised University.
                                <!--completed by June 2020.-->
                            </p>
                            <p>Candidates appearing for the Final Year Examination of any Bachelor's Degree of minimum
                                three
                                years duration can also apply subject to fulfilment of eligibility criteria of
                                admission.
                                Candidates Appearing/Appeared and secured non-zero positive score or marks or equivalent
                                score in any one of the equivalent examination such as CET- MAH-MBA/MMS / CAT / MAT /
                                XAT /
                                ATMA/ CMAT valid for the year 2023.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                        <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;">IMPORTANT DATES</h4>-->
                    </div>
                    <div class="col-md-12 container-fluid" id="">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 headerYellowBox" style="">
                            <h3 class="yellowBoxTitle" style="">IMPORTANT DATES</h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <table class="table table-bordered table-sm" style="width: 50%;">
                                <tr>
                                <td style="text-align: center; font-weight: bold;">
                                        Application commences:
                                    </td>
                                    <td>
                                        17<sup>th</sup> March, 2023
                                    </td>
                                </tr>
                                  <tr>
                                    <td style="text-align: center; font-weight: bold;">
                                       Last date of submission:
                                    </td>
                                    <td>
                                        30<sup>th</sup> June, 2023<br>
                                    </td>
                                </tr>

                                <!-- <tr>
                                    <td style="text-align: center; font-weight: bold; color: #F01A24; font-size: 2rem;" colspan="2">
                                        <span class="blink_me" >For admission queries please contact on:</span> <br> 022 62157800/01/02/03
                                    </td>
                                    <td>
                                        18<sup>th</sup> September, 2023
                                    </td>
                                </tr> -->
                              
                            </table>
                        </div>


                    </div>
                </div>
                <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                    <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;"><span style="font-weight: bold;"> 4</span> STEP ADMISSION PROCESS</h4>-->
                </div>
                <div id="selectionProcess" class="col-md-12 container-fluid" id="">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 headerYellowBox" style="">
                        <h3 class="yellowBoxTitle" style="">ADMISSION PROCESS</h3>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="col-md-12 desktopFont">
                    <h4>CIMR Admission Process at a Glance</h4>
                    <img src="./images/admissions/SelectionProcess.webp" alt="Chetana's Selection process"
                        class="admissionImageClass">
                </div>
                <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                    <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;"><span style="font-weight: bold;"> 4</span> STEP ADMISSION PROCESS</h4>-->
                </div>
                <div id="form" class="col-md-12 container-fluid" style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                    <div class="col-md-12 desktopFont">
                        <p style="font-weight: bold;">Step-1: Apply Online on CIMR website</p>
                        <p>
                            <a href="https://admissions.cimr.in" target="_BLANK">
                                <button class="downloadButton"> Apply Now!</button>

                            </a>
                        </p>

                        <p>Admissions 2023 Prospectus</p>
                        <p><a href="./PDFs/CIMRProspectus2023.pdf" download="CIMR Prospectus 2023">
                                <button class="downloadButton">Download Prospectus</button>
                            </a>
                        </p>



                        <p>
                            Candidates desirous of seeking admission in CIMR Mumbai's leading private B-school, must
                            apply online and pay the application fees on our website within the specified registration
                            window.
                        </p>
                        <p>
                            Kindly refer <a href="#faqs">FAQs</a> for information.
                        </p>
                        <p>
                            Applicants would be required to upload documents before payment of Application Fees of ₹ 2,000/-
                        </p>
                        <p>
                            Documents to be uploaded:
                            <br>
                            Applicants need to submit the scanned copy of the following documents (self-attested) in PDF
                            format (each document
                            size should not exceed 2 MB)
                        <ol>
                            <li>
                                Academic documents (SSC, HSC, Semester wise / Year wise UG Mark sheets up to semesters
                                cleared) *
                                <span style="color: red;">
                                    All merged into one PDF/ Students are required to upload one PDF file (not exceeding
                                    2MB) consisting of mark
                                    sheets and passing certificates.
                                </span>
                            </li>
                            <li>
                                Entrance Exam Mark sheet. <br>
                                CIMR accepts exam scores of CET- MAH-MBA/MMS / CAT / MAT / XAT / ATMA/ CMAT valid for
                                the year 2023 for its MBA admission process.
                            </li>
                            <li>
                                Work Experience Certificate Or last month salary slip (If more than 12 months
                                Experience)
                            </li>
                            <li>
                                Proof of Nationality & Date of Birth (Birth Certificate or Passport or School or College
                                leaving Certificate ) *
                            </li>
                            <li>
                                Aadhar Card *
                            </li>
                            <li>
                                Certificates related to Sports (National / State level) / Extra Curricular Activities.
                                (If any)
                            </li>
                        </ol>


                        </p>
                        <p>
                            <!--<a href="https://admission.onfees.com/admissionLogin?instituteId=386&formPolicyId=112&formType=preReg"
                            target="_BLANK">
                            <img src="./images/admissions/apply-now.webp" alt="chetanas admissions apply now image">
                            </a>-->
                    </div>
                </div>
                <br>
                <div class="col-md-12 container-fluid"
                    style="margin:0;padding:0;text-align:justify;text-justify:auto;margin-top:1%;">
                    <div class="col-md-12 desktopFont">
                        <p style="font-weight: bold;">Step-2: Document Verification</p>
                        <p>All documents submitted to CIMR for admission will be verified. Only applicants with complete
                            set of the above
                            documents (self-attested) will be eligible for CDPI process for PGDM admissions.
                        </p>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <p style="font-weight: bold;">Step-3: Selection of CDPI Slot</p>
                            <p>Details of the process of booking slot (date and time) for the Online Comprehensive
                                Discussion & Personal Interview will be updated on the
                                website. Applicants will also receive an email on the on the details for the same. <br>
                                Candidates who remain absent for the CDPI process shall be treated as non-eligible
                                candidates for PGDM admission.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <p style="font-weight: bold;">Step-4: Appear for the Online Comprehensive Discussion &
                                Personal Interview</p>
                            <p>It is mandatory for the eligible candidate to attend the Online Comprehensive Discussion
                                & Personal Interview process conducted by the institute
                                without fail for the admission to the course.
                            </p>
                            <p>
                                During the Online Comprehensive Discussion & Personal Interview, applicants would be
                                evaluated based on their clarity on Career Goals,
                                Communication skills, Personality & General Bearing, Attitude, General Awareness,
                                Balanced Thoughtful Consideration
                                of Issue and Subject Knowledge.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <p style="font-weight: bold;">Step-5: Display of Merit List</p>
                            <p>
                                On selection in PGDM Admission Process on the basis of the merit list, candidates will
                                be informed by email and
                                their names will be displayed on the Institute’s Notice Board & website.
                            </p>
                            <p>
                                Shortlisted candidates are required to pay the Programme fee on yearly basis.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="col-md-12 desktopFont">
                            <p style="font-weight: bold;">Step-6: <em> Become a Chetanaite </em></span></p>
                            <p>
                                A payment link will be sent to all selected student for payment of fees. The payment
                                details will also be
                                published on the website.
                            </p>
                            <p>
                                Students who have paid fees, are required to attend the counselling session as per the
                                schedule send by email and
                                published on CIMR’s website. During this session, after payment of fees, candidates are
                                required to bring along
                                originals of the documents mentioned above in <strong> Step 1 </strong> for verification
                                and submission.
                            </p>

                            <p>
                                Additional Documents required during counselling session:
                            <ul>
                                <li>
                                    Gap Certificate / Affidavit
                                </li>
                                <li>
                                    Anti-ragging Affidavit by student and parent (Online: <a
                                        href="https://antiragging.in/affidavit_standalone_form.php" target="_blank">
                                        Click here </a> )
                                </li>
                            </ul>


                            </p>


                        </div>
                    </div>
                </div>

                <div id="fees" class="col-md-12 container-fluid" id="">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 headerYellowBox" style="">
                        <h3 class="yellowBoxTitle" style="">FEE STRUCTURE</h3>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="col-md-12 desktopFont" style="">

                        <p>Fees for the PGDM programs for the Batch of 2023-25 are as follows :</p>
                        <table class="table table-bordered table-sm text-center" style="width: 75%;">
                            <tbody>
                                <tr style="font-weight: bold;">
                                    <td>
                                        Programme
                                    </td>
                                    <td>
                                        Intake
                                    </td>
                                    <td>
                                        First Year
                                    </td>
                                    <td>
                                        Second Year
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        PGDM
                                    </td>
                                    <td>
                                        210
                                    </td>
                                    <td>
                                        ₹ 4,15,000/-
                                    </td>
                                    <td>
                                        ₹ 4,15,000/-
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        PGDM (Marketing)
                                    </td>
                                    <td>
                                        60
                                    </td>
                                    <td>
                                        ₹ 4,15,000/-
                                    </td>
                                    <td>
                                        ₹ 4,15,000/-
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p>Library / Computer Laboratory deposit (first year only) ₹ 10,000/- (Refundable) <br>
                            </p>
                            <p class="desktopFont" style="font-weight:bold;">Fees Refund Policy.
                                <!-- <a href="/PDFs/FeeRefundPolicy.pdf" target="_BLANK" class="guest">Please refer to this notice.</a>
                        </p> -->
                            <p># Check prospectus for details on documents to be submitted at different stages by
                                candidates.
                            </p>
                        </div>
                    </div>
                </div>




                <div class="col-md-12 container-fluid" style="margin:0;padding:0;text-align:justify;text-justify:auto;">

                    <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                        <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;">FAQs</h4>-->
                    </div>
                    <div id="faqs" class="col-md-12 container-fluid" id="">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 headerYellowBox" style="">
                            <h3 class="yellowBoxTitle" style="">General FAQs</h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <!-- Accordian here-->
                    <!-- Accordian-->
                    <div class="col-md-12 container-fluid"
                        style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            1) What are the eligibility criteria for applying for PGDM program at CIMR?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The candidate must have passed a bachelor’s degree examination with
                                                minimum of 50% (45% for SC/ST candidates) in graduation from any
                                                recognized university under UGC.
                                            </li>
                                            <li>
                                                Candidate appearing for their final semester of graduation may apply.
                                                However on securing Admission he/she must be a graduate with a minimum
                                                50% marks (45% for SC/ST candidates) .
                                            </li>
                                            <li>
                                                The candidate must have appeared for any of the 6 written entrance exams
                                                for MBA viz; CAT, XAT, MHCET, CMAT, ATMA, or MAT.
                                            </li>
                                            <li>
                                                The institute does not have its own written entrance exam (aptitude
                                                test) for PGDM admissions.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            2) What programs does CIMR offer & what are the intakes?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        CIMR offers the following two programs:
                                        <ol>
                                            <li>PGDM – 210 Seats</li>
                                            <li>PGDM Marketing - 60 Seats </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            3) What differentiates the two PGDM Programs offered at CIMR?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The PGDM General program offers five specialized pathways such as
                                                Marketing, Finance, HR, Operation & IT. Students can opt for any one
                                                specialization based on their career goals.
                                            </li>
                                            <br>
                                            <li>
                                                The PGDM Marketing Offers specialized components within marketing to
                                                students who wish to specialize in the field
                                            </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            4) Is the program officially recognized under AICTE?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Yes, the program is approved by AICTE.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                            5) What is the duration of these PGDM programmes?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The PGDM programs at CIMR are two years full-time program, comprising of four
                                        semesters (2 semesters
                                        per year)
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                            6) What are the specializations being offered in PGDM?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The Specializations offered under PGDM are:
                                        <ul>
                                            <li>Marketing</li>
                                            <li>Finance</li>
                                            <li>HR</li>
                                            <li>Operations</li>
                                            <li>Systems</li>

                                        </ul>
                                        The Specializations offered under PGDM Marketing
                                        <ul>
                                            <li>Marketing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                            7) When & how can I apply for these programs?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            The application for PGDM 2023 is online. You need to fill-in the admission
                                            form, pay the application fees and apply for the PGDM programme at CIMR. You
                                            will later have the privilege of choosing your Comprehensive Discussion &
                                            Personal Interview date and time.

                                        </p>

                                        <p>
                                            Applicants can apply online from 17th March 2023. 
                                            The last date for application is 30th June, 2023.
                                        </p>


                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                            8) When will the Online Comprehensive Discussion & Personal Interview
                                            process for PGDM admission commence?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The details of the Online Comprehensive Discussion & Personal Interview will be
                                        published on our official website www.cimr.in Kindly check the website for
                                        timely updates.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                            9) How can I select my Online Comprehensive Discussion & Personal Interview
                                            date?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        You need to apply for the program online. Upon successful payment of PGDM
                                        application fee, and once you fill up your profile details completely, you can
                                        select the date & time slots at your convenience.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                            10) Can the Online Comprehensive Discussion & Personal Interview date be
                                            changed?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        No, the CDPI date once chosen cannot be changed. (However, if it is clashing
                                        with your final year Graduation exam, then contact the admission office with
                                        concerned documents as a proof of final exams. No other personal reasons will be
                                        entertained).
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                            11) Where will be the Comprehensive Discussion & Personal Interview center?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The Comprehensive Discussion & Personal Interview will be held online.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                            12) What is the application fee?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The application fee is ₹ 2,000/- inclusive of Online Comprehensive Discussion &
                                        Personal Interview fees. This fee can be paid online through Net Banking,
                                        NEFT/RTGS, Credit card/Debit card payment or depositing cash at the institute’s
                                        account office. All these details would be provided to you, as you would apply
                                        for the program online on our website.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                                            13) Is there any cut-off score/ percentile for applying to PGDM program?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        CIMR follows AICTE rules for cut-off score and hence we do not stipulate a
                                        cut-off score / percentile. Admission is granted purely on a merit basis.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                                            14) What is the last date of the form submission?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The last date of applying for the program is 30<sup>th</sup> June, 2023.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                            15) What is the admission procedure?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Selection will be based purely on merit, which will be evaluated out of 200
                                            marks as below:
                                        <table class="table table-bordered table-sm" style="width: 75%;">
                                            <tr>
                                                <td class="text-center">Admission Criteria</td>
                                                <td class="text-center">Weightage</td>
                                            </tr>
                                            <tr>
                                                <td>Entrance Test Score scaled down to</td>
                                                <td class="text-center">70 Marks</td>
                                            </tr>
                                            <tr>
                                                <td>Comprehensive Discussion & Personal Interview</td>
                                                <td class="text-center">70 Marks</td>
                                            </tr>
                                            <tr>
                                                <td>Past Academic Performance</td>
                                                <td class="text-center">30 Marks</td>
                                            </tr>
                                            <tr>
                                                <td>Sports / Extra Curricular Activities</td>
                                                <td class="text-center">20 Marks</td>
                                            </tr>
                                            <tr>
                                                <td>Work Experience</td>
                                                <td class="text-center">10 Marks</td>
                                            </tr>

                                            <tr>
                                                <td>Total</td>
                                                <td class="text-center">200 Marks</td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                                            16) What is the dress code for Online Comprehensive Discussion & Personal
                                            Interview process?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse16" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The Dress code is business formals.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                            17) What Original documents do I require during my CDPI process?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse17" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Following original documents are required during Comprehensive Discussion &
                                            Personal Interview process:
                                        <ol>
                                            <li>Written Test Score Card (CAT/XAT/CMAT/MH-CET/MAT/ATMA)</li>
                                            <li>Class Xth Mark sheet</li>
                                            <li>Class XIIth Mark sheet</li>
                                            <li>Last Year Graduation Mark Sheet (If you are applying for final year
                                                exams, provide with latest
                                                exam Mark sheet)
                                            </li>
                                            <li>Convocation Degree/ Passing Certificate / Provisional Certificate</li>
                                            <li>Work Experience Certificate as applicable.</li>
                                            <li>Extra-Curricular Activities Certificate if any (District Level, State
                                                Level, National Level etc.).
                                            </li>
                                            <li>Aadhar Card </li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">
                                            18) When will the merit list for admission be declared?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse18" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Usually, the results are declared within a week after the last date of the
                                        entire Comprehensive Discussion & Personal Interview
                                        process. The results will be available on the institute notice board as well as
                                        on website.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">
                                            19) What is the fee structure of the program?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse19" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        PGDM (General and Marketing): ₹ 8,40,000 <br>
                                        
                                        (Inclusive of Library Deposit) for a 2-year full-time program.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">
                                            20) What is the average & highest placement package?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse20" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>As per the placement records:</p>
                                        <p>
                                            The Average Salary is INR 8 Lakhs p.a. and the highest package offered
                                            to our students is INR 11 Lakhs p.a.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">
                                            21) Who are the top recruiting companies at CIMR?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse21" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Our placements partners, with whom we are proud to be associated are: </p>
                                        <p>
                                            Hindustan Unilever, Citigroup, CRISIL Limited, D E Shaw, Darashaw, HDFC,
                                            HDFC Bank, Yes Bank, ICRA Management Consulting Services Limited, ICICI
                                            Prudential Asset Management Co. Ltd, Federal Bank, Capital First, Bank of
                                            America, Essel group, Zomato, etc. to name a few.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">
                                            22) Does CIMR have tie-ups with banks for education loans?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse22" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Based on CIMR’s reputation, students secure education loans at a low rate of
                                        interest from nationalised banks such as SBI, Oriental Bank, Bank of Boroda,
                                        etc.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">
                                            23) Is hostel facility available?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse23" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        There is no on-campus hostel facility available at CIMR, however, outstation
                                        students or students staying far-off in Mumbai are assisted for flats on rent
                                        near the institute.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">
                                            24) Who are the faculty teaching at CIMR?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse24" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            CIMR is proud to offer excellent teaching faculty who possess rich
                                            industry experience to mentor our students & provide high-quality teaching.
                                        </p>
                                        <p>
                                            Our teaching faculty have been associated with Education and research with
                                            requisite teaching experience in renowned universities or acted as high
                                            ranking officials in reputed Companies or in the Government
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse25">
                                            25) Any additional information?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse25" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>We do not have any association with external agencies, tuition classes
                                                or
                                                individuals for admissions.
                                            </li>
                                            <li>Admission Rules applicable are as per AICTE and/or Institute.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse26">
                                            26) Whom can I contact in the Institute for more information?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse26" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <!--Ms. Rupali Shinde / Ms. Jasmine Padake : 02262157800/01/02/03
                                        Write to us: admissions@cimr.in -->
                                        Office : 022 62157800/01/02/03
                                        Write to us: admissions@cimr.in
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- FAQ ends-->
                <!-- According ends here-->

                <!-- ----- Online Fee Policies ----- -->
                <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                    <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;">IMPORTANT DATES</h4>-->
                </div>
                <div class="col-md-12 container-fluid" id="">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 headerYellowBox" style="">
                        <h3 class="yellowBoxTitle" style="">Online Fee Policies</h3>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="col-md-12 container-fluid" style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                    <div class="col-md-12 desktopFont" style="">

                        <h3>Privacy Policy:</h3>
                        <p>
                            Chetana's Institute of Management and Research (CIMR), New Building, Survey No. 341, Govt.
                            Colony, Bandra - East, Mumbai – 400051,
                            considers the protection of your personal information important and shall take necessary
                            care to safeguard your privacy.
                        </p>
                        <p>
                            If you decide to access the website, your visit and any dispute over privacy is subject to
                            this Privacy Policy and Our Terms and
                            Conditions of use. Our Policy regarding the collection, use and disclosure, if any, of
                            personal information is very strict and
                            we adhere to the best of practices to guard your personal information with care.
                        </p>
                        <h3>Terms and Conditions for Online Fee Submission:-</h3>
                        <ul>
                            <li>Online transaction charges are not part of the Fees. The following transaction charges
                                shall be applicable: <br>

                                Net Banking / Credit Cards / Debit Cards : As applicable
                            </li>
                            <li>
                                All Fee rules as given in the Prospectus shall remain applicable.
                            </li>
                            <li>The Fee deposited through Credit Card/Debit Card/Net Banking will normally reach our
                                account after 1-2 days. It is the sole
                                responsibility of the candidate to ensure that fee is deposited well in time. CIMR shall
                                not be responsible for any not
                                settled fee payment due any reason. CIMR also shall not be responsible, if the payment
                                is refused or declined by the
                                credit/debit card supplier for any reason.
                            </li>
                            <li>Chetana's Institute of Management and Research (CIMR), does not warranty the
                                availability of online Fee Payment System every
                                time. Chetana's Institute of Management and Research (CIMR), will not be responsible for
                                fine exemption if the last day
                                student fee transition fails. We strongly advice that submit the fee through Offline or
                                Online Payment System before the
                                last fee day comes.
                            </li>
                        </ul>
                        <h3>
                            Refund / Cancellation Policy :
                        </h3>
                        <p>
                            <strong>Technical issue</strong><br>
                            In case of any technical issue due to which the payment gets deducted from the payer’s
                            account and does not show in our system
                            but the payment gateway service clearly mentions the confirmed settlement thereafter the
                            CIMR account receives the payment.
                            We manually submit the payment in our system. It should take 7-10 working days for the
                            payment to be credited in CIMR’s account.
                        </p>
                        <p>
                            <strong> Multiple Payments Case:</strong><br>
                            If double payment happens and the payment gateway service clearly mentions it, CIMR will
                            refund the payment after the Institute
                            account receives the payment. It would take 7-10 working days for the back payment or we
                            process the refund amount Payers request.
                        </p>
                        <p>
                            <strong> Other Payments Case:</strong><br>
                            In all other cases where there is a discrepancy in the fee paid, the parent has to directly
                            contact the Institute and CIMR’s
                            decision would be final.
                        </p>

                        <h3>Contact Address</h3>
                        <p>
                            <strong> Accounts Department</strong><br>
                            Chetana's Institute of Management and Research (CIMR), <br>
                            New Building, Survey No. 341, Govt. Colony, Bandra - East, Mumbai – 400051 <br>
                            Website : www.cimr.in <br>
                            Email : accounts@cimr.in
                        </p>
                        <h3>Relationship between website and legal name:</h3>
                        <p>Chetana's Institute of Management and Research (CIMR), is the Institute’s Name. <br>
                            NoPaperForms is an software provider for the above Institute’s and PayTm is the payment
                            gateway provider for online fee payment.
                        </p>

                    </div>
                </div>





                <!-- ----- Online Fee Policies ends ----- -->

                <!-- ------ Disclaimer ----- -->
                <div class="col-md-12" style="height:8vh;padding:0;margin:0;text-align:center;line-height:16vh">
                    <!--<h4 style="margin:0 1%;padding:0;display:inline-block;vertical-align: middle; background-color:#FFCB00;padding:0.3% 3%;font-size:1.4vw;">IMPORTANT DATES</h4>-->
                </div>
                <div class="col-md-12 container-fluid" id="">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 headerYellowBox" style="">
                        <h3 class="yellowBoxTitle" style="">Disclaimer</h3>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-md-12 container-fluid" style="margin:0;padding:0;text-align:justify;text-justify:auto;">
                    <div class="col-md-12 desktopFont" style="">
                        <p>
                            CIMR reserves the right to amend admission rules, norms, details, dates & process of
                            admission at any point of time
                            based on its understanding and rights. Applicants are responsible for providing updated,
                            complete & accurate
                            information for the admission process. Falsification of information or misrepresentation can
                            result in cancellation of
                            admission.
                        </p>
                        <p>
                            For all matters related to admissions, fee payment dates, classes, exams, entrance tests,
                            etc. you are advised to rely only on our official
                            Institute website and social media pages.
                        </p>
                    </div>
                </div>
                <!-- ------ Disclaimer ends ----- -->

            </div>
        </div>
        <!-- middle bar - end -->
        <!-- right side bar -->
        <div class="col-md-1" style="">
        </div>
    </div>
    <div class="footerDesktop"
        style="background-color:#F01A24;padding-left:0;padding-right:0;color:white;padding-bottom:1vh;margin-top:20vh;width:100%;height:18vh;bottom:0;vertical-align:middle;">
        <div class="footerParent">
            <div class="footerChild" id="firstSectionFooter"
                style="width:20vw;margin-left:5vw;margin-top:4.5vh;vertical-align:middle;">
                <div>
                    <p style="font-size:1vw;"><span style="font-weight:bold;">Grievances : </span><a
                            href="disclosures.html#grievanceForm" style="color:white;">Form </a> |<a
                            href="disclosures.html#grievanceRedressalCommittee" style="color:white;"> Committee</a></p>
                </div>
                <div style="margin-top:5.5vh;">
                    <p style="font-size:1vw;"><span style="font-weight:bold;">CALL US : </span> 022 62157800/01/02/03
                    </p>
                </div>
            </div>
            <div class="footerChild" style="width:33vw;margin-left:3vw;margin-top:4.5vh;vertical-align:middle;">
                <div>
                    <p style="font-size:1vw;"><span style="font-weight:bold;">Mandatory Disclosures : </span><a
                            href="PDFs/Mandatory Disclosures.pdf" style="color:white;text-decoration:none;">Mandatory
                        </a>| <a href="disclosures.html#AICTEApprovals" style="color:white;">AICTE Approvals</a>
                    </p>
                </div>
                <div style="margin-top:5.5vh;">
                    <p style="font-size:1vw;"><span style="font-weight:bold;">FAX : </span>022 26423392 <span
                            style="font-weight:bold;">EMAIL US : </span><span id="emailLink" style="color:white;"><img
                                src="images/cimr_email.webp" style="width:13vh" alt="CIMR email"></span></p>
                </div>
            </div>
            <div class="footerChild" style="width:33vw;margin-top:4.5vh;vertical-align:middle;">
                <div>
                    <p style="font-size:1vw;"><span style="font-weight:bold;">Contact Us : </span><span
                            style="font-size:1vw;">Chetana's Institute of Management and Research New Bldg
                            Survey No. 341, Govt. Colony Bandra East, Mumbai 400051</span>
                    </p>
                </div>
                <div style="margin-top:2.8vh;">
                    <!--p style="font-size:17px;">Social</p>-->
                    <a href="https://facebook.com/cimr.bandra" style="text-decoration:none;" id="footerFacebookLink"
                        target="_blank">
                        <i class="fa fa-facebook" id="footerFacebookIcon"
                            style=" font-size: 20px;text-decoration:none;background-color:white;padding-top:2px;padding-left:6px;color:#F01A24;width:24px;height:24px;">
                        </i> </a>
                    <a href="https://www.linkedin.com/company/chetana's-institute-of-management-&-research"
                        style="margin-left:0.5vw;text-decoration:none;" id="footerLinkdlnLink" target="_blank"> <i
                            class="fa fa-linkedin" id="footerLinkdlnIcon"
                            style="font-size: 20px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:24px;height:24px;">
                        </i> </a>
                    <!--<a href="#" style="margin-left:0.5vw;text-decoration:none;"  id="footerTwitterLink"> <i class=" fa fa-twitter"  id="footerTwitterIcon" style="font-size: 20px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:24px;height:24px;"></i> </a>-->
                    <a href="https://instagram.com/chetanas_institutes?igshid=3wnxsukkjqdz"
                        style="margin-left:0.5vw;text-decoration:none;" id="footerInstagramLink" target="_blank"> <i
                            class="fa fa-instagram" id="footerInstagramIcon"
                            style="font-size: 20px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:24px;height:24px;">
                        </i> </a>
                    <!--<a href="" style="margin-left:0.5vw;text-decoration:none;"  id="footerGoogleLink"> <i class="fa fa-google-plus"  id="footerGoogleIcon" style="font-size: 20px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:24px;height:24px;"> </i> </a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footerMobile"
        style="background-color:#F01A24;padding-left:0;padding-right:0;padding-top:0;color:white;padding-bottom:0vh;width:100%;bottom:0;vertical-align:top;">
        <div class="footerParent" style="">
            <div class="footerChild" id="firstSectionFooter"
                style="margin-left:5vw;margin-top:1.5vh;vertical-align:middle;">
                <div>
                    <p style=""><span style="font-weight:bold;">Grievances : </span><a
                            href="disclosures.html#grievanceForm" style="color:white;">Form </a> |<a
                            href="disclosures.html#grievanceRedressalCommittee" style="color:white;"> Committee</a></p>
                </div>
                <div style="">
                    <p style=""><span style="font-weight:bold;">CALL US : </span> 022 62157800/01/02/03</p>
                </div>
                <div>
                    <p style=""><span style="font-weight:bold;">Mandatory Disclosures : </span><a
                            href="PDFs/Mandatory Disclosures.pdf" style="color:white;text-decoration:none;">Mandatory
                        </a>| <a href="disclosures.html#AICTEApprovals" style="color:white;">AICTE Approvals</a>
                    </p>
                </div>
                <div style="">
                    <p style=""><span style="font-weight:bold;">FAX : </span>022 26423392 <br />
                        <span style="font-weight:bold;">EMAIL US : </span><span id="emailLink" style="color:white;"><img
                                src="images/cimr_email.webp" style="width:13vh" alt="CIMR email"></span>
                    </p>
                </div>
            </div>
            <div class="footerChild" id="firstSectionFooter"
                style="margin-left:5vw;margin-top:1.5vh;vertical-align:middle;">
                <div>
                    <p style=""><span style="font-weight:bold;">Contact Us : </span><span style="">Chetana's Institute
                            of Management and Research New Bldg
                            Survey No. 341, Govt. Colony Bandra East, Mumbai 400051</span>
                    </p>
                </div>
                <div style="margin-top:2.8vh;">
                    <!--p style="font-size:17px;">Social</p>-->
                    <a href="https://m.facebook.com/cimr.bandra" style="text-decoration:none;" id="footerFacebookLink"
                        target="_blank"> <i class="fa fa-facebook" id="footerFacebookIcon"
                            style=" font-size: 16px;text-decoration:none;background-color:white;padding-top:2px;padding-left:6px;color:#F01A24;width:20px;height:20px;">
                        </i> </a>
                    <a href="https://www.linkedin.com/company/chetana's-institute-of-management-&-research"
                        style="margin-left:0.5vw;text-decoration:none;" id="footerLinkdlnLink" target="_blank"> <i
                            class="fa fa-linkedin" id="footerLinkdlnIcon"
                            style="font-size: 16px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:20px;height:20px;">
                        </i> </a>
                    <a href="https://instagram.com/chetanas_institutes?igshid=3wnxsukkjqdz"
                        style="margin-left:0.5vw;text-decoration:none;" id="footerInstagramLink" target="_blank"> <i
                            class="fa fa-instagram" id="footerInstagramIcon"
                            style="font-size: 16px;text-decoration:none;background-color:white;padding-top:2px;padding-left:3px;color:#F01A24;width:20px;height:20px;">
                        </i> </a>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                });
        });



    </script>
    <a href="#admissionsPage" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>

</html>