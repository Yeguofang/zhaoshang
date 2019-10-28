<?php

use think\Route;

//前台页面
Route::rule('/', 'index/index');
Route::rule('/article', 'article/index');
Route::rule('/article_list/[:id]', 'article/list');
Route::rule('/article_detail', 'article/detail');
Route::rule('/project/:pid/[:id]', 'project/list');
Route::rule('/project_detail/:id', 'project/detail');
Route::rule('/ranking', 'project/ranking');
Route::rule('/help', 'index/help');
Route::rule('/link', 'index/link');
Route::rule('/brand', 'index/brand');






//用户中心
Route::rule('menber/user/login', 'menber.user/login');
Route::rule('menber/user/index', 'menber.user/index');
Route::rule('menber/user/profile', 'menber.user/profile');
Route::rule('menber/user/register', 'menber.user/register');
Route::rule('menber/checksms', 'api/validate/check_sms_correct');
Route::rule('menber/user/logout', 'menber.user/logout');
Route::rule('menber/user/welcome', 'menber.user/welcome');

//文章资讯
Route::rule('menber/article/list', 'menber.article/list');
Route::rule('menber/article/add', 'menber.article/add');
Route::rule('menber/article/del', 'menber.article/del','post');
Route::rule('menber/article/edit/:id', 'menber.article/edit');
Route::rule('menber/article/comment', 'menber.article/comment');

//项目管理
Route::rule('menber/project/list', 'menber.project/list');
Route::rule('menber/project/add', 'menber.project/add');
Route::rule('menber/project/del', 'menber.project/del','post');
Route::rule('menber/project/edit/:id', 'menber.project/edit');
Route::rule('menber/project/msg', 'menber.project/msg');

//广告管理
Route::rule('menber/advert/list', 'menber.advert/list');
Route::rule('menber/advert/add', 'menber.advert/add');
Route::rule('menber/advert/del', 'menber.advert/del','post');
Route::rule('menber/advert/edit/:id', 'menber.advert/edit');



Route::rule('ajax/upload', 'ajax/upload','post');

