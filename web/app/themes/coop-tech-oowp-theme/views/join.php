<?php $post = $this->post ?>

<div class="join">

<div id="page-banner">
    <div class="row">
        <div class="small-centered small-12 medium-10 large-8 columns">
            <h2>Join CoTech</h2>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="small-centered small-12 medium-10 large-8 columns">
            <?php echo $post->post_content ?>
        </div>
    </div>

    <section id="join-form">
        <div class="row">
            <div class="small-12 medium-6 small-centered columns">

                <script src='https://www.google.com/recaptcha/api.js'></script>
                <?php echo do_shortcode( '[wpcf7_add_form_tag id="1484" title="contact-form"]' ); ?>

                <!-- form>
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="small-12 medium-6 columns">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="small-12 columns">
                            <textarea placeholder="Tell us about your project"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-6 medium-4 small-centered columns">
                            <a class="large expanded button" href="mailto:contact@coops.tech">Send</a>
                        </div>
                    </div>

                </form -->

            </div>
        </div>
    </section>
</div>

</div>
