		$(window).scroll(startCounter);
		function startCounter() {
		    if ($(window).scrollTop() > 200) {
		        $(window).off("scroll", startCounter);
		        $('.number').each(function () {
		            var $this = $(this);
		            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
		                duration: 4000,
		                easing: 'swing',
		                step: function () {
		                    $this.text(Math.ceil(this.Counter));
		                }
		            });
		        });
		    }
		}