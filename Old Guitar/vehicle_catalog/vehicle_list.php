<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Categories</h1>
        <nav>
        <ul>
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $category_name; ?></h1>
        <nav>
        <ul>
            <!-- display links for vehicles in selected category -->
            <?php foreach ($vehicles as $vehicle) : ?>
            <li>
                <a href="?action=view_vehicle&amp;vehicle_id=<?php 
                          echo $vehicle['vehicleID']; ?>">
                    <?php echo $vehicle['vehicleName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>
    </section>
</main>
<?php include '../view/footer.php'; ?>