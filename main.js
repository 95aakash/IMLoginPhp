
	function addtoev() {
        var bns = document.getElementsByTagName("button");
        for (i = 0; i < bns.length; i++) {
            bns[i].addEventListener("click", function() {
            alert('will take time..');
            document.getElementById(this.id).style.display = "none";
             document.getElementById("overlay").style.display = "block";

             window.history.pushState(null, "", window.location.href);
         window.onpopstate = function () {
            //  alert('back button disabled');
             window.history.pushState(null, "", window.location.href);
         };
    
            window.location.href = "../results.php?id="+this.id;
          
        });
            }
            
        }
       
    window.addEventListener("load",function() {
    addtoev();
    });