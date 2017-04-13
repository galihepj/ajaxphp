<html>
<head>
  <script>
     if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
               xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
     }


     
     function editUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
               xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","edituser.php?q="+str,true);
        xmlhttp.send();
     }
     }

     function update() {
          var id  = document.getElementById('id').value;
     var firstname = document.getElementById('firstname').value;
     var lastname = document.getElementById('lastname').value;
     var age = document.getElementById('age').value;
     var hometown = document.getElementById('hometown').value;
     var job = document.getElementById('job').value;
    
               xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","updateuser.php?id=" + id + "&firstname=" + firstname + "&lastname=" + lastname + "&age=" + age + "&hometown=" + hometown + "&job=" + job,true);
        xmlhttp.send();
     
}

</script>
</head>
<body>
  <h1>DATA KARYAWAN CV AKAKOM SEJAHTERA</h1>
  <h4>Klik pada nama karyawan untuk melihat data, dan pilih radio button untuk mengedit</h4>
  <span id="1" onclick="showUser(this.id)">Karyawan 1</span>
  <input type="radio" name="b" id="1"="" onclick ="editUser(this.id)">
   </br> <span id="2" onclick="showUser(this.id)"> Karyawan 2</span>
   <input type="radio" name="b" id="2"="" onclick ="editUser(this.id)">
    </br><span id="3" onclick="showUser(this.id)"> Karyawan 3 </span>
    <input type="radio" name="b" id="3"="" onclick ="editUser(this.id)">
    </br><span id="4" onclick="showUser(this.id)" >Karyawan 4 </span>
    <input type="radio" name="b" id="4"="" onclick ="editUser(this.id)">
    <br/>
    <br/>
    
<div id="txtHint"><b>Data Karyawan akan muncul disini</b></div>

</body>
</html>
