# TaskApp - Laravel Task Management System

A modern, responsive task management application built with Laravel 12 and styled with Tailwind CSS. This application provides a clean and intuitive interface for managing your daily tasks with full CRUD functionality.

![Laravel](https://img.shields.io/badge/Laravel-12.0-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-4.0-blue.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

## 🌟 Features

- **Create Tasks**: Add new tasks with name and description
- **View Tasks**: Display all tasks in a beautiful, responsive interface
- **Task Details**: View individual task details with timestamps
- **Edit Tasks**: Update task information including name, description, and status
- **Delete Tasks**: Remove tasks with confirmation
- **Status Management**: Track task completion status (In Progress/Completed)
- **Responsive Design**: Works seamlessly on desktop and mobile devices
- **Dark Theme**: Modern dark UI with excellent contrast
- **Task Factory**: Includes database seeding with fake data for testing

## 🎨 Screenshots

The application features a modern dark theme with:
- Clean task listing with status indicators
- Detailed task view with creation/update timestamps
- Intuitive action buttons (Edit, Delete, Back)
- Responsive grid layout
- Beautiful status badges and icons

## 🚀 Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM (for frontend assets)
- MySQL/PostgreSQL/SQLite database

### Installation

1. **Clone the repository**
   ```bash
   git clone <your-repository-url>
   cd taskapp
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database configuration**
   
   Update your `.env` file with database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=taskapp
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` to access the application.

## 📊 Database Schema

### Tasks Table
| Column | Type | Description |
|--------|------|-------------|
| id | Primary Key | Unique identifier |
| name | String | Task name/title |
| description | String (nullable) | Task description |
| status | Boolean | Completion status (default: false) |
| created_at | Timestamp | Creation time |
| updated_at | Timestamp | Last update time |

## 🛣️ Routes

| Method | URI | Name | Description |
|--------|-----|------|-------------|
| GET | `/` | home | Display all tasks |
| POST | `/` | user.post | Create new task |
| GET | `/task/{id}` | task.show | Show specific task |
| GET | `/task/{id}/edit` | task.showForEdit | Show edit form |
| PUT | `/task/{id}/edit` | task.update | Update task |
| DELETE | `/task/{id}` | task.delete | Delete task |

## 🏗️ Project Structure

```
taskapp/
├── app/
│   ├── Http/Controllers/
│   │   └── Task.php              # Main task controller
│   └── Models/
│       ├── Task.php              # Task model with HasFactory trait
│       └── User.php              # User model
├── database/
│   ├── factories/
│   │   └── TaskFactory.php       # Task factory for seeding
│   ├── migrations/
│   │   └── 2025_07_09_211613_create_tasks_table.php
│   └── seeders/
├── resources/
│   ├── css/
│   │   └── app.css               # Tailwind CSS
│   ├── js/
│   │   └── app.js                # JavaScript assets
│   └── views/
│       ├── welcome.blade.php     # Home page with task list
│       ├── task.blade.php        # Individual task view
│       ├── edit.blade.php        # Task edit form
│       └── 404.blade.php         # Custom 404 page
└── routes/
    └── web.php                   # Web routes
```

## 🎯 Key Components

### Task Model
- Uses `HasFactory` trait for database seeding
- Fillable fields: `name`, `description`
- Automatic timestamps

### Task Factory
- Generates realistic fake task data
- Uses Faker for random names and descriptions
- Perfect for testing and development

### Controllers
- RESTful design patterns
- Comprehensive CRUD operations
- Clean separation of concerns

### Views
- Blade templating engine
- Responsive Tailwind CSS framework
- Modern dark theme design
- SVG icons for better UX

## 🔧 Development

### Running Tests
```bash
php artisan test
```

### Code Formatting
```bash
./vendor/bin/pint
```

### Database Operations
```bash
# Fresh migration with seeding
php artisan migrate:fresh --seed

# Create new migration
php artisan make:migration create_example_table

# Create new factory
php artisan make:factory ExampleFactory
```

## 🚀 Deployment

### Production Setup
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure production database
4. Run `composer install --optimize-autoloader --no-dev`
5. Run `php artisan config:cache`
6. Run `php artisan route:cache`
7. Run `php artisan view:cache`

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP framework
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- [Heroicons](https://heroicons.com/) - Beautiful hand-crafted SVG icons

## 📞 Support

If you encounter any issues or have questions, please:
1. Check the [Laravel Documentation](https://laravel.com/docs)
2. Search existing issues in the repository
3. Create a new issue with detailed information

---

Built with ❤️ using Laravel and Tailwind CSS
