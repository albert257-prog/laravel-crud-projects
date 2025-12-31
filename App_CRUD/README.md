Markdown

# Laravel CRUD Project 🚀

A simple Laravel application that allows users to register, log in, and create/update posts. This project demonstrates basic Eloquent relationships between Users and Posts.

---

## 🛠️ Requirements

- **PHP** >= 8.1
- **Composer**
- **Node.js & NPM**
- **MySQL** or any supported database

---

## 🚀 Installation & Setup

Follow these steps to get the project running on your local machine:

### 1. Clone the repository
```bash
git clone https://github.com/albert257-prog/laravel-crud-projects.git
cd laravel-crud-projects
2. Install PHP dependencies
Bash

composer install
3. Install Frontend dependencies
Bash

npm install && npm run build
4. Setup Environment File
Copy the example environment file and generate a unique application key:

Bash

cp .env.example .env
php artisan key:generate
5. Configure Database
Open the .env file and update these lines with your local database credentials:

Code snippet

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app
DB_USERNAME=root
DB_PASSWORD=
6. Run Migrations
Create the necessary database tables:

Bash

php artisan migrate
7. Launch the Application
Bash

php artisan serve
The app will be available at: http://127.0.0.1:8000

📂 Project Features
User Authentication: Registration and Login systems.

CRUD Operations: Create, Read, Update, and Delete posts.

Relationships: Each post is linked to a user via user_id.

Dynamic Views: Uses Blade templates for the frontend.

🤝 Contributing
If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are welcome!