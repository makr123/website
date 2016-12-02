<?php
    /**
     * @var ouTechnology $post
     */
    $post = $this->post;
?>

<!-- TODO make sure all references to 'skill(s)' are changed to 'technolog(y|ies)' -->

<div id="page-banner">
    <div class="row">
        <div class="small-8 medium-6 large-3 small-centered columns">
            <img src="<?php echo $post->logoUrl() ?>" class="thumbnail" alt="">
            <h2>Co-Ops that use:<br><?php echo $post->title() ?></h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">

        <div class="view float-center">
            <ul class="tabs" data-tabs id="coops-view-tabs">
                <li class="tabs-title is-active"><a href="#grid" aria-selected="true">Grid</a></li>
                <li class="tabs-title"><a href="#map">Map</a></li>
            </ul>
        </div>

        <div class="tabs-content" data-tabs-content="coops-view-tabs">

            <!-- START Grid View Content -->
            <div class="tabs-panel is-active" id="grid">

                <div class="row small-up-3 medium-up-4 large-up-6">
                    <?php foreach ($post->coOps() as $coOp): ?>
                        <div class="column">
                            <a href="<?php echo $coOp->permalink() ?>" class="coop-thumb">
                                <img src="<?php echo $coOp->logoUrl() ?>" class="thumbnail" alt="">
                                <span><h4><?php echo $coOp->name() ?></h4></span>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
            <!-- END Grid View Content -->

            <!-- START Map View Content -->
            <div class="tabs-panel" id="map">
                <div class="flex-video">
                    <!-- TODO sort out map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4776320.894259267!2d-8.549567638277907!3d54.229862435208936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2sus!4v1480518359134"
                            width="600"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen >
                    </iframe>
                </div>
            </div>
            <!-- END Map View Content -->

        </div>

    </div>
</div>