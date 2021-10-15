<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Ghi Chú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include_once '../database.php';

    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
        $name = $_REQUEST['name'];
        $description = $_REQUEST['description'];

        $sql    = " INSERT INTO note_type 
        ( id,
            name,
            description) 
        VALUES 
        ( NULL,
            '$name',
            '$description') 
    ";

        $connect->query($sql);
        header('Location: list-notes.php');
    }

    ?>

    <div style="width:900px" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Thêm Mới Ghi Chú</h3>
            </div>
        </div>

        <form method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tiêu Đề</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Tiêu đề">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nội Dung</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Nội dung" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-danger" href="list-notes.php">Hủy</a>
                                        <button type="submit" class="btn btn-success">Lưu</button>
                                    </td>
                                </tr>

                            </tbody>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

</body>

</html>