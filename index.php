
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<!-- <style>
    @import url('https://fonts.cdnfonts.com/css/palace-script-mt');
</style> -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
        <style>
        .ui-autocomplete {
            max-height: 200px;
            width: 100px;
              overflow: auto;
        }

        .ui-menu-item {
            display: flex;
            align-items: center;
           font-size: 1vw;
           text-transform: lowercase;
           overflow-y: auto;
           overflow: hidden;
           width: 100%;
           text-align: center;
        }
        .ui-autocomplete::-webkit-scrollbar{
    width: 0;
}
        .ui-menu-item img {
            width: 2vw;
            height: 2vw;
            margin-right: 0.7vw;
            border-radius: 50%;
        }
    </style>
<body>
    <div class="nav">
        <div class="innerNav">
            <div class="logo">
                <div class="name">My Shop</div>
                <div class="square"></div>
            </div>
            <div class="searchBar">
                <label>Search</label>
               <!-- <label><div class="search">Search</div></label> -->
               <input type="text" name="" id="title">
               <div class="imageSearch"></div>
            </div>
            <div class="info">
                <div class="phone">
                <div class="contact">Contact</div>
                <i class="fa-solid fa-phone"></i>
                </div>
                <div class="wish">
                <div class="wishlist">Wishlist</div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                </div>
                <div class="car">
                <div class="cart">Cart</div>
                <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="logIn">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="front-page">
        <div class="inner-front-page transition-element">
            <div class="blurLeft"></div>
            <div class="blurDown"></div>
            <div class="like">choose you like</div>
            <div class="scrollingPics">
                <img src="gifts.png">
                 <img src="roses.png">
                <img src="cake.png">
                 <!-- <img src="gifts4.png">  -->
                 </div>
                <div class="blur"></div>
        </div>
    </div>
    <!-- <div class="out-box"> -->
    <div class="choiceBox">
        <?php include 'file/_dbconn.php'?>
    <?php   

        $sql =  "SELECT * FROM `myshop`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $sno = $row['sno'];
          $title = $row['title'];
          $images = $row['images'];
          
          echo '<div class="innerChoiceBox">
          <div class="box1">
              <div class="Mom">' .$title. ' </div>
              <img src=" '.$images.' ">
          </div>
      </div>';
        }
        ?>
      </div> 


    <div class="whyChoose">
        <div class="why-nav"></div>
        <div class="why2">
        <div class="why">OUR
            <br>
             PRODUCT ALWAYS
             <br> FRESH</div>
        <div class="why-para">Product quality can make or break your brand’s success and profitability — however, determining what makes a quality product depends on the end user. Each consumer has their own idea of what constitutes a valuable product; for some, a fancy and durable product demonstrates quality, while others may look for something unpretentious and easy to use. </div>
    </div>
    </div>
    <div class="outer-box">
        <div class="inner-box">
            <div class="innerBox1">
                <div class="box boxy1">Brands</div>
                <p class="box-para">Product quality can make or break your brand’s success and profitability </p>
                <div class="box boxy2">
                    <p>You can also buy our product from</p>
                    Flipkart
                    <br>
                    Amazon
                    <br>
                    Ajio
                    <br>
                    Meesho
                </div>
                <div class="squareBox">
                    <div class="square1">
                    <div class="sq1"><p>birthday gifts</p>
                    <!-- <img src="fr.png"> -->
                </div>
                    <div class="sq1"><p>Parent day gifts</p>
                        <!-- <img src="fr.png"> -->
                    </div>
                    <div class="sq1"><p>New year gifts</p>
                       </div>
                    <div class="sq1"><p>Rakhi gifts</p>
                       </div>
                    </div>
                    <div class="square2">
                    <div class="sq1"><p>New home gifts</p>
                        </div>
                    <div class="sq1"><p>Learning gifts</p>
                        </div>
                    <div class="sq1"><p>Friendship day gifts</p>
                       </div>
                    <div class="sq1"><p>Children day gifts</p>
                        </div>
                </div>   
                </div>
                <div class="box boxy3 transition-elements"></div>
                <div class="box boxy4">
                    <div class="flower1">
                        <div class="petal"></div>
                        <div class="center"></div>
                    </div>
                    <div class="flower2">
                        <div class="petal"></div>
                        <div class="center"></div>
                    </div>
                    <div class="flower3">
                        <div class="petal"></div>
                        <div class="center"></div>
                    </div>
                    <div class="flower4">
                        <div class="petal"></div>
                        <div class="center"></div>
                    </div>
                    <div class="rightBox">
                        <div class="rb1 sh1">
                            <div class="rbBlur"></div>
                            <div class="rbImg transition-element">
                                <img src="kids.png">
                            </div>
                        </div>
                        <div class="rb1 sh2">
                            <div class="rbBlur"></div>
                            <div class="rbImg transition-element">
                                <img src="fr.png">
                            </div>
                        </div>
                        <div class="rb1 sh3">
                            <div class="rbBlur"></div>
                            <div class="rbImg transition-element">
                                <img src="love.png">
                            </div>
                        </div>
                        <div class="rb1 sh4">
                            <div class="rbBlur"></div>
                            <div class="rbImg transition-element">
                                <img src="gifts2.png">
                            </div>
                        </div>
                        <div class="rb1 sh5">
                            <div class="rbBlur"></div>
                            <div class="rbImg transition-element">
                                <img src="books.png">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="box boxy5">
              
                </div> -->
            </div>
            </div>
        </div>
        <!-- <div class="flower">
            <div class="petal"></div>
            <div class="center"></div>
        </div> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
     <script> aData = {};
            $( "#title" ).autocomplete({
                source: function(request, response){
                    $.ajax({
                    url: 'http://localhost/practiceGPT/search.php',
                    type: 'GET',
                    dataType: 'json',
                    success:function(data){
                        // console.log(data)
                        aData = $.map(data,function(value,key){
                        return {
                            id:value.id,
                            label:value.title,
                            imageSearch:value.images
                        };
                        })
                        console.log(aData);
                        var results = $.ui.autocomplete.filter(aData, request.term);
                        response(results);
                    },
                    })
                }
                }).autocomplete("instance")._renderItem = function(ul, item) {
                    return $("<li>")
                        .append("<div><img src='" + item.imageSearch + "' alt='' width='50' height='50'><span>" + item.label + "</span></div>")
                        .appendTo(ul);
                };
                
            
     </script>
        <script src="script.js"></script>
       
</body>
</html>

