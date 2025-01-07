# Invstorly Backend API

A Laravel-based REST API that serves as the backend for the Invstorly Alpha test application. This API handles user authentication, listing management, and file storage.

## Requirements

- PHP >= 8.2
- Composer
- MySQL/PostgreSQL database
- Laravel 11.x

## Setup

1. Clone the repository
```bash
git clone <repository-url>
cd backend
```

2. Install dependencies
```bash
composer install
```

3. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=invstorly
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations
```bash
php artisan migrate
```

6. Start the development server
```bash
php artisan serve
```

## API Endpoints

### Authentication
- `POST /api/register` - Register a new user
- `POST /api/login` - User login

### Listings
- `GET /api/listings` - Get all listings
- `GET /api/listings/{id}` - Get a specific listing
- `POST /api/listings` - Create a new listing (requires authentication)
- `PUT /api/listings/{id}` - Update a listing (requires authentication)
- `DELETE /api/listings/{id}` - Delete a listing (requires authentication)

## Testing

Run the test suite:
```bash
php artisan test
```
```