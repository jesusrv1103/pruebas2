hola
</form>

<script>
    $(document).ready(function(){
        $("#frm-serVivienda").submit(function(){
            return $(this).validate();
        });
    })
</script>