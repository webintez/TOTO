# Lords Mobility Clone

A dynamic website clone of Lords Mobility built with Laravel 11, Filament v3, and Tailwind CSS.

## 🚀 Features

- **Dynamic Homepage**: Manage sliders, statistics, featured products, and testimonials via Admin Panel.
- **Product Catalog**: Full product management with specifications, categories, and image galleries.
- **Admin Panel**: Built with Filamentphp for easy content management.
- **Contact Form**: Functional contact form with email notifications.
- **Responsive Design**: Mobile-first design using Tailwind CSS.
- **SEO Optimized**: Dynamic meta tags and clean URLs.

## 🛠️ Deployment Instructions

Follow these steps to deploy the application on your local machine or server.

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL

### Installation

1.  **Clone the repository** (if you haven't already):
    ```bash
    git clone <repository-url>
    cd lords-mobility-clone
    ```

2.  **Install PHP Dependencies**:
    ```bash
    composer install
    ```

3.  **Install Frontend Dependencies & Build Assets**:
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Setup**:
    - Copy `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Configure your database credentials in the `.env` file (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

5.  **Generate Application Key**:
    ```bash
    php artisan key:generate
    ```

6.  **Run Migrations & Seed Database**:
    This will create the tables and populate them with demo data.
    ```bash
    php artisan migrate --seed
    ```

7.  **Link Storage**:
    Required for viewing uploaded images.
    ```bash
    php artisan storage:link
    ```

8.  **Publish Admin Assets**:
    Required for the Filament admin panel styles to load correctly.
    ```bash
    php artisan filament:assets
    ```

9.  **Start the Server**:
    ```bash
    php artisan serve
    ```

## 🔐 Admin Credentials

A default admin account is seeded for you to access the dashboard.

- **Login URL**: `http://localhost:8000/admin`
- **Email**: `admin@lordsmobility.com`
- **Password**: `password`

## 📧 Email Configuration

To receive contact form submissions, configure the mail settings in your `.env` file. For testing, you can use the `log` driver:

```env
MAIL_MAILER=log
```

Or configure SMTP for real emails:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@lordsmobility.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## 📁 Important Directories

- `app/Filament/Resources`: Admin panel resources (Products, Sliders, etc.)
- `resources/views`: Blade templates for the frontend.
- `database/seeders`: Data seeders for initial content.
