<?php

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminmanage.css">
</head>

<body>
    <div class="search-bar-wrapper">
        <div class="search-bar" id="the-search-bar">
            <div class="flex-item-search-bar" id="fi-search-bar">

                <form class="search_form" action="" method="post">
                    <div class="flex-item-search">
                        <input name="search" size="30" type="text" placeholder="Search admins..." />
                    </div>

                    <div class="flex-item-search-button">
                        <button type="submit" name="submit" id="search"></button>
                    </div>

                    <div class="flex-item-by">
                        <label>By :</label>
                    </div>

                    <div class="flex-item-search-by">
                        <select name="by">
                            <option value="name">Name</option>
                            <option value="acno">Ac/No</option>
                        </select>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="flex-container">

                <div class="flex-item">
                    <div class="flex-item-1">
                        <p id="id"></p>
                    </div>
                    <div class="flex-item-2">
                        <p id="name"></p>
                        <p id="acno"></p>
                    </div>
                    <div class="flex-item-1">
                        <div class="dropdown">
                            <!--We are dynamically naming each dropdown for every entry in the loop and
                                passing the respective integer value in the dropdown_func().
                                This creates adynamic anchor for each button-->
                            <button onclick="dropdown_func(<?php echo $i ?>)" class="dropbtn"></button>
                            <div id="dropdown<?php echo $i ?>" class="dropdown-content">
                                <!--Pass the customer trans_id as a get variable in the link-->
                                <a href='' cust_id"] ?>">View / Edit</a>
                                <a href='' cust_id"] ?>">Transactions</a>
                                <a href='' cust_id"] ?>"
                                    onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            <p id="none"> No results found :(</p>
            <div class="flex-container-bb">
                <div class="back_button">
                    <a href='' class="button">Go Back</a>
                </div>
            </div>
    </div>

    <script>
        /*  The problem with lots of menus sharing same anchor(dropdown-content) is that clicking on
        any of the buttons produces the same output as clicking the first button. Thus only the
        menu associated with the first button opens. This is BIG PROBLEM when we have lots of menus
        inside the while-loop.
        Hence, solve this problem using dynamic naming to create different anchors for different
        buttons.
        This is a proper solution and NOT a hack/workaround */
        function dropdown_func(i) {
            // Dynamic naming of the dropdown #id
            var doc_id = "dropdown".concat(i.toString());

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;

            // Close any menus, if opened, before opening a new one
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }

            document.getElementById(doc_id).classList.toggle("show");
            return false;
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;

                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        // Sticky search-bar
        $(document).ready(function() {
            var curr_scroll;

            $(window).scroll(function() {
                curr_scroll = $(window).scrollTop();

                if ($(window).scrollTop() > 120) {
                    $("#the-search-bar").addClass('search-bar-fixed');

                    if ($(window).width() > 855) {
                        $("#fi-search-bar").addClass('fi-search-bar-fixed');
                    }
                }

                if ($(window).scrollTop() < 121) {
                    $("#the-search-bar").removeClass('search-bar-fixed');

                    if ($(window).width() > 855) {
                        $("#fi-search-bar").removeClass('fi-search-bar-fixed');
                    }
                }
            });

            // Fixes some 'unfortunate-graphics-derp' while resizing the window
            $(window).resize(function() {
                var class_name = $("#fi-search-bar").attr('class');

                if ((class_name == "flex-item-search-bar fi-search-bar-fixed") && ($(window).width() < 856)) {
                    $("#fi-search-bar").removeClass('fi-search-bar-fixed');
                }

                if ((class_name == "flex-item-search-bar") && ($(window).width() > 855) && (curr_scroll > 120)) {
                    $("#fi-search-bar").addClass('fi-search-bar-fixed');
                }
            });
        });
    </script>

</body>

</html>