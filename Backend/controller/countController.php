<?php 

include("../model/db.php");

//=========================================================================//

$sqlCatCount = "select * from tblcategory";

$resultCatCount =mysqli_query($con, $sqlCatCount);

$rowCatCount =mysqli_num_rows($resultCatCount);

//=========================================================================//

$sqlQueCount = "select * from tblmcqtest";

$resultQueCount =mysqli_query($con, $sqlQueCount);

$rowQueCount =mysqli_num_rows($resultQueCount);


//=========================================================================//

$sqlUserCount = "select * from tbllogin";

$resultUserCount =mysqli_query($con, $sqlUserCount);

$rowUserCount =mysqli_num_rows($resultUserCount);


//=========================================================================//

$sqlVideosCount = "select * from tblvideos";

$resultVideosCount =mysqli_query($con, $sqlVideosCount);

$rowVideosCount =mysqli_num_rows($resultVideosCount);


//=========================================================================//



?>