@echo off
cls
echo ================================
echo   LARAVEL FRESH START SCRIPT
echo ================================
echo.

REM Clear semua cache
echo [1] Clearing all caches...
php artisan optimize:clear
echo.

REM Start server
echo [2] Starting Laravel development server...
echo Server will run at: http://127.0.0.1:8000
echo.
php artisan serve

pause
