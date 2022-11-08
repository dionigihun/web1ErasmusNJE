<?php 
FrontController::show("layouts/header");
$logged_in = FrontController::is_logged_in();
?>

<section>
    <h4>Gallery</h4>
    <div class="row">
        <article class="col m12 gallery-section">
            <h4>Pictures</h4>
			<?php if (!$logged_in): ?>
			<article style="color:red;">
			* Only registered Users can upload pictures!
			</article>
			<?php endif; ?>
            <?php if ($logged_in): ?>
			<div class="upload-images">
                <form action="/?page=gallery&action=upload" method="post" enctype="multipart/form-data">
                    <div class="file-field input-field">
                        <div class="btn blue-grey">
                            <span>Upload</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more images">
                        </div>
                    </div>
                    <input type="submit" class="btn blue-grey" value="Upload files" name="submit">
                </form>
            </div>
            <?php endif; ?>
			<div class="row">
                <?php define('IMAGEPATH', 'assets/uploads/') ?>
                <?php foreach (glob(IMAGEPATH.'*') as $filename) : ?>
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <div class="gallery-img"
                                 style="background-image: url('assets/uploads/<?=basename($filename)?>') ">
                            </div>
                        </div>
                        <div class="card-content">
                            <span><?=basename($filename)?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>
            </div>
        </article>
        <article class="col m12 gallery-section">
            <h4>YouTube video:</h4>
			<div class="responsive-video">
				<iframe max width="560" height="315" src="https://www.youtube.com/embed/3ZX53TiGiCE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</article>
        <article class="col m12 gallery-section">
            <h4>Local HTML5 video:</h4>
            <video class="responsive-video" width="560" poster="/assets/images/Curiosity_static_card.jpg" controls>
				<source src="/assets/video/LEGO Boost.mp4" type="video/mp4">
				The browser does not support HTML5 videos.
			</video>
		</article>
    </div>
</section>

<?php FrontController::show("layouts/footer") ?>
