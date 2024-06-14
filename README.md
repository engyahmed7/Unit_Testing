# Unit Testing

This repository contains PHPUnit tests for a `Factorial` class and a `User` class, demonstrating basic usage and testing.

## Installation

Clone the repository and navigate to the project directory.

```bash
git clone https://github.com/engyahmed7/Unit_Testing.git
cd Unit_Testing
```

## Usage

### PHPUnit Testing

Ensure PHPUnit is installed. If not, install it using Composer:

```bash
composer require --dev phpunit/phpunit
```

Run PHPUnit to execute all tests:

```bash
vendor/bin/phpunit
```

## Project Structure

- `src/Factorial.php` - Contains the `Factorial` class with a method to calculate the factorial of a number.
- `src/User.php` - Contains the `User` class with methods to get and set user attributes.
- `tests/FactorialTest.php` - Contains unit tests for the `Factorial` class.
- `tests/UserTest.php` - Contains unit tests for the `User` class.
- `phpunit.xml` - Configuration file for PHPUnit.

### Factorial Class

The `Factorial` class provides a method to calculate the factorial of a given number. The method handles edge cases like negative numbers, non-integer values, and special cases like zero.

### User Class

The `User` class provides methods to get and set user name and email attributes. It includes validation to ensure that the email is in a valid format.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
