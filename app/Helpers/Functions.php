<?php




if ( !function_exists('routeHelper')) {
    function routeHelper(string|null $route, object|array|string|int|null $option = null) :string {
        if (! $route || $route =='#') return '';
        return route(env('ROUTE_PREFIX').".$route", $option);
    }
}