<!-- <?php
class Math {
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }
    public static function subtract($num1, $num2) {
        return $num1 - $num2;
    }
    public static function multiply($num1, $num2) {
        return $num1 * $num2;
    }
}

echo "Addition: " . Math::add(10, 5) . "<br>";        // Outputs: Addition: 15
echo "Subtraction: " . Math::subtract(10, 5) . "<br>"; // Outputs: Subtraction: 5
echo "Multiplication: " . Math::multiply(10, 5) . "<br>"; // Outputs: Multiplication: 50

?> -->

// 2.	Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account.

<!-- <?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $" . $amount . "<br>";
        } else {
            echo "Insufficient balance or invalid withdrawal amount.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}
$account = new BankAccount("123456789", 1000);
$account->deposit(5000);
$account->withdraw(2000);
echo "Current Balance: $" . $account->getBalance() . "<br>";
?> -->

//3.	Write a PHP a class hierarchy for a library system, including classes like 'LibraryItem', 'Book', 'DVD', etc. Implement appropriate properties and methods for each class.

<!-- <?php
class LibraryItem {
    protected $title;
    protected $author;
    protected $publicationYear;

    public function __construct($title, $author, $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}, published in {$this->publicationYear}";
    }
}
class Book extends LibraryItem {
    private $genre;

    public function __construct($title, $author, $publicationYear, $genre) {
        parent::__construct($title, $author, $publicationYear);
        $this->genre = $genre;
    }

    public function getInfo() {
        return parent::getInfo() . ", Genre: {$this->genre}";
    }
}
class DVD extends
    LibraryItem {
        private $duration;
    
        public function __construct($title, $author, $publicationYear, $duration) {
            parent::__construct($title, $author, $publicationYear);
            $this->duration = $duration;
        }
    
        public function getInfo() {
            return parent::getInfo() . ", Duration: {$this->duration} minutes";
        }
    }
$book = new Book("1984", "George Orwell", 1949, "Dystopian");
$dvd = new DVD("Inception", "Christopher Nolan", 2010, 148);
echo $book->getInfo() . "<br>";
echo $dvd->getInfo() . "<br>";
?> -->

//4.	Write a class called 'Employee' that extends the 'Person' class and adds properties like 'salary' and 'position'. Implement methods to display employee details.

<!-- <?php
class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getDetails() {
        return "Name: {$this->name}, Age: {$this->age}";
    }
}
class Employee extends Person {
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getEmployeeDetails() {
        return parent::getDetails() . ", Position: {$this->position}, Salary: \${$this->salary}";
    }
}
$employee = new Employee("Alice", 30, 60000, "Software Engineer");
echo $employee->getEmployeeDetails() . "<br>";
?> -->

//5.	Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.

<!-- <?php
abstract class Shape {
    abstract public function calculateArea();
}
class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}
$triangle = new Triangle(10, 5);
$rectangle = new Rectangle(10, 5);
echo "Triangle Area: " . $triangle->calculateArea() . "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
?> -->
