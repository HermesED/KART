/**
 * Lightbox v2.7.1
 * by Lokesh Dhakar - http://lokeshdhakar.com/projects/lightbox2/
 *
 * @license http://creativecommons.org/licenses/by/2.5/
 * - Free for use in both personal and commercial projects
 * - Attribution requires leaving author name, author link, and the license info intact
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