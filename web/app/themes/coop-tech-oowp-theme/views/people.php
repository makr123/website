<section>
    <div class="row expanded">
        <div class="small-12 small-centered large-10 columns">
            <h1>People</h1>
        </div>
    </div>
    <div class="row expanded">
        <div class="small-12 small-centered large-10 columns">
            <?php $this->post->printPartial('peopleTable', [
                    'people' => $this->people,
                    'showCoOp' => true
                ]); ?>
        </div>
    </div>
</section>