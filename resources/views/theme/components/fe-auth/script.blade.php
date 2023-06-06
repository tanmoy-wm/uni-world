<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#addStudentModalForm').submit(function(e) {
            e.preventDefault();
            $('#btnSubmitStudent').attr('disabled', true);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        $('#success-alert').show();
                        $('#btnSubmitStudent').attr('enabled', true);
                        $('#addStudentModalForm')[0].reset()
                        $('#btnSubmitStudent').attr('enabled', true);
                    }
                },
                url: "{{ route('agent.student.store') }}",
                data: formData,
                success: () => window.location.assign("{{ route('auth.dashboard') }}"),
                error: (response) => {
                    if (response.status === 422) {
                        console.console.log(response);
                    } else {
                        window.location.reload();
                    }
                }
            });
        });

        $('#step-1-next').attr('disabled', true);

        $('.country-checkbox').change(function() {
            var countryIsChecked = $('.country-checkbox').is(':checked');

            if (countryIsChecked) {
                $('#step-1-next').attr('disabled', false);
            } else {
                $('#step-1-next').attr('disabled', true);
            }
        });

        $('#step-2-next').attr('disabled', true);

        $('.applying_education_levels').change(function() {
            var eduLevelIsChecked = $('.applying_education_levels').is(':checked');
            if (eduLevelIsChecked) {
                $('#step-2-next').attr('disabled', false);
            } else {
                $('#step-2-next').attr('disabled', true);
            }
        });

        $('#step-3-next').attr('disabled', true);

        $('.preferred_stream').change(function() {
            var eduLevelIsChecked = $('.preferred_stream').is(':checked');
            if (eduLevelIsChecked) {
                $('#step-3-next').attr('disabled', false);
            } else {
                $('#step-3-next').attr('disabled', true);
            }
        });

        $('#step-4-next').attr('disabled', true);

        $('.preferred_month_of_starting').change(function() {
            var preferredIsChecked = $('.preferred_month_of_starting').is(':checked');
            if (preferredIsChecked) {
                $('#step-4-next').attr('disabled', false);
            } else {
                $('#step-4-next').attr('disabled', true);
            }
        });

        $('#step-5-next').attr('disabled', true);

        $('.budget').change(function() {
            var budgetIsChecked = $('.budget').is(':checked');
            if (budgetIsChecked) {
                $('#step-5-next').attr('disabled', false);
            } else {
                $('#step-5-next').attr('disabled', true);
            }
        });

        $('#step-10-next').attr('disabled', true);

        $('.permit_or_visa').change(function() {
            var visaIsChecked = $('.permit_or_visa').is(':checked');
            if (visaIsChecked) {
                $('#step-10-next').attr('disabled', false);
            } else {
                $('#step-10-next').attr('disabled', true);
            }
        });

        $('#step-14-next').attr('disabled', true);

        $('.english_test_type').change(function() {
            var engTestIsChecked = $('.english_test_type').is(':checked');
            if (engTestIsChecked) {
                $('#step-14-next').attr('disabled', false);
            } else {
                $('#step-14-next').attr('disabled', true);
            }
        });

        $('#preferences-form').submit(function(e) {
            e.preventDefault();
            $('#submit-modal').attr('disabled', true);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        // $('#success-alert').show();
                        $('#preferences-form').attr('enabled', true);
                        $('#addStudentModalForm')[0].reset()
                        $('#btnSubmitStudent').attr('enabled', true);
                    }
                },
                error: function(error) {
                    // $('#error-alert').html(erorr.responseJSON.message);
                    console.log(error);
                    // $('#error-alert').show();
                    $('#submit-modal').attr('disabled', false);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        var selectElement = $('#current_country');

        selectElement.on('change', function() {
            var currentCountry = selectElement.val();

            $('#step-8-next').click(function(e) {
                e.preventDefault();
                if (currentCountry == 'India') {
                    $('#step-1').hide();
                    $('#step-2').hide();
                    $('#step-3').hide();
                    $('#step-4').hide();
                    $('#step-5').hide();
                    $('#step-6').hide();
                    $('#step-7').hide();
                    $('#step-8').hide();
                    $('#step-9').show();
                    $('#step-10').hide();
                } else {
                    $('#step-1').hide();
                    $('#step-2').hide();
                    $('#step-3').hide();
                    $('#step-4').hide();
                    $('#step-5').hide();
                    $('#step-6').hide();
                    $('#step-7').hide();
                    $('#step-8').hide();
                    $('#step-9').hide();
                    $('#step-10').show();
                }
            });

            $('#step-10-back').click(function(e) {
                e.preventDefault();
                if (currentCountry == 'India') {
                    $('#step-1').hide();
                    $('#step-2').hide();
                    $('#step-3').hide();
                    $('#step-4').hide();
                    $('#step-5').hide();
                    $('#step-6').hide();
                    $('#step-7').hide();
                    $('#step-8').hide();
                    $('#step-9').show();
                    $('#step-10').hide();
                } else {
                    $('#step-1').hide();
                    $('#step-2').hide();
                    $('#step-3').hide();
                    $('#step-4').hide();
                    $('#step-5').hide();
                    $('#step-6').hide();
                    $('#step-7').hide();
                    $('#step-8').show();
                    $('#step-9').hide();
                    $('#step-10').hide();
                }
            });
        });

        $('#step-1-next').click(function(e) {
            $('#step-1').hide();
            $('#step-2').show();
        });

{{-- <script type="text/javascript">
    function form_submit() {
        document.getElementById("createStudent").submit();
    }
</script> --}}

        $('#step-3-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').show();
        });

        $('#step-4-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').show();
        });

        $('#step-5-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').show();
        });

        $('#step-6-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').show();
        });

        $('#step-7-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').show();
        });

        $('#step-9-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').show();
        });

        $('#step-10-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').show();
        });

        $('#step-11-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').show();
        });

        $('#step-12-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').hide();
            $('#step-13').show();
        });

        $('#step-13-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').hide();
            $('#step-13').hide();
            $('#step-14').show();
        });

        $('#step-14-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').hide();
            $('#step-13').hide();
            $('#step-14').show();
            // $('#lastStepModal').show();
        });

        $('#step-2-back').click(function(e) {
            e.preventDefault();
            $('#step-1').show();
            $('#step-2').hide();
        });

        $('#step-3-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').show();
            $('#step-3').hide();
        });

        $('#step-4-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').show();
            $('#step-4').hide();
        });

        $('#step-5-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').show();
            $('#step-5').hide();
        });

        $('#step-6-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').show();
            $('#step-6').hide();
        });

        $('#step-7-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').show();
            $('#step-7').hide();
        });

        $('#step-8-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').show();
            $('#step-8').hide();
        });

        $('#step-9-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').show();
            $('#step-9').hide();
        });



        $('#step-11-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').show();
            $('#step-11').hide();
        });

        $('#step-12-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').show();
            $('#step-12').hide();
        });

        $('#step-13-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').show();
            $('#step-13').hide();
        });

        $('#step-14-back').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').hide();
            $('#step-10').hide();
            $('#step-11').hide();
            $('#step-12').hide();
            $('#step-13').show();
            $('#step-14').hide();
        });


    });
</script>
