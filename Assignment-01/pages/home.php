<table border="1" align="center" width="80%">
    <thead>
    <tr>
        <th>Division</th>
        <th>District</th>
        <th>Police Station</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($divisions as $division){ ?>
        <?php $firstDivision = true; ?>

        <?php foreach($division['districts'] as $district){ ?>
            <?php $firstDistrict = true; ?>

            <?php foreach($district['upazila'] as $upazila){ ?>
                <tr>
                    <?php if($firstDivision){ ?>
                        <td rowspan="16"><?php echo $division['name']; ?></td>
                        <?php $firstDivision = false; ?>
                    <?php } ?>

                    <?php if($firstDistrict){ ?>
                        <td rowspan="4"><?php echo $district['name']; ?></td>
                        <?php $firstDistrict = false; ?>
                    <?php } ?>

                    <td><?php echo $upazila; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>