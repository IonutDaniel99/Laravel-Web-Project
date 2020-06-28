function ShutDownFunction() {
    $(document).ready(function () {
        $.ajax({
            url: '/ServerControlPanel/ShutDown'
        });
    });
}
