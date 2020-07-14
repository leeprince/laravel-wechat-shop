<?php
/**
 * [Description]
 *
 * @Author  leeprince:2020-07-09 01:16
 */

namespace LeePrince\LaravelWechatShop\Wap\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LeePrince\LaravelWechatShop\Wap\Member\Models\User;

class AuthorizationController extends Controller
{
    public function wechatStore(Request $request)
    {
        $wechatUser = session('wechat.oauth_user.default'); // 拿到授权用户资料
        $user = User::where('weixin_openid', $wechatUser->id)->first();
        // dd($wechatUser);
        
        if (! $user) {
            // 存储为新用户
            $create = User::create([
               'weixin_openid' => $wechatUser->id,
               'nickname' => $wechatUser->name,
               'image_head' => $wechatUser->avatar
            ]);
        }
        
        // 更新用户状态为已登陆：auth
        dump(Auth::check());
    
        // Auth::login($user);
        Auth::guard('member')->login($user);
        dump(Auth::check());
        
        // 登陆后重定向
        dd('已通过');
        // return redirect()->route('wap.member.index');
        
        
    }
}