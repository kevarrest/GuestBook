<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jumbojett\OpenIDConnectClient;

class OIDController extends Controller
{
    
    public function basicClient(Request $request){
        $oidc = new OpenIDConnectClient('https://gepeng.dev.kominfo.go.id/realms/Intranet','dev-explorer-local','7rVBIChomO5v12SngjJg4kZjxghMZwM0');
        
        $oidc->authenticate();
        $name=requestUserInfo('akhd002');

        $oidc->setVerifyHost(false);
        $oidc->setVerifyPeer(false);

        $oidc->setHttpUpgradeInsecureRequests(false);

        echo $name;
    }

    public function requestResOwnerToken(Request $request){
        $oidc = new OpenIDConnectClient('https://gepeng.dev.kominfo.go.id','dev-explorer-local','7rVBIChomO5v12SngjJg4kZjxghMZwM0');
        $oidc->providerConfigParam(array('token_endpoint'=>'https://gepeng.dev.kominfo.go.id/admin/master/console/#/realms/Intranet/protocol/openid-connect/token'));
        $oidc->addScope('my_scope');

        //Add username and password
        $oidc->addAuthParam(array('username'=>'akhd002'));
        $oidc->addAuthParam(array('password'=>'@Ik0yTolongTransfer'));

        //Perform the auth and return the token (to validate check if the access_token property is there and a valid JWT) :
        if(isset($oidc->requestResourceOwnerToken(TRUE)->access_token)){
            $token = $oidc->requestResourceOwnerToken(TRUE)->access_token;
        }
        echo $token;
    }
}
