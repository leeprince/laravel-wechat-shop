<?php
/**
 * [wap/member 路由]
 *
 * @Author  leeprince:2020-07-08 09:34
 */

Route::get('/wechatStore', 'AuthorizationController@wechatStore')->middleware('wechat.oauth');
