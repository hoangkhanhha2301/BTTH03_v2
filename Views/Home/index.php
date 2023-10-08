
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Danh sach</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thêm sách</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sửa danh sách</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <a href="?action=create" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Tên sách</th>
                        <th scope="col">Năm xuất bản</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>".$row["id"]."</th>";
                            echo "<td>".$row["tensach"]."</td>";
                            echo "<td>".$row["namXuatBan"]."</td>";
                            echo "<td><a href=''><i class='bi bi-pencil-square'></i></a></td>";
                            echo "<td><a href=''><i class='bi bi-trash-fill'></i></a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <?php foreach($books as $book) {?>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/js/bootstrap.esm.min.js">
</body>

</html>