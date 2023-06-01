<x-layout>
    <x-slot name="title">
        <title>About</title>
    </x-slot>
    <?php foreach($names as $name) : ?>
    <h3>
        <?= $name; ?>
    </h3>
    <?php endforeach; ?>
</x-layout>