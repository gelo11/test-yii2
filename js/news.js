var newsTab = (function () {
    var newsSwitch = function (url) {
        $.ajax({
            url: url,
            success: function (response) {
                $('#latest_new_content').html(response);
                $('a[href="' + url + '"]').addClass('active');
            },
            error: function () {
                console.log('internal server error');
            }
        });
    }

    var newsClick = function (event) {
        event.preventDefault();
        $('.latest-news-link.active').removeClass('active');
        var el = $(this);
        history.pushState(null, null, el.attr('href'));
        var url = window.location.pathname + window.location.search;
        newsSwitch(url);
    };

    var bindFunctions = function () {
        $('.latest-news-link').on('click', newsClick)
    };

    var load = function () {
        var url = $('.latest-news-link.active').attr('href');
        newsSwitch(url);
    }

    window.onpopstate = function (event) {
        if (window.location.pathname == '/news/view') {
            $('.latest-news-link.active').removeClass('active');
            var url = window.location.pathname + window.location.search;
            newsSwitch(url);
        }
    }

    var init = function () {
        bindFunctions();
        load();
    };

    return {
        init: init,
    };

})();
newsTab.init();