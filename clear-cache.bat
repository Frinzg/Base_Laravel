@echo off
cls
echo ================================
echo   CLEAR ALL CACHE
echo ================================
echo.

php artisan optimize:clear

echo.
echo ✓ Cache cleared successfully!
echo Refresh your browser to see changes.
echo.
pause
