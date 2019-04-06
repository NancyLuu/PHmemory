window.getSort = function () {
    $.each($('#sortable').find('li'), function () {
        console.log(this.id);
    });
}
window.goback = function () {
    
    if (confirm('確定要取消嗎？')) {
        // user clicked on Yes
        history.go(-1)　// 返回上一頁
    }
    else {
        // user clicked on No
    }
}

$(document).ready(function () {

    //https://codepen.io/AndyJepkes/pen/OVaGrq
    var $list = $("#sortable").sortable({
        disabled: false
    });

    $('[data-z]').click(function (e) {
        var jTarget = $(e.target),
            dir = jTarget.data('dir'),
            jItem = $(e.currentTarget),
            jItems = $("#sortable"),
            index = jItems.index(jItem);

        switch (dir) {
            case 'up':
                if (index != 0) {
                    var item = $(this).detach().insertBefore(jItems[index - 1]);
                }
                break;
            case 'down':
                if (index != jItems.length - 1) {
                    var item = $(this).detach().insertAfter(jItems[index + 1]);
                }
                break;
        }
    });
});