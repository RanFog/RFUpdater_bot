<?php
function update_test()
    {
    //echo shell_exec("sh -S /var/www/html/telebots/FRUPDATER/sh/FRTEST.sh");
    //return shell_exec ("ls -la");
    //return shell_exec ("ping -c 4 ya.ru");
    //return shell_exec ("whoami"); //www-data
    //return shell_exec ("groups"); //www-data
    shell_exec ("mkdir 121212");
    return shell_exec ("ls -la");
    //return "Обновлено";
    }
?>