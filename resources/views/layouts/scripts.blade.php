<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    const baseUrl = "{{url('/')}}"
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const getFormInputs = (form) => {
        let values = $(form).serializeArray();
        let inputs = {}
        $(values).each(function (key, value) {
            inputs[value.name] = value.value;
        });
        return inputs
    }
</script>
@stack('js')
