<p align="center">
<img src="https://github.com/delanceronline/qb-invoice-manage/blob/main/readme-images/landing.png">
</p>

## About QB Invoice Management

This is a web application to management simple invoice creation and sharing among different users. It was developed using PHP with Laravel framework version 8 in 2020. In 2024, Tim Chan has revised it so it can now run on version 11, for portfolio showcase purpose.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Invoice Sharing among Users

<p>Select which users to share with</p>
<p align="center">
<img src="https://github.com/delanceronline/qb-invoice-manage/blob/main/readme-images/edit.png">
</p>

<p>Shared invoices showing up to the respective user</p>
<p align="center">
<img src="https://github.com/delanceronline/qb-invoice-manage/blob/main/readme-images/sharing1.png">
</p>

<p align="center">
<img src="https://github.com/delanceronline/qb-invoice-manage/blob/main/readme-images/sharing2.png">
</p>

## Technical Issues

[ozdemir/datatables](https://datatables.ozdemir.be/) has has been used to enchance the UI.

In customising the data for ozdemir/datatables library, a new route has been in web.php:

```
Route::middleware(['auth'])->group(function (){

    // define invoices.data route to data/notes (calling getData in InvoicesController)

    Route::resource('invoices', InvoicesController::class);
    Route::get('data/notes', [InvoicesController::class, 'getData'])->name('invoices.data');

});
```

Instead of using standard functions from Model class, to gain more flexiability and efficiency, a complex query has been written for selecting all own invoices plus shared invoices:

```
$sqlBuilder = 'SELECT a.id, a.title, a.name, a.created_at FROM 
        ((SELECT invoices.id, invoices.title, users.name, invoices.created_at 
        FROM invoices invoices
        JOIN users users ON users.id = invoices.user_id 
        WHERE invoices.user_id = '.Auth::id().')
        UNION 
        (
            SELECT invoices.id, invoices.title,
            (SELECT name from users WHERE users.id = invoices.user_id) AS name, invoices.created_at                 
            FROM invoice_user invoice_user 
            JOIN invoices invoices ON invoices.id = invoice_user.invoice_id 
            JOIN users users ON users.id = invoice_user.user_id 
            WHERE invoice_user.user_id = ' . Auth::id() . ' 
        )) a';
```

Prior to Laravel 11, the Http Kernel (found in app/Http/Kernel.php) is where all the configuration for middleware was found. Also prior to Laravel 11, you would typically never touch bootstrap/app.php. However, that is no longer the case in this new version. Therefore, the existing code has been modified to have it upgraded to Laravel 11 in bootstrap/app.php:

```
->withMiddleware(function (Middleware $middleware) {
        
        $middleware->alias([
            'owner' => \App\Http\Middleware\Owner::class,
        ]);
})
```