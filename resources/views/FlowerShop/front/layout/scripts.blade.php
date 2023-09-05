<script>
    $(document).ready(function(){
        $('#sorter').on('change', function(){
            var value = $(this).val();
            this.form.submit();
            console.log(value);
        })
    })
</script>