<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="assets/bootstrap/js/jquery-3.3.1.min.js"></script>
		<script src="assets/bootstrap/js/popper.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/bootstrap/js/main.js"></script>

		<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>