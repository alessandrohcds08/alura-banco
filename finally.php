<?php

function a()
{
    try {
        echo "codigo";
        throw new Exception();
        return 0;
    } catch (Throwable $e) {
        echo 'problema';
        return 1;
    } finally {
        echo 'final';
    }
}
echo a();