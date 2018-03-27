<?php

if(isset($_GET['action'])) {
	$action = $_GET['action'];
	switch($action) {
		case "template":
		include('viewtemplate.php');
		break;
	}
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kenta Generator</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="kenta.php">Home</a>
                </li>
                <li><a href="?action=template">View Template</a>
                </li>
            </ul>
            <h3 class="text-muted">Kenta Generator</h3>
        </div>

        <div class="jumbotron">
            <form class="form-horizontal" method="post" action="generate.php">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="restaurant">Restaurant</label>
                        <div class="col-md-4">
                            <input id="restaurant" name="restaurant" placeholder="Name of Restaurant" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="style">Style</label>
                        <div class="col-md-4">
                            <input id="style" name="style" placeholder="Restaurant style" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="CityState">Location</label>
                        <div class="col-md-4">
                            <input id="CityState" name="CityState" placeholder="City, State" class="form-control input-md" type="text" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="area">Location Area</label>
                        <div class="col-md-4">
                            <input id="area" name="area" placeholder="Street area" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="stars">Stars</label>
                        <div class="col-md-2">
                            <select id="stars" name="stars" class="form-control">
                                <option value="5">5</option>
                                <option value="4.5">4.5</option>
                                <option value="4">4</option>
                                <option value="3.5">3.5</option>
                                <option value="3">3</option>
                                <option value="2.5">2.5</option>
                                <option value="2">2</option>
                                <option value="1.5">1.5</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="maindraw">Main Draw</label>
                        <div class="col-md-4">
                            <input id="maindraw" name="maindraw" placeholder="Main attraction" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="price">Price Range</label>
                        <div class="col-md-4">
                            <select id="price" name="price" class="form-control">
                                <option value="$10">Under $10 Dollars</option>
                                <option value="$11-$30">$11-$30</option>
								<option value="$31-60">$31-$60</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="dish1">Food Dish 1</label>
                        <div class="col-md-4">
                            <input id="dish1" name="dish1" placeholder="Menu item" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="dish2">Food Dish 2</label>
                        <div class="col-md-4">
                            <input id="dish2" name="dish2" placeholder="Menu item 2" class="form-control input-md" type="text" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="attire">Attire</label>
                        <div class="col-md-4">
                            <select id="attire" name="attire" class="form-control">
                                <option value="casual">Casual</option>
                                <option value="upscale">Upscale</option>
                                <option value="fancy">Fancy</option>
                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="children">Good for children?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="children-0">
                                    <input name="children" id="children-0" value="great" checked="checked" type="radio">Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label for="children-1">
                                    <input name="children" id="children-1" value="not recommended" type="radio">No
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="alchohol">Alchohol Served?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="alchohol-0">
                                    <input name="alchohol" id="alchohol-0" value="is" type="radio">Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label for="alchohol-1">
                                    <input name="alchohol" id="alchohol-1" value="is no" checked="checked" type="radio">No
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="waiters">Waiter Services?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="waiters-0">
                                    <input name="waiters" id="waiters-0" value="is" checked="checked" type="radio">Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label for="waiters-1">
                                    <input name="waiters" id="waiters-1" value="is no" type="radio">No
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="seating">Outdoor Seating?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="seating-0">
                                    <input name="seating" id="seating-0" value="is" type="radio">Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label for="seating-1">
                                    <input name="seating" id="seating-1" value="is no" checked="checked" type="radio">No
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="wifi">Free Wi-Fi?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="wifi-0">
                                    <input name="wifi" id="wifi-0" value="has" type="radio">Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label for="wifi-1">
                                    <input name="wifi" id="wifi-1" value="does not have" checked="checked" type="radio">No
                                </label>
                            </div>
                        </div>
                    </div>

					<!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="o_extra">Overall Extra</label>
                        <div class="col-md-6">
                            <input id="o_extra" name="o_extra" placeholder="(Optional) Additional overall info" class="form-control input-md" value="" type="text">
                        </div>
                    </div>

					<!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="f_extra">Food Extra</label>
                        <div class="col-md-6">
                            <input id="f_extra" name="f_extra" placeholder="(Optional) Additional food info" class="form-control input-md" value="" type="text">
                        </div>
                    </div>

					<!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="a_extra">Atmosphere Extra</label>
                        <div class="col-md-6">
                            <input id="a_extra" name="a_extra" placeholder="(Optional) Additional atmosphere info" class="form-control input-md" value="" type="text">
                        </div>
                    </div>

					<!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="s_extra">Service Extra</label>
                        <div class="col-md-6">
                            <input id="s_extra" name="s_extra" placeholder="(Optional) Additional service info" class="form-control input-md" value="" type="text">
                        </div>
                    </div>

                </fieldset>
				<button type="submit" class="btn btn-lg btn-success">Generate</button>
            </form>
        </div>

        <div class="footer">
            <p>&copy; Mtwerkers 2014</p>
        </div>

    </div>
    <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>