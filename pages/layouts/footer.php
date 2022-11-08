		</div>
    </div>
</main>

<footer class="page-footer blue-grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col l4 s20">
                <h5 class="grey-text text-lighten-4">About:</h5>
                <p class="grey-text text-lighten-4">
                    The Internet is becoming the town square for the global village of tomorrow. - Bill Gates - 
                </p>
            </div>
            <div class="col l3 offset-l2 s12">
                <h5 class="grey-text text-lighten-4">Copyright:</h5>
                <p class="grey-text text-lighten-4">
                    ©2022 Viktor Schiller® Dénes Oláh®<br>All rights reserved®. Use of this site signifies your agreement to the terms of use.
                </p>
				<p class="grey-text text-lighten-4">
					Made by: <a class="orange-text text-lighten-3" >Viktor Schiller - GWOQXX<br>Dénes Oláh - GDGO0C</a>
				</p>
            </div>
        </div>
    </div>
	<div class="footer-copyright">
      <div class="container">
      In assotiation with <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/assets/js/materialize.js"></script>

<?php
if (!empty($_SESSION['alert'])) {
    FrontController::alert($_SESSION['alert']);
    unset($_SESSION['alert']);
}
?>


</body>
</html>