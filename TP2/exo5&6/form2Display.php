<?php

print_r($_POST);

echo    '<script>
            setTimeout(function () {
                window.location.href = "./form2.php";
            }, 10000);
        </script>';
