$(function () {
    toastr.options.positionClass = 'toast-top-center';
    $("#codeDeploy").click(function () {
        var form = new FormData($("#codeDeployForm")[0]);
        $.ajax({
            url: "/code-deploy/publish",
            type: 'POST',
            data: {url: form.get('url'), commitId: form.get('commitId'),relativePath:form.get('relativePath')},
            dataType:'json',
            success: function (data) {
                toastr.success('发布成功');
            }
        })

    })
});