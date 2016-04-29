

        window.name = "oldwin";



        function ShowProgress() {

            $('#progressBackgroundFilter').show();

            $('#processMessage').show();



            //var x = screen.width;

            //var y = screen.height;



            var x = $(window).width();

            var y = $(window).height();



            if (x >= 1000) {

                $("#processMessage").addClass("biggerPopUp");

                $("#processMessage").css("position", "absolute");

                $("#processMessage").css("top", 50);

                $("#processMessage").css("left", x / 5);

            } else if (x >= 800) {

                $("#processMessage").addClass("biggerPopUp");

                $("#processMessage").css("position", "absolute");

                $("#processMessage").css("top", 50);

                $("#processMessage").css("left", x / 5);

            } else {

                $("#processMessage").css("width", x - 50);

                $("#processMessage").css("position", "absolute");

                $("#processMessage").css("top", 25);

                $("#processMessage").css("left", 25);

            }





            //alert($(window).height());   // returns height of browser viewport

            //alert($(document).height()); // returns height of HTML document

            //alert($(window).width());   // returns width of browser viewport

            //alert($(document).width());



        }



        function HideProgress() {



            $('#progressBackgroundFilter').hide();

            $('#processMessage').hide();

        }
