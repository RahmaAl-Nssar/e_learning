<?php

function render_image($path){
    if(file_exists($path)){
        return asset($path);
    }
}




function set_active($path, $active = 'text-yellow') {

    return call_user_func_array('Request::is', (array)$path) ? $active : '';
 
}





function active($model, $method = null)
{
    $url =  explode('/', request()->path());

    if (end($url) === $model && $model == 'dashboard')
        return 'active';

    if (in_array($model, $url) && $model != 'dashboard' && $method === null)
        return 'active';

    if (in_array($model, $url) && $model != 'dashboard' && in_array($method, $url))
        return 'active';

    if (in_array($model, $url) && $model != 'dashboard' && end($url) === $model && $method === 'index')
        return 'active';

    return '';
} // end of active function