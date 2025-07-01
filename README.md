# eMenu Project

A SaaS-style digital menu application built with **Laravel 11**, **Filament**, and integrated with **Midtrans** for online payment processing.

This project is built to demonstrate how a modern Laravel app can handle admin panels, payment gateway integration, and scalable structure suitable for a multi-user or multi-tenant setup.

---

## 🚀 Features

- ✅ Laravel 11 (clean & modern architecture)
- ✅ [Filament](https://filamentphp.com/) for powerful admin dashboards
- ✅ Midtrans Payment Gateway integration (Snap API)
- ✅ Dynamic product & category management
- ✅ Custom widgets with Filament Panels
- ✅ Responsive design for restaurant-style digital menu usage
- ✅ Ready for deployment and GitHub integration

---

## 🛠️ Installation

> Make sure you have PHP 8.2+, Composer, MySQL, and Node.js installed.

```bash
git clone https://github.com/ghifrz/emenu-project.git
cd emenu-project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

🙌 Credits
BWA
Laravel
Filament PHP
Midtrans