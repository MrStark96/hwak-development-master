<?php

Route::get('/', 'HomeController@index')->name('home');

// ===================== route for athentication ==========================================
// =========================== 2020.03.05 =================================================
Route::get('/signup', function() { return view('auth.signup'); });

Route::get('/login', 'Auth\LoginController@show')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// social authentication
Route::get('login/redirect', 'Auth\LoginController@loginRedirectToProvider');
Route::get('signup/redirect', 'Auth\LoginController@signupRedirectToProvider');
Route::get('/callback/google', 'Auth\LoginController@handleProviderCallback');
// =========================================================================================


// ===================== route for admin panel ============================================
// ========================= 2020.03.05 ===================================================
Route::get('/admin/buy', 'Admin\AdminController@showBuy');
Route::get('/admin/sell', 'Admin\AdminController@showSell');
Route::get('/admin/rent', 'Admin\AdminController@showRent');
Route::get('/admin/invest', 'Admin\AdminController@showInvest');
// =========================================================================================

// ======================= route for rent step  ============================================
// =========================== 2020.03.05 ==================================================
Route::post('/toggleviewRentChanged', 'Rent\RentController@toggleViewRentChanged');

Route::get('/rent-step-1', 'Rent\RentController@showRentStep1');
Route::post('/rent-step-1', 'Rent\RentController@saveRentStep1');

Route::get('/rent-step-2', 'Rent\RentController@showRentstep2');
Route::post('/rent-step-2', 'Rent\RentController@saveRentStep2');

Route::get('/rent-step-3', 'Rent\RentController@showRentStep3');
Route::post('/rent-step-3', 'Rent\RentController@saveRentStep3');

Route::get('/rent-step-4', 'Rent\RentController@showRentStep4');
Route::post('/rent-step-4', 'Rent\RentController@saveRentStep4');

Route::get('/rent-step-5', 'Rent\RentController@showRentStep5');
Route::post('/rent-step-5', 'Rent\RentController@saveRentStep5');

Route::get('/rent-step-6', 'Rent\RentController@showRentStep6');
Route::post('rent-step-6', 'Rent\RentController@saveRentStep6');

Route::get('/rent-step-7', 'Rent\RentController@showRentStep7');
Route::post('/rent-step-7', 'Rent\RentController@saveRentStep7');

Route::get('/rent-step-8', 'Rent\RentController@showRentStep8');
Route::post('/rent-step-8', 'Rent\RentController@saveRentStep8');

Route::get('/rent-step-9', 'Rent\RentController@showRentStep9');
Route::post('/rent-step-9', 'Rent\RentController@saveRentStep9');

Route::get('/rent-step-10', 'Rent\RentController@showRentStep10');
Route::post('/rent-step-10', 'Rent\RentController@saveRentStep10');

Route::get('/rent-step-11', 'Rent\RentController@showRentStep11');
Route::post('/rent-step-11', 'Rent\RentController@saveRentStep11');

Route::get('/rent-step-12', 'Rent\RentController@showRentStep12');
Route::post('/rent-step-12', 'Rent\RentController@saveRentStep12');

Route::get('/rent-step-13', 'Rent\RentController@showRentStep13');
Route::post('/rent-step-13', 'Rent\RentController@saveRentStep13');

Route::get('/rent-step-14', 'Rent\RentController@showRentStep14');
Route::post('/rent-step-14', 'Rent\RentController@submitAnswers');
// ===========================================================================================

// ======================= route for invest step  ============================================
// =========================== 2020.03.24 ====================================================
Route::post('/toggleviewInvestChanged', 'Invest\InvestController@toggleviewInvestChanged');

Route::get('/invest-step-1', 'Invest\InvestController@showInvestStep1');
Route::post('/invest-step-1', 'Invest\InvestController@saveInvestStep1');

Route::get('/invest-step-2', 'Invest\InvestController@showInvestStep2');
Route::post('/invest-step-2', 'Invest\InvestController@saveInvestStep2');

Route::get('/invest-step-3', 'Invest\InvestController@showInvestStep3');
Route::post('/invest-step-3', 'Invest\InvestController@saveInvestStep3');

Route::get('/invest-step-4', 'Invest\InvestController@showInvestStep4');
Route::post('/invest-step-4', 'Invest\InvestController@saveInvestStep4');

Route::get('/invest-step-5', 'Invest\InvestController@showInvestStep5');
Route::post('/invest-step-5', 'Invest\InvestController@saveInvestStep5');

Route::get('/invest-step-6', 'Invest\InvestController@showInvestStep6');
Route::post('/invest-step-6', 'Invest\InvestController@saveInvestStep6');

