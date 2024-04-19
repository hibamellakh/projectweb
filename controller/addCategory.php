
<?php

if(isset($_POST['send']))//ken nzelna al send button
{
    if(isset($_POST['id_category']) &&
        isset($_POST['nom_category'])&&
        isset($_POST['level'])&&
        isset($_POST['season'])&&
        isset($_POST['popularity'])&&
        isset($_POST['mobility'])&&

        $_POST['id_category'] !=  "" &&
        $_POST['nom_category'] != "" &&
        $_POST['level'] != "" &&
        $_POST['season'] != "" &&
        $_POST['popularity'] != "" &&
        $_POST['mobility'] != "" 
       
    ){//ken les valeurs hekom lkol mesh ferghin
            include_once"../config.php";
            extract($_POST); //extraire tout ces données
            $sql = "INSERT INTO category (id_category, nom_category, level, season, popularity, mobility ) VALUES ('$id_category', '$nom_category', '$level', '$season', '$popularity', '$mobility' )";
       if(mysqli_query($con, $sql)){
        header("location:showCategory.php");
       }
       else{
        header("location:addCategory.php?message=AddFailed");
       }}
       else{
        header("location:addCategory.php?message=EmptyField");
       
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="../view/backoffice/assets/css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
<div class="container">
 <!-- ===============XPLORE================ -->
 <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           <!-- <ion-icon name="logo-apple"></ion-icon>-->
                        </span>
                        <span class="title">
                            <div class="official">
                            Xplore
                            </div>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <div class="user">
                            <img src="../view/backoffice/img/user.png">
                            </div>
                        </span>
                        <span class="title">User</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <div class="user">
                            <img src="../view/backoffice/img/sale.png">
                            </div>
                        </span>
                        <span class="title">offers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <div class="user">
                            <img src="../view/backoffice/img/activity.png">
                            </div>
                        </span>
                        <span class="title">activities</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <div class="user">
                            <img src="../view/backoffice/img/car.png">
                            </div>
                        </span>
                        <span class="title">Car rent</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon">
                        <div class ="user">
                            <img src="../view/backoffice/img/pay.png">
                            </div>
                        </span>
                        
                        <span class="title">Payement</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <div class="user">
                            <img src="../view/backoffice/img/comment.png">
                            </div>
                        </span>
                        <span class="title">Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <div class="user">
                            <img src="../view/backoffice/img/exit.png">
                            </div>
                        </span>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <a href="../view/index1.html"><button type="button"><span></span>return</button></a>
 <!-- ========================= partie form==================== -->
   
 <form action="" method="post" id="category-form">
 <div class="form">
        <div class="text-center">
            <h1>Add Category</h1>
        </div>

        
        <div class="input">
            <label for="id_category">Category ID</label>
            <input type="text" name="id_category" id="id_category" placeholder="Enter category ID" >
            <small id="error-id-category" class="error-message"></small>
        </div>

        <div class="input">
            <label for="nom_category">Category Name</label>
            <input type="text" name="nom_category" id="nom_category" placeholder="Enter category name">
            <small id="error-nom-category" class="error-message"></small>
        </div>


        <div class="input">

        <label>Level</label><br>
        <input type="radio" id="easy" name="level" value="easy"><label for="easy">Easy</label>
        <input type="radio" id="medium" name="level" value="medium"><label for="medium">Medium</label>
        <input type="radio" id="hard" name="level" value="hard"><label for="hard">Hard</label><br>
        <small id="error-level" class="error-message"></small>
        
    </div>

     <div class="input">
            <label for="season">Season</label>
            <select name="season" id="season">
                <option value="">Select season</option>
                <option value="autumn">Autumn</option>
                <option value="winter">Winter</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
            </select>
            <small id="error-season" class="error-message"></small>
        </div>

        <div class="input">
            <label for="popularity">Popularity</label><br>
            <input type="radio" id="popular" name="popularity" value="popular"><label for="popular">Popular</label>
            <input type="radio" id="very-popular" name="popularity" value="very popular"><label for="very-popular">Very Popular</label>
            <input type="radio" id="trending" name="popularity" value="trending"><label for="trending">Trending</label><br>
            <small id="error-popularity" class="error-message"></small>
        </div>

        <div class="input">
            <label for="mobility">Mobility</label><br>
            <input type="radio" id="yes" name="mobility" value="yes"><label for="yes">Yes</label>
            <input type="radio" id="no" name="mobility" value="no"><label for="no">No</label><br>
            <small id="error-mobility" class="error-message"></small>
        </div>
   
        <div class="input">
            <input type="submit" value="Submit" name="send" class="button">
            <a class="button" href="showCategory.php" >Annuler</a>
        </div>
</div>
    </form>
</div>
<script src="Category.js"></script>
   <!-- =========== Scripts =========  -->
   <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

   
  
   
   
   