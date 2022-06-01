<!DOCTYPE html>
<html>
<head>
  <title>Explore Tours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles_mokshika.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <style>
    body{
      background-image:url("img/background123.jpeg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
}
  </style>
</head>
<body>
  <div class="wrapper">
    <?php require_once('header.php'); ?>
     

      <table class="searchtable" style="width: 100%">
        <tr>
         <td class="td1">
        <div class= "sbox">
          <input type="text" class="sbx" name= "sbxn" placeholder="Hotel or Location">
          <a class = "srchbtn" href = "#">
          <i class="fa fa-search icon"></i>
         </div>
         </td>
         <td class="td2">
               <form>
                 <label for="date"></label>
                 <p>Check-in</p>
                 <input class="date1" type="date" name="timeanddate" id="time_date" placeholder="Check in">
               </form>
             </td>
             <td class="td3">
               <form>
                 <label for="date"></label>
                 <p>Check-out</p>
                 <input class="date2" type="date" name="timeanddate" id="time_date" placeholder="Check out">
               </form>
             </td>
             <td>
              <form method="post" action="guestAction.php">
                  <select name="guest" class="adult" id="ad">
                    <option value="g1">Guests</option>
                    <option value="g2">Guest 1</option>
                    <option value="g3">Guest 2</option>
                    <option value="g4">Guest 3</option>
                    <option value="g5">Guest 4</option>
                    <option value="g6">Guest 5</option>
                    <option value="g7">Guest 6</option>
                  </select>
                </form>

             </td>

        </tr>
      </table>
      <table class="searchtable1" style="width: 60%"  align="center">
         <td>
          <form method="post" action="starAction.php">
                  <select name="rating" class="stars" id="rating" onchange="showschedual(this.value)">
                    <option value="str">Stars</option>
                    <option value="str1">1</option>
                    <option value="str2">2</option>
                    <option value="str3">3</option>
                    <option value="str4">4</option>
                    <option value="str5">5</option>
                  </select>
                  <input type="submit" value="submit">
                </form>
             </td>
             <td>
              <form method="post" action="budgetAction.php">
                  <select name="budget" class="budget" id="bud">
                    <option value="bdg">Your Budget</option>
                    <option value="bdg1">$50 (LKR 10,000)</option>
                    <option value="bdg2">$100 (LKR 20,000)</option>
                    <option value="bdg3">$200 (LKR 40,000)</option>
                    <option value="bdg4">$300 (LKR 30,000)</option>
                    <option value="bdg5">$500 (LKR 100,000)</option>
                  </select>
                </form>
             </td>
             <td>
                  <select class="payment" id="pay">
                    <option value="pym">Payment Method</option>
                    <option value="pym">Cash</option>
                    <option value="pym">Credit Card</option>
                  </select>
             </td>
        </table>
        <div class="cards">
      <div class="image">
        <img src="img/hotel1.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Sea Horizon</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Marine drive,Colombo 6</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Indoor and Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel2.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Grand Ray</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Rayhouse street,Kandy</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel3.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Travelodge</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>New Town,Anuradhapura</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star-half-alt star_rating"></span>
          <p><i class="fas fa-parking icon1"></i></i>Free Parking</p>
      
    </div>
    </div>

    <div class="cards">
      <div class="image">
       <img src="img/hotel4.jpeg" >
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>

    </div>
    <div class="des">
      <h2>Sunset Lodge</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Stanley Road,Jaffna</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star-half-alt star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-parking icon1"></i></i>Free Parking</p>
      
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel5.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Hotel Moonlite</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Beach Side,Galle</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i> Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel6.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Elite Peak</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Clarence Street,Rathnapura</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Outdoor Pool</p>
      
    </div>
    </div>

   <?php require_once('footer.php'); ?>
  </div><!--wrapper-->
  <script src="js/main.js"></script>
</body>
</html>