<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>

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
                error: function(error) {
                    $('#error-alert').html(erorr.responseJSON.message);
                    $('#error-alert').show();
                    $('#btnSubmitStudent').attr('enabled', true);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#step-1-next').click(function(e) {
            $('#step-1').hide();
            $('#step-2').show();
        });

        $('#step-2-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').show();
        });

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

        $('#step-8-next').click(function(e) {
            e.preventDefault();
            $('#step-1').hide();
            $('#step-2').hide();
            $('#step-3').hide();
            $('#step-4').hide();
            $('#step-5').hide();
            $('#step-6').hide();
            $('#step-7').hide();
            $('#step-8').hide();
            $('#step-9').show();
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
    });
</script>
