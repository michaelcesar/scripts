<script>
    // right button lock
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

    // console lock
    document.onkeydown = function (e) {
        if (
            (e.ctrlKey && e.shiftKey && e.keyCode === 73) || // Ctrl+Shift+I
            (e.ctrlKey && e.shiftKey && e.keyCode === 74) || // Ctrl+Shift+J
            (e.keyCode === 123) // F12
        ) {
            e.preventDefault();
        }
    };
</script>