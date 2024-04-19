<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/backoffice/assets/css/style.css">
    <title>liste des categories</title>
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
            <a href="../view/index1.html"><button type="button" class="btn1"><span></span>Return</button></a>
        </div>
        
      <!-- ========================= partie search ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search for category here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="logo">
                <img src="../view/img/xplore.png" alt="">
                </div>
            </div>
  <!-- ======================= Cards ================== 
  <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div> -->
            <div class="details">
                <div class="recentOrders">
                <div class="cardHeader">
                       <h1 class="category">Category</h1>
                        <a href="addCategory.php" class="btn btn-primary">Add category</a>
                    </div>
                    <main>
    <div class="link_container">
    </div>
    <table>
    <thead>
                <tr>
                    <th scope="col">Id category</th>
                    <th>Category name</th>
                    <th>Level</th>
                    <th>Season</th>
                    <th>Popularity</th>
                    <th>Mobility</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "../config.php";
                //liste des categories
                $sql = "SELECT * FROM category";
                $result = mysqli_query($con, $sql); // Executing the query
                if (mysqli_num_rows($result) > 0) {
                    // Afficher les categories dans le cas win les activité lmawjoudin yabdew >0
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?=$row['id_category']?></td>
                    <td><?=$row['nom_category']?></td>
                    <td><?=$row['level']?></td>
                    <td><?=$row['season']?></td>
                    <td><?=$row['popularity']?></td>
                    <td><?=$row['mobility']?></td>
                   <div class="image1">
                    <td class="image"><a href="updateCategory.php?id=<?=$row['id_category']?>"><img src="../view/backoffice/img/modifier.png"></a></td>
                    <td class="image"><a href="deleteCategory.php?id=<?=$row['id_category']?>" onclick="return confirm('Are you sure you want to delete this category?');"><img src="../view/backoffice/img/trash.png"></a></td>
                    </div>
                </tr>
                <?php
                    } // fin de while loop
                } else {
                    echo "<tr><td colspan='12' class='message'>0 categories pour le moment !</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>  
 </div>
    <!-- ================= New Customers ================ -->
   <!-- ================= New Customers ================ -->
   <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>our best activity offers</h2>
                    </div>

                    <table>
                    <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../view/backoffice/img/forest1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Adventure Trek :<br><span>Explore the Wilderness</span></span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../view/backoffice/img/kayak.jpeg" alt=""></div>
                            </td>
                            <td>
                                <h4>Sunset Kayaking:<br> <span> Paddle into the Twilight</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../view/backoffice/img/act3.jpeg" alt=""></div>
                            </td>
                            <td>
                                <h4>Yoga Retreat:<br> <span> Find Your Inner Peace</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../view/backoffice/img/act4.jpeg" alt=""></div>
                            </td>
                            <td>
                                <h4>Mountain Biking Excursion:<br> <span>Conquer the Trails </span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

             <!-- =========== Scripts =========  -->
    <script src="../view/backoffice/assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</div>
</body>
</html>