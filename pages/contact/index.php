<?php
FrontController::show("layouts/header");
$stmt = Database::$db->prepare('SELECT * FROM Messages');
$stmt->execute();
$countMessages = $stmt->rowCount();
?>

<section>
    <h4>Contact</h4>
    <article class="form-wrapper row">
        <div class="form-content col m4">
            <form action="/?page=contact&action=send" id="form" method="POST" onsubmit="return validateForm(event)" autocomplete="off">
                <div class="input-field">
                    <input id = "sender" name="sender" required
                           type = "text"
                    placeholder="Your Name" />
                    <label for="sender">Sender</label>
                </div>
                <div class="input-field">
                    <input type="text" id="email" required name="email"
                    placeholder="Your E-Mail Address">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field">
                    <textarea name="message"
                              required
                              class="materialize-textarea"
                              placeholder="Write here the Message"
                              id="message"
                              cols="30"
                              rows="10"></textarea>
                    <label for="message">Message</label>
                </div>
                <button type="submit" class="btn blue-grey">Submit</button>
            </form>
        </div>
        <div class="col m3 offset-m3">
            <a href="/?page=contact&action=messages" class="btn btn-block btn-large blue-grey">
                <strong>Messages<span class="round-badge"><?=$countMessages?></span></strong>
            </a>
        </div>
    </article>

    <h4>Schiller Viktor_GWOQXX</h4>
    <article>
        <div class="entry-content">
            <p>Get In Touch</p>
            <ul>
                <li><strong>Address: 6750 Algyő, Pipacs utca 8.</strong></li>
                <li><strong>Mobile: 30/4070433</strong></li>
                <li><strong><a href="mailto:schillerviktor@yahoo.com">E-mail: schillerviktor@yahoo.com</a></strong></li>
            </ul>
            <h5><strong>Me:</strong></h5>
				<p><img class="alignnone size-medium wp-image-335" src="/assets/images/schviktor_card.jpg" alt="Schiller Viktor" max-width="200" height="200" sizes="(max-width: 650px) 100vw, 300px"><br>
			<h5><strong>My YouTube Channel: <b>schillerviktor76</b></strong></h5>
            <a href="https://www.youtube.com/channel/UCfbLWh98730Cf8aIM1u8w7Q" target="_blank">
				<p><img class="alignnone size-medium wp-image-335" src="/assets/images/youtube_card.gif" alt="Channel" max-width="200" height="auto" sizes="(max-width: 650px) 100vw, 300px"><br>
			</a>
			<h5><strong>My GitHub Channel: <b>schillerviktor</b></strong></h5>
			<a href="https://github.com/schillerviktor/mywebsite" target="_blank">
				<p><img class="alignnone size-medium wp-image-335" src="/assets/images/github_card.gif" alt="Channel" max-width="400" height="220" sizes="(max-width: 650px) 100vw, 300px"><br>
				</p>
			</a>
                <p>&nbsp;</p>
			    <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </article>
</section>

<script>
    function validateForm(e) {

        var email = document.querySelector('#email'),
            emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (emailPattern.test(String(email.value).toLowerCase())) {
            if (email.classList.contains('red-text')) {
                email.classList.remove('red-text');
            }
            email.classList.add('green-text');
        } else {
            if (email.classList.contains('green-text')) {
                email.classList.remove('green-text');
            }
            email.classList.add('red-text');

            return false;
        }
    }
	
</script>
<?php FrontController::show("layouts/footer") ?>
