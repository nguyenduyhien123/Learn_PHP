<?php
function convert_name($str)
{
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
    $str = preg_replace("/(Đ)/", 'd', $str);
    $str = preg_replace("/(\"|\"|'|'|,|!|&|;|@|#|%|~|`|=|_|'|\]|\[|\}|\{|\)|\(|\+|\^)/", '', $str);
    $str = preg_replace('(\$)', '', $str);
    $str = preg_replace("/A/", 'a', $str);
    $str = preg_replace("/B/", 'b', $str);
    $str = preg_replace("/C/", 'c', $str);
    $str = preg_replace("/D/", 'd', $str);
    $str = preg_replace("/E/", 'e', $str);
    $str = preg_replace("/F/", 'f', $str);
    $str = preg_replace("/G/", 'g', $str);
    $str = preg_replace("/H/", 'h', $str);
    $str = preg_replace("/I/", 'i', $str);
    $str = preg_replace("/J/", 'j', $str);
    $str = preg_replace("/K/", 'k', $str);
    $str = preg_replace("/L/", 'l', $str);
    $str = preg_replace("/M/", 'm', $str);
    $str = preg_replace("/N/", 'n', $str);
    $str = preg_replace("/O/", 'o', $str);
    $str = preg_replace("/P/", 'p', $str);
    $str = preg_replace("/Q/", 'q', $str);
    $str = preg_replace("/R/", 'r', $str);
    $str = preg_replace("/S/", 's', $str);
    $str = preg_replace("/T/", 't', $str);
    $str = preg_replace("/U/", 'u', $str);
    $str = preg_replace("/V/", 'v', $str);
    $str = preg_replace("/W/", 'w', $str);
    $str = preg_replace("/X/", 'x', $str);
    $str = preg_replace("/Y/", 'y', $str);
    $str = preg_replace("/Z/", 'z', $str);
    $str = preg_replace("/( )/", '-', $str);
    return $str;
}
class Category
{
    private $id;
    private $name;
    private $slug;
    private $status;
    public static $lst = [];
    public function __construct($id, $name, $status = true)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = convert_name($name);
        $this->status = $status;
    }
    public function __get($property)
    {
        return $this->$property;
    }
    public function __set($property, $val)
    {
        $this->$property = $val;
    }
    public function addList()
    {
        array_push(Category::$lst, $this);
    }
    public function getLenName()
    {
        return strlen($this->name);
    }
    public static function getNumCategory()
    {
        return count(Category::$lst);
    }
}
$cat1 = new Category(1, 'Thời sự', false);
$cat1->addList();
$cat2 = new Category(2, 'Giải trí', true);
$cat2->addList();
$cat3 = new Category(3, 'Thế giới');
$cat3->addList();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 10</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid gray;
            padding: .5rem;
        }
    </style>
</head>

<body>
    <h1>Có <?php echo Category::getNumCategory(); ?> chuyên mục</h1>
    <!-- table>(thead>tr>th*4)+(tbody>tr>td*4) -->
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>slug</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (Category::$lst as $cat) {
            ?>
                <tr>
                    <td><?php echo $cat->id; ?></td>
                    <td><?php echo $cat->name; ?></php>
                    </td>
                    <td><?php echo $cat->slug; ?></td>
                    <td><?php echo ($cat->status ? 'active' : 'deactive'); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
