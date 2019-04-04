<?php
function update_test()
    {
    //echo shell_exec("sh -S /var/www/html/telebots/FRUPDATER/sh/FRTEST.sh");
    echo shell_exec ("echo #!/bin/bash\n echo mkdir /var/www/html/telebots/FRUPDATER/testtesttest");
    return "Обновлено";
    }
?>