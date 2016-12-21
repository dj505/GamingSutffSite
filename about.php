<!DOCTYPE html>
<html>
  <head>
    <title>dj505's Website</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <center>
        <font face="Arial">
          <h1>
            <font face="Robotica" style="letter-spacing: 5px;"><div id="container"><div class="confirm_selection" style="overflow-x: hidden; overflow-y: hidden; opacity: 1; ">dj505's Gaming Stuff</div> </div></font>
          </h1>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pictures.php">Pictures</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a class="active" href="about.php">About</a></li>
            <li><a href="simfiles.php">Simfiles</a></li>
          </ul>
        </font>
	</center>
	<font face="Arial">
		<center>
			<div id="main">
				<b>So you want to know about my website?</b><br /><br />This site originally started out as a project for Computer Studies in high school. I decided to keep expanding it and improving it, and now I'm hosting it from a Raspberry Pi sitting under the desk in my living room! Pretty neat, huh?<br /><br />More specifically, the site is being hosted from a Raspbery Pi 2 B+. I'm using a lightweight verson Raspbian (Raspbian Lite) running Apache. Seeing as I don't have a domain of my own and don't really want to pay for one, I'm using a free one called DuckDNS, which works excellently for my needs.<br /><br />Wanna set up a site for yourself? The tutorial I used can be found <a href="https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md">here.</a><br /><br />It doesn't require a ton of coding knowledge, just a Raspberry Pi, and SSH connection, and the knowledge to copy and paste text. For SSH, I recommend <a href="https://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">PuTTY</a> (Windows). If you're on Mac, the terminal ahs a built-in SSH command.<br /><br /><br /><br />You may have noticed the glowing, pulsing text on my banner. No, it's not a gif! It's just a bit of fancy CSS. Wana try it yourself? Paste the folowing in your site's CSS file:<br><br><b>.confirm_selection {<br>
  animation: glow 1.5s infinite alternate;<br>
}<br><br>

@keyframes glow {<br>
  to {<br>
    text-shadow: 0 0 20px #FFFFFF;<br>
  &nbsp &nbsp}<br>
}<br><br></b>And add this to the text you want to be cool and glowy in your HTML file (replacing "Your Text Here" yith your own text):<br><br><b>&lt;br>&lt;br>&lt;div class="confirm_selection" style="overflow-x: hidden; overflow-y: hidden; opacity: 1; ">Your Text Here&lt;/div></b>
          </div>
        </center>
      </font>
    </center>
  </body>
</html>
