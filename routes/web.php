<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Notification\NotificationController;
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

Route::get('/',[App\Http\Controllers\Pages\HomepageController::class,'index'])->name('home.page');
Route::any('/products',[App\Http\Controllers\Pages\HomepageController::class,'products'])->name('product.page');
Route::get('/contact',[App\Http\Controllers\Pages\HomepageController::class,'contactUs'])->name('contact.page');
Route::get('/product-details/{id}',[App\Http\Controllers\Pages\HomepageController::class,'productDetails'])->name('product.details.page');
Route::post('/contact-post',[App\Http\Controllers\Pages\HomepageController::class,'contactPost'])->name('contact.page.contact.post');
Route::post('/contact-post/package-enquiry',[App\Http\Controllers\Pages\HomepageController::class,'packageEnqyuiry'])->name('contact.page.contact.post.package.enquiry');

Route::get('/blog-page',[App\Http\Controllers\Pages\HomepageController::class,'blogPage'])->name('blog.page');
Route::get('/blog-details/{id}',[App\Http\Controllers\Pages\HomepageController::class,'blogDetails'])->name('blog.page.details');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/custom-login',[LoginController::class,'customLogin'])->name('custom.login');
Route::get('logout',[LoginController::class, 'logout'])->name('logout.user');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::group(['middleware' => 'auth'], function () {
// banner
Route::get('manage-banner',[App\Http\Controllers\Banner\BannerController::class,'index'])->name('manage.banner');
Route::post('manage-banner/insert',[App\Http\Controllers\Banner\BannerController::class,'insert'])->name('manage.banner.insert');
Route::get('manage-banner/delete/{id}',[App\Http\Controllers\Banner\BannerController::class,'delete'])->name('manage.banner.delete');


// testimonial
Route::get('manage-testimonial',[App\Http\Controllers\Testimonial\TestimonialController::class,'index'])->name('manage.testimonial');

Route::get('manage-testimonial/add',[App\Http\Controllers\Testimonial\TestimonialController::class,'add'])->name('manage.testimonial.add');

Route::post('manage-testimonial/insert',[App\Http\Controllers\Testimonial\TestimonialController::class,'insert'])->name('manage.testimonial.insert');

Route::get('manage-testimonial/edit/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'edit'])->name('manage.testimonial.edit');
Route::post('manage-testimonial/update',[App\Http\Controllers\Testimonial\TestimonialController::class,'update'])->name('manage.testimonial.update');
Route::get('manage-testimonial/delete/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'delete'])->name('manage.testimonial.delete');


// blog

Route::get('manage-post',[App\Http\Controllers\Blog\BlogController::class,'index'])->name('manage.blog');
Route::get('manage-post/add',[App\Http\Controllers\Blog\BlogController::class,'add'])->name('manage.blog.add');
Route::post('manage-post/insert',[App\Http\Controllers\Blog\BlogController::class,'insert'])->name('manage.blog.insert');
Route::get('manage-post/edit/{id}',[App\Http\Controllers\Blog\BlogController::class,'edit'])->name('manage.blog.edit');
Route::post('manage-post/update',[App\Http\Controllers\Blog\BlogController::class,'update'])->name('manage.blog.update');
Route::get('manage-post/delete/{id}',[App\Http\Controllers\Blog\BlogController::class,'delete'])->name('manage.blog.delete');

Route::get('manage-post/show/{id}',[App\Http\Controllers\Blog\BlogController::class,'show'])->name('manage.blog.show');

Route::get('manage-post/gallery/{id}',[App\Http\Controllers\Blog\BlogController::class,'gallery'])->name('manage.blog.gallery');
Route::post('manage-post/gallery/insert-gallery-image',[App\Http\Controllers\Blog\BlogController::class,'galleryInsert'])->name('manage.blog.gallery.insert');
Route::get('manage-post/gallery/delete-image/{id}',[App\Http\Controllers\Blog\BlogController::class,'galleryDelete'])->name('manage.blog.gallery.delete');


Route::get('change-password',[App\Http\Controllers\Contact\ContactController::class,'change'])->name('change.password');
Route::post('change-password/post',[App\Http\Controllers\Contact\ContactController::class,'changePassword'])->name('change.password.post');

Route::get('contact-us',[App\Http\Controllers\Contact\ContactController::class,'index'])->name('manage.contact');
Route::get('contact-us/delete/{id}',[App\Http\Controllers\Contact\ContactController::class,'delete'])->name('manage.contact.delete');
Route::get('contact-us/view/{id}',[App\Http\Controllers\Contact\ContactController::class,'view'])->name('manage.contact.view');

});


