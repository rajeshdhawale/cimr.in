<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Management Institutes/Colleges in Mumbai | CIMR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="CIMR is one of the top management institutes in Mumbai approved by AICTE. It is the best management college in India offering different management courses.">
    <meta name="keywords"
        content="Amongst top 10 MBA institutes in Mumbai,Business leaders,PGDM,Industry driven curriculum,Outstanding faculty,chetana institute,mba courses, pgdm courses,pgdm courses in mumbai,mba marketing,postgraduate courses,pgdm course details,pgdm eligibility,mba mumbai,chetana,research management,college of management,best colleges in mumbai for pgdm,best pgdm institute in mumbai,pgdm colleges in mumbai with fees,top pgdm college in mumbai,best pgdm college in mumbai">

    <link rel="canonical" href="https://cimr.in/" />

    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "WebSite",
          "name": "Chetana's Institute of Management & Research",
          "url": "https://cimr.in/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/marquee.css" />
    <link rel="stylesheet" href="css/example.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script type="text/javascript" src="js/marquee.js"></script>
    <!--<link rel="stylesheet" href="css/styles.css">-->
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PMJ7565');

    </script>
    <!-- End Google Tag Manager -->

    <link rel="icon" href="images/icon.webp">
    <script type="text/javascript">
        $(function () {

            $('.simple-marquee-container').SimpleMarquee();

        });

        $(document).ready(function () {

            //$("#admissionsUpdateModal").modal("show"); 

            $('#banner0').css('display', 'block');
            animateArrow();

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
                    //alert("on mouse hover of About...");
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
                    document.location.href = "";
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



            /* Desktop site menu */

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

            //Student Activities
            $('#studentActivitiesLink').mouseenter(function (e) {

                $('#studentActivitiesSubmenu').css('display', "block");
            });
            //Workshops
            $('#WorkshopsLink').mouseenter(function (e) {

                $('#WorkshopsSubmenu').css('display', "block");
            });
            //Student Activities Mobile
            $('#studActLinkMob').mouseenter(function (e) {

                $('#studActSubmenuMob').css('display', "block");
            });
            //Workshops Mobile
            $('#WorkshopsLinkMob').mouseenter(function (e) {

                $('#WorkshopsSubmenuMob').css('display', "block");
            });






            $('#myCarousel').on('slide.bs.carousel', function onSlide(ev) {
                var id = $(ev.relatedTarget).index();//ev.target.id;
                //alert("current slide - "+parseInt(id));
                switch (parseInt(id)) {
                    case 0:
                        //alert("case1..");
                        $("#banner1").css("display", "none");
                        $("#banner0").css("display", "block");
                        $('#banner2').css('display', 'none');
                        $('#banner3').css('display', 'none');
                        break;
                    case 1:
                        //alert("case1..");
                        $("#banner1").css("display", "block");
                        $("#banner0").css("display", "none");
                        $('#banner2').css('display', 'none');
                        $('#banner3').css('display', 'none');
                        break;
                    case 2:
                        // do something the id is 2
                        $("#banner1").css("display", "none");
                        $("#banner0").css("display", "none");
                        $('#banner2').css('display', 'block');
                        $('#banner3').css('display', 'none');
                        break;
                    case 3:
                        $("#banner1").css("display", "none");
                        $("#banner0").css("display", "none");
                        $('#banner2').css('display', 'none');
                        $('#banner3').css('display', 'block');
                        break;

                    default:
                    //the id is none of the above
                }

            });

            $('#applyButton').click(function (e) {
                //alert("On click of Apply Button..");
            });

        });


        $('.carousel[data-type="multi"] .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 2; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });

        animateArrow = function () {
            //alert("animate arrow function..");
            $("#toTop").animate({ top: 92 + 'vh' }, 2500);
            $("#toTop").animate({ top: 96 + 'vh' }, 2500, animateArrow);
        }


    </script>
</head>
<style>
    html,
    body {
        font-family: "Times New Roman", Times, serif;
        background-color: #F9F9F9;
    }

    .container-fluid {
        margin: 0;
        padding: 0;
    }
    #programsLink:hover{
        color:#D35400 !important;
    }
    #contactusLink:hover{
        color:#D35400 !important;
    }
    #infraLink:hover{
        color:#D35400 !important;
    }
    #admissionLink:hover{
        color:#D35400 !important;
    }
    #alumniLink:hover{
        color:#D35400 !important;
    }
    #disclosuresLink:hover{
        color:#D35400 !important;
    }
    #newsroomLink:hover{
        color:#D35400 !important;
    }

    #contactusLink:hover{
        color:#D35400 !important;
    }
    #homeLink:hover{
        color:#D35400 !important;
    }

    #aboutLink:hover{
        color:#D35400 !important;
    }
    #programsLink:hover{
        color:#D35400 !important;
    }
    
    #facultyLink:hover{
        color:#D35400 !important;
    }
    #corporateLink:hover{
        color:#D35400 !important;
    }

    #chetanasLink:hover{
        color:#D35400 !important;
    }
    #testimonialsLink:hover{
        color:#D35400 !important;
    }


    #imageBox {
        object-fit: contain;
    }

    .bar1small {
        font-size: 1.55vh;
        padding: 0 1.2vh;
    }

    .bar1 {
        font-size: 1.65vh;
        padding: 0 1.2vh;
        float: right;
    }

    a {
        color: black;
        text-decoration: none;
    }

    a:hover {
        color: #F01A24;
        text-decoration: underline !important;
    }

    #socialLink:hover {
        background-color: red;
    }

    .blinking {
        animation: blinkingText 1.2s infinite;
    }

    @keyframes blinkingText {
        0% {
            color: #000;
        }

        49% {
            color: #000;
        }

        60% {
            color: transparent;
        }

        99% {
            color: transparent;
        }

        100% {
            color: #000;
        }
    }

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

    /* Media Query classes for Desktop layout */

    @media screen and (min-width: 1000px) {
        .modalContentClass {
            margin-top: 17%;
            margin-left: 5%;
            background-color: transparent;
            border: none !important;
            -webkit-box-shadow: none !important;

        }

        .modalImageClass {
            width: 90%;
            height: 90%;
        }

        .modalCloseButton {
            font-weight: bold;
            font-size: 35px;
            color: white;
            margin-right: 10%;
            //margin-top:13%;
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

        .chetanaYellowTextStyle {
            line-height: 4vh;
            font-size: 2.2vh;
            font-weight: normal;
            color: #000000;
        }

        .chetanaLifeImageClass {
            width: 145%;
            height: 50vh;
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
            margin-top: 0;
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
            height: 240vh;
        }

        .whiteSpaceClass {
            height: 8vh;
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

        .redButtonsClass {
            font-weight: bold;
            margin-top: 0.3%;
            background-color: red;
            color: white;
            border: none;
            //border-radius: 5%;
            width: 35%;
            margin-left: 2%;
            margin-right: 2%;
        }

        .highlightTextYellowClass {
            text-align: center;
            height: 6.5vh;
            background-color: #FFCB00;
            padding-top: 0.2%;
            //padding-top:0.2vh;padding-bottom:0.2vh;
            position: absolute;
            width: 100%;
            line-height: 6vh;
        }

        .carouselContainerClass {
            height: 76vh;
            //border:1px solid red;
        }

        .carouselClass {
            width: 100%;
            height: 76vh;
        }

        .carouselImageClass {
            height: 100%;
            width: 100%; //border:1px solid blue;
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
            font-size: 1.44vw;
            font-weight: bold;
        }

        .submenuFont {
            //font-size:1.4vw;
        }

        .marqueeGapClass {
            margin-top: 6%;
        }

        .toTopArrowClass {
            display: block;
            border: 1px solid red;
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

        .pillarsTitleClass {
            background-color: #FFCB00;
            width: 14vh;
            margin-left: 35%;
            margin-top: 30px;
            height: 4vh;
            line-height: 4vh;
            text-align: center;
        }

        .newsFontClass {
            font-size: 1vw;
            color: black ! important;
        }

        .paddingClass {
            padding-top: 0;
            margin-top: 0;
            //vertical-align: top;
            font-size: 1.5vw;
            text-align: center;
        }

        .paddingClassNew {
            padding-top: 0;
            //vertical-align: top;
            font-size: 1.3vw;
        }

    }

    /* Media Query classes for Phone, tabs layout */

    @media screen and (max-width: 999px) and (min-width: 100px) {

        .modalContentClass {
            margin-top: 15vh;
            margin-left: 5vw;
            background-color: transparent;
            border: none !important;
            -webkit-box-shadow: none !important;
            width: 90%;
            height: 90%;
        }

        .modalImageClass {
            width: 85vw;
            height: 90%;
            //border:1px solid red;
        }

        .modalCloseButton {
            font-weight: bold;
            font-size: 35px;
            color: white;
            position: relative;
            top: 0;
            right: 0;
            //text-align:right;
            //margin-top:;
            //padding-left:90%;
            //margin-right:10%;
            //color:red;
            //border:1px solid green;
        }

        .paddingClass {
            padding-top: 1%;
            //vertical-align: center;
            //border:1px solid black;
            text-align: center;
        }

        .paddingClassNew {
            padding-top: 1%;
            //vertical-align: center;
            //border:1px solid black;
        }

        .newsFontClass {
            font-size: 95%;
            color: black ! important;
        }

        .pillarsTitleClass {
            //background-color:#FFCB00;margin-left:35%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;
            background-color: #FFCB00;
            margin-left: 10%;
            margin-top: 30px;
            height: 2%;
            line-height: 2vh;
            text-align: center;
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

        .toTopArrowClass {
            display: none;
            border: 1px solid black;
        }

        .chetanaYellowText {
            background-color: #FFCB00;
            width: 90%;
            height: 4%;
            line-height: 4vh;
            text-align: center;
            margin: 0 auto;
            margin-top: 0;
        }

        .chetanaYellowTextStyle {
            line-height: 3vh;
            font-weight: normal;
            color: #000000;
            font-size: 80%;
        }

        .chetanaLifeImageClass {
            width: 85%;
            height: 70%;
            padding: 0;
            object-fit: fill;
            margin-left: 0vh;
        }

        .chetanaLifeImageSection {
            height: 90%;
            margin-top: 5vh;
            padding: 0;
            text-align: center;
        }

        .indexPageTopText {
            height: 48%;
            margin: 0;
            padding: 0;
            margin-bottom: 5vh;
            margin-top: 2%;
        }

        .topTextClass {
            text-align: justify;
            justify-content: auto;
        }

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
            //height:100vh;
            //border:1px solid blue;
        }

        .whiteSpaceClass {
            height: 2vh;
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

        .redButtonsClass {
            font-weight: bold;
            margin-bottom: 0.2%;
            background-color: red;
            color: white;
            border: none;
            width: 95%;
            text-align: center;
            font-size: 1.17rem;
            //height:100%;
            //border:1px solid blue;
            //width:38%; 
        }

        .highlightTextYellowClass {
            text-align: center;
            height: 5vh;
            background-color: #FFCB00;
            margin: 0;
            padding-top: 0.05vh;
            padding-bottom: 0.1vh;
            position: absolute;
            width: 100%;
            //border:1px solid green;
        }

        .carouselContainerClass {
            height: 35%;
        }

        .carouselClass {
            width: 100%;
            height: 30%;
        }

        .carouselImageClass {
            //height:35%;width:100%;
            //border:1px solid black;
        }

        .highlightText {
            //font-size:180%;
            //font-weight:bold;
        }

        .desktopMenuBar {
            height: 17vh;
            background-color: white;
            display: none;
        }

        .mobileMenuBar {
            //height:17vh;
            background-color: white;
            display: block;
            //border:1px solid blue;
        }

        .menuFont {
            font-size: 75%;
            font-weight: bold;
            padding: 0.75vw;
        }

        .submenuFont {
            font-size: 75%;
        }

        .marqueeGapClass {
            margin-top: 20%;
        }
    }
</style>

<body id="indexPage" style="overflow-x:hidden;">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMJ7565" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container-fluid" style="height:0.6vh;background-color:#FFCB00;" style=""></div>

   
<?php include ('towers/header/header.php');?>
    <!-- Modal1 start-->


    <div class="modal" id="admissionsUpdateModal" role="dialog" data-keyboard="false" data-backdrop="static"
        style="background-color:transparent;">

        <div class="modal-dialog" style="">


            <!-- Modal content-->
            <div class="modal-content modalContentClass" style="">
                <button type="button" class="close modalCloseButton" data-dismiss="modal"
                    style="font-weight:bold;font-size:30px;color:white;">&times;</button>
                <a href="PDFs/Online FAQs Ver 6.0.pdf" target="_blank"> <img
                        src="images/Best Private B-School Post 11.06.2020.webp" class="modalImageClass" style="">
                </a>
            </div>

        </div>
    </div>

    <div class="container-fluid" style="height:0.3vh;background-color:#c7c7c9;"></div>

    <!-- Home page banner carousel code starts -->

    <div class="container-fluid carouselContainerClass " style="width:100%;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="width:100%;">
            <ol class="carousel-indicators" style="bottom:2vh;">
                <li data-target="#myCarousel" data-slide-to="0" class="active" id="0"></li>
                <li data-target="#myCarousel" data-slide-to="1" id="1"></li>
                <li data-target="#myCarousel" data-slide-to="2" id="2"></li>
                <li data-target="#myCarousel" data-slide-to="3" id="3"></li>
                <li data-target="#myCarousel" data-slide-to="4" id="4"></li>

            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner carouselClass" style="">
                <div class="item active" style="margin:0;padding:0;height:100%;">
                    <a href="/admissions.php"><img src="images/Admissions-2023-Banner.webp" class="carouselImageClass"
                            style="height:100%;width:100%;" alt="Admissions 2023"></a>
                </div>

                <div class="item" style="margin:0;padding:0;height:100%;">
                    <a href="#"><img src="images/Creating Ethical Business Leaders_Home page banner.webp" style="
                            height:100%;width:100%;" class="carouselImageClass"
                            alt="Creating Ethical Business Leaders"></a>
                </div>

                <div class="item" style="margin:0;padding:0;height:100%;">
                    <a href="corporate-connect.html#listOfRecruiters"><img src="images/They Believe in us banner.webp"
                            style="height:100%;width:100%;" class="carouselImageClass" alt="Our Recruiters"></a>
                </div>

                <div class="item" style="margin:0;padding:0;height:100%;">
                    <a href="corporate-connect.html#listOfRecruiters"><img src="images/They Believe in us banner1.webp"
                            style="height:100%;width:100%;" class="carouselImageClass" alt="Our Recruiters"></a>
                </div>
            </div>
            <!-- Left and right controls-->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-image:none;">
                <span class="glyphicon glyphicon-chevron-left"
                    style="font-size:22px;padding-top:0px;margin-top:-5vh;"></span>
                <!--<span class="sr-only">Previous</span>-->
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-image:none;">
                <span class="glyphicon glyphicon-chevron-right"
                    style="font-size:22px;padding-top:0px;margin-top:-5vh;"></span>
                <!--<span class="sr-only">Next</span>-->
            </a>
        </div>
        <!-- Home page banner carousel code ends -->

        <div class="col-md-12 highlightTextYellowClass" style="">
            <!-- message on the yellow bar    -->
            <div style="font-weight: bold; font-size: large; margin:auto;">
                <marquee behavior="scroll" direction="left">Ranked 4 amongst the Top 10 B Schools in Mumbai and Ranked
                    22 amongst the top private B Schools in India (Times of India Ranking April 2023). Ranked 4 amongst the Top 10 B Schools in Mumbai and Ranked
                    22 amongst the top private B Schools in India (Times of India Ranking April 2023).
                </marquee>
            </div>
            <p style="display:none;position:relative;z-index:4;" id="banner0" class="paddingClass">

            </p>
            <p style="display:none;position:relative;z-index:4;" id="banner1" class="paddingClass">

            </p>
            <p style="display:none;position:relative;z-index:4;" id="banner2" class="paddingClass">

            <p style="display:none;position:relative;z-index:4;" id="banner3" class="paddingClass">

            </p>
            </p>
        </div>
    </div>


    <div class="container-fluid" style="left:0;right:0;margin-bottom:10%;margin-top:0;">

        <!-- home page news flash marquee -->
        <!--<div class="col-md-12 marqueeGapClass" style="width:100%;padding:0;">
        <div class="content" style="margin-top:0%;width:100%;background-color:transparent;padding:0;color:black ! important;">
        <div class="simple-marquee-container newsFontClass" style="color:black ! important ;width:100%;background-color:#FFCB00;height: 6vh;vertical-align:top;">
        <div class="marquee" style="color:black ! important;">
        <ul class="marquee-content-items newsFontClass" style="color:black ! important;height: 6vh;vertical-align:top;">
        <li class="newsFontClass" style="color:black ! important;font-weight:bold;height: 5vh;vertical-align:top;"><a href="admissions.php" target="_blank">Admissions Open 2020 - Click here to apply</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>-->

        <!-- home page news flash marquee ends-->


        <div class="col-md-12" style="padding-top:4vh;">

            <!-- left side bar -->
            <div class="col-md-1 heightClass">
            </div>

            <!-- Middle section of the page i.e. main section (Code for the Body  of each page goes here in Middle Section) -->
            <div class="col-md-10 heightClass">
                <div class="col-md-12 whiteSpaceClass">
                </div> <!-- top white padding -->
                <div class="col-md-12 indexPageTopText">
                    <!-- <h1>CIMR: The Best Management Institute in Mumbai</h1> -->
                    <p class="topTextClass">
                        Welcome to Chetana’s Institute of Management and Research, one amongst top 10 MBA Institutes in
                        Mumbai, an institute dedicated to creating business leaders which propel society towards a
                        better and brighter future. Our PGDM courses have been attracting students from across the
                        country, making us one of the premier B-schools in India, particularly in Mumbai.
                    </p>

                    <p class="topTextClass">
                        We seek to impart the best and most up-to-date industry driven curriculum when it comes to
                        management and research. Our outstanding faculty reinforce these learnings in students with
                        the use of practical exercises and activities. As we are situated in Mumbai, the financial
                        capital of India, our students are well in-tune with the latest developments in the markets,
                        giving them a better understanding of its working when they enter the professional sphere.
                        Committed to creating ‘ethical business leaders’, Chetana’s as the name suggests, strives to
                        keep both, hearts and minds of the students involved, so that the leaders of tomorrow
                        approach future challenges holistically.
                    </p>
                </div>
                <div class="col-md-12 headerDesktop" style="height:4vh;margin-top:12%;padding:0">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="text-align:center;">
                        <div class="col-md-3" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                        <div class="col-md-6"
                            style="height:4vh;line-height:0vh;text-align:center;padding-top:0;margin-top:0vh;">
                            <h2 style="margin:0;padding:0">
                                <b style="letter-spacing: 0.5px;font-size:2.4vh;font-weight:normal;color:#000000;">OUR
                                    ACADEMIC PROGRAMS</b>
                            </h2>
                        </div>
                        <div class="col-md-3" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="col-md-12 headerMobile" style="height:4vh;margin:0;padding:0">
                    <div class="" style="text-align:center;">
                        <div class=""
                            style="float:left;width:20%;margin-left:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                        <div class=""
                            style="float:left;width:45%;height:6%;text-align:center;padding-top:0;margin-top:0%;">
                            <h5 style="margin:0;padding:0"><b
                                    style="letter-spacing: 2px;font-weight:normal;color:#000000;">OUR ACADEMIC
                                    PROGRAMS</b>
                            </h5>
                        </div>
                        <div class=""
                            style="float:left;width:20%;margin-right:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 container-fluid programmesClassDesktop" style="margin-top:2vh;">
                    <div class="col-md-4"
                        style="height:50vh;text-align:center;padding:0;margin-top:5vh;padding-left:4vh;">
                        <div class="col-md-12" id="imageContain"
                            style="height:40vh;margin:0;padding:0;text-align:left;">
                            <img style="width:91%;padding:0;margin-left:0vh;"
                                src="images/home/PGDM.webp" alt="chetanas programs PGDM">
                            <!--<div style="background-color:#FFCB00;width:20%;margin:0 auto;margin-top:4vh;height:4vh;line-height:4vh;text-align:center;"><h4 style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">PGDM</h4></div>-->
                            <div
                                style="background-color:#FFCB00;width:10vh;margin-left:35%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="./pgdm.html">PGDM</a>
                                </h4>
                            </div>
                        </div>
                        <!--<div class="col-md-12" style="text-align:center;margin-top:0;padding-top:0;height:4vh;border:1px solid red;">
            </div>-->
                    </div>
                    <div class="col-md-4"
                        style="height:50vh;text-align:center;margin-top:5vh;margin-left:0vh;padding:0;padding-left:4vh;">
                        <div class="col-md-12" id="imageContain"
                            style="height:40vh;margin:0;padding:0;text-align:left;">
                            <img style="width:91%;padding:0;margin:0"
                                src="images/home/PGDM_Marketing.webp" alt="chetanas programs PGDM Marketing">
                            <div
                                style="background-color:#FFCB00;width:20vh;margin-left:25%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="./pgdm-marketing.html">PGDM Marketing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"
                        style="height:40vh;text-align:center;margin-top:5vh;margin-left:0vh;padding:0;padding-left:4vh;">
                        <div class="col-md-12" id="imageContain" style="height:40vh;margin:0;padding:0;text-align:left">
                            <img style="width:91%;margin-top:0vh;padding:0;margin-left:0vh;"
                                src="images/home/PGDM_Retail.webp" alt="chetanas programs PGDM retail">
                            <div
                                style="background-color:#FFCB00;width:20vh;margin-left:25%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="pgdm-retail.html">PGDM Retail</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div> <!-- our programs desktop ends -->
                <div class="col-md-12 container-fluid programmesClassMobile" style="margin-top:4vh;">
                    <div class="container-fluid" id="imageContain" style="margin:0;padding:0;text-align:center;">
                        <img style="width:91%;padding:0;margin-left:0vh;"
                            src="images/home/PGDM.webp" alt="chetanas programs PGDM">
                        <div
                            style="background-color:#FFCB00;margin:0 auto;width:10vh;margin-top:5px;height:4vh;line-height:4vh;text-align:center;">
                            <h4
                                style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                <a href="./pgdm.html">PGDM</a>
                            </h4>
                        </div>
                    </div>
                    <div class="container-fluid" id="imageContain"
                        style="margin:0;padding:0;margin-top:4vh;text-align:center;">
                        <img style="width:91%;padding:0;margin:0"
                            src="images/home/PGDM_Marketing.webp" alt="chetanas programmes PGDM Marketing">
                        <div
                            style="background-color:#FFCB00;margin:0 auto;width:20vh;margin-top:5px;height:4vh;line-height:4vh;text-align:center;">
                            <h4
                                style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                <a href="./pgdm-marketing.html">PGDM Marketing</a>
                            </h4>
                        </div>
                    </div>
                    <div class="container-fluid" id="imageContain"
                        style="margin:0;padding:0;margin-top:4vh;text-align:center;">
                        <img style="width:91%;margin-top:0vh;padding:0;margin-left:0vh;"
                            src="images/home/PGDM_Retail.webp" alt="chetanas programs PGDM retail">
                        <div
                            style="background-color:#FFCB00;margin:0 auto;width:20vh;margin-top:5px;height:4vh;line-height:4vh;text-align:center;">
                            <h4
                                style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                <a href="./programs-retail.html">PGDM Retail</a>
                            </h4>
                        </div>
                    </div>
                </div> <!-- our programs mobile ends -->
                <div class="col-md-12" style="height:7vh;margin:0;padding:0">
                </div> <!-- top white padding -->
                <div class="col-md-12 headerDesktop"
                    style="position:absolute;z-index:3;left:-5.5vh;margin-top:74vh;width:10vh;height:30vh;">
                    <div class="col-md-2" style="">
                        <a class="left carousel-control" data-slide="prev" data-target="#myCarouselPillars"
                            style="background-image:none;padding-top:0vh;margin-top:75vh;" onclick="">
                            <span class="glyphicon glyphicon-chevron-left"
                                style="font-size:30px;color:black;margin-top:-10vh;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 container-fluid headerDesktop" style="">
                    <div class="col-md-12" style="height:4vh;margin:0;padding:0">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="text-align:center;">
                            <div class="col-md-4" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                            <div class="col-md-4"
                                style="height:4vh;line-height:3vh;text-align:center;padding-top:0;margin-top:-1vh;">
                                <h1 style="margin:0;padding:0"><b
                                        style="letter-spacing: 0.5px;font-size:2.4vh;font-weight:normal;color:#000000;">OUR
                                        PILLARS</b></h1>
                            </div>
                            <div class="col-md-4" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="col-md-12 headerMobile" style="height:4vh;margin:0;padding:0">
                    <div class="" style="text-align:center;">
                        <div class=""
                            style="float:left;width:20%;margin-left:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                        <div class=""
                            style="float:left;width:47%;height:6%;text-align:center;padding-top:0;margin-top:1%;">
                            <h5 style="margin:0;padding:0"><b
                                    style="letter-spacing: 2px;font-weight:normal;color:#000000;">OUR PILLARS</b>
                            </h5>
                        </div>
                        <div class=""
                            style="float:left;width:20%;margin-right:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 container-fluid pillarsClassDesktop" style="padding-left:4vh;padding-right:4vh;">
                    <div id="myCarouselPillars" class="carousel slide slickCarousel"
                        style="width:100%;height:36vh;margin-top:5vh;">
                        <!-- Wrapper for slides -->
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Events.webp" class=""
                                style="width:96.2%;object-fit:contain;"
                                alt="chetanas pillars events">
                            <div style="background-color:#FFCB00;width:28vh;margin-left:14%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;"
                                class="">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="life-at-chetanas.html#eventsForumn">Events</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Chetana’s_Alumni_Network.webp" class=""
                                style="width:96.2%;object-fit:contain;"
                                alt="chetanas pillars alumni network">
                            <div
                                style="background-color:#FFCB00;width:28vh;margin-left:14%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="alumni-network.html">Chetana's Alumni Network</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Research_and_Conference.webp" class=""
                                style="width:96.2%;object-fit:contain;"
                                alt="chetanas pillars research conference">
                            <div
                                style="background-color:#FFCB00;width:26vh;margin-left:14%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="life-at-chetanas.html#internationalConference">Research and
                                        Conference</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/MDP.webp" class=""
                                style="width:96.2%;object-fit:contain;"
                                alt="chetanas pillars MDP">
                            <div
                                style="background-color:#FFCB00;width:10vh;margin-left:35%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="corporate-connect.html#mdp">MDP</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Centres_of_Excellence.webp" class=""
                                style="width:96.2%;object-fit:contain;"
                                alt="chetanas pillars centres of excellence">
                            <div
                                style="background-color:#FFCB00;width:24vh;margin-left:20%;margin-top:30px;height:4vh;line-height:4vh;text-align:center;">
                                <h4
                                    style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">
                                    <a href="">Centres of Excellence</a>
                                </h4>
                            </div>
                        </div>
                        <!--<div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
            <img src="images/OUR PILLARS_MDP.webp" class="" style="width:96%;object-fit:contain;border:1.8px #FFCB00 solid;">
            <div style="background-color:#FFCB00;width:80px;margin:0 auto;margin-top:30px;height:4vh;line-height:4vh;text-align:center;"><h4 style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">MDP</h4></div>
            
            </div>
            <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
            <img src="images/OUR PILLARS_MDP.webp" class="" style="width:96%;object-fit:contain;border:1.8px #FFCB00 solid;">
            <div style="background-color:#FFCB00;width:80px;margin:0 auto;margin-top:30px;height:4vh;line-height:4vh;text-align:center;"><h4 style="line-height:4vh;font-size:2.2vh;font-weight:normal;color:#000000;text-align:center;">MDP</h4></div>
            
            </div>-->
                    </div>
                </div>
                <div class="col-md-12 container-fluid pillarsClassMobile" style="padding-left:4vh;padding-right:4vh;">
                    <div id="myCarouselPillars" class="carousel slide slickCarouselMobile"
                        style="width:100%;height:50%;margin-top:5vh;">
                        <!-- Wrapper for slides -->
                        <div style="float:left;height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Events.webp" class=""
                                style="width:98.6%;object-fit:contain;"
                                alt="chetanas pillars events">
                            <div style="width:60%;margin-left:20%;" class="pillarsTitleClass">
                                <p
                                    style="line-height:3vh;font-weight:normal;color:#000000;text-align:center;font-size:90%;">
                                    <a href="life-at-chetanas.html#eventsForumn">Events</a>
                                </p>
                            </div>
                        </div>
                        <div style="height:100%;float:left;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Chetana’s_Alumni_Network.webp" class=""
                                style="width:98.6%;object-fit:contain;"
                                alt="chetanas pillars alumni network">
                            <div style="width:80%;" class="pillarsTitleClass">
                                <p
                                    style="line-height:3vh;font-weight:normal;color:#000000;text-align:center;font-size:90%;">
                                    <a href="alumni-network.html">Chetana's Alumni Network</a>
                                </p>
                            </div>
                        </div>
                        <div style="height:100%;float:left;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Research_and_Conference.webp" class=""
                                style="width:98.6%;object-fit:contain;"
                                alt="chetanas pillars research conference">
                            <div class="pillarsTitleClass" style="width:80%;">
                                <p
                                    style="line-height:3vh;font-weight:normal;color:#000000;text-align:center;font-size:90%;">
                                    <a href="life-at-chetanas.html#internationalConference">Research and
                                        Conference</a>
                                </p>
                            </div>
                        </div>
                        <div style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/MDP.webp" class=""
                                style="width:98.6%;object-fit:contain;border:1.8px #FFCB00 solid;"
                                alt="chetanas pillars MDP">
                            <div class="pillarsTitleClass" style="width:60%;margin-left:20%;">
                                <p
                                    style="line-height:3vh;font-weight:normal;color:#000000;text-align:center;font-size:90%;">
                                    <a href="corporate-connect.html#mdp">MDP</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3" style="height:100%;text-align:center;padding:0;margin:0;">
                            <img src="images/home/Centres_of_Excellence.webp" class=""
                                style="width:98.6%;object-fit:contain;border:1.8px #FFCB00 solid;"
                                alt="chetanas pillars centres of excellence">
                            <div class="pillarsTitleClass" style="width:80%;">
                                <p
                                    style="line-height:3vh;font-weight:normal;color:#000000;text-align:center;font-size:90%;">
                                    <a href="">Centres of Excellence</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-12 container-fluid" style="margin:0;padding:0;">-->
                <div class="col-md-12 headerDesktop"
                    style="position:absolute;z-index:3;right:0vh;margin-top:74vh;width:10vh;height:30vh;padding-left:9vh;">
                    <div class="col-md-2" style="">
                        <a class="right carousel-control" data-slide="next" data-target="#myCarouselPillars"
                            style="position:absolute;background-image:none;padding-top:0vh;margin-top:75vh;" onclick="">
                            <span class="glyphicon glyphicon-chevron-right"
                                style="font-size:30px;color:black;margin-top:-10vh;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-12" style="height:9.5vh;margin:0;padding:0">
                </div> <!-- top white padding -->
                <div class="col-md-12 container-fluid headerDesktop">
                    <div class="col-md-12" style="height:4vh;margin:0;padding:0">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="text-align:center;">
                            <div class="col-md-4" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                            <div class="col-md-4"
                                style="height:4vh;line-height:4vh;text-align:left;padding-top:0;margin-top:-1vh;margin-right:0%;margin-left:-1.5vh;width:34.5%;">
                                <h1 style="margin:0;padding:0;"><b
                                        style="letter-spacing: 0.5px;font-size:2.4vh;font-weight:normal;color:#000000;">LIFE@CHETANA'S</b>
                                </h1>
                            </div>
                            <div class="col-md-4" style="height:4vh;border-bottom:1.8px #FFCB00 solid;"></div>
                        </div>
                        <!--<div class="col-md-8" style="vertical-align:middle;">
            <hr style="border-width:1.8px;border-color:#FFCB00;width:36vh;float:left;margin-right:3vh;vertical-align:middle;">
            <h4 style="margin:0;padding:0;float:left;width:30vh;margin-top:0.2vh;vertical-align:middle;"><b style="letter-spacing: 2px;font-size:3.4vh;font-weight:normal;color:#000000;">LIFE@CHETANA'S</b></h4>
            <hr style="border-width:1.8px;border-color:#FFCB00;width:36vh;float:left;margin-left:4vh;vertical-align:middle;">
            </div>-->
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-12 headerMobile" style="height:4vh;margin:0;padding:0">
                    <div class="" style="text-align:center;">
                        <div class=""
                            style="float:left;width:20%;margin-left:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                        <div class=""
                            style="float:left;width:47%;height:6%;text-align:center;padding-top:0;margin-top:1%;">
                            <h5 style="margin:0;padding:0"><b
                                    style="letter-spacing: 2px;font-weight:normal;color:#000000;">LIFE@CHETANA'S</b>
                            </h5>
                        </div>
                        <div class=""
                            style="float:left;width:20%;margin-right:5%;height:1.5vh;border-bottom:1.8px #FFCB00 solid;">
                        </div>
                    </div>
                </div>
                <div class="container-fluid col-md-12" style="padding-bottom:0;">
                    <div class="col-md-8 chetanaLifeImageSection" id="imageContain" style="">
                        <img class="chetanaLifeImageClass" style="chetanaLifeImageClass"
                            src="images/home/LIFE@CHETANA’S.webp" alt="life at chetana">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="container-fluid col-md-12" style="">
                    <!--<div style="text-align:center;margin:0 auto;height:5vh;width:500px;border:1px solid red;"> </div>-->
                    <div style="" class="chetanaYellowText">
                        <h4 style="" class="chetanaYellowTextStyle"><a
                                href="disclosures.html#grievanceRedressalCommittee">Student Committee</a></span><span> |
                            </span><span><a href="/disclosures.html#womensDevelopment">Women
                                    Development</a></span><span> | </span><span><a href="#">Extra
                                    Curricular</a></span></h4>
                    </div>
                </div>
            </div>

            <!-- right side bar -->
            <div class="col-md-1 heightClass" style="">
            </div>
        </div>
    </div>
    <!--<div style="height:20vh;border:1px solid black;">
            <a href="#home" id="toTop" style="display: block;border:1px solid blue;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>-->
    <div class="footerDesktop"
        style="background-color:#D5DBDB;padding-left:0;padding-right:0;color:white;padding-bottom:1vh;margin-top:20vh;width:100%;height:18vh;bottom:0;vertical-align:middle;">
        <div class="footerParent">
            <div class="footerChild" id="firstSectionFooter"
                style="width:20vw;margin-left:5vw;margin-top:4.5vh;vertical-align:middle;">
                <div>
                    <p style="font-size:1vw;"><span style="font-weight:bold;">Grievances : </span><a
                            href="disclosures.html#grievanceForm" style="color:white;">Form </a> |<a
                            href="disclosures.html#grievanceRedressalCommittee" style="color:white;"> Committee</a>
                    </p>
                </div>
                <div style="margin-top:5.5vh;">
                    <p style="font-size:1vw;"><span style="font-weight:bold;">CALL US : </span> 022
                        62157800/01/02/03</p>
                </div>
            </div>
            <div class="footerChild" style="width:33vw;margin-left:3vw;margin-top:4.5vh;vertical-align:middle;">
                <div>
                    <p style="font-size:1vw;"><span style="font-weight:bold;">Mandatory Disclosures : </span><a
                            href="PDFs/Mandatory Disclosures.pdf" style="color:white;text-decoration:none;">Mandatory
                        </a>| <a href="disclosures.html#AICTEApprovals" style="color:white;">AICTE Approvals</a></p>
                </div>
                <div style="margin-top:5.5vh;">
                    <p style="font-size:1vw;"><span style="font-weight:bold;">FAX : </span>022 26423392 <span
                            style="font-weight:bold;">EMAIL US : </span><span id="emailLink" style="color:white;"><span
                                id="emailLink" style="color:white;"><img src="images/cimr_email.webp" style="width:13vh"
                                    alt="CIMR email"></span></p>
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
                        target="_blank"> <i class="fa fa-facebook" id="footerFacebookIcon"
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
        style="background-color:#F01A24;padding-left:0;padding-right:0;padding-top:0;color:white;padding-bottom:0vh;width:100%;bottom:0;vertical-align:top;margin-top:10%;">
        <div class="footerParent" style="">
            <div class="footerChild" id="firstSectionFooter"
                style="margin-left:5vw;margin-top:1.5vh;vertical-align:middle;">
                <div>
                    <p style=""><span style="font-weight:bold;">Grievances : </span><a
                            href="disclosures.html#grievanceForm" style="color:white;">Form </a> |<a
                            href="disclosures.html#grievanceRedressalCommittee" style="color:white;"> Committee</a>
                    </p>
                </div>
                <div style="">
                    <p style=""><span style="font-weight:bold;">CALL US : </span> 022 62157800/01/02/03</p>
                </div>
                <div>
                    <p style=""><span style="font-weight:bold;">Mandatory Disclosures : </span><a
                            href="PDFs/Mandatory Disclosures.pdf" style="color:white;text-decoration:none;">Mandatory
                        </a>| <a href="disclosures.html#AICTEApprovals" style="color:white;">AICTE Approvals</a></p>
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
                    <p style=""><span style="font-weight:bold;">Contact Us : </span><span style="">Chetana's
                            Institute of Management and Research New Bldg
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slickCarousel').slick({
                pauseOnFocus: false,
                pauseOnHover: false,
                autoplay: true,

                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: $('.glyphicon-chevron-left'),
                nextArrow: $('.glyphicon-chevron-right')

            });


        });

        $(document).ready(function () {
            $('.slickCarouselMobile').slick({
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: $('.glyphicon-chevron-left'),
                nextArrow: $('.glyphicon-chevron-right')

            });


        });
    </script>
    <a href="#indexPage" id="toTop" class="" style=""> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>

</html>