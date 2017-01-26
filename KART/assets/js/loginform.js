// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}


function dsbBtn() {
    document.getElementById("myBtn").disabled = true;
}

function undsbBtn() {
    document.getElementById("myBtn").disabled = false;
}


// Disable #x
$( "#x" ).prop( "disabled", true );
 
// Enable #x
$( "#x" ).prop( "disabled", false );


function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    } else {
        document.getElementById('ifYes').style.visibility = 'hidden';
    }
}

  $("#button3").click(function() {
  var y = document.getElementById("txtHiddenUname");
  y.type= "text";
	});


 $('#ADMIN').submit(function () {
 sendADMIN();
 return false;
})