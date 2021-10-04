<?php

print_r($_GET);

echo    '<script>
            setTimeout(function () {
                window.location.href = "./form.php";
            }, 10000);
        </script>';

        