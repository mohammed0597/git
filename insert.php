<?php
include('config.php');



if($_POST) {
    $id = ($_POST['id']);
    $title = ($_POST['title']);
    $body = ($_POST['body']);
    
    $picture_tmp = $_FILES['image']['tmp_name'];
    $picture_name = $_FILES['image']['name'];
    $picture_type = $_FILES['image']['type'];

    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');

    if(in_array($picture_type, $allowed_type)) {
        $path = $picture_name; 
    
       

  
    
        $req="INSERT INTO `blog2` ( `title`, `body`, `image`)  VALUES ( '$title', '$body' , '$path')";
        

        if (mysql_query($req)) {
            echo 'ok';
        
        }
    }

}

?>

<form action="insert.php" method="post" enctype="multipart/form-data">
    <table>
     <tr>
        <td><strong>title</strong></td>
        <td><input name="title" type="text"></td>
     </tr><tr>
        <td><strong>body</strong></td>
        <td><input name="body" type="text"></td>
     </tr>

     <tr>
        <td><strong>Picture</strong></td>
     <td><input type="file" name="image"></td>
     </tr>
     <tr>
        <input type="submit">
     </tr>
    </table>
</form>