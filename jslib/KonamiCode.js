function  KonamiComputer(){

    var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";

    $(document).keydown(function(e) {

        kkeys.push( e.keyCode );

        if ( kkeys.toString().indexOf( konami ) >= 0 ) {

            $(document).unbind('keydown',arguments.callee);

            // do something awesome
            window.location = "http://levelgame.net";
            //window.location = 'http://www.levelgame.net'
        }

    });

}

//TypeName.prototype.TypeOut = function() {
//    var that=this;
//    $(function () {
//        $(".Typed").typed({
//            strings: ["Introduction", that.Name],
//            typeSpeed: 50
//        });
//    });
//};