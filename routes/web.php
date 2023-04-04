<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('FrontEnd.index');
});
Route::get('/about', function () {
    return view('FrontEnd.About_Us');
});
Route::get('/account', function () {
    return view('FrontEnd.Account_Passes');
});

Route::get('/apple_google', function () {
    return view('FrontEnd.Apple_Google_Motorway');
});
Route::get('/car_rent', function () {
    return view('FrontEnd.car_rental_plateform');
});
Route::get('/children_safety', function () {
    return view('FrontEnd.Children_Safety');
});
Route::get('/derive_rule', function () {
    return view('FrontEnd.derive_rule_road');
});
Route::get('/deriving_safe', function () {
    return view('FrontEnd.Deriving_safe_practus');
});
Route::get('/deriving_safety', function () {
    return view('FrontEnd.deriving_safety');
});
Route::get('/driver_licences', function () {
    return view('FrontEnd.Driver_Licences_RoadSigns');
});
Route::get('/driver_licenses', function () {
    return view('FrontEnd.Driver_Licenses');
});
Route::get('/eftpos', function () {
    return view('FrontEnd.eftpos');
});
Route::get('/fAQ_all', function () {
    return view('FrontEnd.FAQ_All');
});
Route::get('/faq_commercial', function () {
    return view('FrontEnd.Faq_Commercial_Fleets');
});
Route::get('/faq_gps', function () {
    return view('FrontEnd.FAQ_GPS_Tracking');
});
Route::get('/faq_pay_toll', function () {
    return view('FrontEnd.FAQ_Pay_Toll_Notices');
});
Route::get('/getin_touch', function () {
    return view('FrontEnd.getin_Touch');
});
Route::get('/help_And_faq', function () {
    return view('FrontEnd.help_And_faq');
});
Route::get('/help_fAqs_rental', function () {
    return view('FrontEnd.Help_FAQs_Rental');
});
Route::get('/planning_investment', function () {
    return view('FrontEnd.Planning_Investment');
});
Route::get('/road_rail', function () {
    return view('FrontEnd.road_Rail');
});
Route::get('/safety', function () {
    return view('FrontEnd.safety');
});
Route::get('/traffic_travel_information', function () {
    return view('FrontEnd.Traffic_Travel_Information');
});
Route::get('/vehical_buying_selling', function () {
    return view('FrontEnd.vehical_buying_selling');
});
Route::get('/vehicale_registration', function () {
    return view('FrontEnd.vehicale_registration');
});
Route::get('/vehicale_type', function () {
    return view('FrontEnd.vehicale_type');
});
Route::get('/vehicale_varrent_certificate', function () {
    return view('FrontEnd.vehicale_varrent_certificate');
});
Route::get('/vehicle_safety', function () {
    return view('FrontEnd.Vehicle_Safety');
});
Route::get('/vehicles_clean_car', function () {
    return view('FrontEnd.Vehicles_Clean_Car');
});
Route::get('/vehicles_road_user', function () {
    return view('FrontEnd.Vehicles_Road_User');
});
Route::get('/vehicles', function () {
    return view('FrontEnd.Vehicles');
});
