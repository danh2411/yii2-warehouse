<?php
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
    <form method="post" action="/warehouse/insert">

        <div class="row">
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
                                <option value="Victory_Aicraft">Victory Aicraft</option>
                                <option value="Maria_Ozawa">Maria Ozawa</option>
                                <option value="Tokuda">Tokuda</option>

                            </select>
                            <?php if(isset($errors['container']))
                            {?>
                            <div class="px-2 text-danger">
                                <?php  foreach($errors['container'] as $error){echo $error;} ?>
                            </div>


                            <?php }?>

                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Container#:</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="container"
                                id="container" aria-describedby="inputGroup-sizing-sm">

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
                                id="receiving" aria-describedby="inputGroup-sizing-sm">
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
                            <select id="measuare" name="measuare">
                                <option value="US-Imperal">US-Imperal</option>
                                <option value="JP-Imperal">JP-Imperal</option>
                                <option value="VN-Imperal">VN-Imperal</option>
                                <option value="LA-Imperal">LA-Imperal</option>
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
                            <input type="datetime-local" class="form-control" aria-label="Sizing example input"
                                name="date" id="date" aria-describedby="inputGroup-sizing-sm">

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
                    <input type="button" value="Add" id="btn-add" onclick="myFunction()">
                    <input type="text" id="amountRow" name="amountRow" />
                    <label for="">#row</label>

                </div>
                <div id="row">
                    <input id="submit" type="submit" value="Submit" />
                    <input type="button" value="Cancel" id="cancel" />
                </div>
                <div id="row">
                    <a href="/warehouse/show">viewMysql</a>
                </div>
    </form>
    <!-- endsubmit -->
</div>
</div>


</div>
<script>
// const idsomeThing = [
//     'styleno',
//     'uom',
//     'prefix',
//     'sufix',
//     'height',
//     'width',
//     'lenght',
//     'weight',
//     'upc',
//     'size1',
//     'color1',
//     'size2',
//     'color2',
//     'szie3',
//     'color3',
//     'carton',

// ]
function myFunction() {
    const someThing = [
        'styno',
        'uom',
        'prefix',
        'sufix',
        'height',
        'width',
        'length',
        'wieght',
        'upc',
        'size1',
        'color1',
        'size2',
        'color2',
        'szie3',
        'color3',
        'carton',

    ]
    var table = document.getElementById("myTable")
    var rowCount = table.tBodies[0].rows.length;

    const amountRow = document.getElementById('amountRow');

    console.log(rowCount + 'rows');
    console.log(amountRow.value);
    if (rowCount <= amountRow.value) {
        const index = amountRow.value - rowCount

        for (let j = 0; j <= index; j++) {
            var row = table.insertRow(-1, j);

            for (let i = 0; i < 16; i++) {
                var cell1 = row.insertCell(i);

                cell1.innerHTML = " <input  name='" + someThing[i] + j + "' value=''/>";

            }
        }
    }
    if (rowCount - 1 > amountRow.value) {

        const index = rowCount - 1 - amountRow.value
        console.log(index);
        if (index != rowCount) {
            for (let i = 0; i < index; i++) {
                var row = table.deleteRow(-1);
            }
        }

    }
}
// buttoncancel
const buttonRemove = document.getElementById("cancel");
buttonRemove.onclick = function() {
    window.location.reload();

}
//


// const buttonSubmit = document.getElementById("submit");
// buttonSubmit.onclick = () => {
//     // const  vendor = document.getElementsByClassName("styleno").value
//     // let styleno = document.getElementsById("styleno0").value
//     // console.log(styleno);
//     // $.ajax({
//     //     type: "POST",
//     //     url: "/warehouse/insert", // nhập link của trang xử lí dữ liệu
//     //     data: "vendor=" + vendor + "&styleno=" + styleno,
//     //     success: function(data) {
//     //         setTimeout(function() {
//     //             $('.message_box').html(data);
//     //         }, delay);
//     //         location.reload();
//     //     }
//     // });

// };
</script>