<?php
require_once 'Services/BookService.php';
require_once 'Services/AuthorService.php';
require_once 'Models/BookModel.php';
class HomeController
{
    public function index()
    {
        $bookService = new BookService();
        $books = $bookService->getAllBook();

        include '../Views/Home/index.php';
    }

    public function create()
    {
        $bookService = new BookService();
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthor();

        include '../Views/AddBook/create.php';

        if (isset($_POST['submit'])) {
            $tenSach = $_POST['tenSach'];
            $namXuatBan = $_POST['namXuatBan'];
            $idTacGia = $_POST['idTacGia'];
            $book = new BookService($tenSach, $namXuatBan, $idTacGia);

            $isUpdate = $AuthorService->addBook($book);

            if ($isUpdate) {
                header('location: /index.php');
                exit();
            }
            echo "lỗi dữ liệu";
        }
    }
}
