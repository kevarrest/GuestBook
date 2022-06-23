<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jumbojett\OpenIDConnectClient;

class OIDController extends Controller
{
    
    public function basicClient(){
        $oidc = new OpenIDConnectClient('https://gepeng.dev.kominfo.go.id/realms/Intranet','dev-explorer-local','7rVBIChomO5v12SngjJg4kZjxghMZwM0');

        $oidc->setHttpUpgradeInsecureRequests(false);
        $oidc->authenticate();
        $name=$oidc->requestUserInfo();

        //$oidc->setVerifyHost(false);
        //$oidc->setVerifyPeer(false);

        dd($oidc);
    }

    public function requestResOwnerToken(){
        $oidc = new OpenIDConnectClient('https://gepeng.dev.kominfo.go.id/realms/Intranet','dev-explorer-local','7rVBIChomO5v12SngjJg4kZjxghMZwM0');
        $oidc->providerConfigParam(array('token_endpoint'=>'https://gepeng.dev.kominfo.go.id/realms/Intranet/protocol/openid-connect/token'));
        $oidc->addScope('profile');

        //Add username and password
        $oidc->addAuthParam(array('username'=>'akhd002'));
        $oidc->addAuthParam(array('password'=>'@Ik0yTolongTransfer'));

        $oidc->setHttpUpgradeInsecureRequests(false);

        //Perform the auth and return the token (to validate check if the access_token property is there and a valid JWT) :
        $token = $oidc->requestResourceOwnerToken(TRUE);
        dd($oidc);
    }
}
