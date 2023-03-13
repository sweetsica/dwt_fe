/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro


** Custom Repeater JS

----------------------------------------------*/

$(function () {
    'use strict';

    $(document).ready(function () {
        $('.repeater-hopPhongBan').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
});
