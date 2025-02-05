<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewslatterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebsiteTitleDescriptionController;
use App\Models\Newslatter;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('emailtemplate', function () {

    $newslatters = Newslatter::all();
    return view('frontend.mail.newslatter',compact('newslatters'));
});
Route::post('subscribe', [IndexController::class, 'subscribe'])->name('subscribe');
Route::get('website/{page}', [IndexController::class, 'websiteInfo'])->name('show.website.info');
Route::get('contact-us', [IndexController::class, 'contactUs'])->name('contact.us');
Route::post('contact-us', [IndexController::class, 'contactUsStore'])->name('contact.us.store');
Route::get('html-editor', [IndexController::class, 'codeEditor'])->name('html.editor');
Route::get('javascript-editor', [IndexController::class, 'codeEditor'])->name('javascript.editor');
Route::get('css-editor', [IndexController::class, 'codeEditor'])->name('css.editor');
Route::get('python-compiler', [IndexController::class, 'pythonEditor'])->name('python.compiler');
Route::post('python-compiler', [IndexController::class, 'compilePythonCode'])->name('compile.python.code');
Route::get('sitemap.xml', [IndexController::class, 'sitemap'])->name('sitemap');
Route::get('sendmail', [IndexController::class, 'sendmail'])->name('sendmail');
// Route::get('viewemail', [IndexController::class, 'viewemail'])->name('viewemail');

Route::get('testmail', [NewslatterController::class, 'sendNewslatterToUser'])->name('admin.test.mail');

Route::get('track/click', [NewslatterController::class, 'trackNewslatter'])->name('admin.track.newslatter');



Route::get('query', [IndexController::class, 'search'])->name('search');
//Admin Route

Route::get('admin/login', [AdminController::class, 'loginFrom'])->name('admin.login.form');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::group(['middleware' => ['adminAuth']], function () {

    Route::post('/admin/upload-image', [PostController::class, 'uploadImage'])->name('admin.upload.image');
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/cat_sub_cat/index', [CategoryController::class, 'catSubCatIndex'])->name('admin.cat.subcat.index');
    Route::get('admin/category/create', [CategoryController::class, 'categoryCreate'])->name('admin.category.create');
    Route::post('admin/category/store', [CategoryController::class, 'categoryStore'])->name('admin.category.store');
    Route::post('admin/sub_category/store', [CategoryController::class, 'subCategoryStore'])->name('admin.sub.category.store');
    Route::put('admin/sub_category/update/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('admin.sub.category.update');

    Route::put('admin/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('admin.category.update');
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.category.edit');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'catDelete'])->name('admin.category.delete');

    Route::put('admin/subcategory/update/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('admin.subcategory.update');
    Route::get('admin/subcategory/edit/{id}', [CategoryController::class, 'editSubCategory'])->name('admin.subcategory.edit');
    Route::get('admin/sub_category/delete/{id}', [CategoryController::class, 'subCatDelete'])->name('admin.sub.category.delete');

    Route::get('admin/posts', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('admin/post/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('admin/post/store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('admin/post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('admin/post/update/{id}', [PostController::class, 'update'])->name('admin.post.update');

    Route::get('admin/contact-us', [AdminController::class, 'contactUs'])->name('admin.contactus');
    Route::get('admin/contact-us/{id}', [AdminController::class, 'deleteContactUs'])->name('admin.contactus.delete');
    Route::get('admin/subscribers', [AdminController::class, 'subscribers'])->name('admin.subscribers');
    Route::get('admin/subscribers/{id}', [AdminController::class, 'subscriberDelete'])->name('admin.subscriber.delete');
    Route::get('admin/{page}', [AdminController::class, 'websiteInfoFrom'])->name('admin.website.info.from');
    Route::post('admin/{page}', [AdminController::class, 'updateWebsiteInfo'])->name('admin.website.info.update');

    Route::get('admin/title-description/index', [WebsiteTitleDescriptionController::class, 'titleDescriptionIndex'])->name('admin.title.description.index');
    Route::get('admin/title-description/edit/{id}', [WebsiteTitleDescriptionController::class, 'titleDescriptionEdit'])->name('admin.title.description.edit');
    Route::put('admin/title-description/update/{id}', [WebsiteTitleDescriptionController::class, 'titleDescriptionUpdate'])->name('admin.title.description.update');

    Route::get('admin/newslatter/create', [NewslatterController::class, 'create'])->name('admin.newslatter.create');
    Route::post('admin/newslatter/store', [NewslatterController::class, 'store'])->name('admin.newslatter.store');
    Route::put('admin/newslatter/update/{id}', [NewslatterController::class, 'update'])->name('admin.newslatter.update');

    Route::get('admin/newslattertemplate/create/{id}', [NewslatterController::class, 'templateCreate'])->name('admin.newslatter.template.create');
    Route::post('admin/newslattertemplate/store', [NewslatterController::class, 'templateStore'])->name('admin.newslatter.template.store');
    Route::put('admin/newslattertemplate/update/{id}', [NewslatterController::class, 'templateUpdate'])->name('admin.newslatter.template.update');

    Route::post('admin/sendnewslatter/store/{id}', [NewslatterController::class, 'newslatterStore'])->name('admin.send.newslatter.store');

    Route::get('admin/sendnewslattertouser/{id}', [NewslatterController::class, 'sendNewslatterToUser'])->name('admin.send.newslatter.to.user');

    


    Route::post('admin/post/get_sub_category', [AjaxController::class, 'getSubCategory']);
    Route::post('admin/post/upload_image', [AjaxController::class, 'uploadImage']);
});

Route::get('{category}', [IndexController::class, 'categoryBlogList'])->name('cat.post.list');
Route::get('{category}/{sub_category}', [IndexController::class, 'subCategoryBlogList'])->name('sub.cat.post.list');
// Route::get('sub-category/{sub_cat_id}/{sub_cat_slug}', [IndexController::class, 'subCategoryBlogList'])->name('sub.cat.blog.list');


Route::get('{category}/{sub_category}/{post_slug}', [IndexController::class, 'postDetail'])->name('post.detail');



// Route::get('{category}', [IndexController::class, 'categoryBlogList'])->name('cat.post.list');


// Route::get('{category}', [IndexController::class, 'categoryBlogList'])->where('category', '[a-zA-Z]+')->name('cat.post.list');

// Route::get('{sub_category}', [IndexController::class, 'subCategoryBlogList'])->where('sub_category', '[a-zA-Z]+')->name('sub.cat.post.list');
// Route::get('{category}', [IndexController::class, 'categoryBlogList'])->name('cat.post.list');
// Route::get('{sub_category}', [IndexController::class, 'subCategoryBlogList'])->name('sub.cat.post.list');
