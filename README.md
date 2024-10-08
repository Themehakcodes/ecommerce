
# 🛒 E-Commerce Website

Welcome to the **E-Commerce Website** project! This application is built using **Laravel** for the backend and **Vue.js** for the frontend, providing a full-stack solution for creating and managing an online store. 🚀

## 🌟 Features

- 🛍️ **Product Management**: Add, update, and remove products with ease.
- 🛒 **Cart System**: Smooth shopping experience with real-time cart updates.
- 💳 **Payment Gateway Integration**: Secure payment options for a seamless checkout process.
- 🔒 **User Authentication**: Login and registration system using Laravel Sanctum.
- 📦 **Order Management**: Keep track of orders and manage the shipping process.
- 📊 **Admin Dashboard**: Overview of sales, orders, and customer data.

## 🛠️ Technologies Used

- **Backend**: Laravel 10.x
- **Frontend**: Vue.js 3.x, Vue Router, Vuex
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **Styling**: Tailwind CSS
- **Build Tools**: Vite

## 🚀 Setup and Installation

### Prerequisites
- PHP 8.x
- Composer
- Node.js
- MySQL

### Steps to Install

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/ecommerce-website.git
   ```
2. Navigate to the project directory:
   ```bash
   cd ecommerce-website
   ```
3. Install the PHP dependencies:
   ```bash
   composer install
   ```
4. Install the Node.js dependencies:
   ```bash
   npm install
   ```
5. Create a `.env` file:
   ```bash
   cp .env.example .env
   ```
6. Generate the application key:
   ```bash
   php artisan key:generate
   ```
7. Run the migrations to set up the database:
   ```bash
   php artisan migrate
   ```
8. Start the development server:
   ```bash
   php artisan serve
   npm run dev
   ```

## 📂 Project Structure

- **Backend**: The Laravel backend handles the API endpoints, user authentication, and database management.
- **Frontend**: The Vue.js frontend provides a smooth and responsive user interface, communicating with the backend via API calls.
- **Database**: MySQL is used for storing product data, user information, and orders.
  
## 📜 API Documentation

The project uses RESTful APIs for communication between the frontend and backend. Authentication is managed using **Laravel Sanctum** tokens.

## 🧑‍💻 Contribution Guidelines

Feel free to fork this repository and submit pull requests. Here are a few steps for contributing:
1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m "Add some feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## 🛡️ License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

Created by [Mahak Singh](https://github.com/your-username).

---

Made with ❤️ by Mahak Singh.
