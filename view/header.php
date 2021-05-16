<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php require 'db/db.php'; ?>
    <title><?php echo $settings[0]['name'] ?></title>
    <meta name="description" content="<?php echo $settings[0]['description'] ?>">
    <meta name="keywords" content="<?php echo $settings[0]['keywords']; ?>">
    <?php require "functions/link.php"; ?>
    <?php require "functions/component.php"; ?>
    <?php echo link_path('css/style.css'); ?>
    <?php echo link_path('css/bootstrap.css'); ?>
    <?php echo link_path('css/slider_games.css'); ?>
    <?php echo link_path('css/pre_slider.css'); ?>
    <?php echo link_path('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'); ?>
  </head>
  <body>
  <header>
    <section id="slider_bl">
    	<div class="wrapper">
    	  <input checked type=radio name="slider" id="slide1" />
    	  <input type=radio name="slider" id="slide2" />
    	  <input type=radio name="slider" id="slide3" />
    	  <input type=radio name="slider" id="slide4" />
    	  <div class="slider-wrapper">

    	    <div class=inner>
            <?php foreach ($banner as $banners) {?>
              <article>
                <div class="info bottom-right"><a href="single.php?name=<?php echo $banners['name']; ?>"><button type="button" name="button"><p class="mt-2 ml-2">Переглянути</p><p class="ml-2"><svg class="ml-3"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="31px" height="32px">
                  <defs>
                    <filter id="Filter_0">
                      <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
                      <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                      <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
                    </filter>

                  </defs>
                  <g filter="url(#Filter_0)">
                    <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                    d="M8.071,7.000 L6.657,8.414 L6.657,8.414 L2.000,13.071 L0.586,11.657 L5.243,7.000 L0.586,2.343 L2.000,0.929 L6.657,5.586 L6.657,5.586 L8.071,7.000 Z"/>
                  </g>
                </svg></p></button></a></div>
                <img src="<?php echo $banners['img']; ?>" />
              </article>
            <?php } ?>
    	    </div>
    	  </div>

    	  <div class="slider-dot-control">
    	    <label for=slide1></label>
    	    <label for=slide2></label>
    	    <label for=slide3></label>
    	    <label for=slide4></label>
    	  </div>
    	</div>
    </section>
  <div class="header">
    <div class="container pt-3">
      <a class="logo text-white" href="/GamingPage">GameShop</a>
      <div class="float-right mt-2">
        <form class="" action="search" method="post">
          <input type="text" name="search" value="">
          <svg style='position:absolute;margin-top:3px;margin-left:3px;' class="mr-3"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="30px" height="30px">
          <defs>
            <filter id="Filter_0">
              <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
              <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
              <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>

          </defs>
          <g filter="url(#Filter_0)">
            <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
            d="M12.054,0.208 C8.555,0.208 5.709,3.023 5.709,6.484 C5.709,7.938 6.213,9.276 7.055,10.342 L1.039,16.303 C0.683,16.655 0.687,17.222 1.048,17.570 C1.227,17.742 1.459,17.828 1.692,17.828 C1.928,17.828 2.165,17.739 2.344,17.561 L8.372,11.589 C9.411,12.324 10.682,12.759 12.054,12.759 C15.552,12.759 18.398,9.944 18.398,6.484 C18.398,3.023 15.552,0.208 12.054,0.208 ZM12.054,11.166 C9.454,11.166 7.339,9.066 7.339,6.484 C7.339,3.902 9.454,1.801 12.054,1.801 C14.653,1.801 16.769,3.902 16.769,6.484 C16.769,9.066 14.653,11.166 12.054,11.166 Z"/>
          </g>
        </svg>
        </form>
      </div>
  </div>
  </div>
  </header>
