## Installation

1. Clone the repository:    git clone https://github.com/your-repository-url.git
2. Install dependencies using Composer:    composer install
3. Set up the database:
    3.1 Create a .env.local file and configure your database connection.
    3.2 Create the database:      php bin/console doctrine:database:create
    3.3 Run migrations to create the schema:      php bin/console doctrine:migrations:migrate

## Usage
1. Start the Symfony development server:    symfony server:start
2. Access the application in your browser:     http://localhost:8000


## Contributing
Feel free to contribute to this project by submitting pull requests.