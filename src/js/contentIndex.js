$(function(){
    $('.p-contentIndex__head').click(function(){
        let marker = $('.p-contentIndex__marker');
        let markerText = marker.text().trim(); // 余計な空白を削除
        if (markerText === '▼') {
            marker.text('▶');
        } else {
            marker.text('▼');
        }

        let body = $('.p-contentIndex__body');
        if (body.hasClass('hidden')) {
            body.removeClass('hidden');
        } else {
            body.addClass('hidden');
        }
    });
});