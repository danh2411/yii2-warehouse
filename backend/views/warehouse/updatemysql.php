<?php

use Dotenv\Parser\Value;
use yii\helpers\Html;
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<div class="container">
    <form method="post" action="/warehouse/successmysql?id=<?php echo $query['id']; ?>" enctype="multipart>

        <div class=" row">
        <?php if(isset($mess)){ ?>
        <div class="alert alert-success" role="alert">
            <?= $mess ?>
        </div>

        <?php  }?>

        <div class="container">
            <div class="row">
                <div class="col ">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Vendor:</span>
                        <select id="vendor" name="vendor">
                            <?php if($query['vendor'] =='Victory Aicraft'){?>
                            <option value="Victory Aicraft">Victory Aicraft</option>
                            <option value="Maria Ozawa">Maria Ozawa</option>
                            <option value="Tokuda">Tokuda</option>
                            <?php }elseif($query['vendor'] =='Maria Ozawa'){?>
                            <option value="Maria Ozawa">Maria Ozawa</option>
                            <option value="Victory Aicraft">Victory Aicraft</option>

                            <option value="Tokuda">Tokuda</option>
                            <?php }else{?>
                            <option value="Tokuda">Tokuda</option>
                            <option value="Victory Aicraft">Victory Aicraft</option>
                            <option value="Maria Ozawa">Maria Ozawa</option>

                            <?php } ?>
                        </select>
                        <?php if(isset($errors['vendor']))
                            {?>
                        <div class="px-2 text-danger">
                            <?php  foreach($errors['vendor'] as $error){echo $error;} ?>
                        </div>


                        <?php }?>

                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Container#:</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="container"
                            id="container" aria-describedby="inputGroup-sizing-sm"
                            value="<?php echo $query['container']; ?>">

                        <?php if(isset($errors['container']))
                            {?>
                        <div class="px-2 text-danger">
                            <?php  foreach($errors['container'] as $error){echo $error;} ?>
                        </div>


                        <?php }?>

                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Receiving#:</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="receiving"
                            id="receiving" aria-describedby="inputGroup-sizing-sm"
                            value="<?php echo $query['container']; ?>">
                        <?php if(isset($errors['receiving']))
                            {?>
                        <div class="px-2 text-danger">
                            <?php  foreach($errors['receiving'] as $error){echo $error;} ?>
                        </div>

                        <?php }?>
                    </div>

                </div>
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">MeasurementSystem:</span>
                        <select id="measuare" name="measuare" value="">
                            <?php if($query['measuare'] =='US-Imperal'){?>
                            <option selected value="US-Imperal">US-Imperal</option>
                            <option value="JP-Imperal">JP-Imperal</option>
                            <option value="VN-Imperal">VN-Imperal</option>
                            <option value="LA-Imperal">LA-Imperal</option>
                            <?php }elseif($query['measuare'] =='JP-Imperal'){?>
                            <option selected value="JP-Imperal">JP-Imperal</option>
                            <option value="US-Imperal">US-Imperal</option>
                            <option value="VN-Imperal">VN-Imperal</option>
                            <option value="LA-Imperal">LA-Imperal</option>
                            <?php }elseif($query['measuare'] =='VN-Imperal') {?>
                            <option selected value="VN-Imperal">VN-Imperal</option>
                            <option value="US-Imperal">US-Imperal</option>
                            <option value="JP-Imperal">JP-Imperal</option>

                            <option value="LA-Imperal">LA-Imperal</option>
                            <?php }else{?>
                            <option selected value="LA-Imperal">LA-Imperal</option>
                            <option value="US-Imperal">US-Imperal</option>
                            <option value="JP-Imperal">JP-Imperal</option>
                            <option value="VN-Imperal">VN-Imperal</option>

                            <?php }?>
                        </select>
                        <?php if(isset($errors['measuare']))
                            {?>
                        <div class="px-2 text-danger">
                            <?php  foreach($errors['measuare'] as $error){echo $error;} ?>
                        </div>


                        <?php }?>

                    </div>

                </div>
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Date</span>
                        <input type="datetime-local" class="form-control" aria-label="Sizing example input" name="date"
                            id="date" aria-describedby="inputGroup-sizing-sm">

                    </div>
                    <?php if(isset($errors['date']))
                            {?>
                    <div class="px-2 text-danger">
                        <?php  foreach($errors['date'] as $error){echo $error;} ?>
                    </div>


                    <?php }?>
                </div>

            </div>
            <!-- table -->
            <div id="row">
                <div class="container-fluid">
                    <div class="box">
                        <div class="box-body">

                            <div class="card">


                                <div class="card-body p-0">
                                    <div id="w0" class="gridview table-responsive">
                                        <table id="myTable">

                                            <thead>

                                                <th class="text-red " scope="col ">STYLE NO</th>
                                                <th class="text-red" scope="col">UOM</th>
                                                <th class="text-red" scope="col">PREFIX</th>
                                                <th class="text-red" class="text-red" scope="col">SUFIX</th>
                                                <th class="text-red" scope="col">HEIGHT#</th>
                                                <th class="text-red" scope="col">WIDTH</th>
                                                <th class="text-red" scope="col">LENGTH</th>
                                                <th class="text-red" scope="col">WEIGHT</th>
                                                <th class="text-red" scope="col">UPC</th>
                                                <th class="text-red" scope="col">SIZE1</th>
                                                <th class="text-red" scope="col">COLOR1</th>
                                                <th scope="col">SIZE2</th>
                                                <th scope="col">COLOR2</th>
                                                <th scope="col">SIZE3</th>
                                                <th scope="col">COLOR3</th>
                                                <th class="text-red" scope="col">#CARTON</th>


                                            </thead>
                                            <tr>
                                                <td>
                                                    <input name='styno' value='<?php echo $query['styno']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='uom' value='<?php echo $query['uom']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='prefix' value='<?php echo $query['prefix']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='sufix' value='<?php echo $query['sufix']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='height' value='<?php echo $query['height']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='width' value='<?php echo $query['width']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='length' value='<?php echo $query['length']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='wieght' value='<?php echo $query['wieght'];  ?>' />
                                                </td>
                                                <td>
                                                    <input name='upc' value='<?php echo $query['upc']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='size1' value='<?php echo $query['size1']; ?>' />
                                                </td>
                                                <td>
                                                    <input name=' color1' value='<?php echo $query['color1'];  ?>' />
                                                </td>
                                                <td>
                                                    <input name='size2' value='<?php echo $query['size2']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='color2' value='<?php echo $query['color2']; ?>' />
                                                </td>
                                                <td>
                                                    <input name='size3' value='<?php echo $query['size3'];  ?>' />
                                                </td>
                                                <td>
                                                    <input name='color3' value='<?php echo $query['color3']; ?>' />
                                                </td>

                                                <td>
                                                    <input name='carton' value='<?php echo $query['carton']; ?>' />
                                                </td>

                                            </tr>
                                        </table>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!-- endtable -->
            <!-- submit -->

            <div id="row">
                <input id="submit" type="submit" value="Submit" />
                <input type="button" value="Cancel" id="cancel" />
            </div>
            <div id="row">
                <a href="/warehouse/show">viewMysql</a>
            </div>
            <div id="row">
                <a href="/warehouse/showredis">viewRedis</a>
            </div>
    </form>
    <!-- endsubmit -->
</div>
</div>


</div>
<script>
// buttoncancel
const buttonRemove = document.getElementById("cancel");
buttonRemove.onclick = function() {
    window.location.reload();

}
</script>