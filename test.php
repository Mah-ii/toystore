<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="test.css">
    <title>ToyStore</title>

    <!-- <style>
     
        .main_part2 {
            display: flex;
            justify-content: space-between;
            height: 550px;
            width: 100%;
        }

        .part2 {
            display: flex;
            justify-content: space-between;
            height: 400px;
            position: relative;
            
        }

        .box1, .box2 {
            flex: 1;
            margin: 0 25px; 
            height: 200px;
            width: 500px;
            margin-top: 10rem;
            border-radius: 15px;
            position: relative; 
            color: white; 
        }

        .box1{
            margin-left: 10rem;
            background-color:   #d2540d  ;
        
        }

        .box1 h3{
            text-align:right;
            color: white;
            font-weight: bold;
            font-size: 35px;
            margin-top: 2rem;
            padding-right: 2.2rem;

        }

        .button2{
            display: flex;
            justify-content:right;

        }


        .btn2{
            background-color: white;
            color: black;
            height: 35px;
            width: 100px;
            font-size: 15px;
            border-radius: 20px;
            cursor: pointer;
        }

        .box2 {
            background-color: #DE3163;
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .box2 h3 {
            text-align: right; 
            color: white;
            font-weight: bold;
            font-size: 35px;
            margin-top: 2rem;
            padding-right: 2rem;
            position: absolute; 
            right: 0;
        }

        .button3 {
            display: flex;
            justify-content: right;
            position: absolute; 
            right: 0;
            top: 5rem;
            padding-right: 5rem;
        }

        .btn3 {
            background-color: white;
            color: black;
            height: 35px;
            width: 100px;
            font-size: 15px;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 0.5rem; 
        }


        img {
            height: 13rem;
            margin: 4rem;
            position: relative;
            z-index: 1;
        }

        .pic3{
            position: absolute;
            top: -95px;
            z-index: 2;
        }

        .pic4{
            position: relative;
            top: -95px;
            z-index: 2;
        }



    </style> -->


</head>
<body>

          <!--topbaar-->
    <nav class="navbar-one flex">
        <div class="left flex">
            <div class="email">
                <i class="fas fa-envelope"></i>
                <span>toystore@gmail.com</span>
            </div>

            <div class="phone">
            <i class="fas fa-phone"></i>
                <span>+8801111111111</span>
            </div>
        </div>

        <div class="right flex">
            <div class="twitter">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="instagram">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="facebook">
                <i class="fab fa-facebook"></i>
            </div>
            <div class="pinterest">
                <i class="fab fa-pinterest"></i>
            </div>
            <div class="youtube">
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </nav>

    <header>
        <div class="logo">ToyStore</div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="" class="active">Catalog</a>
                </li>
                <li>
                    <a href="">Delivery</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <!-- main part -->

    <section class="main_part1">
        <div class="box">
            <h4>Hello Everyone</h4>
            <p>Welcome to the Toystore</p>
            <div class="button-container">
                <button class="btn1">Open Catalog</button>
            </div>
        </div>
    </section>

    <section class="main_part2">
        <div class="part2">
            <div class="box1">
                <div class="pic3">
                    <img src="pictures/pic1-removebg-preview.png" alt="" srcset="">
                </div>
                <h3>Stuffed Animals</h3>
                <div class="button2">
                    <button class="btn2">Shop Now</button>
                </div>
            </div>

            <div class="box2">
                <div class="pic4">
                    <img src="pictures/pic2-removebg-preview.png" alt="" srcset="">
                </div>
                <h3>Wooden Toys</h3>
                <div class="button3">
                    <button class="btn3">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
