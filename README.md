<p align="center">
<img src="https://github.com/delanceronline/qb-invoice-manage/blob/main/readme-images/landing.png">
</p>

## About QB Invoice Management

This is a web application to management simple invoice creation and sharing among different users. It was developed using PHP with Laravel framework in 2020.

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

Prior to Laravel 11, the Http Kernel (found in app/Http/Kernel.php) is where all the configuration for middleware was found. Also prior to Laravel 11, you would typically never touch bootstrap/app.php. However, that is no longer the case in this new version. Therefore, the existing code has been modified to have it upgraded to Laravel 11 in bootstrap/app.php:

```
->withMiddleware(function (Middleware $middleware) {
        
        $middleware->alias([
            'owner' => \App\Http\Middleware\Owner::class,
        ]);
})
```