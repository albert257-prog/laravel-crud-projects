Task Management System (Laravel CRUD)
A secure, role-aware Task Management application built with Laravel. This project demonstrates core proficiency in the Laravel ecosystem, focusing on security, database design, and clean architecture.

🚀 Features
Authentication: Managed via Laravel Breeze.

Task CRUD: Full Create, Read, Update, and Delete functionality.

Authorization: Users can only manage their own tasks via Task Policies.

Soft Deletes: Safety mechanism for task recovery.

Pagination & Search: Efficient data handling for better UX.

Dashboard Stats: Real-time counts of task statuses using Eloquent aggregates.

🛠️ Tech Stack
Backend: PHP 8.2+, Laravel 10/11.

Database: MySQL.

Frontend: Blade, Bootstrap 5.

Auth: Laravel Breeze.

⚙️ Installation & Setup
Clone the repository:

Bash

git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
Install Dependencies:

Bash

composer install
npm install
Environment Setup:

Create a database named task_manager.

Copy .env.example to .env.

Update DB_DATABASE, DB_USERNAME, and DB_PASSWORD in your .env.

Database Migration & Seeding:

Bash

php artisan migrate:fresh --seed
Run the Application:

Terminal 1: php artisan serve

Terminal 2: npm run dev

Test Login:

Email: test@example.com

Password: password

🧠 Technical Interview Talking Points
Database Design
Why Soft Deletes?: Used SoftDeletes to ensure data isn't permanently lost and can be audited or restored.

Schema Choice: Used an ENUM for task status ('pending', 'completed') to ensure data integrity at the database level.

Security & Optimization
Policies: Implemented TaskPolicy to ensure a user can only view/edit tasks where user_id matches their ID, preventing IDOR (Insecure Direct Object Reference) vulnerabilities.

CSRF Protection: All forms include the @csrf directive to prevent cross-site request forgery.

Eager Loading: Prepared to implement with('user') to solve the N+1 query problem if scaling.