$(function() {
    var updateTimerID;
    var updateText;

    // Allow ajax prefilters to be added/removed dynamically
    // eslint-disable-next-line new-cap
    var preFilters = $.Callbacks();
    $.ajaxPrefilter(preFilters.fire);


    $(".discover .row").isotope({
        // options
        itemSelector : ".book",
        layoutMode : "fitRows"
    });

    $("#bookDetailsModal")
        .on("show.bs.modal", function(e) {
            var $modalBody = $(this).find(".modal-body");

            // Prevent static assets from loading multiple times
            var useCache = function(options) {
                options.async = true;
                options.cache = true;
            };
            preFilters.add(useCache);

            $.get(e.relatedTarget.href).done(function(content) {
                $modalBody.html(content);
                preFilters.remove(useCache);
            });
        })
        .on("hidden.bs.modal", function() {
            $(this).find(".modal-body").html("...");
        });

    // $(window).resize(function() {
    //     $(".discover .row").isotope("reLayout");
    // });
});
