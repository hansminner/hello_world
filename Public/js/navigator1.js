$().ready(function () {
    //添加情况
    $('#select1 dd').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
        if ($(this).hasClass("select-all")) {
            $("#selectA").remove();
        } else {
            var copyText = $(this).clone();
            if ($("#selectA").length > 0) {
                $("#selectA a").html($(this).text());
            } else {
                $('.select-result dl').append(copyText.attr('id', 'selectA'));
            }
            // 手动创建不如直接复制节点可靠
            // $('.select-result dl').append("<dd class='selected'><a href='#'>"+resText+"</a></dd>");
        }
    });

    $('#select2 dd').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
        if ($(this).hasClass("select-all")) {
            $("#selectB").remove();
        } else {
            var copyText = $(this).clone();
            if ($("#selectB").length > 0) {
                $("#selectB a").html($(this).text());
            } else {
                $('.select-result dl').append(copyText.attr('id', 'selectB'));
            }
            // 手动创建不如直接复制节点可靠
            // $('.select-result dl').append("<dd class='selected'><a href='#'>"+resText+"</a></dd>");
        }
        // 手动创建不如直接复制节点可靠
        // $('.select-result dl').append("<dd class='selected'><a href='#'>"+resText+"</a></dd>");

    });

    $('#select3 dd').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
        if ($(this).hasClass("select-all")) {
            $("#selectC").remove();
        } else {
            var copyText = $(this).clone();
            if ($("#selectC").length > 0) {
                $("#selectC a").html($(this).text());
            } else {
                $('.select-result dl').append(copyText.attr('id', 'selectC'));
            }
            // 手动创建不如直接复制节点可靠
            // $('.select-result dl').append("<dd class='selected'><a href='#'>"+resText+"</a></dd>");
        }
        // 手动创建不如直接复制节点可靠
        // $('.select-result dl').append("<dd class='selected'><a href='#'>"+resText+"</a></dd>");

    });
    //删除情况
    $(document).on('click', '#selectA', function () {
        $(this).remove();
        $("#select1 .select-all").addClass('selected').siblings().removeClass('selected');
    });
    $(document).on('click', '#selectB', function () {
        $(this).remove();
        $("#select2 .select-all").addClass('selected').siblings().removeClass('selected');
    });
    $(document).on('click', '#selectC', function () {
        $(this).remove();
        $("#select3 .select-all").addClass('selected').siblings().removeClass('selected');
    });


    // $('.select dd').click(function () {
    //     if ($('.select-result dd').length > 1) {
    //         $('.select-no').hide();
    //     } else {
    //         $('.select-no').show();
    //     }
    // })

    $(document).on('click', '.select dd', function () {
        if ($('.select-result dd').length > 1) {
            $('.select-no').hide();
        } else {
            $('.select-no').show();
        }
    })

});