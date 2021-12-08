<?php include '../view/header.php'; ?>
<main>
    <h1>vehicle List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
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
        <!-- display a table of vehicles -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td><?php echo $vehicle['brand']; ?></td>
                <td><?php echo $vehicle['vehicleName']; ?></td>
                <td class="right"><?php echo $vehicle['listPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_vehicle">
                    <input type="hidden" name="vehicle_id"
                           value="<?php echo $vehicle['vehicleID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $vehicle['categoryID']; ?>">
                    <input type="submit" onclick="return confirm('Are you sure?')" value="Test">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add vehicle</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>