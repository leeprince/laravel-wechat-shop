<?php
/**
 * [wap/member 路由; 路由前缀为：LaravelWechatShopWapMember]
 *
 * @Author  leeprince:2020-07-08 09:34
 */

use Illuminate\Support\Facades\Auth;

// LaravelWechatShopWapMember/wechatStore
Route::get('/wechatStore', 'AuthorizationController@wechatStore')->middleware('wechat.oauth');
Route::get('/config', function () {
    dump(Auth::guard('prince-wap-member'));
    dd(config());
});
