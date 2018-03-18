var actionTab = (function () {
    var actionSwitch = function (url) {
        $.ajax({
            url: url,
            success: function (response) {
                $('#latest_action_content').html(response);
                $('a[href="' + url + '"]').addClass('active');
            },
            error: function () {
                console.log('internal server error');
            }
        });
    }

    var actionClick = function (event) {
        event.preventDefault();
        $('.latest-action-link.active').removeClass('active');
        var el = $(this);
        history.pushState(null, null, el.attr('href'));
        var url = window.location.pathname + window.location.search;
        actionSwitch(url);
    };

    var bindFunctions = function () {
        $('.latest-action-link').on('click', actionClick)
    };

    var load = function () {
        var url = $('.latest-action-link.active').attr('href');
        actionSwitch(url);
    }

    var actionHistory = function () {
        if (window.location.pathname == '/action/view') {
            $('.latest-action-link.active').removeClass('active');
            var url = window.location.pathname + window.location.search;
            actionSwitch(url);
        }
    }

    window.addEventListener("popstate", actionHistory);

    var init = function () {
        bindFunctions();
        load();
    };

    return {
        init: init,
    };

})();
actionTab.init();