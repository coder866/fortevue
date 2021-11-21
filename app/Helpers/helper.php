<?php
function vite(string $asset)
{
    $path=glob(public_path('/build/assets/'.str_replace('.','.*',$asset)))[0];

    return str_replace(public_path(),'',$path);

};