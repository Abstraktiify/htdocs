<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
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
            
            function changeBodyColor() {
                r = Math.floor(Math.random()*255);
                g = Math.floor(Math.random()*255);
                b = Math.floor(Math.random()*255);
                document.body.style.backgroundColor =       "rgb("+r+","+g+","+b+")";
            }
            
            function clearBody() {
                
                document.body.innerHTML="";
                
                var h1 = document.createElement("h1");
                var t = document.createTextNode("Hecking site just got cleared boii");
                h1.appendChild(t);
                document.body.appendChild(h1);

                }
            
            function greenBorderBG() {
                var x = document.getElementById("actualBorder");
                
                x.style.backgroundColor = "green";
                
            }
            
            function redBorderBG() {
                var x = document.getElementById("actualBorder");
                
                x.style.backgroundColor = "red";
                
            }
            
            function blueBorderBG() {
                var x = document.getElementById("actualBorder");
                
                x.style.backgroundColor = "blue";
                
            }
            
            function resetBorderBG() {
                var x = document.getElementById("actualBorder");
                
                x.style.backgroundColor = "white";
            }
            
            function numbers() {
                
            }
            
        </script>
        
        <div id="main">
        
            <p>Uppgift 1</p>
            
        <button id="alertBtn" type="button" onclick="alertClick()">Alert</button>
        
        <div id="img">
            <p>Uppgift 2</p>
            <img onmouseover="picHover(this)" onmouseout="picNoHover(this)" src="084.png">
        </div>
        
        <div id="hideShowImg">
            <p>Uppgift 3</p>
            <div id="hideShowImgBtn">
                <button id="hideImgButton" type="button" onclick="hideShowImg()">Toggle Picture</button>
            </div>
        </div>
        
        <div id="changeBGColor">
            <p>Uppgift 4</p>
            <button id="bgColorBtn" onclick="changeBodyColor()">Change Color</button>
        </div>
        
            </div>

        
        <div id="clearBtn">
            <p>Uppgift 5</p>
            <button onclick="clearBody()" id="clearButton">Clear Site</button>
        </div>
        
        <div id="borderBGChange">
            
            <p>Uppgift 6</p>
            
            <button onclick="greenBorderBG()" id="green">Green</button>
            
            <button onclick="blueBorderBG()" id="red">Blue</button>
            
            <button onclick="redBorderBG()" id="blue">Red</button>
            
            <button onclick="resetBorderBG()" id="reset">Reset</button>
            
            <div id="actualBorder">
                
            </div>
        
        </div>
        
        <div id="siffror">
            
        </div>
            
    </body>
    
</html>