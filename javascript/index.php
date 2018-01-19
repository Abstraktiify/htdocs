<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <button id="alertBtn" type="button" onclick="alertClick()">Alert</button>
        
        <script>
            
            function alertClick() {
                alert("ayyyyLMAO");
            }
            
            function picHover(x) {
                x.style.height = "128px";
                x.style.width = "128px";
            }
            
            function picNoHover(x) {
                x.style.height = "64px";
                x.style.width = "64px";
            }
            
            function hideShowImg() {
                var x = document.getElementById("img");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            
        </script>
        
        <div id="img">
            <img onmouseover="picHover(this)" onmouseout="picNoHover(this)" src="084.png">
        </div>
        
        <div id="hideShowImg">
            <div id="hideShowImgBtn">
                <button id="hideImgButton" type="button" onclick="hideShowImg()">Toggle Picture</button>
            </div>
        </div>
        
    </body>
    
</html>