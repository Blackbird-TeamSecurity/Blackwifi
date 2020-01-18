<!--
============================[LITTLE NOTE]====================================== 
Before you replace your name with "YOU", make sure you replace it in 2 places,
Line 401 => <div  class="glitch_2" data-text=[THIS PLACE]>[THIS PLACE]</div></center>

After changing it, you will need to do some adjustment in order to make your texts fit with the glitching in the CSS section
Line 41 => width: 220px; <-- Adjust this value for the <div> box to adjust its position right
Line 226 => left: 50px; <-- adjust it also in order to match the corresponding position of the glitch and assign the same value to
glitch_2:before
============================[============]====================================== 
-->
<html>

	<head><title>HACKED BY Blackbird Team</title> <!-- Change this if you want -->
	<link rel="shortcut icon" href="/root/Bureau/wififake/test/Blackbird files/logo.jpg" type="image/x-icon">
	<!-- <iframe width="0" height="0" src="https://www.youtube.com/embed/kYQxUoQ5Z00?autoplay=1&loop=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> 
	the line above used to work before Youtube prohibiting it so i had to remove it for the others to work well 
	-->
	
	
	<style type="text/css">
		@font-face {
		    font-family: "hack";
		    src: url("elite_haxxor.ttf") format('truetype');
		}
		img.icon{
			top: 21;
			height: 40%;
			width: 30%
		}
	    
	    body {
	      background-color:black';  
	      font-family: "hack";
	    }
	    
	    .glitch {
	      color: white;
	      font-size: 70px;
	      margin: 0 auto;
	      width: 220px; /* You may want to adjust this, my default was 280 */
	      text-align: center;
	      
	    }
	    
	    .glitch {
	      position: relative;
	    }
	    
	    .glitch:after {
	      animation: glitch-animation 2s infinite linear alternate-reverse;
	      background: black;
	      clip: rect( 0, 900px, 0, 0 );
	      color: white;
	      content: attr( data-text );
	      left: 2px;
	      overflow: hidden;
	      position: absolute;
	      text-shadow: -1px 0 red;
	      top: 0;
	    }
	    .glitch:before {
	      animation: glitch-animation-2 3s infinite linear alternate-reverse;
	      background: black;
	      clip: rect( 0, 900px, 0, 0 );
	      color: white;
	      content: attr( data-text );
	      left: -2px;
	      overflow: hidden;
	      position: absolute;
	      text-shadow: 1px 0 blue;
	      top: 0;
	    }
	    /* Expanded Animations */
	    @keyframes glitch-animation {
	      0% {
	        clip: rect(42px, 9999px, 44px, 0);
	      }
	      5% {
	        clip: rect(12px, 9999px, 59px, 0);
	      }
	      10% {
	        clip: rect(48px, 9999px, 29px, 0);
	      }
	      15.0% {
	        clip: rect(42px, 9999px, 73px, 0);
	      }
	      20% {
	        clip: rect(63px, 9999px, 27px, 0);
	      }
	      25% {
	        clip: rect(34px, 9999px, 55px, 0);
	      }
	      30.0% {
	        clip: rect(86px, 9999px, 73px, 0);
	      }
	      35% {
	        clip: rect(20px, 9999px, 20px, 0);
	      }
	      40% {
	        clip: rect(26px, 9999px, 60px, 0);
	      }
	      45% {
	        clip: rect(25px, 9999px, 66px, 0);
	      }
	      50% {
	        clip: rect(57px, 9999px, 98px, 0);
	      }
	      55.0% {
	        clip: rect(5px, 9999px, 46px, 0);
	      }
	      60.0% {
	        clip: rect(82px, 9999px, 31px, 0);
	      }
	      65% {
	        clip: rect(54px, 9999px, 27px, 0);
	      }
	      70% {
	        clip: rect(28px, 9999px, 99px, 0);
	      }
	      75% {
	        clip: rect(45px, 9999px, 69px, 0);
	      }
	      80% {
	        clip: rect(23px, 9999px, 85px, 0);
	      }
	      85.0% {
	        clip: rect(54px, 9999px, 84px, 0);
	      }
	      90% {
	        clip: rect(45px, 9999px, 47px, 0);
	      }
	      95% {
	        clip: rect(37px, 9999px, 20px, 0);
	      }
	      100% {
	        clip: rect(4px, 9999px, 91px, 0);
	      }
	    }
	    @keyframes glitch-animation-2 {
	      0% {
	        clip: rect(65px, 9999px, 100px, 0);
	      }
	      5% {
	        clip: rect(52px, 9999px, 74px, 0);
	      }
	      10% {
	        clip: rect(79px, 9999px, 85px, 0);
	      }
	      15.0% {
	        clip: rect(75px, 9999px, 5px, 0);
	      }
	      20% {
	        clip: rect(67px, 9999px, 61px, 0);
	      }
	      25% {
	        clip: rect(14px, 9999px, 79px, 0);
	      }
	      30.0% {
	        clip: rect(1px, 9999px, 66px, 0);
	      }
	      35% {
	        clip: rect(86px, 9999px, 30px, 0);
	      }
	      40% {
	        clip: rect(23px, 9999px, 98px, 0);
	      }
	      45% {
	        clip: rect(85px, 9999px, 72px, 0);
	      }
	      50% {
	        clip: rect(71px, 9999px, 75px, 0);
	      }
	      55.0% {
	        clip: rect(2px, 9999px, 48px, 0);
	      }
	      60.0% {
	        clip: rect(30px, 9999px, 16px, 0);
	      }
	      65% {
	        clip: rect(59px, 9999px, 50px, 0);
	      }
	      70% {
	        clip: rect(41px, 9999px, 62px, 0);
	      }
	      75% {
	        clip: rect(2px, 9999px, 82px, 0);
	      }
	      80% {
	        clip: rect(47px, 9999px, 73px, 0);
	      }
	      85.0% {
	        clip: rect(3px, 9999px, 27px, 0);
	      }
	      90% {
	        clip: rect(26px, 9999px, 55px, 0);
	      }
	      95% {
	        clip: rect(42px, 9999px, 97px, 0);
	      }
	      100% {
	        clip: rect(38px, 9999px, 49px, 0);
	      }
	    }
		
		.glitch_2 {
		  font-family: sans-serif;
	      color: white;
	      font-size: 41px;
	      margin: 0 auto;
	      width: 250px;
	      
	    }
	    
	    /* Real glitch effect */
	    .glitch_2 {
	      position: relative;
	    }
	    
	    .glitch_2:after {
	      animation: glitch-animation 2s infinite linear alternate-reverse;
	      background: black;
	      clip: rect( 0, 900px, 0, 0 );
	      color: white;
	      content: attr( data-text );
	      left: 50px; /* Also this for the second div box */
	      overflow: hidden;
	      position: absolute;
	      text-shadow: -1px 0 red;
	      top: 0;
	    }
	    .glitch_2:before {
	      animation: glitch-animation-2 3s infinite linear alternate-reverse;
	      background: black;
	      clip: rect( 0, 900px, 0, 0 );
	      color: white;
	      content: attr( data-text );
	      left: 50px; /* Make sure this one is the same as the .glitch_2:after; */
	      overflow: hidden;
	      position: absolute;
	      text-shadow: 1px 0 blue;
	      top: 0;
	    }
	    /* Expanded Animations */
	    @keyframes glitch-animation {
	      0% {
	        clip: rect(42px, 9999px, 44px, 0);
	      }
	      5% {
	        clip: rect(12px, 9999px, 59px, 0);
	      }
	      10% {
	        clip: rect(48px, 9999px, 29px, 0);
	      }
	      15.0% {
	        clip: rect(42px, 9999px, 73px, 0);
	      }
	      20% {
	        clip: rect(63px, 9999px, 27px, 0);
	      }
	      25% {
	        clip: rect(34px, 9999px, 55px, 0);
	      }
	      30.0% {
	        clip: rect(86px, 9999px, 73px, 0);
	      }
	      35% {
	        clip: rect(20px, 9999px, 20px, 0);
	      }
	      40% {
	        clip: rect(26px, 9999px, 60px, 0);
	      }
	      45% {
	        clip: rect(25px, 9999px, 66px, 0);
	      }
	      50% {
	        clip: rect(57px, 9999px, 98px, 0);
	      }
	      55.0% {
	        clip: rect(5px, 9999px, 46px, 0);
	      }
	      60.0% {
	        clip: rect(82px, 9999px, 31px, 0);
	      }
	      65% {
	        clip: rect(54px, 9999px, 27px, 0);
	      }
	      70% {
	        clip: rect(28px, 9999px, 99px, 0);
	      }
	      75% {
	        clip: rect(45px, 9999px, 69px, 0);
	      }
	      80% {
	        clip: rect(23px, 9999px, 85px, 0);
	      }
	      85.0% {
	        clip: rect(54px, 9999px, 84px, 0);
	      }
	      90% {
	        clip: rect(45px, 9999px, 47px, 0);
	      }
	      95% {
	        clip: rect(37px, 9999px, 20px, 0);
	      }
	      100% {
	        clip: rect(4px, 9999px, 91px, 0);
	      }
	    }
	    @keyframes glitch-animation-2 {
	      0% {
	        clip: rect(65px, 9999px, 100px, 0);
	      }
	      5% {
	        clip: rect(52px, 9999px, 74px, 0);
	      }
	      10% {
	        clip: rect(79px, 9999px, 85px, 0);
	      }
	      15.0% {
	        clip: rect(75px, 9999px, 5px, 0);
	      }
	      20% {
	        clip: rect(67px, 9999px, 61px, 0);
	      }
	      25% {
	        clip: rect(14px, 9999px, 79px, 0);
	      }
	      30.0% {
	        clip: rect(1px, 9999px, 66px, 0);
	      }
	      35% {
	        clip: rect(86px, 9999px, 30px, 0);
	      }
	      40% {
	        clip: rect(23px, 9999px, 98px, 0);
	      }
	      45% {
	        clip: rect(85px, 9999px, 72px, 0);
	      }
	      50% {
	        clip: rect(71px, 9999px, 75px, 0);
	      }
	      55.0% {
	        clip: rect(2px, 9999px, 48px, 0);
	      }
	      60.0% {
	        clip: rect(30px, 9999px, 16px, 0);
	      }
	      65% {
	        clip: rect(59px, 9999px, 50px, 0);
	      }
	      70% {
	        clip: rect(41px, 9999px, 62px, 0);
	      }
	      75% {
	        clip: rect(2px, 9999px, 82px, 0);
	      }
	      80% {
	        clip: rect(47px, 9999px, 73px, 0);
	      }
	      85.0% {
	        clip: rect(3px, 9999px, 27px, 0);
	      }
	      90% {
	        clip: rect(26px, 9999px, 55px, 0);
	      }
	      95% {
	        clip: rect(42px, 9999px, 97px, 0);
	      }
	      100% {
	        clip: rect(38px, 9999px, 49px, 0);
	      }
	    }
	    .boxed {
			border: 1px solid green ;
			color: white;
			font-family: Courier;
			width: 800px;
		    border: 10px solid green;
		    padding: 20px;
		    margin: 25px;
		    font-size: 20
		}
		.linkButton { 
		     background: none;
		     border: none;
		     color: #63AD38;
		     text-decoration: underline;
		     cursor: pointer; 
		     font-size: 20px;
		     font-family: Courier;
		}
		</style>

	</head>

	<body style="background-color:black">


	<br>
<div class="span6" id="left-pane">
<center><img src="./Blackbird files/logo.png"><center>
<center><h2 class="header"><font size="40" color="white" face="blackbird">Bl@ckbird Team</font><h2><center>
<center><h2 class="header"><font size="40" color="red" face="hack">YOUR HAVE BEEN HACKED </font><h2><center>
</html>
