<?php

class Application
{
    private $conn;


    public function __construct()
    {
        $connection = connect();
        $this->conn = $connection;
    }


    public function apply($program, $degree, $gender, $firstName, $lastName, $email, $phone, $comment)
    {
        // Check if required fields are submitted
        if ($this->checkRequiredFields($firstName, $lastName, $email, $phone, $program, $degree)) {
            // Insert application details into the database
            $result = $this->insertApplicationIntoDatabase($program, $degree, $gender, $firstName, $lastName, $email, $phone, $comment);

            // Return the result of the application submission
            return $result;
        } else {
            $_SESSION['error'] = "Please fill in all required fields.";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit(); // Add exit to stop further execution
        }
    }

    private function checkRequiredFields($firstName, $lastName, $email, $phone, $program, $degree)
    {
        // Check if required fields are submitted
        return !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($program) && !empty($degree);
    }


    public function insertApplicationIntoDatabase($program, $degree, $gender, $firstName, $lastName, $email, $phone, $comment)
    {
        // Your database insertion logic here using the provided PDO connection
        try {
            $query = "INSERT INTO applications (program, degree, gender, first_name, last_name, email, phone, comment) 
                      VALUES (:program, :degree, :gender, :firstName, :lastName, :email, :phone, :comment)";

            $statement = $this->conn->prepare($query);

            $statement->bindParam(':program', $program);
            $statement->bindParam(':degree', $degree);
            $statement->bindParam(':gender', $gender);
            $statement->bindParam(':firstName', $firstName);
            $statement->bindParam(':lastName', $lastName);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':phone', $phone);
            $statement->bindParam(':comment', $comment);

            $statement->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getAllApplications($startIndex, $perPage)
    {
        try {
            // Adjust the query to include LIMIT for pagination
            $query = "SELECT * FROM applications LIMIT :startIndex, :perPage";
            $stmt = $this->conn->prepare($query);

            // Bind parameters
            $stmt->bindParam(':startIndex', $startIndex, PDO::PARAM_INT);
            $stmt->bindParam(':perPage', $perPage, PDO::PARAM_INT);

            $stmt->execute();
            $applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $applications;
        } catch (PDOException $e) {
            return "Error retrieving applications: " . $e->getMessage();
        }
    }


    public function countApplications()
    {
        try {
            $query = "SELECT COUNT(*) as count FROM applications";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $count = $stmt->fetch(PDO::FETCH_ASSOC);
            return $count['count'];
        } catch (PDOException $e) {
            return "Error counting applications: " . $e->getMessage();
        }
    }

}

?>