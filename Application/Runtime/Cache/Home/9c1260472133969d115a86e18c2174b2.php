<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .page_ul {
            display: none;
        }
        
        .show_ul {
            display: block;
        }
    </style>
</head>
<body>
<table>
    <th>
        <tr>
            <td>id</td>
            <td>名字</td>
            <td>地址</td>
        </tr>
    </th>
    <tbody>
    <?php if(is_array($pic_list)): $i = 0; $__LIST__ = $pic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["save_name"]); ?></td>
            <td><?php echo ($vo["save_path"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<div><?php echo ($show); ?></div>

<div class="page" id="page">
    <p>id 名字 地址</p>
    <span id="pagenation"><button class="last">上一页</button>|<button class="next">下一页</button></span>
</div>

<script src="/first/Public/js/lib/jquery-3.2.1.js"></script>
<script>
    $().ready(function () {
        var parentNode = document.getElementById('page');   //容器
        $.post('ajax_page', function (data) {
            //遍历object可以用$.each 同时也可以用javascript 的 for in
            var count = Object.keys(data).length;
            var pageSize = 10; //每页条目数
            var pageNum = Math.ceil(count / pageSize);//页数
            var curPage = 0; //相当于limit后的起始页

            //按页数循环
            for (var i = 1; i < pageNum + 1; i++) {
                var ulNode = document.createElement('ul');
                ulNode.className = 'page_ul';
                (curPage == 0) && (ulNode.className = 'page_ul show_ul');
                //创建ul 个数由分页公式决定 并且将相应的li append到li中
                //todo 将li加到ul下
                //j的范围应该是起始的序号 和 截至的序号 长度为pageSize（10）
                for (var j = (curPage * pageSize) + 1; j < (curPage + 1) * pageSize + 1 && j < count + 1; j++) {
                    var liNode = document.createElement('li');
                    liNode.innerText = data[j].id + ' | ' + data[j]['save_name'] + ' | ' + data[j]['save_path'];
                    ulNode.appendChild(liNode);
                }
                parentNode.insertBefore(ulNode, document.getElementById('pagenation'));
                curPage++;
                flip_over();
            }
        });

        //todo 翻页如果前后可翻页就显示可点击。点击之后将show_ul添加到翻到的页
        $('.last').click(function () {
            $('.show_ul').removeClass('show_ul').prev().addClass('show_ul');
            flip_over();
        });

        $('.next').click(function () {
            $('.show_ul').removeClass('show_ul').next().addClass('show_ul');
            flip_over();
        });
    });

    function flip_over() {
        $('.show_ul').prev('.page_ul').length ? $('.last').removeAttr('disabled') : $('.last').attr('disabled', 'disabled');
        $('.show_ul').next('.page_ul').length ? $('.next').removeAttr('disabled') : $('.next').attr('disabled', 'disabled');
    }

</script>
</body>
</html>