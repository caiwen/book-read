$(function () {
    $("#ajaxbut").click(function () {
        var form = new FormData($("#formData")[0]);
        $.post("/conf-center/publish", {key: form.get('key'), value: form.get('value')},
            function (data) {
                window.location.reload()
            });
    })
});