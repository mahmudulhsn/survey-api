# Survey API Setup

## Prerequisites

Before getting started, ensure that your system meets the following requirements:

- PHP (version 8.0 or higher)
- Composer
- Database server (e.g., MySQL, PostgreSQL, SQLite)

## Getting Started

Follow the steps below to set up the Laravel 10 project:

1. Clone this repository:
   ```bash
   git clone git@github.com:mahmudulhsn/survey-api.git
   ```

2. Navigate to the project directory:
   ```bash
   cd survey-api
   ```
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Create a copy of the .env.example file and rename it to .env:
   ```bash
   cp .env.example .env
   ```
5. Generate a new application key:
   ```bash
   php artisan key:generate
   ```
6. Configure the database connection by updating the .env file with your database credentials.
7. Run the database migrations:
   ```bash
   php artisan migrate --seed
   ```
8. Start the Laravel development server:
   ```bash
   php artisan serve
   ```
   
   ## Frontend  Link: [https://https://github.com/mahmudulhsn/react-survey](https://github.com/mahmudulhsn/react-survey)

