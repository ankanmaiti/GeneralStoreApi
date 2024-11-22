# General Store API

This project is a RESTful API for managing a single general store. 
The API handles inventory, staff roles, customer orders, and local delivery within a certain range. 
It also supports secure payment options and enforces age restrictions for certain items.

## Features

- **User Management:** ![Processing](https://img.shields.io/badge/status-Processing-yellow)
  - Owners, Managers, and Staff roles with distinct permissions.
- **Inventory Management:** ![Processing](https://img.shields.io/badge/status-Processing-yellow)
  - Items organized into categories.
  - Age-restricted items with purchase validation.
- **Order and Delivery:** ![Processing](https://img.shields.io/badge/status-Processing-yellow)
  - Local delivery supported within a 30km radius.
  - Delivery tracking and management.
- **Payment Options:** ![Processing](https://img.shields.io/badge/status-Processing-yellow)
  - Supports card and UPI payments.
- **Targeted Operations:** ![Processing](https://img.shields.io/badge/status-Processing-yellow)
  - Designed for a single store with an audience in the same region.

---

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/ankanmaiti/GeneralStoreApi.git
   cd GeneralStoreApi
   ```
1. **Install dependencies using Composer:**

    ```bash
    composer install
    ```

1. **Set up the .env file:**

    ```bash
    cp .env.example .env
    ```

    - Update database credentials.
    - Configure payment gateway API keys.
    - Set Google Maps or geolocation API for calculating delivery range.

1. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

1. **Run migrations and seeders:**

    ```bash
    php artisan migrate --seed
    ```

1. **Start the development server:**

    ```bash
    php artisan solo
    ```

---

## API Endpoints

### Authentication

| Method | Endpoint          | Description             |         |
|--------|-------------------|-------------------------|---------------|
| POST   | `/api/register`   | Register a new user     | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| POST   | `/api/login`      | Authenticate a user     | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| POST   | `/api/logout`     | Logout the user         | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |

### Users and Roles

| Method | Endpoint                 | Description                      |         |
|--------|--------------------------|----------------------------------|---------------|
| GET    | `/api/users`             | List all users (Admin only)      | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| PUT    | `/api/users/{id}/role`   | Update user role (Admin only)    | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |

### Inventory

| Method | Endpoint                     | Description                      |         |
|--------|------------------------------|----------------------------------|---------------|
| GET    | `/api/categories`            | List all item categories         | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| GET    | `/api/items`                 | List all items                   | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| GET    | `/api/items/{id}`            | Get item details                 | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| POST   | `/api/items`                 | Add a new item (Manager only)    | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| PUT    | `/api/items/{id}`            | Update item details (Manager)    | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| DELETE | `/api/items/{id}`            | Remove an item (Manager only)    | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |

### Orders and Delivery

| Method | Endpoint                     | Description                     |         |
|--------|------------------------------|---------------------------------|---------------|
| POST   | `/api/orders`                | Place a new order               | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| GET    | `/api/orders/{id}`           | Get order details               | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |
| GET    | `/api/orders/delivery/{id}`  | Check delivery status           | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |

### Payments

| Method | Endpoint                     | Description                     |         |
|--------|------------------------------|---------------------------------|---------------|
| POST   | `/api/payments`              | Process a payment               | ![Processing](https://img.shields.io/badge/status-Processing-yellow) |

---

