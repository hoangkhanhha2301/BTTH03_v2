<?php
require_once '../Models/AuthorModel.php';
class AuthorService {
    public function getAllAuthor(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "SELECT * FROM author";
            $stmt = $conn->query($sql);

            $authors = [];
            while($row = $stmt->fetch()){
                $author = new Author($row['id'], $row['tenTacGia']);
                array_push($authors, $author);
            }
            return $authors;
        }else {
            echo "Not connected";
        }
    } 
}