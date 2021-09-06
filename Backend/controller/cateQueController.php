<?php 

include("../model/db.php");
 
if(isset($_POST['addcat']))
{
    $category = $_POST['newcat'];
    $sql = "INSERT INTO `tblcategory`(`categoryName`, `isActive`) VALUES ('".$category."',1)";

    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("New category been created") </script>' ;
        header("location:../view/addSubjectCat.php");  
    }
    else{
        echo '<script>alert("Category has been not created ! Try again") </script>' ;
    }
}

//================================================================================================//
if(isset($_GET['catID']))
{
    $sql = "Delete from tblcategory where catid='".$_GET['catID']."'";

    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Category been Deleted") </script>' ;
        header("location:../view/addSubjectCat.php");  
    }
    else{
        echo '<script>alert("Category has been not deleted ! Try again") </script>' ;
    }
}
//================================================================================================//
$sqlnextID = "Select * from tblmcqtest";
$result = mysqli_query($con,$sqlnextID);
$row=  mysqli_num_rows($result);
$next = $row + 1 ;

//================================================================================================//

if(isset($_POST['addQue']))
{
    $question = $_POST['question'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $op4 = $_POST['op4'];
    $answer = $_POST['answer'];
    $cat = $_POST['cat'];

    $sql = "INSERT INTO `tblmcqtest`( `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `categoryid`) 
    VALUES ('".$question."','".$op1."','".$op2."','".$op3."','".$op4."','".$answer."','".$cat."' )";

    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("New question has been added") </script>' ;
        header("location:../view/addSubjectCat.php");  
    }
    else{
        echo '<script>alert("Questing has been not created ! Try again") </script>' ;
    }
}

//================================================================================================//

if(isset($_GET['qid']))
{
    $sql = "Delete from tblmcqtest where qid='".$_GET['qid']."'";

    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Question been Deleted") </script>' ;
        header("location:../view/addQuestions.php");  
    }
    else{
        echo '<script>alert("Question has been not deleted ! Try again") </script>' ;
    }
}
//================================================================================================//

if(isset($_POST['catID']))
{ 
    
    echo "Timer : <div id='count'>Start</div>";
    $sql = "select * from tblmcqtest tmt inner join tblcategory tc on tmt.categoryid = tc.catid where tc.isActive=1 and tc.catid =".$_POST['catID']."";

    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0) {
        
            $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
              
              $count++;
            echo '<form method="post">
                <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                <i class="fas fa-certificate"></i>
                '.$row["question"].'
                <br>
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                   '.$row["op1"].' 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                   '.$row["op2"].' 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                   '.$row["op3"].' 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                   '.$row["op4"].' 
                  </label>
                </div>
              
                
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </form>';
            
            
        }
      } else {
        echo "0 results";
      }

}





//================================================================================================//

?>
<script>
    var php_var = "<?php echo $count; ?>";
    var count = php_var * 30;
    var interval = setInterval(function(){
  document.getElementById('count').innerHTML=count;
  count--;
  if (count === 0){
    clearInterval(interval);
    document.getElementById('count').innerHTML='Done';
    // or...
    alert("You're out of time!");
  }
}, 1000);
</script>
