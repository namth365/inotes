<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

// Interface Sort định nghĩa phương thức sort()
interface iSort {
    function sort(array $list);
}

// Lớp MultiAlphaSort sắp xếp mảng đa chiều chứa ký tự
class MultiAlphaSort implements iSort {
    // Cách sắp xếp: tăng dần, giảm dần
    private $_order;

    // Sort index:
    private $_index;

    function __construct($index, $order = 'ascending') {
        $this->_index = $index;
        $this->_order = $order;
    }

    // Phương thức thực hiện sắp xếp
    function sort(array $list) {

        // Change the algorithm to match the sort preference:
        if ($this->_order == 'ascending') {
            uasort($list, array($this, 'ascSort'));
        } else {
            uasort($list, array($this, 'descSort'));
        }
        return $list;
    }
    // Phương thức so sánh hai giá trị
    function ascSort($x, $y) {
        return strcasecmp($x[$this->_index], $y[$this->_index]);
    }
    function descSort($x, $y) {
        return strcasecmp($y[$this->_index], $x[$this->_index]);
    }
}

// Class MultiNumberSort sắp xếp một mảng đa chiều
class MultiNumberSort implements iSort {
    // Cách sắp xếp
    private $_order;

    // Sort index
    private $_index;

    function __construct($index, $order = 'ascending') {
        $this->_index = $index;
        $this->_order = $order;
    }

    // Thực hiện sắp xếp
    function sort(array $list) {
        // Thay đổi thuật toán phù hợp với thiết lập
        if ($this->_order == 'ascending') {
            uasort($list, array($this, 'ascSort'));
        } else {
            uasort($list, array($this, 'descSort'));
        }
        return $list;
    }
    // Phương thức so sánh hai giá trị
    function ascSort($x, $y) {
        return ($x[$this->_index] > $y[$this->_index]);
    }
    function descSort($x, $y) {
        return ($x[$this->_index] < $y[$this->_index]);
    }
}

/* Lớp StudentsList
 * Lớp có 1 thuộc tính: _students.
 * Lớp có 3 phương thức:
 * - __construct()
 * - sort()
 * - display()
 */
class StudentsList {
    // Danh sách sinh viên được sắp xếp 
    private $_students = array();

    function __construct($list) {
        $this->_students = $list;
    }

    // Thực hiện sắp xếp sử dụng một thực thi từ iSort
    function sort(iSort $type) {
        $this->_students = $type->sort($this->_students);
    }

    // Hiển thị danh sách sinh viên dạng HTML
    function display() {
        echo '<ol>';
        foreach ($this->_students as $student) {
            echo "<li>{$student['last_name']} {$student['first_name']} : {$student['grade']}</li>";
        }
        echo '</ol>';
    }

}

// Tạo mảng sinh viên, mỗi sinh viên có cấu trúc studentID => array('first_name' => 'First Name', 'last_name' => 'Last Name', 'grade' => XX.X)
$students = array(
    256 => array('first_name' => 'Tiêm Vaccin / ', 'last_name' => 'Covid-19 /', 'grade' => 14),
    2   => array('first_name' => 'Đọc Bài /', 'last_name' => 'PhP Căn Bản /', 'grade' => 13),
    9   => array('first_name' => 'Viết Code /', 'last_name' => 'Danh Sách Công Việc /', 'grade' => 13),
    364 => array('first_name' => 'Báo Cáo Tuần /', 'last_name' => 'BC /', 'grade' => 16),
    68  => array('first_name' => 'Deadline /', 'last_name' => 'PhP Danh Sách Khách Hàng /', 'grade' => 17)
);

// Tạo đối tượng
$list = new StudentsList($students);

// Hiển thị mảng trước khi sắp xếp
echo '<h2>Danh sách gốc</h2>';
$list->display();

// Sắp xếp theo tên
$list->sort(new MultiAlphaSort('first_name'));
echo '<h2>Danh sách sắp xếp theo tên</h2>';
$list->display();

// Sắp xếp theo điểm
$list->sort(new MultiNumberSort('grade', 'descending'));
echo '<h2>Danh sách sắp xếp theo ngày</h2>';
$list->display();

// Xóa đối tượng
unset($list);
?>
</body>
</html>