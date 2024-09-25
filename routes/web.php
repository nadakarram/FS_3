<?php

use App\Livewire\Auth\ChangePassword;
use App\Livewire\Auth\GetEmail;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwordrest;
use App\Livewire\Auth\Regester;
use App\Livewire\Cart;
use App\Livewire\Cartlist;
use App\Livewire\Dashbourd\Admins\Addadmin;
use App\Livewire\Dashbourd\Admins\Admins;
use App\Livewire\Dashbourd\Admins\Deleteadmin;
use App\Livewire\Dashbourd\Admins\Updateadmin;
use App\Livewire\Dashbourd\Category\AddCategory;
use App\Livewire\Dashbourd\Category\Categories;
use App\Livewire\Dashbourd\Category\DeleteCategory;
use App\Livewire\Dashbourd\Category\UpdateCategory;
use App\Livewire\Dashbourd\Offers\AddOffer;
use App\Livewire\Dashbourd\Offers\DeleteOffer;
use App\Livewire\Dashbourd\Offers\Offers;
use App\Livewire\Dashbourd\Offers\UpdateOffer;
use App\Livewire\Dashbourd\Orders\AddOrder;
use App\Livewire\Dashbourd\Orders\Orders;
use App\Livewire\Dashbourd\Orders\ShowOrder;
use App\Livewire\Dashbourd\Orders\UpdateOrder;
use App\Livewire\Dashbourd\Products\AddProduct;
use App\Livewire\Dashbourd\Products\DeleteProduct;
use App\Livewire\Dashbourd\Products\Products;
use App\Livewire\Dashbourd\Products\UpdateProduct;
use App\Livewire\Dashbourd\Reviews\AllReviws;
use App\Livewire\Dashbourd\Reviews\DeleteReviws;
use App\Livewire\Dashbourd\Reviews\Reviews;
use App\Livewire\Deletereview;
use App\Livewire\Home;
use App\Livewire\OfferDetails;
use App\Livewire\PasswordChanged;
use App\Livewire\ProductDetails;
use App\Livewire\Profile;
use App\Livewire\ProfileEdting;
use App\Livewire\Shop;
use App\Livewire\Whishlist;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Traits\HasPermissions;

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

Route::middleware('auth')->group(function () {

  Route::get("/logout", function () {
    Auth::logout();

    return redirect('/login');

  });



  Route::middleware("role:admin")->group(function () {

    // products
    Route::get("/adminproduct", Products::class);
    Route::get("/adminaddproduct", AddProduct::class);
    Route::get("/adminupdateproduct/{product}", UpdateProduct::class);
    Route::get("/delete/{product}", DeleteProduct::class);
    // category
    Route::get("/admincategory", Categories::class);
    Route::get("/adminaddcategory", AddCategory::class);
    Route::get("/adminupdatecategory/{category}", UpdateCategory::class);
    Route::get("/deletecategory/{category}", DeleteCategory::class);
    // offer
    Route::get("/adminoffer", Offers::class);
    Route::get("/adminaddoffer", AddOffer::class);
    Route::get("/adminupdateoffer/{offer}", UpdateOffer::class);
    Route::get("/deleteoffer/{offer}", DeleteOffer::class);

    // orders
    Route::get("/adminorder", Orders::class);
    Route::get("/adminupdateorder/{order}", UpdateOrder::class);
    Route::get("/adminshoworder/{order}", ShowOrder::class);
    //admins
 
    
    // Route::get("/admins",Admins::class);
    // Route::get("/addadmin",Addadmin::class);

    // Route::get("/updateadmin/{user}",Updateadmin::class);
    // Route::get("/admindelete/{user}",Deleteadmin::class);
    //reviews
    Route::get("/allreviews", AllReviws::class);
    Route::get("/deletereviews/{id}", DeleteReviws::class);

  });
  Route::middleware(['auth', 'can:super_admin'])->group(function () {
    Route::get("/admins", Admins::class);
    Route::get("/addadmin", Addadmin::class);
    Route::get("/updateadmin/{user}", Updateadmin::class);
    Route::get("/admindelete/{user}", Deleteadmin::class);
});
  



    Route::get("productdetails/{id}", ProductDetails::class);
    Route::get("/offerdetails/{id}", OfferDetails::class);

    Route::get("/cartlist", Cartlist::class);

    Route::get("/profile", Profile::class);

    Route::get("/whishlist", Whishlist::class);

    Route::get("/profileedit/{id}", ProfileEdting::class);
    Route::get("/changepassword", ChangePassword::class);

    Route::get("/deletetisreviews/{id}/{product_id}", Deletereview::class);

  });
  Route::middleware("guest")->group(function () {
    Route::get('/signup', Regester::class)->name("regester");
    Route::get('/login', Login::class)->name("login");
    Route::get("/changepassword/{email}", Passwordrest::class);
    Route::get("/forgetpassword", GetEmail::class);
    Route::get("/completed", PasswordChanged::class);

  });
  Route::get("/", Home::class)->name("home");
  Route::get("/shop", Shop::class)->name("shop");
  Route::get("/offers", \App\Livewire\Offers::class)->name("offers");
