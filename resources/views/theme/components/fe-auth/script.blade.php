<!-- Header Menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/our-partners.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/range-slider.js') }}"></script>


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

<script>
    $(document).ready(function() {
        $('input[type="radio"]').change(function() {
            $('.showall').addClass('custom-diplay-hidden')
            $('#' + $(this).val().toLowerCase()).removeClass('custom-diplay-hidden')
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#ielts-checked').change(function() {
            if ($('#ielts-checked:checked').length == 1) {
                $('#ielts').removeClass('custom-diplay-hidden');
            } else {
                $('#ielts').addClass('custom-diplay-hidden');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#pte-checked').change(function() {
            if ($('#pte-checked:checked').length == 1) {
                $('#pte').removeClass('custom-diplay-hidden');
            } else {
                $('#pte').addClass('custom-diplay-hidden');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#duolingo-checked').change(function() {
            if ($('#duolingo-checked:checked').length == 1) {
                $('#duolingo').removeClass('custom-diplay-hidden');
            } else {
                $('#duolingo').addClass('custom-diplay-hidden');
            }
        });
    });
</script>
<!-- Modal Video End -->
