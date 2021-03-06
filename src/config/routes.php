<?php

/**
 * Routes are defined with a matching regex on the left side (the key) and a
 * tuple of the Action Class and the class method on the right (the value).
 * The actual method in the class is the HTTP method, an underscore, and the
 * method here, so the same route could be used to call different get_ and
 * post_ methods. Capture groups in the route regex will be passed to the
 * method as an argument array.
 */

return [
    '/'                => ['Index', 'index'],
    '/about'           => ['Index', 'about'],

    '/login'           => ['Session', 'login'],
    '/logout'          => ['Session', 'logout'],

    '/register'        => ['User', 'create'],
    '/account'         => ['User', 'account'],
    '/account/edit'    => ['User', 'edit'],
    '/account/delete'  => ['User', 'delete'],

    '/search'          => ['Character', 'search'],
    '/browse'          => ['Character', 'browse'],
    '/create'          => ['Character', 'create'],
    '/show/(.+)'       => ['Character', 'show'],
    '/edit/(.+)'       => ['Character', 'edit'],
    '/delete/(.+)'     => ['Character', 'delete']
];
