<?php
//https://sharecodephp.com/tutorial/php/codeigniter/tutorial-codeigniter-untuk-menengah/membuat-login-dengan-akun-google-pada-codeigniter/

namespace App\Libraries;

use Google_Client;
use Google_Service_Oauth2;

class GoogleApi extends Google_Client
{
    /**
     * @var Google_Client
     */
    private $google_client;
    /**
     * @var Google_Service_Oauth2
     */
    private Google_Service_Oauth2 $google_service;

    public function __construct()
    {
        parent::__construct();
        //Define your ClientID
        $this->setClientId('985665257231-ioea5idcc2ea4kntkleij94adrptde97.apps.googleusercontent.com');
        //Define your Client Secret Key
        $this->setClientSecret('2Y8CsZjvkFLm9wBf8Pku6rob');
        //Define your Redirect Uri
        $this->setRedirectUri(base_url('/login/callback_auth'));
        $this->addScope('email');
        $this->addScope('profile');
        $this->google_service = new Google_Service_Oauth2($this);
    }

    function userInfo()
    {
        return $this->google_service->userinfo->get();
    }
}