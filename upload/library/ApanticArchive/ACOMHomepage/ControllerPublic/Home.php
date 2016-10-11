<?php
/**
 * Copyright (c) Apantic (apantic.com) 2015 to present.
 * All rights reserved.
 * @license All use is subject to the Apantic License Agreement (https://www.apantic.com/community/products/license-agreement)
 * @author: Apantic Team <support@apantic.com>
 */
class Apantic_ACOMHomepage_ControllerPublic_Home extends XenForo_ControllerPublic_Abstract
{
    public function actionIndex()
    {
        return $this->responseView('Apantic_ACOMHomepage_ViewPublic_Home_View', 'acomhomepage', array(), array(
            'containerTemplate' => 'acomhomepage_layout'
        ));
    }

    public static function getSessionActivityDetailsForList(array $activities)
    {
        return new XenForo_Phrase('acomhomepage');
    }
}