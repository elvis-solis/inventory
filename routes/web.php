<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Los métodos PUT y DELETE no funcionan en algunos servidores Windows, por eso 
| más adelante usaremos los métodos GET y POST para actualizar y eliminar.
|
*/
Route::group(['middleware'=> ['auth','check.permission']],function(){

    // Dashboard 
    Route::get('/','DashboardController@index');
    Route::get('info-box','DashboardController@InfoBox');
    
    // Proveedor 
    Route::resource('supplier','VendorController');
    Route::get('supplier/delete/{id}','VendorController@destroy');
    Route::post('supplier/update/{id}','VendorController@update');
    Route::get('vendor-list','VendorController@Vendor');
    
    // Categoría de producto 
    Route::resource('category','CategoryController');
    Route::get('category/delete/{id}','CategoryController@destroy');
    Route::post('category/update/{id}','CategoryController@update');
    Route::get('category-list','CategoryController@CategoryList');
    Route::get('all-category','CategoryController@AllCategory');
    
    // Producto 
    Route::resource('product','ProductController');
    Route::get('product/delete/{id}','ProductController@destroy');
    Route::post('product/update/{id}','ProductController@update');
    Route::get('product-list','ProductController@ProductList');
    Route::get('category/product/{id}','ProductController@productByCategory');
    
    // Cliente 
    Route::resource('customer','CustomerController');
    Route::get('customer/delete/{id}','CustomerController@destroy');
    Route::post('customer/update/{id}','CustomerController@update');
    Route::get('customer-list','CustomerController@CustomerList');
    
    // Stock
    Route::resource('stock','StockController');
    Route::get('stock/delete/{id}','StockController@destroy');
    Route::post('stock/update/{id}','StockController@update');
    Route::get('stock-list','StockController@StockList');
    Route::get('chalan-list/chalan/{id}','StockController@ChalanList');
    Route::get('stock-asset','StockController@StockAsset');
    Route::post('stock-update','StockController@StockUpdate');
    
    // Factura 
    Route::resource('invoice','InvoiceController');
    Route::get('invoice/delete/{id}','InvoiceController@destroy');
    Route::post('invoice/update/{id}','InvoiceController@update');
    Route::get('invoice-list','InvoiceController@InvoiceList');
    Route::get('get/invoice/number','InvoiceController@getLastInvoice');
    
    // Pago 
    Route::resource('payment','PaymentController');
    Route::get('payment/delete/{id}','PaymentController@destroy');
    
    // Reporte 
    Route::resource('role','RoleController');
    Route::get('role/delete/{id}','RoleController@destroy');
    Route::post('role/update/{id}','RoleController@update');
    Route::get('role-list','RoleController@RoleList');
    Route::post('permission','RoleController@Permission');
    
    Route::get('report',['as'=>'report.index','uses'=>'ReportingController@index']);
    Route::get('get-report',['as'=>'report.store','uses'=>'ReportingController@store']);
    Route::get('print-report',['as'=>'report.print','uses'=>'ReportingController@Print']);
    
    // Gestión de usuarios 
    Route::resource('user','UserManageController');
    Route::get('user/delete/{id}','UserManageController@destroy');
    Route::post('user/update/{id}','UserManageController@update');
    Route::get('user-list','UserManageController@UserList');
    
    Route::get('comapany-setting',['as'=>'company.index','uses'=>'CompanyController@index']);
    Route::post('comapany-setting',['as'=>'company.store','uses'=>'CompanyController@store']);
    Route::get('password-change',['as'=>'password.index','uses'=>'SettingController@index']);
    Route::post('password-change',['as'=>'password.store','uses'=>'SettingController@store']);
    
    Route::get('user-role','RoleController@userRole');
    
    Route::get('logout','UserController@logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
