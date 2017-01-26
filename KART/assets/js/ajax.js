$("#nimdftr").change( function(){
    $.ajax({
        url: "ajax/ceknim",
        data: { "nim" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_nim").html( "NIM sudah terdaftar" );
                $(":submit").attr("disabled", true);
            } else {
                $("#warning_nim").html( "NIM OK" );
                $(":submit").removeAttr("disabled");
            }
        }
    });
} );