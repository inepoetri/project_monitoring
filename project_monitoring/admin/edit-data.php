<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['update']))
{
$bookname=$_POST['project_name'];
$category=$_POST['client'];
$author=$_POST['project_leader'];
$isbn=$_POST['start_date'];
$price=$_POST['end_date'];
$Copies=($_GET['progress']);
$sql="update tbl_pm set project_name=:project_name, client=:client,project_leader=:project_leader,start_date=:start_date,end_date=:end_date,progress=:progress";
$query = $dbh->prepare($sql);
$query->bindParam(':project_name',$bookname,PDO::PARAM_STR);
$query->bindParam(':client',$category,PDO::PARAM_STR);
$query->bindParam(':project_leader',$author,PDO::PARAM_STR);
$query->bindParam(':start_date',$isbn,PDO::PARAM_STR);
$query->bindParam(':end_date',$price,PDO::PARAM_STR);
$query->bindParam(':progress',$Copies,PDO::PARAM_STR);
$query->execute();
$_SESSION['msg']="Book info updated successfully";
header('location:manage-books.php');


}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>EDIT DATA</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Tambah Buku</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
Edit Data
</div>
<div class="panel-body">
<form role="form" method="post">
<?php 
$query = $dbh -> prepare($sql);
$query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  


<div class="form-group">
<label>Project Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookname" value="<?php echo htmlentities($result->project_name);?>" required />
</div>

<div class="form-group">
<label> Client<span style="color:red;">*</span></label>
<select class="form-control" name="category" required="required">
<option value="<?php echo htmlentities($result->cid);?>"> <?php echo htmlentities($catname=$result->client);?></option>

<div class="form-group">
<label> Project Leader<span style="color:red;">*</span></label>
<select class="form-control" name="author" required="required">
<option value="<?php echo htmlentities($result->athrid);?>"> <?php echo htmlentities($athrname=$result->project_leader);?></option>
 

<div class="form-group">
<label>Start Date<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="isbn" value="<?php echo htmlentities($result->start_date);?>"  required="required" />

</div>
 
  <div class="form-group">
 <label>End Date<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="copies" value="<?php echo htmlentities($result->end_date);?>"   required="required" />
 </div>
  
 <div class="form-group">
 <label>Progress<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" value="<?php echo htmlentities($result->progress);?>"   required="required" />
 </div>
 <?php }} ?>
<button type="submit" name="update" class="btn btn-info">Update </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
   
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
