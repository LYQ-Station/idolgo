<?php

class AuthPlugin extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch (Zend_Controller_Request_Abstract $request)
    {
        $tsn = $request->tsn ? $request->tsn : false;
        
        if (defined('APP_ADMIN'))
        {
            if (!$tsn)
            {
				$request->setModuleName('default');
                $request->setControllerName('auth');
                $request->setActionName('login');
				return;
            }
            
            $token = Token::create($tsn);
            
            if($token->is_logined() == true)
            {
                if ($token->is_expire())
                {
                    $token->destroy();
                    $request->setModuleName('default');
                    $request->setControllerName('auth');
                    $request->setActionName('login');
                    return;
                }

                $token->register();
            }
            else
            {
                $token->destroy();
				$request->setModuleName('default');
                $request->setControllerName('auth');
                $request->setActionName('login');
				return;
            }
        }
        else if (defined('APP_FRONTEND'))
        {
            if (!$tsn)
            {
                 $token = Token::create_abstract($tsn);
                 return;
            }
        }
    }
}
