<?php
require_once 'Connection.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);


class Categories
{
    private $conn;

    public function __construct()
    {
        $connection = connect();
        $this->conn = $connection;
    }

    public function get_categories()
    {

        $query = "SELECT * FROM categories";
        $stmt = $this->conn->query($query);

        if ($stmt->rowCount() > 0) {
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $categories =  "No projects found";
        }
        return $categories;
    }

    public function create_Categories($category)
    {

        $query = "SELECT * FROM categories where cat_title ='$category'";
        $exists = $this->conn->query($query);

        if ($exists->rowCount() > 0) {
            echo "Category already exists";
            die();
        }

        $query  = "INSERT INTO categories (cat_title) VALUES (:category)";
        $insert = $this->conn->prepare($query);
        $ok = $insert->execute([
            ':category' => $category,
        ]);

        if ($ok) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_Categories($id)
    {

        $query = "DELETE FROM categories WHERE id = '$id'";
        $ok = $delete = $this->conn->query($query);
        if ($ok) {
            return true;
        } else {
            return false;
        }
    }

    public function get_category_partially($data)
    {

        $query = "SELECT * FROM `categories` WHERE cat_title LIKE '%$data%'";
        $stmt = $this->conn->query($query);
        $results = [];
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $results[] = $row;
            }
        }
        return $results;
    }

    public function get_post_by_category($id){

        $query = "SELECT * FROM posts_categories AS pc  JOIN posts AS p ON pc.posts_id = p.id WHERE pc.cat_id ='$id';";
        $stmt = $this->conn->query($query);

        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }
}
