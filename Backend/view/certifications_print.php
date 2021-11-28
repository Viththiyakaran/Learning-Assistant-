
<?php
include("../model/db.php");

if(isset($_GET['loginID'])){

  $sql = "select * from tbllogin tl inner join tblinstitution ti 
  on tl.institutionID = ti.instID where tl.loginID='".$_GET['loginID']."'  ";
  
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

       $fullname = $row['fullname'];
       $instaLogo  = $row['instaLogo'];
    }
  } else {
    echo "0 results";
  }

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Certificate of <?php echo $fullname; ?> </title>

  <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 1000px;
                height: 650px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
</head>
<body>
<body>
        <div class="container">
            <div class="logo">
              <img src="../controller/uploads/<?php echo $instaLogo; ?>" width="200px">  
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                <?php echo  $fullname; ?> 
            </div>

            <div class="reason">
               has completed the course<br/>
                Software Development
            </div>
        </div>
    </body>
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
