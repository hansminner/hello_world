<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/first/Public/css/uploadify.css">
</head>
<body>
<h1>Uploadify Demo</h1>
<form action="" enctype="multipart/form-data">
    <div id="queue"></div>
    <input type="file" id="file_upload_1" name="file_upload_1">
    <!--<button class="uplodify_button">上传</button>-->
</form>

<script src="/first/Public/js/lib/jquery-3.2.1.js"></script>
<script src="/first/Public/js/plugin/uploadify/jquery.uploadify.js"></script>
<script>
    $(function () {
        $("#file_upload_1").uploadify({
            height: 30,
            swf: '/first/Public/js/plugin/uploadify/uploadify.swf',
            uploader: '<?php echo U("Index/uploadify");?>',
            onUploadComplete : function(file) {
                // alert('The file ' + file.name + ' finished processing.');
            },
            onUploadSuccess:function (file,data,response) {
                //response = boolean true:false
                console.log(file);
            },
            width: 120
        });
    });
</script>
</body>
</html>