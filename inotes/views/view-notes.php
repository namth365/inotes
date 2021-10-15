<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <?php include '../database.php'; ?>
    <?php
    $id = $_GET['id'];
    $sql    = "SELECT * FROM note_type WHERE id = " . $id;
    $stmt  = $connect->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $note_type = $stmt->fetch();

    ?>

    <div style="width:900px" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center"> Ghi Chú</h3>
            </div>
        </div>

        <form action="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tiêu Đề</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Tiêu đề" name="name" value="<?php echo $note_type->name; ?>">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nội Dung</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Nội dung" rows="3" name="description"><?php echo $note_type->description; ?></textarea>
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
                                        <a class="btn btn-primary" href="list-notes.php">Quay Lại</a>
                                        <a class="btn btn-danger" href="delete-notes.php?id=<?= $note_type->id; ?>" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Xóa</a>


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