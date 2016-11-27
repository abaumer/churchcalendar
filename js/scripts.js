(function($) {
    var Scripts = {
        init: function() {
            this.bindEvents();
            this.localScroll();
            this.sticky();
        },

        bindEvents: function() {
          $(document).ready(function() {
            // Set Current Year Block
            var seasonid = $("#theseason").attr("data-season");
            $( "#block" + seasonid ).addClass("current").parent('li').addClass('active');
          });
        },

        localScroll: function() {
            $.localScroll.defaults.axis = 'y';
            $("#cal-menu").localScroll({
                queue: false,
                duration: 600,
                hash: false,
                offset: 0,
            });

            // $("#main-nav").localScroll({
            //     queue: false,
            //     duration: 800,
            //     hash: false,
            //     offset: -80,
            // });
        },

        sticky: function() {
            // Sticky nav
            document.addEventListener('DOMContentLoaded', function() {
                var topnav = $('#marker').waypoint(function(direction) {
                    console.log('content hit window top', direction);
                    if (direction === 'up') {
                        $('#cal-menu').removeClass('stuck');
                        $('body').removeClass('cal-stuck');
                    }
                    if (direction === 'down') {
                        $('#cal-menu').addClass('stuck');
                        $('body').addClass('cal-stuck');
                    }
                }, {
                    offset: '0px',
                });
            });
        },
    }

    Scripts.init();
})(jQuery);
