<head>
    <style>
        input {
            margin-left: 5%;
        }
    </style>
    <meta charset="utf-8">
    <script>
        function showResult(str) {
            if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","model/getuser.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<form>
    <input type="text" size="30" onkeyup="showResult(this.value)">
    <div id="livesearch"></div>
</form>
<br>
<div id="txtHint"><b>Zoek naar artikelen</b></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
