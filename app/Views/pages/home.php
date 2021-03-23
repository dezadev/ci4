<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Hello, world!</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At neque nisi eos commodi perspiciatis, quos quo, quod voluptatibus nulla suscipit soluta sed? Assumenda sed sit at, quasi saepe quam ullam.</p>
        </div>
        <div>
            <?php
            $faker = \Faker\Factory::create('id_ID');
            for ($i = 0; $i < 100; $i++) {
                echo $faker->name, "<br>";
            }
            ?>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>