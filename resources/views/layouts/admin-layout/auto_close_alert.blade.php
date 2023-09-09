<!-- AUTO REMOVE ALERT  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(300, function(){
        $(this).remove(); 
    });
}, 3000);
});
</script>
