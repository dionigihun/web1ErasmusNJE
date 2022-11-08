<?php FrontController::show("layouts/header") ?>

<section>
    <h4>Members</h4>
	<article>
	<p style="text-align:justify">
        Why should you pay special attention to web copywriting?
As the number of websites posted on the web increases and competition intensifies
also among Hungarian-language websites, it is becoming more and more important that
a website should be found and fulfill the requirements arising from the Internet
its most important task, i.e. provide information. The well-functioning website
is based on three main pillars: search engine-friendly programming solutions, a
a clear design that takes webergonomics into account and the well-structured,
informative web text.
	</p>
    </article>
    <article>
		<style>
		#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #758a94;}

		#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #758a94;
		color: white;
		}
	</style>
		<table id="customers">
		<thead>
            <tr>
                <th>PARTNERS:</th>
                <th>WEBSITES:</th>
            </tr>
            </thead>
            <tbody>
                <tr><td>Scratch Mindstorms EV3:</td><td><a href="https://scratch.mit.edu/ev3" target="_blank">https://scratch.mit.edu/ev3</a></td></tr>
                <tr><td>Mindsensors:</td><td><a href="http://www.mindsensors.com/" target="_blank">http://www.mindsensors.com/</a></td></tr>
                <tr><td>Carnegie Mellon Robotics Academy:</td><td><a href="https://www.cmu.edu/roboticsacademy/roboticscurriculum/Lego%20Curriculum/" target="_blank">https://www.cmu.edu/roboticsacademy/roboticscurriculum/Lego%20Curriculum/</a></td></tr>
                <tr><td>Danny's Lab:</td><td><a href="https://robotics.benedettelli.com/lego-boost-17101-building-instructions/" target="_blank">https://robotics.benedettelli.com/lego-boost-17101-building-instructions/target=</a></td></tr>
                <tr><td>Raspberry-pi and Lego Boost:</td><td><a href="https://magpi.raspberrypi.org/articles/hack-lego-boost-with-raspberry-pi" target="_blank">https://magpi.raspberrypi.org/articles/hack-lego-boost-with-raspberry-pi</a></td></tr>
                <tr><td>Robotic Camps:</td><td><a href="https://www.funside.hu/en/camps/balaton-camps/robotics-camp/" target="_blank">https://www.funside.hu/en/camps/balaton-camps/robotics-camp/</a></td></tr>
                <tr><td>GitHub - Andrey Pokhilko:</td><td><a href="https://github.com/undera/pylgbst" target="_blank">https://github.com/undera/pylgbst</a></td></tr>
            </tbody>
        </table>

    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
