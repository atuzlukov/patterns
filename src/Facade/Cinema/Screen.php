<?php


namespace Patterns\Facade\Cinema;


class Screen
{
    public function up()
    {
        echo 'Экран поднят вверх <br>';
    }

    public function down()
    {
        echo 'Экран опущен <br>';
    }
}