<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');

//For Apply List
Route::get('/ApplyIndex','ApplyListController@ApplyIndex')->middleware('loginCheck');
Route::get('/getApplyData','ApplyListController@getApplyData')->middleware('loginCheck');
Route::post('/ApplyDelete','ApplyListController@ApplyDelete')->middleware('loginCheck');
Route::post('/getApplyDetails','ApplyListController@getApplyDetails')->middleware('loginCheck');
Route::post('/ApplyUpdate','ApplyListController@ApplyUpdate')->middleware('loginCheck');
Route::post('/ApplyAdd','ApplyListController@ApplyAdd')->middleware('loginCheck');

//For Contact List
Route::get('/ContactIndex','ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getContactData','ContactController@getContactData')->middleware('loginCheck');
Route::post('/ContactDelete','ContactController@ContactDelete')->middleware('loginCheck');


// For File Document
Route::get('/FileDocumentIndex', 'FileDocumentController@FileDocumentIndex')->middleware('loginCheck');
Route::get('/getFileDocumentData','FileDocumentController@getFileDocumentData')->middleware('loginCheck');
Route::post('/FileDocumentDelete','FileDocumentController@FileDocumentDelete')->middleware('loginCheck');
Route::post('/FileDocumentAdd','FileDocumentController@FileDocumentAdd')->middleware('loginCheck');


//For About List
Route::get('/AboutIndex','AboutController@AboutIndex')->middleware('loginCheck');
Route::get('/getAboutData','AboutController@getAboutData')->middleware('loginCheck');
Route::post('/AboutDelete','AboutController@AboutDelete')->middleware('loginCheck');
Route::post('/getAboutDetails','AboutController@getAboutDetails')->middleware('loginCheck');
Route::post('/AboutUpdate','AboutController@AboutUpdate')->middleware('loginCheck');
Route::post('/AboutAdd','AboutController@AboutAdd')->middleware('loginCheck');

//For Notice List
Route::get('/NoticeIndex','ReviewController@NoticeIndex')->middleware('loginCheck');
Route::get('/getNoticeData','ReviewController@getNoticeData')->middleware('loginCheck');
Route::post('/NoticeDelete','ReviewController@NoticeDelete')->middleware('loginCheck');
Route::post('/getNoticeDetails','ReviewController@getNoticeDetails')->middleware('loginCheck');
Route::post('/NoticeUpdate','ReviewController@NoticeUpdate')->middleware('loginCheck');
Route::post('/NoticeAdd','ReviewController@NoticeAdd')->middleware('loginCheck');

//Admin Login
Route::get('/Login','LoginController@LoginPage');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
