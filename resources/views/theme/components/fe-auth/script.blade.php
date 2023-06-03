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
    });
</script>


{{-- <script type="text/javascript">
    function form_submit() {
        document.getElementById("createStudent").submit();
    }
</script> --}}
