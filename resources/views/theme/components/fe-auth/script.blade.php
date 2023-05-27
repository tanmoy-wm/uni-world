<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>

{{-- <script>
    $(function() {
        $('#createStudent').submit(function(e) {
            cosole.log("Hello");
            e.preventDefault();
            let formData = $(this).serializeArray();
            $(".invalid-feedback").children("strong").text("");
            $("#createStudent input").removeClass("is-invalid");
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
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
            })
        });
    })
</script> --}}


{{-- <script type="text/javascript">
    function form_submit() {
        document.getElementById("createStudent").submit();
    }
</script> --}}
