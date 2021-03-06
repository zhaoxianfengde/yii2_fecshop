<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appserver\modules\Customer\controllers;

use fecshop\app\appserver\modules\AppserverController;
use Yii;
use \Firebase\JWT\JWT;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class SiteController extends AppserverController
{
    public function actionCaptcha()
    {
        Yii::$service->helper->captcha->height = 30;
        Yii::$service->helper->captcha->fontsize = 18;
        $base64Img = Yii::$service->helper->captcha->doBase64img();
        return [
            'code' => 200,
            'image'  => $base64Img,
        ];
    }
    
}