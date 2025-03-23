# iMNHS - Integrated School Management System

## 📌 Project Overview
**iMNHS** is a comprehensive **school management system** built using **Laravel, Vue.js, and MySQL**. It streamlines administrative tasks, attendance tracking, class management, and communication within a school.

## 🚀 Technologies Used
- **Backend:** Laravel (PHP Framework)
- **Frontend:** Vue.js (JavaScript Framework)
- **Database:** MySQL
- **Styling:** Tailwind CSS
- **Build Tool:** Vite

## 🎯 Features
### 🏫 Admin Features:
- **Dashboard** - Overview of school activities
- **Users Management** - Manage students, teachers, and staff
- **Classes & Subjects** - Organize classes and subjects
- **Attendance Tracking** - Automated attendance management
- **Exams & Results** - Record and generate exam results
- **Fees & Payments** - Monitor school fees and payments
- **Library Management** - Track book inventory and borrowings
- **Communication** - Notifications and messaging system
- **Events & Activities** - Manage school events
- **Settings & Reports** - Configure system settings and generate reports

## 📂 Installation Guide
### 1️⃣ Prerequisites
Make sure you have the following installed:
- PHP 8+
- Composer
- Node.js & npm
- MySQL
- Laravel & Vue CLI

### 2️⃣ Clone the Repository
```bash
git clone https://github.com/your-repo/imnhs.git
cd imnhs
```

### 3️⃣ Install Dependencies
#### Backend (Laravel):
```bash
composer install
cp .env.example .env
php artisan key:generate
```
#### Frontend (Vue.js):
```bash
npm install
```

### 4️⃣ Configure Environment Variables
Update the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=imnhs_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Run Database Migrations
```bash
php artisan migrate --seed
```

### 6️⃣ Start the Development Server
#### Backend (Laravel):
```bash
php artisan serve
```
#### Frontend (Vue.js):
```bash
npm run dev
```

## 🔐 Security Measures
- **Authentication & Authorization** using Laravel Breeze
- **Database Security** with access control and validation
- **File Security** ensuring safe uploads and storage

## 🛠️ Deployment
### Build the Frontend
```bash
npm run build
```
### Deploy to Production Server
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📜 License
This project is **open-source** under the **MIT License**.

## 📞 Contact
For inquiries or contributions, contact **[Your Name]** at **esparragojames@gmail.com** or visit **[Project Repository](https://github.com/your-repo/imnhs)**.

