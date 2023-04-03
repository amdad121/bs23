<?php

class Category {
    private $db;

    public function __construct() {
        require_once('Database.php');
        $this->db = new Database();
    }

    public function getCategoryItems() {
        $conn = $this->db->connect();

        $sql = "SELECT 
        category.id, 
        category.name, 
        COUNT(item.id) AS total_items 
        FROM 
            category 
            LEFT JOIN item_category_relations ON category.Id = item_category_relations.categoryId 
            LEFT JOIN item ON item_category_relations.itemNumber = item.Number 
        GROUP BY 
            category.id 
        ORDER BY 
        total_items DESC;";
        
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        return $result;
    }
}