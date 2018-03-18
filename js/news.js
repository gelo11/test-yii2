var newsTab = (function () {
    var newsClick = function(event) {
        event.preventDefault();
        $.ajax({
            url    : $(this).attr('href'),
            success: function (response) {
                $('#latest_new_content').html(response);
            },
            error  : function () {
                console.log('internal server error');
            }
        });
    };

    var bindFunctions = function() {
        $('.latest-news-link').on('click', newsClick)
    };

    var init = function() {
        bindFunctions();
    };

    return {
        init: init,
    };

})();
newsTab.init();