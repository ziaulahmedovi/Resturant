<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Front End
Route::get('/', 'WelcomeController@index');
Route::get('/products-menu', 'WelcomeController@view_product_menu');
Route::get('/products-type/menu/{id}', 'WelcomeController@view_product_type_menu');
Route::get('/about', 'WelcomeController@about');
Route::get('/contact-us', 'WelcomeController@contactUs');
Route::get('/cus-login', 'WelcomeController@cusLogin');
Route::get('/offers', 'WelcomeController@offers');
Route::get('/help', 'WelcomeController@help');
//Front End
//CusMail

Route::post('/cusMessage', 'CustomerController@mailTocompany');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');







//AuthenticMiddleware

Route::group(['middleware' => ['AuthenticMiddleware']], function () {
//    /register
        
    
//check Cusmtomer mail
    Route::get('/mail', 'CustomerController@viewMail');
//Route::get('/mail', 'CustomerController@viewMail');
    Route::get('/table-mail', 'CustomerController@tableMail');
    Route::get('/view-mail/{id}', 'CustomerController@viewMailById');
    Route::get('/mail/delete/{id}', 'CustomerController@deleteMailById');




//Employee
    Route::get('/employee/add', 'EmployeeController@addEmployee');
    Route::get('/employee/manage', 'EmployeeController@viewEmployee');
    Route::get('/employee/contact', 'EmployeeController@viewContact');
    Route::post('/employee/save', 'EmployeeController@saveEmployee');
    Route::get('/employee/delete/{id}', 'EmployeeController@deleteEmployee');
    Route::get('/employee/edit/{id}', 'EmployeeController@editEmployee');
    Route::get('/employee/details/{id}', 'EmployeeController@detailsEmployee');
    Route::post('/employee/update', 'EmployeeController@updateEmployee');



//Product
    Route::get('/product/save', 'ProductController@createProduct');
    Route::get('/product/manage', 'ProductController@manageProduct');
    Route::post('/product/save', 'ProductController@storeProduct');
    Route::get('/product/edit/{id}', 'ProductController@editProduct');
    Route::get('/product/delete/{id}', 'ProductController@deleteProduct');
    Route::get('/product/view/{id}', 'ProductController@viewProduct');
    Route::post('/product/update', 'ProductController@updateProduct');


//Calander
    Route::get('/calender', 'CalenderController@viewCalender');

//Catagory
    Route::get('/catagory/add', 'CatagoryController@addCatagory');
    Route::get('/catagory/manage', 'CatagoryController@manageCatagory');

    Route::get('/catagory/delete/{id}', 'CatagoryController@deleteCatagory');
    Route::get('/catagory/edit/{id}', 'CatagoryController@editCatagory');

    Route::post('/category/save', 'CatagoryController@saveCatagory');
    Route::post('/category/update', 'CatagoryController@updateCatagory');

//Icon

    Route::get('/icon', 'IconController@viewIcons');
    Route::get('/icon-save', 'IconController@saveIcon');
    Route::get('/icon-edit/{id}', 'IconController@editIcon');
    Route::get('/icon-delete/{id}', 'IconController@deleteIcon');
    Route::post('icon/save', 'IconController@createIcon');
    Route::post('icon-publish', 'IconController@publishIcon');
    Route::post('icon/update', 'IconController@updateIcon');

//Slider
    Route::get('/slider', 'SliderController@viewSliders');
    Route::get('/slider/image-save', 'SliderController@addSliderImage');
    Route::post('/sliderImage/save', 'SliderController@createSliderImage');
    Route::get('/image-edit/{id}', 'SliderController@editImage');
    Route::get('/image-delete/{id}', 'SliderController@deleteImage');
    Route::post('/sliderImage/update', 'SliderController@updateImage');
    Route::post('/slider-publish', 'SliderController@publishImage');



//Pages
    Route::get('/admin/index', 'IndexPageManagementController@viewAllIndexContent');

//    About
    Route::get('/admin/about-content', 'AboutUsPageManagementController@viewAllAboutUsPageContent');
    Route::get('/about-content/save/{page}', 'AboutUsPageManagementController@viewSaveAboutUsPageContentFrom');
    Route::post('/about-content/save', 'AboutUsPageManagementController@saveAboutUsPageContent');
    Route::post('aboutUs-Content-publish', 'AboutUsPageManagementController@publishAboutUsPageContent');
    Route::get('about-delete/aboutUs/{id}', 'AboutUsPageManagementController@deleteAboutUsPageContent');
    Route::get('/about-delete/work/{id}', 'AboutUsPageManagementController@deleteAboutUsPageWorkContent');
    Route::get('/about-delete/history/{id}', 'AboutUsPageManagementController@deleteAboutUsPageHistoryContent');
//    Route::post('about-edit/aboutUs/{id}', 'AboutUsPageManagementController@editAboutUsPageContent');
//    Route::post('/about-edit/work/{id}', 'AboutUsPageManagementController@editAboutUsPageWorkContent');
//    Route::post('/about-edit/history/{id}', 'AboutUsPageManagementController@editAboutUsPageHistoryContent');
});
