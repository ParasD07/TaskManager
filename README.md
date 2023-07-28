# Project Name: TaskManager

TaskManager is a simple project designed to help you organize and manage your tasks efficiently. This README file will guide you through the setup process to get the project up and running on your local machine.

## How to Set Up?

### 1. Download or Clone the Repository

To get started, you can either download the project as a ZIP file and extract it to your desired location, or you can use Git to clone the repository with the following command:

```
git clone https://github.com/your-username/TaskManager.git
```

Replace `your-username` with your GitHub username or the appropriate repository URL.

### 2. Create a Database

Next, you need to create a MySQL or MariaDB database named `taskmanager` on your local development environment. This can be done using a database management tool like phpMyAdmin or by using the MySQL command-line interface:

```sql
CREATE DATABASE taskmanager;
```

### 3. Create the "tasks" Table

Once the database is created, you will need to create a table named `tasks` with the following schema:

```sql
CREATE TABLE tasks (
    task_id INT(150) AUTO_INCREMENT PRIMARY KEY,
    taskname VARCHAR(150),
    deadline VARCHAR(150),
    addedon VARCHAR(150)
);
```

The `tasks` table will store information about your tasks, including their names, deadlines, and the date they were added.


### 4. Start the Application

With the database set up and the configuration completed, you are ready to run the TaskManager application. You can do this by opening it in your web browser or using a local development server like XAMPP or WAMP.

## Usage

- Once the application is up and running, you can use it to manage your tasks effectively.
- On the homepage, you can see your existing tasks and add new tasks using the "Add Task" button.
- Editing a task's name or deadline can be done by clicking on the "update" button next to the task.
- You also have the option to delete a task as completed using the provided button.

Enjoy using TaskManager to keep your tasks organized!

