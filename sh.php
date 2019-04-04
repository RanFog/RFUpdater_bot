<?php
function update_test()
    {
    //echo shell_exec("sh -S /var/www/html/telebots/FRUPDATER/sh/FRTEST.sh");
    //return shell_exec ("ls -la");
    //return shell_exec ("ping -c 4 ya.ru");
    //return shell_exec ("whoami"); //www-data
    //return shell_exec ("groups"); //www-data
    //return shell_exec ("sudo mkdir 121212");
    return shell_exec ("sh sh/FRTEST.sh");
    //return "Обновлено";
    }
function update_updater()
    {
    //echo shell_exec("sh -S /var/www/html/telebots/FRUPDATER/sh/FRTEST.sh");
    //return shell_exec ("ls -la");
    //return shell_exec ("ping -c 4 ya.ru");
    //return shell_exec ("whoami"); //www-data
    //return shell_exec ("groups"); //www-data
    //return shell_exec ("sudo mkdir 121212");
    return shell_exec ("cd /var/www/html/telebots/FRUPDATER/").shell_exec ("git pull");
    //return "Обновлено";
    }
?>