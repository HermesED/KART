/**
 *AJAX JAVASCRIPT
 */
//# sourceMappingURL=lightbox.min.map

$("#dftrnim").change( function(){
    $.ajax({
        url: "ajax/ceknim",
        data: { "nim" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#dftrnim").attr("placeholder", "NIM Ini Sudah Terdaftar!").val("").focus();
                $("input[type='submit']").attr("disabled", true);
                $("#dftrnama").attr("disabled", true);
                $("#dftremail").attr("disabled", true);
                $("#dftrthn").attr("disabled", true);
                $("#software").attr("disabled", true);
                $("#dftrhp").attr("disabled", true);
            } else {
                $("input[type='submit']").removeAttr("disabled");
                $("#dftrnama").removeAttr("disabled").focus();
                $("#dftremail").removeAttr("disabled");
                $("#dftrthn").removeAttr("disabled");
                $("#software").removeAttr("disabled");
                $("#dftrhp").removeAttr("disabled");
            }
        }
    });
} );
$("#dftrnama").change( function(){
    $.ajax({
        url: "ajax/ceknama",
        data: { "nama" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#dftrnama").attr("placeholder", "Nama Ini Sudah Ada!").val("").focus();
                $("input[type='submit']").attr("disabled", true);
                $("#dftremail").attr("disabled", true);
                $("#dftrthn").attr("disabled", true);
                $("#software").attr("disabled", true);
                $("#dftrhp").attr("disabled", true);
            } else {
                $("input[type='submit']").removeAttr("disabled");
                $("#dftremail").removeAttr("disabled").focus();
                $("#dftrthn").removeAttr("disabled");
                $("#software").removeAttr("disabled");
                $("#dftrhp").removeAttr("disabled");
            }
        }
    });
} );
$("#dftremail").change( function(){
    $.ajax({
        url: "ajax/cekemail",
        data: { "email" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#dftremail").attr("placeholder", "Email Ini Sudah Terdaftar!").val("").focus();
                $("input[type='submit']").attr("disabled", true);
                $("#dftrthn").attr("disabled", true);
                $("#software").attr("disabled", true);
                $("#dftrhp").attr("disabled", true);
            } else {
                $("input[type='submit']").removeAttr("disabled");
                $("#dftrthn").removeAttr("disabled");
                $("#software").removeAttr("disabled");
                $("#dftrhp").removeAttr("disabled");
            }
        }
    });
} );
$("#nimbtl").change( function(){
    $.ajax({
        url: "ajax/ceknimbtl",
        data: { "nim" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#nimbtl").attr("placeholder", "NIM Ini Sudah Ada Dalam List!").val("").focus();
                $("input[type='submit']").attr("disabled", true);
                $("#namabtl").attr("disabled", true);
                $("#angkatanbtl").attr("disabled", true);
                $("#alasan").attr("disabled", true);
                $("#pe_saran").attr("disabled", true);
            } else {
                $("input[type='submit']").removeAttr("disabled");
                $("#namabtl").removeAttr("disabled").focus();
                $("#angkatanbtl").removeAttr("disabled");
                $("#alasan").removeAttr("disabled");
                $("#pe_saran").removeAttr("disabled");
            }
        }
    });
} );

$("#likenews").click( function(){
    $.ajax({
        url: "kegiatan/likenews",
        success: function(result){
            $("#jumlahlike").html( result );
        }
    });

});
//$(document).ready(function(){ 
  //$("#form").find("input[type=textarea], input[type=password], textarea").each(function(ev){
    //if(!$(this).val()) { 
     //$(this).attr("placeholder", "Type your answer here");
  //}
  //});
//});
