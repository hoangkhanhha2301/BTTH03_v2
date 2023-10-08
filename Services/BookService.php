<?php
require_once '../Models/BookModel.php';
class BookService {
    public function getAllBook(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "SELECT * FROM book ORDER BY id DESC";
            $stmt = $conn->query($sql);

            $books = [];
            while($row = $stmt->fetch()){
                $book = new BookModel($row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
                array_push($books, $book);
            }
            return $books;
        }else {
            echo "Not connected";
        }
    } 

    public function addBook($Book){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "INSERT into BookModel (tenSach, namXuatBan, idTacGia) values ('{$book['tenSach1']}', '{$book['tenSach2']}', {$book['idSach3']})";
            $stmt = $conn->query($sql);

            if($stmt){
                return true;
            }else{
                return false;
            }
        }
    }
}