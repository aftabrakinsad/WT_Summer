<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminsidebar.css">
</head>

<body>
    <div class="sidenav" id="theSideNav">
        <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a>
        <a href="../View/adminhomepage.php">Home</a>
        <a id="label">Admin Workspace</a>
        <a href="../View/adminrequest.php">Admin Request</a>
        <a href="../View/adminmanage.php">Manage Admins</a>
        <a href="#">Manage Manager</a>
        <a href="#h">Manage Employee</a>
        <a href="#h">Manage User</a>
        <a id="label">Website Management</a>
        <a href="../View/postnews.php">Post News</a>
    </div>

    <script>
        // For-Loop below is used to create active links and accordingly color them.
        // Helps in recognizing which tab is selected.
        for (var i = 0; i < document.links.length; i++)
        {
            if (document.URL.indexOf('?') > 0) {
                sanitizedURL = document.URL.substring(0, document.URL.indexOf('?'));
            }
            else
            {
                sanitizedURL = document.URL;
            }
            if (document.links[i].href == sanitizedURL) {
                document.links[i].className = 'active';
            }
        }

        function openNav() {
            document.getElementById("theSideNav").style.width = "256px";
            var x = document.getElementById("theSideNav");
            if (x.className === "sidenav sidenav-fixed") {
                x.className += " responsive";
            }
        }

        // Never use get window size of jquery, in javascript, they dont work !
        // lesson learnt !!!
        function closeNav() {
            if (document.documentElement.clientWidth < 856) {
                document.getElementById("theSideNav").style.width = "0";
            }
        }

        $(document).ready(function() {
            $(window).resize(function() {
                if ($(window).width() > 855)
                    document.getElementById("theSideNav").style.width = "256px";

                if (($(window).width()) < 856) {
                    $('#closebtn').trigger('click');
                }
            });
        });

        // Function below is jquery-3 function used for making the navbar sticky
        $(document).ready(function() {
            $(window).scroll(function() {
                var x1 = document.getElementById("theSideNav").style.width;

                if ($(window).scrollTop() > 120) {
                    $("#theSideNav").addClass('sidenav-fixed');

                    if (($(window).width()) < 856 && x1 == "256px") {
                        $('#hamburger').trigger('click');
                    }
                }

                if ($(window).scrollTop() < 121) {
                    $("#theSideNav").removeClass('sidenav-fixed');
                }
            });
        });
    </script>

</body>

</html>