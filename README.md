# NarkuCollectionWebsite
A website that tracks my personal collection of different items 

## Table of Contents
- [Features](#Features)
- [Technologies Used](#Technologies-Used)
- [Screenshots](#Screenshots)
- [Setup Instructions](#Setup-Instructions)
- [Usage](#Usage)

## Features
- **Responsive Design**: The application layout adjusts to fit screens of all sizes, ensuring a mobile-friendly user experience.
- **CRUD Operations**: Users can add books to their collection via a form that submits data to a MariaDB database. Data is then retrieved and displayed in a table format.
- **Category Navigation**: A navigation bar allows users to switch between categories, making it easy to manage different types of items.
- **User Interface**: The interface is designed with a simple, intuitive layout that includes a form for data entry and a table for data display.

## Technologies Used
### Frontend
- **HTML**: For structuring the application’s pages.
- **CSS**: For styling the application with a responsive layout.
### Middleware
- **PHP**: For server-side scripting and database connection.
- **jQuery**: For client-side scripting and enhanced interactivity.
### Backend
- **MariaDB**: A relational database used to store collection data.

## Screenshots
### Home Page
![Screenshot of the homepage of the Narku Collection Website.](/NarkuWebPics/narkuHomePage.png)
This page serves as the welcome page of the application, featuring the title and a navigation bar with different categories.

### Book Collection Form and Table
- **Add a Book Form**
![Screenshot of the book page of the Narku Collection Website without the table.](/NarkuWebPics/narkuBookPage.png)
Users can fill out this form to add a book to their collection, which is then stored in the MariaDB database.

- **Book List**
![Screenshot of the book page of the Narku Collection Website including the table.](/NarkuWebPics/narkuBookPageWithTable.png)
This page displays all the books that have been added to the collection, with data retrieved from the database and shown in a table format.

## Setup Instructions
### Prerequisites
- **Web Server**: Apache or any server capable of running PHP.
- **Database Server**: MariaDB.
- **Software**: XAMPP (recommended) or any LAMP stack.

### Installation Steps
1. Clone the Repository:
  git clone https://github.com/yourusername/repositoryname.git
  cd repositoryname

2. Set up MariaDB Database:
- Open MariaDB in your terminal or use a database management tool (e.g., phpMyAdmin).
- Create a database for the collection:
  `CREATE DATABASE narku_collection;`
- Create a table for books:
    ```
    USE narku_collection;
    CREATE TABLE books (
      id INT PRIMARY KEY AUTO_INCREMENT,
      title VARCHAR(255),
      author VARCHAR(255),
      year_published INT,
      publisher VARCHAR(255)
    );
    ```
3. Update Database Connection in PHP:
Go to the config.php file in the repository and update the database connection settings with your MariaDB credentials:
  - $host = 'localhost';
  - $db = 'narku_collection';
  - $user = 'yourusername';
  - $password = 'yourpassword';

4. Start Your Local Server:
- If using XAMPP, start Apache and MySQL.
- Place the project files in the htdocs folder of your XAMPP installation or the appropriate directory for your server.

5. Access the Application:
Open your browser and go to http://localhost/repositoryname.

## Usage
### Adding Books:
  - Navigate to the Books section.
  - Fill in the form with the title, author, year published, and publisher.
  - Click Submit to add the book to the database.
### Viewing Books:
- Once books are added, they will be displayed in a table format on the same page.
- You can view details such as the book’s ID, title, author, year published, and publisher.

With this application, you can manage and track your personal collection of books, CDs, video games, and board games easily! Enjoy using Narku's Collection.
