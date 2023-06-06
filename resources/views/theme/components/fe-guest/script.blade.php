<script src="{{ asset('assets/frontend/assets/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/our-partners.js') }}"></script>
<!-- Header Menu -->
<script>
    $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready

        // breakpoint and up
        $(window).resize(function() {
            if ($(window).width() >= 980) {

                // when you hover a toggle show its dropdown menu
                $(".navbar .dropdown-toggle").hover(function() {
                    $(this).parent().toggleClass("show");
                    $(this).parent().find(".dropdown-menu").toggleClass("show");
                });

                // hide the menu when the mouse leaves the dropdown
                $(".navbar .dropdown-menu").mouseleave(function() {
                    $(this).removeClass("show");
                });

                // do something here
            }
        });
    });
</script>
<!-- Header Menu End -->

<!-- New on Awolc Tab -->
<script>
    $('.nav-tabs-dropdown')
        .on("click", "li:not('.active') a", function(event) {
            $(this).closest('ul').removeClass("open");
        })
        .on("click", "li.active a", function(event) {
            $(this).closest('ul').toggleClass("open");
        });
</script>
<!-- New on Awolc Tab End -->

<!-- dropdown menu btn -->
<script>
    $('.dropdown-toggle').dropdown()
</script>
<!-- dropdown menu btn end -->

<!-- Modal Video -->
<script language="JavaScript">
    $(".VideoPopup").on('hidden.bs.modal', function(e) {
        $(".VideoPopup iframe").attr("src", $(".VideoPopup iframe").attr("src"));
    });
</script>
<!-- Modal Video End -->

{{-- <script>
    var $coverage_type = 'ocverage_type';

$.ajax({
  url: '/press/{coverage_type?}',
  type: 'GET',
  data: {$coverage_type : ocverage_type },
  success: function(response) {
    // Handle the response from the server
  },
  error: function(xhr) {
    // Handle any errors
  }
});

</script> --}}
