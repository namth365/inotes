<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Ghi Chú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Danh Sách Các Ghi Chú</h3>
            </div>
        </div>
        <form action="">
            <div class="row">
                <div class="col-lg-3"> <select class="form-select" aria-label="Default select example">
                        <option selected>Thể Loại</option>
                        <option value="1">1</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <div class="col-auto">
                        <a class="btn btn-success" href="http://localhost/iNotes/view/add.php">Thêm Mới</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tiêu đề" aria-label="Tiêu đề" aria-describedby="button-addon2">
                        <button class="btn btn-secondary" type="button" id="button-addon2">Tìm Kiếm</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered border-secondary">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tiêu Đề</th>
                            <th scope="col">Phân Loại</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a class="btn btn-primary" href="http://localhost/iNotes/view/edit.php">Sửa</a>
                                <a class="btn btn-danger" href="http://localhost/iNotes/view/delete.php" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Xóa</a>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="float-right" style="float:right">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>




</body>

</html>