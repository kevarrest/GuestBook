<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jumbojett\OpenIDConnectClient;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function authenticate(Request $request){
        // Retrive Input
        $oidc = new OpenIDConnectClient('https://gepeng.dev.kominfo.go.id/realms/Intranet','dev-explorer-local','7rVBIChomO5v12SngjJg4kZjxghMZwM0');
        $oidc->setHttpUpgradeInsecureRequests(false);
        $oidc->authenticate();

        $request->email=$oidc->requestUserInfo("preferred_username")."@kominfo.go.id";
        $request->password=$oidc->requestUserInfo('sub');

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/home');
        }

        // if failed login
        dd($credentials);
    }
}
