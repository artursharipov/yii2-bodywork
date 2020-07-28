<section id="bodywork">
    
    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <?php foreach($classes as $class):?>

                    <button class="change_class" data-id="<?=$class->id?>">

                        <?=$class->name?>

                    </button>

                <?php endforeach;?>

                <div id="bodywork__auto"></div>

            </div>
            <div class="col-md-4">

                <div id="bodywork__cart"></div>
            
            </div>

        </div>

    </div>
    
</section>