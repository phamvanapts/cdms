# CDMS (Content Delivery Management System)

## Overview
CDMS is a simple Content Delivery Management System built using PHP. It provides functionalities for user authentication, user management, and a basic structure for handling content delivery.

## Features
- User authentication (login, logout, registration)
- User management (create, edit, delete users)
- Middleware for authentication and admin checks
- MVC architecture for better organization of code

## Directory Structure
```
cdms/
├── app/
│   ├── controllers/       # Contains controllers for handling logic
│   ├── models/            # Contains models for database interaction
│   ├── views/             # Contains view files for the user interface
│   ├── middleware/        # Contains middleware for request handling
│   └── helpers/           # Contains utility functions
├── core/                  # Contains core files of the application
├── public/                # Contains static files and entry point
├── routes/                # Contains route definitions
├── .env                   # Environment configuration file
├── composer.json          # Composer configuration file
└── README.md              # Project documentation
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd cdms
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Configure your environment settings in the `.env` file.

## Usage
- Access the application by navigating to `http://localhost/cdms/public/index.php`.
- Use the authentication features to log in or register a new user.
- Manage users through the user management interface.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.