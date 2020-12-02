/**
 * Created by PUSKOM on 7/3/2017.
 */
function ajaxFunction(form) {
    if($(form).data('confirm')=='1'){      
                    swal({
                    title: "PERHATIAN !",
                    text: "Data  akan disimpan, dan tidak bisa dirubah kembali!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#EF5350",
                    confirmButtonText: "Ya, Simpan!",
                    cancelButtonText: "Tidak, Batalkan!",
                    closeOnConfirm: true,
                    closeOnCancel: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        ajaxFunction_submit(form);
                     }
                });        
    }else{
        ajaxFunction_submit(form);
    }
}
function ajaxFunction_submit(form) {
    var l = Ladda.create(form.querySelector('.btn-ladda-spinner')).start();
    var data = new FormData($(form)[0]);
    var validator = $(form).validate();
    $.jGrowl.defaults.closer = false;
    $.ajax({
        type: "POST",
        url: $(form).attr('action'),
        data: data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function(result) {
            l.stop();
            if(result.error){
                $.jGrowl(result.msg_body, {
                    header: result.msg_header,
                    theme: 'alert-styled-left bg-danger',
                    afterOpen: function() {
                        validator.showErrors(result.form_error);
                    }
                });
            }else{
                $.jGrowl(result.msg_body, {
                    header: result.msg_header,
                    theme: 'alert-styled-left bg-success',
                    afterOpen: function() {
                        if(result.redirect_url){
                            setTimeout(function(){
                                window.location.href = result.redirect_url;
                                //alert(result.redirect_url);
                            }, 1500);
                        }
                        if(result.redirect_ajax){
                            load_url(result.div,result.redirect_ajax);
                            }
                    }
                });
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            l.stop();
            console.log(textStatus, errorThrown);
        }
    });
}
    function ajax_confirm(header,msg,type) {
            swal({
                    title: header,
                    text: msg,
                    type: type,
                    showCancelButton: false,
                    confirmButtonColor: "#EF5350",
                    confirmButtonText: "OK"
                });
        }
function del(url, id) {
            swal({
                    title: "Anda Yakin?",
                    text: "Data  akan terhapus!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#EF5350",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Tidak, Batalkan!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {id: id},
                            success: function (response) {
                                swal({
                                    title: "Terhapus!",
                                    text: "Data telah terhapus.",
                                    confirmButtonColor: "#66BB6A",
                                    type: "success"
                                });
                                $('tbody tr#' + id).remove();
                            }
                        });
                    }
                    else {
                        swal({
                            title: "Batal",
                            text: "Data tidak terhapus",
                            confirmButtonColor: "#2196F3",
                            type: "error"
                        });
                    }
                });
        }
function load_url(div,url){
     $(div).html("Mohon Menunggu...");
       $.ajax({ 
            url		: url,
			 success: function(response){
                $(div).html(response);
            }
        });
    }