$(function () {
    $("body").append("<img id='goTopButton' style='display:none; z-index: 5; cursor: pointer;' title='回到頂端'>");
    var img = "bntop01.png",
        location = 0.7,
        right = 90,
        opacity = 0.7,
        speed = 850,
        $button = $("#goTopButton"),
        $body = $(document),
        $win = $(window);
    $button.attr("src", img);
    window.goTopMove = function () {
        var scrollH = $body.scrollTop(),
            winH = $win.height(),
            css = { "top": winH * location + "px", "position": "fixed", "right": right, "opacity": opacity , "border-radius":"20px" };
        if (scrollH > 20) {
            $button.css(css);
            $button.fadeIn("slow");
        }
        else {
            css = { "transform": "none", "transition": "transform 1.5s ease 0.1s", "border":"none" };
            $button.css(css);
            $button.fadeOut("slow");
        }
    };
    $win.on({
        scroll: function () { goTopMove(); },
        resize: function () { goTopMove(); }
    });
    $button.on({
        mouseover: function () { $button.css("opacity", 1); },
        mouseout: function () { $button.css("opacity", opacity); },
        click: function () {
            css = { "transform": "translateY(100px) skew(20deg, 0deg)", "transition": "transform 1s ease 0s" ,"border":" #b18700 dotted 4px"};
            $button.css(css);
            $("html, body").animate({ scrollTop: 0 }, speed);
        }
    });
});