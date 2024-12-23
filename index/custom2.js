    function searchlab(alm) {

    	// alert(alm);

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("show").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "getlabourresult.php?q=" + alm, true);
      xmlhttp.send();
  }


    