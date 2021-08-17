<script src="{{ url('/backend') }}/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script>
    $(document).ready(function() {

        initMultiselect($('.multiselect'));

    });

    function initMultiselect(selector){
        selector.multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            maxHeight: 250,
        });
    }
</script>