Route::get('/invest-step-7', 'Invest\InvestController@showInvestStep7');
Route::post('/invest-step-7', 'Invest\InvestController@saveInvestStep7');

Route::get('/invest-step-8', 'Invest\InvestController@showInvestStep8');
Route::post('/invest-step-8', 'Invest\InvestController@saveInvestStep8');

Route::get('/invest-step-9', 'Invest\InvestController@showInvestStep9');
Route::post('/invest-step-9', 'Invest\InvestController@saveInvestStep9');

Route::get('/invest-step-10', 'Invest\InvestController@showInvestStep10');
Route::post('/invest-step-10', 'Invest\InvestController@submitAnswers');

// ========================================================================================


// ======================= route for sell step  ============================================
// =========================== 2020.05.21 ====================================================
Route::post('/toggleviewSellChanged', 'Sell\SellController@toggleviewSellChanged');

Route::get('/sell-step-1', 'Sell\SellController@showSellStep1');
Route::post('/sell-step-1', 'Sell\SellController@saveSellStep1');

Route::get('/sell-step-2', 'Sell\SellController@showSellStep2');
Route::post('/sell-step-2', 'Sell\SellController@saveSellStep2');

Route::get('/sell-step-3', 'Sell\SellController@showSellStep3');
Route::post('/sell-step-3', 'Sell\SellController@saveSellStep3');

Route::get('/sell-step-4', 'Sell\SellController@showSellStep4');
Route::post('/sell-step-4', 'Sell\SellController@saveSellStep4');

Route::get('/sell-step-5', 'Sell\SellController@showSellStep5');
Route::post('/sell-step-5', 'Sell\SellController@saveSellStep5');

Route::get('/sell-step-6', 'Sell\SellController@showSellStep6');
Route::post('/sell-step-6', 'Sell\SellController@saveSellStep6');

Route::get('/sell-step-7', 'Sell\SellController@showSellStep7');
Route::post('/sell-step-7', 'Sell\SellController@saveSellStep7');

Route::get('/sell-step-8', 'Sell\SellController@showSellStep8');
Route::post('/sell-step-8', 'Sell\SellController@saveSellStep8');

Route::get('/sell-step-9', 'Sell\SellController@showSellStep9');
Route::post('/sell-step-9', 'Sell\SellController@submitAnswers');

// ========================================================================================

// ======================= route for buy step  ============================================
// =========================== 2020.05.21 ====================================================
Route::post('/toggleviewBuyChanged', 'Buy\BuyController@toggleviewBuyChanged');

Route::get('/buy-step-1', 'Buy\BuyController@showBuyStep1');
Route::post('/buy-step-1', 'Buy\BuyController@saveBuyStep1');

Route::get('/buy-step-2', 'Buy\BuyController@showBuyStep2');
Route::post('/buy-step-2', 'Buy\BuyController@saveBuyStep2');

Route::get('/buy-step-3', 'Buy\BuyController@showBuyStep3');
Route::post('/buy-step-3', 'Buy\BuyController@saveBuyStep3');

Route::get('/buy-step-4', 'Buy\BuyController@showBuyStep4');
Route::post('/buy-step-4', 'Buy\BuyController@saveBuyStep4');

Route::get('/buy-step-5', 'Buy\BuyController@showBuyStep5');
Route::post('/buy-step-5', 'Buy\BuyController@saveBuyStep5');

Route::get('/buy-step-added-6', 'Buy\BuyController@showBuyStepAdded6');
Route::post('/buy-step-added-6', 'Buy\BuyController@saveBuyStepAdded6');

Route::get('/buy-step-6', 'Buy\BuyController@showBuyStep6');
Route::post('/buy-step-6', 'Buy\BuyController@saveBuyStep6');

Route::get('/buy-step-7', 'Buy\BuyController@showBuyStep7');
Route::post('/buy-step-7', 'Buy\BuyController@saveBuyStep7');

Route::get('/buy-step-8', 'Buy\BuyController@showBuyStep8');
Route::post('/buy-step-8', 'Buy\BuyController@saveBuyStep8');

Route::get('/buy-step-9', 'Buy\BuyController@showBuyStep9');
Route::post('/buy-step-9', 'Buy\BuyController@saveBuyStep9');

Route::get('/buy-step-10', 'Buy\BuyController@showBuyStep10');
Route::post('/buy-step-10', 'Buy\BuyController@saveBuyStep10');

Route::get('/buy-step-11', 'Buy\BuyController@showBuyStep11');
Route::post('/buy-step-11', 'Buy\BuyController@submitAnswers');
// ========================================================================================

/////////////////////////////////////20210225-1/////////////////////////////////////////