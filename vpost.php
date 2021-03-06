
<?php
session_start();
$user_id = $_SESSION['id'];
header('Content-Type: text/html; charset=utf-8');
include('includes/general.php');
require "GUMP-master/gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
    'title'    => 'required|max_len,120|min_len,15',
    'address'   => 'required|max_len,100|min_len,3',
    'price' => 'required',
    'type' => 'required',
    'year_built' => 'required',
    'parking' => 'required',
    'sqmeter' => 'required',
    'heat' => 'required',
));
$gump->filter_rules(array(
    'title' => 'trim|sanitize_string',
    'address' => 'trim|sanitize_string',
    ));
$validated_data = $gump->run($_POST);
// print_r($validated_data);

if($validated_data === false) {
    ?>
    <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
    <?php 
        $post_title = $_POST['title'];
        $post_address = $_POST['address'];
        $post_price = $_POST['price'];
        $post_description = $_POST['description'];
        $post_type = $_POST['type'];
        $post_yearbt = $_POST['year_built'];
        $post_parking = $_POST['parking'];
        $post_sqmeter = $_POST['sqmeter'];
        $post_numrooms = $_POST['num_rooms'];
        $post_numtoilets = $_POST['num_toilets'];
        $post_heat = $_POST['heat'];
}else {
    $post_title = $validated_data['title'];
    $post_address = $validated_data['address'];
    $post_price = $validated_data['price'];
    $post_description = $validated_data['description'];
    $post_type = $validated_data['type'];
    $post_yearbt = $validated_data['year_built'];
    $post_parking = $validated_data['parking'];
    $post_sqmeter = $validated_data['sqmeter'];
    $post_numrooms = $validated_data['num_rooms'];
    $post_numtoilets = $validated_data['num_toilets'];
    $post_heat = $validated_data['heat'];
    // $post_date = date('Y-m-d');
    
    $targetDir = "/postpics/";
    $allowTypes = array('image/jpg','image/png','image/jpeg', 'image/pjpeg', 'image/gif');
    
    $insertValuesSQL = '';


    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key => $val){
            if(in_array($_FILES['files']['type'][$key], $allowTypes)){
                $filepath = getcwd().'/postpics/'.$_FILES['files']['name'][$key];
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $filepath)){
                    $insertValuesSQL .= "('".$_FILES['files']['name'][$key]."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
    }
        $image_1 = $_FILES['files']['name'][0]; 
        $image_2 = $_FILES['files']['name'][1];
        $image_3 = $_FILES['files']['name'][2]; 
        $image_4 = $_FILES['files']['name'][3];
        $image_5 = $_FILES['files']['name'][4]; 
    if(!empty($insertValuesSQL) || $insertValuesSQL != ''){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL");
            $query = "INSERT INTO posts (title, address, price, description, type, year_built, parking, sqmeter, num_rooms, num_toilets, heat, user_id, img_1, img_2, img_3, img_4, img_5) VALUES ('$post_title', '$post_address', '$post_price', '$post_description', '$post_type', '$post_yearbt', '$post_parking', '$post_sqmeter', '$post_numrooms', '$post_numtoilets', '$post_heat', '$user_id', '$image_1', '$image_2', '$image_3', '$image_4', '$image_5')";
            if($query){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }

            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            if (mysqli_affected_rows($connection) > 0) {
                echo "<script> alert('Posted!');</script>";
                header("location: index.php");
            }
            else {
                "<script> alert('Error while posting..try again');</script>";
            }
        }
    }

?>