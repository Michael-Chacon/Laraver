<?php

function validarRuta($nameRoute)
{
    return request()->routeIs($nameRoute) ? 'active' : '';
}
