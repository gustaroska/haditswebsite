<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/(:num)', 'Quran::index/$1');
$routes->get('/(:num)/(:any)', 'Quran::index/$1/$2');
$routes->get('/panduan-tajwid', 'PanduanTajwid::index');
$routes->get('/tajwid/(:any)', 'Tajwid::show/$1');
$routes->get('/ayat-hadist-ekonomi', 'AyatHadistEkonomi::index');
$routes->get('/ayat-hadist-ekonomi/(:num)', 'AyatHadistEkonomi::detail/$1');
$routes->post('api/ajax_list_ayat_hadits', 'Api::ajax_list_ayat_hadits');
$routes->get('/active/(:num)', 'Login::active/$1');
$routes->get('/logout', 'Login::logout');
$routes->get('/cari', 'Search::search');

// pages daftar index klasifikasi ayat
$routes->get('/index-ayat/(:num)', 'IndexAyat::index/$1');

// pages dashboard
$routes->get('api/tatbhiq/(:any)', 'Api::get_tatbhiq/$1');
$routes->get('api/tahsin/(:any)', 'Api::get_tahsin/$1');
$routes->get('api/tajweed/(:any)', 'Api::get_tadweed/$1');

$routes->group(
	'/',
	['filter' => 'is_admin'],
	function ($routes) {
		$routes->get('users', 'Admin\Users::index');
		$routes->post('api/ajax_user_action', 'Api::ajax_user_action');
	}
);

$routes->group(
	'/',
	['filter' => 'auth'],
	function ($routes) {
		$routes->get('dashboard', 'Admin\Dashboard::index');

		// tafsir
		$routes->get('tahsin', 'Admin\Tahsin::index');
		$routes->get('tahsin/add', 'Admin\Tahsin::add');
		$routes->get('tahsin/edit/(:any)', 'Admin\Tahsin::edit/$1');
		$routes->post('tahsin/add', 'Admin\Tahsin::save');
		$routes->post('tahsin/edit/(:any)', 'Admin\Tahsin::save/$1');

		// tafsir
		$routes->get('tafsir', 'Admin\Tafsir::index');
		$routes->get('tafsir/add', 'Admin\Tafsir::add');
		$routes->post('tafsir/add', 'Admin\Tafsir::save');
		$routes->get('tafsir/edit/(:any)', 'Admin\Tafsir::edit/$1');
		$routes->post('tafsir/edit/(:any)', 'Admin\Tafsir::save/$1');

		// tatbhiq
		$routes->get('tatbhiq', 'Admin\Tatbhiq::index');
		$routes->get('tatbhiq/add', 'Admin\Tatbhiq::add');
		$routes->get('tatbhiq/edit/(:any)', 'Admin\Tatbhiq::edit/$1');
		$routes->post('tatbhiq/add', 'Admin\Tatbhiq::save');
		$routes->post('tatbhiq/edit/(:any)', 'Admin\Tatbhiq::save/$1');

		// ayat-hadist
		$routes->get('ayat-hadist', 'Admin\AyatHadist::index');
		$routes->get('ayat-hadist/add', 'Admin\AyatHadist::add');
		$routes->get('ayat-hadist/edit/(:any)', 'Admin\AyatHadist::edit/$1');
		$routes->post('ayat-hadist/add', 'Admin\AyatHadist::save');
		$routes->post('ayat-hadist/edit/(:any)', 'Admin\AyatHadist::save/$1');


		$routes->get('history', 'Admin\History::index');
		$routes->get('users', 'Admin\Users::index');

		// apis

		// Tathbiq
		$routes->post('api/tatbhiq', 'Api::save_tatbhiq');
		$routes->post('api/ajax_list_logs', 'Api::ajax_list_logs');
		$routes->post('api/ajax_list_tafsir', 'Api::ajax_list_tafsir');
		$routes->post('api/ajax_list_tatbhiq', 'Api::ajax_list_tatbhiq');
		$routes->post('api/tatbhiq', 'Api::save_tatbhiq');
	}
);


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
