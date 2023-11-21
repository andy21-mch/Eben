<?php
require_once 'Connection.php';

    class Projects{
        private $conn;

        public function __construct() {
            $connection = connect();
            $this->conn = $connection;
        }

        public function get_projects(){
            $query = "SELECT * FROM projects";
            $select = $this->conn->query($query);

            if ($select->rowCount() > 0) {
                $projects = $select->fetchAll(PDO::FETCH_ASSOC);
            }
            else{
                $projects =  "No projects found";
            }
            return $projects;
        }
        
        public function create_project($image_url,$title,$short,$heading,$details){

            $query = "INSERT INTO `projects`(`image_url`, `title`, `short_desc`, `heading`, `details`) 
                        VALUES (:url, :title, :short_desc, :heading, :details);";
            $insert = $this->conn->prepare($query);

            $ok = $insert->execute([
                ':url' => $image_url,
                ':title' => $title,
                ':short_desc' => $short,
                ':heading' => $heading,
                ':details' => $details
            ]);

            if($ok == TRUE ){
                return true;
            }
            else{
                return false;
            }

        }

        public function getProjectById($id){
            $query = "SELECT * FROM projects WHERE id =$id";
            $stmt = $this->conn->query($query);

            if ($stmt->rowCount() > 0) {
                $project = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            else{
                $project =  "No project found";
            }
            return $project;
        }

        public function updateProject($image_url,$title,$short,$heading,$details,$id) {
            $sql = "UPDATE `projects` SET `image_url`='$image_url',`title`='$title',`short_desc`='$short',
                        `heading`='$heading',`details`='$details' WHERE id=$id;";
            if ($this->conn->query($sql) == TRUE) {
                return true;
            } else {
                return false;
            }
        }

        public function deletePost($id){
 
            $query = "DELETE FROM projects WHERE id=$id;";
            $delete = $this->conn->query($query);
            if ($delete === TRUE) {
                return true;
            } else {
                return false;
            }
        }
        
        
    }