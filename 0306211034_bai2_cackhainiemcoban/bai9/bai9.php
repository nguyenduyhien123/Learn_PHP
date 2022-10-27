<?php
class Category
{
    private $id;
    private $name;
    private $slug;
    private $status;
    public static $lst=[];
    public function __construct($id,$name,$slug,$status=true)
    {
        $this->id=$id;
        $this->name=$name;
        $this->slug = $slug;
        $this->status=$status;
    }
    public function __get($property)
    {
        return $this->$property;
    }
   public function __set($property, $val)
    {
        $this->$property=$val;
    }
    public function addList()
    {
        array_push(Category::$lst,$this);
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
$cat1=new Category(1,'Thời sự','thoi-su',false);
$cat1->addList();
$cat2=new Category(2,'Giải trí','giai-tri',true);
$cat2->addList();
$cat3=new Category(3,'Thế giới','the-gioi');
$cat3->addList();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 09</title>
    <style>
        table
        {
            border-collapse: collapse;
        }
        td,th
        {
            border:1px solid gray;
            padding:.5rem;
        }
    </style>
</head>
<body>
    <h1>Có <?php echo Category::getNumCategory();?> chuyên mục</h1>
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
                foreach(Category::$lst as $cat)
                {
            ?>
            <tr>
                <td><?php echo $cat->id;?></td>
                <td><?php echo $cat->name;?></php></td>
                <td><?php echo $cat->slug;?></td>
                <td><?php echo ($cat->status?'active':'deactive');?></td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
</body>
</html>