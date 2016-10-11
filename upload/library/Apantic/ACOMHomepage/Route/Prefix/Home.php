<?php
/**
 * Copyright (c) Apantic (apantic.com) 2015 to present.
 * All rights reserved.
 * @license All use is subject to the Apantic License Agreement (https://www.apantic.com/community/products/license-agreement)
 * @author: Apantic Team <support@apantic.com>
 */
class Apantic_ACOMHomepage_Route_Prefix_Home implements XenForo_Route_Interface
{
    /**
     * Match a specific route for an already matched prefix.
     *
     * @see XenForo_Route_Interface::match()
     */
    public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
    {
        return $router->getRouteMatch('Apantic_ACOMHomepage_ControllerPublic_Home', $routePath, 'home');
    }
}