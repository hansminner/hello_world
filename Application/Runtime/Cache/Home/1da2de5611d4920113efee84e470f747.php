<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="post" id="upload_form">
    <ol>
        <li><label for="one">图片一</label><input type="file" name="one" id="one"></li>
        <br>
        <li><label for="two">图片二</label><input type="file" name="two" id="two"></li>
        <br>
        <li><label for="three">图片三</label><input type="file" name="three" id="three"></li>
        <br>
        <li><label for="four">图片四</label><input type="file" name="four" id="four"></li>
        <br>
        <li><label for="funf">图片五</label><input type="file" name="five" id="funf"></li>
        <br>
        <li><label for="sechs">图片六</label><input type="file" name="six" id="sechs"></li>
    </ol>
    
    <input type="submit">
    <input type="button" id="uploadPic" value="ajax提交">
</form>
<input type="file" name="one" id="try">
<br/>
<br/>
<br/>
<form action="" enctype="multipart/form-data" id="upload_serialize">
    <ol>
        <li><label for="ein">图片一</label><input type="text" name="one" id="ein"></li>
        <br>
        <li><label for="zwei">图片二</label><input type="text" name="two" id="zwei"></li>
        <br>
        <li><label for="drei">图片三</label><input type="text" name="three" id="drei"></li>
        <br>
    </ol>
    <input type="button" id="uploadData" value="ajax序列化">
</form>
<br/>
<br/>
<br/>
<form action="upload_one" enctype="multipart/form-data" method="post">
    <li><label for="once">上传一张</label><input type="file" name="once" id="once"></li>
    <li><input type="submit"></li>
</form>

<script src="/first/Public/js/lib/jquery-3.2.1.js"></script>
<script>
    $().ready(function () {
        $('#uploadPic').click(function () {
            var formData = new FormData($('#upload_form')[0]);
            // var formData = new FormData();
            formData.append('file', $('#try')[0].files[0]);

            // $.ajax({
            //     url: "upload",
            //     type: "POST",
            //     data: formData,
            //     /**
            //      *必须false才会自动加上正确的Content-Type  不设置内容类型
            //      */
            //     contentType: false,
            //     /**
            //      * 必须false才会避开jQuery对 formdata 的默认处理 不处理数据
            //      * XMLHttpRequest会对 formdata 进行正确的处理
            //      */
            //     processData: false,
            //     success: function (data) {
            //         if (data.status == "true") {
            //             alert("上传成功！");
            //         }
            //         if (data.status == "error") {
            //             alert(data.msg);
            //         }
            //         $("#imgWait").hide();
            //     },
            //     error: function () {
            //         alert("上传失败！");
            //         $("#imgWait").hide();
            //     }
            // });
            $.post({
                url: '',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status == "true") {
                        alert("上传成功！");
                    }
                    if (data.status == "error") {
                        alert(data.msg);
                    }
                }
            });
        });

        //ajax序列化提交表单无文件流
        $('#uploadData').click(function () {
            $.ajax({
                url: "ajax_serialize_upload",
                type: "POST",
                data: $('#upload_serialize').serialize(),
                success: function(data) {
                },
                error: function(data) {
                }
            });

        });
    })
</script>
</body>
</html>