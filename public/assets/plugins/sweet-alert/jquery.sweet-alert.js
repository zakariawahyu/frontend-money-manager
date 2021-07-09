$(function(e) {
    $(".swal-delete").click(function () {
        url = $(this).data("url");
        token = $("input[name=_token]").val();
        swal({
            title: "Are you sure you want to delete this data?",
            text: "After you delete this data, there's no way to get it back",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            confirmButtonText: "Yes"
        }, function () {
            $.ajax({
                url: url,
                type: "DELETE",
                data: {
                    "_token": token
                },
                success: function() {
                    swal({
                        title: "Data has been successfully deleted!",
                        text: "This page will be redirected automatically, please wait ...",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000
                    }, function () {
                        location.reload();
                    });
                },
            });
        });
    });
});
