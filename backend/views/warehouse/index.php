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
    <form action="/warehouse/insert" method="post" enctype="multipart/form-data">

        <div class="row">
            <?php if(isset($mess)){ ?>
            <div class="alert alert-success" role="alert">
                <?= $mess ?>
            </div>

            <?php  }?>
            <?php if(isset($errors)){ ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach($errors as $key=>$error) {echo $error[0];echo "</br>";} ?>
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

                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Container#:</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="container"
                                id="container" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Receiving#:</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="receiving"
                                id="receiving" aria-describedby="inputGroup-sizing-sm">
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
                        </div>

                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Date</span>
                            <input type="datetime-local" class="form-control" aria-label="Sizing example input"
                                name="date" id="date" aria-describedby="inputGroup-sizing-sm">
                        </div>

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
                                            <table class=" table-bordered" id="mytable">

                                                <thead>
                                                    <tr>
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

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(isset($var)){
                                                        foreach($var as $key => $value){?>
                                                    <tr>
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

                                                    </tr>
                                                    <?php } }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- endtable -->
                <!-- submit -->
                <div id="row">
                    <input type="button" value="Add" id="btn-add">
                    <input type="text" id="amountRow" name="amountRow" />
                    <label for="">#row</label>

                </div>
                <div id="row">
                    <input id="submit" type="submit" value="Submit" />
                    <input type="button" value="Cancel" id="cancel" />
                </div>
                <div id="row">
                    <a href="">Main Menu</a>
                </div>
    </form>
    <!-- endsubmit -->
</div>
</div>


</div>
<script>
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
const buttonAdd = document.getElementById('btn-add');
buttonAdd.onclick = () => {
    const amountRow = document.getElementById('amountRow');
    let tableRef = document.getElementById("mytable");
    for (let i = 0; i < amountRow.value; i++) {
        const tr = document.createElement('tr');

        for (let index = 0; index < 16; index++) {
            const td = document.createElement('td');
            const input = document.createElement('input')
            input.setAttribute('name', someThing[index]);
            // input.setAttribute('id', someThing[index] + [i]);
            td.appendChild(input)
            tr.appendChild(td)
        }
        tableRef.appendChild(tr)
        tableRef.insertRow(-1)
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
//     e.preventDefault();
//     // const  vendor = document.getElementsByClassName("styleno").value
//     let styleno = document.getElementsById("styleno0").value
//     console.log(styleno);
//     $.ajax({
//         type: "POST",
//         url: "/warehouse/insert", // nhập link của trang xử lí dữ liệu
//         data: "vendor=" + vendor + "&styleno=" + styleno,
//         success: function(data) {
//             setTimeout(function() {
//                 $('.message_box').html(data);
//             }, delay);
//             location.reload();
//         }
//     });

// };
</script>