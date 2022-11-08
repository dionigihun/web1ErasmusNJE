<?php
$logged_in = FrontController::is_logged_in();
?>

<div class="navbar-fixed">
	<nav class="blue-grey darken-2" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><img src="/assets/images/logo_business.png" alt="Schiller Viktor" align="bottom" width="60" height="60">
			<a href="/" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>    
				<ul class="right hide-on-med-and-down">
					<li><a href="/">HomePage</a></li>
					<li><a href="/?page=members">Members</a></li>
					<li><a href="/?page=gallery">Gallery</a></li>
					<li><a href="/?page=map">Map</a></li>
					<li><a href="/?page=contact">Contact</a></li>
					<?php if ($logged_in): ?>
						<li><a href="/?page=login&action=logout" class="btn red">Logout</a></li>
					<?php else: ?>
						<li><a href="/?page=login" class="btn green pulse">Login</a></li>
					<?php endif; ?>
				</ul>
		</div>
	</nav>
</div>
    <ul id="nav-mobile" class="sidenav">
       <li><a href="/">HomePage</a></li>
       <li><a href="/?page=members">Members</a></li>
       <li><a href="/?page=gallery">Gallery</a></li>
       <li><a href="/?page=map">Map</a></li>
       <li><a href="/?page=contact">Contact</a></li> 
    </ul>
    
    

<?php if ($logged_in): ?>
<div class="secondary-nav blue-grey lighten-3">
    <div class="container">
        <strong class="right">
            <i class="material-icons icon">person</i>
            Signed in:
            <?=
            $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' .
            '('. $_SESSION['username'] . ')'
            ?>

        </strong>
    </div>
</div>
<?php endif; ?>