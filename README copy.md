# Arbre-de-comp-tences---API
========

## Description

This project is a skill tree API built with API Platform on PHP/Symfony. It provides endpoints for managing skills and their relationships, including functionalities for both client and admin interfaces.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Symfony CLI (optional but recommended)
- MySQL or another compatible database

### Steps

1. Clone the repository:

   ```sh
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name

2. Install dependencies:

        +           composer install

3. Set up the environment variables:

        +           cp .env.example .env

4. Configure the .env file with your database credentials:

        +           DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"

5. Run the database migrations:

        +           php bin/console doctrine:migrations:migrate

6. Load fixtures (only in dev for test data):

        +           php bin/console doctrine:fixtures:load


## Configuration

Ensure that your .env file is correctly configured for your environment. Key settings include:

APP_ENV=dev
APP_SECRET=your_secret_key
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

### Usage
Running the Server
Start the Symfony server:

     +           symfony server:start

Alternatively, you can use the built-in PHP server:

     +           php -S 127.0.0.1:8000 -t public

Your API will be accessible at http://127.0.0.1:8000.


## Contributing

1. Fork the repository.
2. Create a new branch (git checkout -b feature-branch).
3. Commit your changes (git commit -m 'Add some feature').
4. Push to the branch (git push origin feature-branch).
5. Create a new Pull Request.


## License & Acknowledgements

- Thanks to the Symfony and API Platform communities for their invaluable resources and support.
- Special thanks to [] for their guidance and mentorship.
- Thank you to all contributors [] and users of this project for their feedback and support.