<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="{!! asset('public/js/jquery-3.1.1.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('public/js/jquery-ui.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('public/js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('public/js/jquery.scrollUp.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('public/js/main.js') !!}"></script>

        <link href="{!! asset('public/css/jquery-ui.css') !!}" rel="stylesheet">
        <link href="{!! asset('public/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('public/css/animate.css') !!}" rel="stylesheet">
        <link href="{!! asset('public/css/main.css') !!}" rel="stylesheet">

        <title>Test Jquery</title>

        <link type="text/css" href="">

        <script type="text/javascript">
//            $(selector).hide(speed,callback);
            $(document).ready(function (){
                $('#hide').click(function (){
                    $('p').hide(1000, function(){
                        alert("Hide ok!");
                    });
                });
                
                $('#show').click(function (){
                    $('p').show(1000);
                });
                $('#toggle').click(function (){
                    $('p1').toggle(1000);
                });
                
                //fade co callback
                $("#btn-fade-out").click(function(){
                    $("#div1").fadeOut();
                    $("#div2").fadeOut("slow");
                    $("#div3").fadeOut(3000);
                });
                $("#btn-fade-in").click(function(){
                    $("#div1").fadeIn();
                    $("#div2").fadeIn("slow");
                    $("#div3").fadeIn(3000);
                });
            });
        </script>

    </head>
    <body>
        <p id="p1">If you click on the "Hide" button, I will disappear.</p>

        <button id="hide">Hide</button>
        <button id="show">Show</button>
        <button id="toggle">Toggle</button><br><br>


        <button id="btn-fade-in">Fade in boxes</button>
        <button id="btn-fade-out">Fade out boxes</button><br><br>

        <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
        <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
        <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
    </body>
</html>

