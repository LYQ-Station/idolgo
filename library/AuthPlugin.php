<?php

class AuthPlugin extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch (Zend_Controller_Request_Abstract $request)
    {
        $tsn = $request->tsn ? $request->tsn : false;
        
        if (defined('APP_ADMIN'))
        {
//            if (!$tsn)
//            {
//				$request->setModuleName('default');
//                $request->setControllerName('auth');
//                $request->setActionName('login');
//				return;
//            }
            
			if ($tsn)
			{
				$token = Token::create($tsn);
			}
			else
			{
				$token = Token::create_abstract('123'); 
			}
            
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
				if ('auth' != $request->getActionName())
				{
					$token->destroy();
					$request->setModuleName('default');
					$request->setControllerName('auth');
					$request->setActionName('login');
				}
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
