<div class="container p-3">
    <?php if ($totalCost != -1): ?>
        <h1>Total Cost : <?= $totalCost ?></h1>
    <?php else: ?>
        <h1>Supply And Demand Doesnt Match!</h1>
    <?php endif; ?>
</div>