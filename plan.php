<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit.fontawesome.com/28928afe4d.css" crossorigin="anonymous">
	<title>Giko</title>


</head>
<style>
* {
  margin: 0;
  padding: 0;
  -webkit-boxsizing: border-box;
  -moz-boxsizing: border-box;
  border-radius:10px;
}

body{ 
  background:#E4EFE7;
  color: #FFF;
  font-size: 62.5%;
  font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
}

ul {
  list-style-type: none;
}

a {
  color: #e95846;
  text-decoration: none;
}

.pricing-table-title {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 2.6em;
  color: #FFF;
  margin-top: 15px;
  text-align: left;
  margin-bottom: 25px;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table-title a {
  font-size: 0.6em;
}

.clearfix:after {
  content: '';
  display: block;
  height: 0;
  width: 0;
  clear: both;
}
/** ========================
 * Contenedor
 ============================*/
.pricing-wrapper {
  width: 960px;
  margin: 40px auto 0;
  position:relative;
  right:-150px;
}

.pricing-table {
position:relative;
top:-60px;
  margin: 0 10px;
  text-align: center;
  width: 300px;
  float: left;
  -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
  box-shadow: 0 0 15px rgba(0,0,0,0.4);
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}


.pricing-table:hover {
  -webkit-transform: scale(1.06);
  -ms-transform: scale(1.06);
  -o-transform: scale(1.06);
  transform: scale(1.06);
}

.pricing-title {
  color: #FFF;
  background: orange;
  padding: 20px 0;
  font-size: 1.8em;
  font-weight:900;
  text-transform: uppercase;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table.recommended .pricing-title {
  background: #03C988;
}

.pricing-table.recommended .pricing-action {
  background: orange;
}

.pricing-table .price {
  background: #403e3d;
  font-size: 3.4em;
  font-weight: 700;
  padding: 20px 0;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table .price sup {
  font-size: 0.4em;
  position: relative;
  left: 5px;
}

.table-list {
  background: #FFF;
  color: #403d3a;
}

.table-list li {
  font-size: 1.4em;
  font-weight: 700;
  padding: 12px 8px;
}

.table-list li:before {
  content: "\f00c";
  font-family: 'FontAwesome';
  color: #3fab91;
  display: inline-block;
  position: relative;
  right: 5px;
  font-size: 16px;
} 

.table-list li span {
  font-weight: 400;
}

.table-list li span.unlimited {
  color: #FFF;
  background: #03C988;
  font-size: 0.9em;
  padding: 5px 7px;
  display: inline-block;
  -webkit-border-radius: 38px;
  -moz-border-radius: 38px;
  border-radius: 38px;
}


.table-list li:nth-child(2n) {
  background: #F0F0F0;
}

.table-buy {
  background: #FFF;
  padding: 15px;
  text-align: left;
  overflow: hidden;
}

.table-buy p {
  float: left;
  color: #37353a;
  font-weight: 700;
  font-size: 2.4em;
}

.table-buy p sup {
  font-size: 0.5em;
  position: relative;
  left: 5px;
}

.table-buy .pricing-action {
  float: right;
  color: #FFF;
  background: orange;
  padding: 10px 16px;
  -webkit-border-radius:2px;
  -moz-border-radius: 2px;
  border-radius: 10px;
  font-weight: 700;
  font-size: 1.4em;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.table-buy .pricing-action:hover {
  background: #03C988;
}

.recommended .table-buy .pricing-action:hover {
  background: #03C988;  
}

/** ================
 * Responsive
 ===================*/
 @media only screen and (min-width: 768px) and (max-width: 959px) {
  .pricing-wrapper {
    width: 768px;
  }

  .pricing-table {
    width: 236px;
  }
  
  .table-list li {
    font-size: 1.3em;
  }

 }

 @media only screen and (max-width: 767px) {
  .pricing-wrapper {
    width: 420px;
  }

  .pricing-table {
    display: block;
    float: none;
    margin: 0 0 20px 0;
    width: 100%;
  }
 }

@media only screen and (max-width: 479px) {
  .pricing-wrapper {
    width: 300px;
  }
}
 

#c9{
  font-family: 'Monoton', cursive;
position:relative;
top:-5;
left:7;
color:#ff7d13;
cursor:pointer;
font-size:15;

  
}
.giko4{
position:relative;
left:30;
bottom:20;
color:orange;
}

.Giko19{
position:relative;
right:50;
}
#c10{
font-family:'Anton', sans-serif;
position:relative;
bottom:80;
left:150;
color:black;
cursor:pointer;
font-size:20;
}

.c20{
position:relative;
left:82;
font-size:17;
}

</style>

<script src="https://kit.fontawesome.com/28928afe4d.js" crossorigin="anonymous"></script>

<body>
<div id="c9"><h1>GIKO</h1></div>


<!-- Contenedor -->
  <div class="pricing-wrapper clearfix">
    <!-- Titulo -->
    <div id="c10"><br><h1>Choose Your Plan</h1><hr width="350" size="5" color="#03C988"/><br><div class="c20">Switch Plan/Start Now. </div></div>
    <div class="pricing-table">
      <h3 class="pricing-title">Basic Plan</h3>
      <div class="price">$9.00<sup>/ Usd</sup></div>
      <!-- Lista de Caracteristicas / Propiedades -->
  <i class="fa-solid fa-check"></i><ul class="table-list">
  </i><li>720/HD<span>Quality</span></li>
        <li>Limited<span> Movies & TV Shows</span></li>
        <li><span>Watch on <b>2</b> Screens</span></li>
        <li> 3 users profile<span class="unlimited">Limited</span></li>
        <li>CANCEL ANYTIME<span class="unlimited">Plan</span></li>
        <li>7 <span><b>Day free trial</b></span></li>
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        <p>$9.00<sup>/ Usd</sup></p>
        <a href='http://localhost/link/register.php';" class="pricing-action">SELECT</a>
      </div>
    </div>
    
<div class="pricing-table recommended">
      <h3 class="pricing-title">Premium Plan</h3>
      <div class="price">$14.99<sup>/ Usd</sup></div>
      <!-- Lista de Caracteristicas / Propiedades -->
      <ul class="table-list">
        <li>1080P/FHD<span>Quality</span></li>
        <li>Unlimited<span> Movies & TV Shows</span></li>
		<li><span><b>6</b> user profile</span></li>
        <li><span>Watch on <b>3</b> Screens</span></li>
        <li>Amazon,Disney & Netflix Movies & Tv Shows<span class="unlimited">Special</span></li>
        <li>CANCEL ANYTIME/ NO AD's <span class="unlimited">Plan</span></li>
        <li><span><b>7</b> <b>Day free trial</b></span></li>
      </ul>
      <!-- Contratar / Comprar -->
      <div class="table-buy">
        <p>$14.99<sup>/ Usd</sup></p>
        <a href="#" class="pricing-action">SELECT</a>
      </div>
    </div>

</body>
</html>