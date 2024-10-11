
# Contact System

A simple contact form system built with Laravel for collecting messages from users. This application includes features like form validation, success/failure notifications, and email submission of user queries.

## Features

- Collects user messages with the following fields: Name, Email, Message.
- Form validation:
  - Name is required and must be a valid string.
  - Email must be a valid email address.
  - Message is required and must not be empty.
- Success message shown after a successful form submission.
- Error messages displayed for invalid input fields.
- Built-in CSRF protection for form submissions.

## Technology Stack

- **Backend**: Laravel
- **Frontend**: Blade templating engine with HTML, inline CSS
- **Database**: MySQL (or any other relational database supported by Laravel)
- **Email**: Configured to send emails through Laravel's `Mail` class
