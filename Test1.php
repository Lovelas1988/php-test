<?php
for( $i = 1; $i <= 10; $i++)
{
    echo $i;
    if( $i % 2 == 0)
    {
        echo '-Четное число';
    }else
    {
        echo '-Не четное число';
    }
    echo "\n";
}