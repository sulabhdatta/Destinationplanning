   <!DOCTYPE html>
<html>
    <head>
        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <style>
            div{
                background-color: orange;
                height:200px;
                width:200px;
                
            }
            
        </style>
        
    </head>
    <body bgcolor="red">
        <div id="div1">
       
        </div>
        <img src="images/moon.png" id="div" style="opacity:0.5;height:200px;width:200px;"/>
        <script>
   $(function(){
        var x = $("#div");
        x.animate({opacity:1},3000);
    });
    </script>
    </body>
   
</html>

