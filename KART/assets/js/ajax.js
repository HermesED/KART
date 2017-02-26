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
    var noprodi=['510','520','310','320']
    var d = new Date();
    var tahun = d.getFullYear().toString();

    var prodi = {
        '510': "S1 - Sistem Informasi",
        '520': "S1 - Teknik Informatika",
        '310': "D3 - Sistem Informasi",
        '320': "D3 - Teknik Informatika"
    }
    
    var sel      = prodi[$(this).val().substr(0,3)];
    var angkatan = $("#dftrnim").val().substr(3,2);

    if(sel) {
        $('#dftrprodi option[value="' + sel + '"]').attr("selected", "selected");
        $("#dftrthn").val("20"+angkatan);
    }
    else{
        ////
    }

    if (noprodi.indexOf($(this).val().substr(0,3)) < 0 || parseInt($(this).val().substr(3,2))+2000>tahun){
        $("#dftrnim").attr("placeholder", "NIM Ini Tidak Valid!").val("").focus();
        $("input[type='submit']").attr("disabled", true);
        $("#dftrnama").attr("disabled", true);
        $("#dftremail").attr("disabled", true);
        $("#dftrthn").attr("disabled", true);
        $("#software").attr("disabled", true);
        $("#dftrhp").attr("disabled", true);
    }
    else
    {
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
    }
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

$("#dftrhp").change( function(){
    var nohp=['081','082','085','089','087']

    if (nohp.indexOf($(this).val().substr(0,3)) < 0){
        $("#dftrhp").attr("placeholder", "Bukan Nomor HP").val("").focus();}
    else{
        //
    }
} );

//$("#dftrthn").change( function(){
//    var d = new Date();
//    var tahun = d.getFullYear().toString();

//    $("#dftrthn").val(tahun);
//} );

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
$("#mbnim").change( function(){
    var noprodi=['510','520','310','320']
    var d = new Date();
    var tahun = d.getFullYear().toString();

    var prodi = {
        '510': "S1 - Sistem Informasi",
        '520': "S1 - Teknik Informatika",
        '310': "D3 - Sistem Informasi",
        '320': "D3 - Teknik Informatika"
    }
    
    var sel      = prodi[$(this).val().substr(0,3)];
    var angkatan = $("#mbnim").val().substr(3,2);

    if(sel) {
        $('#mbjurusan option[value="' + sel + '"]').attr("selected", "selected");
        $("#mbangkatan").val("20"+angkatan);
    }
    else{
        ////
    }

    $.ajax({
        url: "ajax/ceknim",
        data: { "nim" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#mbnim").attr("placeholder", "NIM Ini Sudah Ada!").val("").focus();
                $("input[type='submit']").attr("disabled", true);
                $("#mbnama").attr("disabled", true);
                $("#mbangkatan").attr("disabled", true);
            } else {
                $("input[type='submit']").removeAttr("disabled");
                $("#mbnama").removeAttr("disabled");
                $("#mbangkatan").removeAttr("disabled");
            }
        }
    });
} );
