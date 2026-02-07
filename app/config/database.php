<?php
/**
 * FlintGo - Database Configuration
 */
// Membuat 
// Database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'flintgo_db');
define('DB_CHARSET', 'utf8mb4');

// Database connection class (Singleton pattern)
class Database {
    private static $instance = null;
    private $conn;
    
    private function __construct() {
        try {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
            
            $this->conn->set_charset(DB_CHARSET);
            
        } catch (Exception $e) {
            die("Database Error: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->conn;
    }
    
    public function query($sql) {
        return $this->conn->query($sql);
    }
    
    public function prepare($sql) {
        return $this->conn->prepare($sql);
    }
    
    public function escape($value) {
        return $this->conn->real_escape_string($value);
    }
    
    public function lastInsertId() {
        return $this->conn->insert_id;
    }
    
    private function __clone() {}
    
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
}

// Helper function
function getDB() {
    return Database::getInstance()->getConnection();
}

?>
