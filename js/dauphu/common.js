
(function ($) {
    $(document).ready(function () {
        $("#modal-mobile .modal-esc").on("click", function () {
            $("#modal-mobile").hide();
        });
        $(".navmenu-wrap-mobile i.fa-bars").on("click", function () {
            $("#modal-mobile").show();
        });
    });

})(jQuery);

function ladiViewport() {
    var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
    var content = "user-scalable=no";
    if (width < 768) {
        content += ", width=375";
    } else {
        if (width < 960) {
            content += ", width=960";
        } else {
            content += ", width=device-width";
        }
    }
    var meta = document.querySelector('meta[name="viewport"]');
    if (meta == undefined) {
        meta = document.createElement('meta');
        meta.name = 'viewport';
        document.head.prepend(meta);
    }
    meta.content = content;
}
;