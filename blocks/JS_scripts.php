<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>

        $('#menuShow').click (function(){
            if($('#mobileMenu').is(':visible'))
                $('#mobileMenu').hide();
            else
                $('#mobileMenu').show();

        });

        $(document).scroll (function (){
            if($(document).width () > 785){
            if ($(document).scrollTop () > $('header').height() +10)
                $('nav').addClass ('fixed');
            else
                $('nav').removeClass ('fixed');
            }

        });

        window.onresize = function (event){
            $('#mobileMenu').hide();

        };

    </script>