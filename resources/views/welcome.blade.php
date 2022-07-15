<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="vegetarian-food-thali-.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge"><h1 class="w3-xxlarge">Vidhi Catering</h1> Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="food.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Catering</h1><br>
      <h5 class="w3-center"></h5>
      <p class="w3-large">The Catering was founded in Bhandara by Mrs. vidhi Lede .We help for managing the events of every size . Catereres make it easier to manage an event is. It is a bussiness which prepares and provides food for several types of events. The caterers are hired to manage the food section of the event by people who are not capable of or to do not have enough time to arrange everything by themselves. The size of the catering bussiness can vary. There are caterers which have a fixed menu to offer while there are other caterers which have a fixed menu to offer caterers which are flexible with the menu and can arrange the food accordingly to tthe demands of the customer. The caterers are needed in almost any event of any size . there are caterers which are equipped to handle different sized parties.</p>
      <p class="w3-large w3-text-grey w3-hide-medium"></p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Maharastrain Thali</h4>
      <p class="w3-text-grey">Tanduri Roti , Garlic Rice , Plane Rice , Jeera Rice , Dalfry , Paneer , Kadhi , Puran poli , Salad , Limbucha Lonche , Mirchicha Thecha , Koshimbir , Matha , Matar usal , Masala bhat   etc</p><br>
    
      <h4>Chinese Recipes</h4>
      <p class="w3-text-grey">Manchurian , Dry Manchurian , Noodles , Spring Rolls , Manchurian Rice etc</p><br>
    
      <h4>Sweet</h4>
      <p class="w3-text-grey">Rasmalai , Dahi Vada , Gulab-Jamun , Balushahi , Jalebi , , Rasgulla , Rabri , Shrikhand , Basundi , Modak etc</p><br>
    
      <h4>Dessert</h4>
      <p class="w3-text-grey"> ice-cream , Cold-Drinks , Soft Drinks Strawbreey Cake , Cup Cakes , Apple Pie , Brownies , Chocolate Chip Cookies , Carrot Cake ,  etc</p><br>
    
      <h4>food</h4>
      <p class="w3-text-grey">Pav bhaji , Misal pav , Vada pav , Sabudana Vada , Pasta , Maggie , Pizza , Burger  etc
      </p>   
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="sweets.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service,At Bhandara near main bus stop. </b></p>
    <p>You can also contact us by phone 8788259423 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2022-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Vidhi</a></p>
</footer>

</body>
</html>
