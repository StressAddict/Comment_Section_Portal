<?php

include 'config.php';

if (isset($_POST['Submit']))
{
  $UserName = $_POST['UserName'];
  $Comment = $_POST['Comment'];

  $sql = 'INSERT INTO comments(UserName, Comment)VALUES(:UserName, :Comment)';
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['UserName'=>$UserName, 'Comment'=>$Comment]);
  
  if($stmt)
  {
    echo "<script> alert('Comment Added.') </script>";
  } 
    else{
      echo "<script> alert('Error Occurred, Please Try Again') </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Comments.css" />
  </head>
  <body>
    <div class="Wrapper">
      <form action="" class="Form" method="POST">
        <div class="Row">
          <div class="InputGroup">
            <label for="UserName">UserName</label>
            <input
              type="text"
              name="UserName"
              id="UserName"
              placeholder="Enter Your UserName"
            />
          </div>
        </div>

        <div class="InputGroup textarea">
          <label for="Comment">Comment</label>
          <textarea
            name="Comment"
            id="Comment"
            placeholder="Share Your Thoughts"
          ></textarea>
        </div>

        <div class="InputGroup">
          <button id="Submit" name="Submit" class="Button">Post Comment</button>
        </div>
      </form>
      <br />

      <div class="PreviousComments">
        <?php

        // $ID = 1;

        $stmt = $pdo->query('SELECT * FROM comments');
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$ID]);
        // $comments = $stmt->fetchAll();

        // var_dump($comments);

        // if ($ID > 0) 
        // {

        // foreach($comments as $comment) 
        while($row = $stmt->fetch())
          {





        ?>

          <div class="SingleItem">
              <h4>
                <?php echo $row->UserName . '<br>'; ?>
              </h4>
                || at <?php echo $row->Date . '<br>'; ?>
                <p>
                    <?php echo $row->Comment. '<br>'; ?>
                </p>
                </div>

                <?php

          }
        // }
          ?>


      </div>
    </div>
  </body>
</html>
