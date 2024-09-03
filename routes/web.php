<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FlashSaleController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserAddressController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ProductTrackController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\UserMessageController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\secty\SectyController;
use App\Http\Controllers\Frontend\UserVendorReqeustController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('flash-sale', [FlashSaleController::class, 'index'])->name('flash-sale');
Route::get('new_arrival', [FlashSaleController::class, 'new_arrival'])->name('new_arrival');
Route::get('featured_product', [FlashSaleController::class, 'featured_product'])->name('featured_product');
Route::get('top_product', [FlashSaleController::class, 'top_product'])->name('top_product');
Route::get('best_product', [FlashSaleController::class, 'best_product'])->name('best_product');
Route::get('all-product',[FlashSaleController::class,'AllProduct'])->name('all_product');

/** Product route */
Route::get('products', [FrontendProductController::class, 'productsIndex'])->name('products.index');
Route::get('product-detail/{slug}', [FrontendProductController::class, 'showProduct'])->name('product-detail');
Route::get('change-product-list-view', [FrontendProductController::class, 'chageListView'])->name('change-product-list-view');


/** Cart routes */
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('cart-details', [CartController::class, 'cartDetails'])->name('cart-details');
Route::post('cart/update-quantity', [CartController::class, 'updateProductQty'])->name('cart.update-quantity');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');
Route::get('cart/remove-product/{rowId}', [CartController::class, 'removeProduct'])->name('cart.remove-product');
Route::get('cart-count', [CartController::class, 'getCartCount'])->name('cart-count');
Route::get('cart-products', [CartController::class, 'getCartProducts'])->name('cart-products');
Route::post('cart/remove-sidebar-product', [CartController::class, 'removeSidebarProduct'])->name('cart.remove-sidebar-product');
Route::get('cart/sidebar-product-total', [CartController::class, 'cartTotal'])->name('cart.sidebar-product-total');

Route::get('apply-coupon', [CartController::class, 'applyCoupon'])->name('apply-coupon');
Route::get('coupon-calculation', [CartController::class, 'couponCalculation'])->name('coupon-calculation');

/** Newsletter routes */
Route::post('newsletter-request', [NewsletterController::class, 'newsLetterRequset'])->name('newsletter-request');
Route::get('newsletter-verify/{token}', [NewsletterController::class, 'newsLetterEmailVarify'])->name('newsletter-verify');

/** vendor page routes */
Route::get('vendor', [HomeController::class, 'vendorPage'])->name('vendor.index');
Route::get('vendor-product/{id}', [HomeController::class, 'vendorProductsPage'])->name('vendor.products');

/** about page route */
Route::get('about', [PageController::class, 'about'])->name('about');
/** terms and conditions page route */
Route::get('terms-and-conditions', [PageController::class, 'termsAndCondition'])->name('terms-and-conditions');
/** contact route */
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'handleContactForm'])->name('handle-contact-form');

/** Product track route */
Route::get('product-traking', [ProductTrackController::class, 'index'])->name('product-traking.index');

/** blog routes */
Route::get('blog-details/{slug}', [BlogController::class, 'blogDetails'])->name('blog-details');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');

/** Product routes */
Route::get('show-product-modal/{id}', [HomeController::class, 'ShowProductModal'])->name('show-product-modal');
/** add product in wishlist */
Route::get('wishlist/add-product', [WishlistController::class, 'addToWishlist'])->name('wishlist.store');







Route::group(['middleware' =>['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile'); // user.profile
    Route::put('profile', [UserProfileController::class, 'updateProfile'])->name('profile.update'); // user.profile.update
    Route::post('profile', [UserProfileController::class, 'updatePassword'])->name('profile.update.password');

    /** Message Route */
    Route::get('messages', [UserMessageController::class, 'index'])->name('messages.index');
    Route::post('send-message', [UserMessageController::class, 'sendMessage'])->name('send-message');
    Route::get('get-messages', [UserMessageController::class, 'getMessages'])->name('get-messages');

    /** User Address Route */
    Route::resource('address', UserAddressController::class);
    /** Order Routes */
    Route::get('orders', [UserOrderController::class, 'index'])->name('orders.index');
    Route::get('orders/show/{id}', [UserOrderController::class, 'show'])->name('orders.show');

    /** Wishlist routes */
    Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::get('wishlist/remove-product/{id}', [WishlistController::class, 'destory'])->name('wishlist.destory');

    Route::get('reviews', [ReviewController::class, 'index'])->name('review.index');

    /** Vendor request route */
    Route::get('vendor-request', [UserVendorReqeustController::class, 'index'])->name('vendor-request.index');
    Route::post('vendor-request', [UserVendorReqeustController::class, 'create'])->name('vendor-request.create');

    /** product review routes */
    Route::post('review', [ReviewController::class, 'create'])->name('review.create');
    Route::get('user-orders-pending',[ReviewController::class,'pendingOrder'])->name('orders.pending');
    Route::get('user-orders-completed',[ReviewController::class,'CompleteOrder'])->name('orders.completed');
    /** blog comment routes */
    Route::post('blog-comment', [BlogController::class, 'comment'])->name('blog-comment');

    /** Payment Routes */
    Route::get('payment', [PaymentController::class, 'index'])->name('payment');


    /** Paypal routes */
    Route::get('paypal/payment', [PaymentController::class, 'payWithPaypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypalSuccess'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('paypal.cancel');

    /** Stripe routes */
    Route::post('stripe/payment', [PaymentController::class, 'payWithStripe'])->name('stripe.payment');

    /** Razorpay routes */
    Route::post('razorpay/payment', [PaymentController::class, 'payWithRazorPay'])->name('razorpay.payment');


});

Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
    /** Checkout routes */
    Route::get('checkout', [CheckOutController::class, 'index'])->name('checkout');
    Route::post('checkout/address-create', [CheckOutController::class, 'createAddress'])->name('checkout.address.create');
    Route::post('checkout/form-submit', [CheckOutController::class, 'checkOutFormSubmit'])->name('checkout.form-submit');
    Route::post('checkout/form-submit-guest', [CheckOutController::class, 'checkOutFormSubmitGuest'])->name('checkout.form-submit-guest');
    /** Payment Routes */
    Route::get('payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    /** COD routes */
    
    Route::get('cod/payment', [PaymentController::class, 'payWithCod'])->name('cod.payment');
});


// /**
//  * secty www.cs.com
//  */
//  Route::controller(SectyController::class)->group(function(){
//     Route::get('/', 'index')->name('secty.index');
// });