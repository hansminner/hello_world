$().ready(function () {
    $('.select-list dl').each(function () {
        $(this).children('dd').click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');
            var index = $(this).parent('dl').attr('name');
            if ($(this).hasClass("select-all")) {
                $("#" + index).remove();
            } else {
                var copyText = $(this).clone();
                if ($("#" + index).length > 0) {
                    $("#" + index + " a").html($(this).text());
                } else {
                    $('.select-result dl').append(copyText.attr('id', index));
                }
            }
        });
    });

    $(document).on('click', '.select-result dd', function () {
        var index = $(this).attr('id');
        if ($(this).attr('class') != 'select-no') {
            $(this).remove();
            $("dl[name=" + index + "]").children("dd[class=select-all]").addClass('selected').siblings().removeClass('selected');
        }
    });

    $(document).on('click', '.select dd', function () {
        if ($('.select-result dd').length > 1) {
            $('.select-no').hide();
        } else {
            $('.select-no').show();
        }
    })
});