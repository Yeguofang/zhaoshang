<?php

use think\Route;

//前台页面
Route::rule('/', 'index/index');
Route::rule('/article', 'article/index');
Route::rule('/article_list/[:id]', 'article/list');
Route::rule('/article_detail', 'article/detail');
Route::rule('/projects', 'project/index');
Route::rule('/project_detail', 'project/detail');
Route::rule('/ranking', 'project/ranking');
Route::rule('/help', 'index/help');
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
