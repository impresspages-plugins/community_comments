<?php
/**
 * @package   ImpressPages
 * @copyright Copyright (C) 2012 JSC Apro Media.
 * @license   GNU/GPL, see ip_license.html
 */

namespace Modules\community\comments\widget;

class IpComments extends \Modules\standard\content_management\Widget
{

    public function getTitle()
    {
        global $parametersMod;
        return $parametersMod->getValue('community', 'comments', 'admin_translations', 'comments');
    }

    public function managementHtml($instanceId, $data, $layout)
    {
        return parent::managementHtml($instanceId, $data, $layout);
    }

    public function previewHtml($instanceId, $data, $layout)
    {
        $model = new \Modules\community\comments\Model();
        $data['form'] = $model->createForm();

        return parent::previewHtml($instanceId, $data, $layout);
    }





}