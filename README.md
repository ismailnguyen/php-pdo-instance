# php-pdo-instance
PHP PDO Singleton instance

## Setup
Add your configurations into `conf.inc.php` file

## Usage
```
include("PDOInstance.php");

$pdoInstance = PDOInstance::getInstance()->getPDO();

unset($pdoInstance);
```