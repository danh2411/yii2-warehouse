<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Vendor</th>
            <th scope="col">Container</th>
            <th scope="col">Receiving</th>
            <th scope="col">MeasurementSystem</th>
            <th scope="col">STYLE NO</th>
            <th scope="col">UOM</th>
            <th scope="col">PREFIX</th>
            <th scope="col">SUFIX</th>
            <th scope="col">HEIGHT#</th>
            <th scope="col">WIDTH</th>
            <th scope="col">LEANGTH</th>
            <th scope="col">WEIGHT</th>
            <th scope="col">UPC</th>
            <th scope="col">SZIE1</th>
            <th scope="col">COLOR1</th>
            <th scope="col">SIZE2</th>
            <th scope="col">COLOR2</th>
            <th scope="col">SIZE3</th>
            <th scope="col">COLOR3</th>
            <th scope="col">#CARTON</th>
            <th scope="col">DATE</th>

        </tr>
    </thead>
    <tbody>

        <?php   ?>

        <tr>
            <th scope="row"> <?= $value['vendor'] ?></th>
            <th scope="row"> <?= $value['container'] ?></th>
            <th scope="row"> <?= $value['receiving'] ?></th>
            <th scope="row"> <?= $value['measuare'] ?></th>
            <th scope="row"> <?= $value['styno'] ?></th>
            <th scope="row"> <?= $value['uom'] ?></th>
            <th scope="row"> <?= $value['prefix'] ?></th>
            <th scope="row"> <?= $value['sufix'] ?></th>
            <th scope="row"> <?= $value['height'] ?></th>
            <th scope="row"> <?= $value['width'] ?></th>
            <th scope="row"> <?= $value['length'] ?></th>
            <th scope="row"> <?= $value['wieght'] ?></th>
            <th scope="row"> <?= $value['upc'] ?></th>
            <th scope="row"> <?= $value['size1'] ?></th>
            <th scope="row"> <?= $value['color1'] ?></th>
            <th scope="row"> <?= $value['size2'] ?></th>
            <th scope="row"> <?= $value['color2'] ?></th>
            <th scope="row"> <?= $value['size3'] ?></th>
            <th scope="row"> <?= $value['color3'] ?></th>
            <th scope="row"> <?= $value['carton'] ?></th>
            <th scope="row"> <?= $value['date'] ?></th>
        </tr>
        <?php ?>

    </tbody>
</table>