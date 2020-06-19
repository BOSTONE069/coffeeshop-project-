<?php 
//initialize session
session_start();

if (isset($_SESSION['login'])) {
	
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | RAILWAYS OFF MOI AVENUE NAIROBI, CA 90210 | +245 729879042</div>

    <!-- Navigation -->
   <?php require_once 'nav.php'; ?>
   
  
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				<!-- this shows the welcoming message to the blog page -->
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>The Perfect Cup Blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFEE
                        <br>
                        <small>April 13, 2020</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot 
					coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg"
					data-toggle="modal" data-target="#myModal1">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>May 03, 2020</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of cofee made with Irish
					 whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg"
					data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARMEL LATTE
                        <br>
                        <small>May 20, 2020</small>
                    </h2>
                    <p>Sweetened with caramel souce and topped with whipped cream, this will make you happy 
					any time of the day.</p>
                    <button type="button" class="btn btn-info btn-lg"
					data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
	
	 <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal1" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Adding coconut oil to coffee is a very simple process. All you need is your favorite brand of coffee, 
			organic coconut oil, and your choice of sweetener. You can choose between Stevia, raw honey, vanilla extract, 
			coconut sugar, or gelatin. I decided to go with raw honey. 
            The best way to mix coconut oil in coffee is through the use of a blender. 
			I used my NutriBullet to get the job done. While making coconut oil in coffee without a blender is possible, 
			you’ll be left with a film of oil on the very top. 
            To prepare the drink, simply brew your coffee then place it into your blender. 
			Add in one teaspoon of your sweetener then one to two teaspoons of coconut oil. 
			Blend the mixture on high until it turns a light color — this could take about 30 seconds. 
			Once it’s blended just pour it into your cup and enjoy!
            And don’t forget to check down below to learn about my experience 
			with this coconut oil and coffee combination..</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	 <!-- /.container -->

	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">IRISH COFFEE</h4>
		  </div>
		  <div class="modal-body">
			<p>
              Heat a mug with hot water. Add hot water to a mug. 
			  This should heat it up slightly. Let the water sit for a few minutes 
			  before dumping out the contents.Add coffee to the warmed mug. Once the mug is heated, add your freshly brewed coffee to the mug. 
			  Fill the mug up about three quarters of the way full.
              The fresher the coffee, the better. It's a good idea to brew coffee 
			  right before you decide to make Irish coffee. Mix in brown sugar. 
			  Use a spoon to transfer your brown sugar to the coffee. 
			  Use the same spoon to mix the sugar until it's completely dissolved. 
			  Add your whiskey. Measure out your whiskey and slowly pour it into your mug. 
			  Stir the coffee slightly to blend everything together. Top your coffee with whipped cream. 
			  When adding your whipped cream, pour it slowly over the back of a spoon. 
			  This will ensure the cream stays on top of the coffee. 
			  You can now enjoy your Irish coffee</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	 <!-- /.container -->

	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">FROZEN CARMEL LATTE</h4>
		  </div>
		  <div class="modal-body">
			<p>
				Consider using an Aeropress. This is a pour-over type of coffee making device that makes strong coffee.[13]
				Boil some water. You will need 1 to 2 cups.
				Let it sit for 1 minute to cool slightly.
				Ideally, the water should be between 175 and 195 degrees rather than at boiling temperature.
				Measure out two Aeropress scoops of coffee. Grind the coffee with an electric grinder.
				For an espresso based drink like a latte, make the grinds very fine (as fine as table salt). The grinds will stick together and clump when they are finely ground. This is what you should watch for when grinding.
				Assemble the filter in the Aeropress cap. Wet the filter in the Aeropress. This will prepare the filter and remove any paper taste from your coffee.
				Place the Aeropress on top of your cup.
				Make the coffee. You will need to add the coffee and water to the Aeropress.
				Add ground coffee to the cup using the funnel. Add hot water up to the fill line on the Aeropress.
				Use the paddle stirrer or a spoon to mix the coffee and water.
				Insert the plunger onto the Aeropress and press down until you hear a long hiss.
				Taste the coffee. If it is too strong you can add some hot water to dilute it.
				Make very strong coffee using a regular coffee maker. If you don't have a pour over device like an Aeropress, you can use a regular filter coffee maker.
				Use 1-2 scoops of coffee per cup of coffee made. You will want the coffee to be very strong to make a latte.
				Preferably, you can grind the coffee yourself to a finer grind.
				You will need 1-2 cups of coffee for a latte.
				Froth some milk. It is a common misconception that you need a milk steamer to froth milk! You can do this using your microwave:[14]
				Use a non-fat milk, such as 2 percent, for best results.
				Pour some cold milk into a jar with a lid. Do not fill the jar more than halfway.
				Seal the lid tightly.
				Shake the milk in the jar vigorously for 30 to 60 seconds, until the volume has doubled.
				Take the lid off of the jar.
				Microwave the milk on high for 30 seconds.
				The foam will rise to the top.
				Pour 1 to 2 ounces of brewed strong coffee into your mug. Then add the milk to your coffee.
				Use a spoon to keep the foam back when pouring your milk in.
				Once you have enough milk into your latte, add a spoon of foam on top.
				Enjoy your homemade latte!

				</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
} else {
	header("location:login.php");
}
	
?>