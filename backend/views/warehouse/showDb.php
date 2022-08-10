<!DOCTYPE html>
<html>

<head>
    <style>
    table,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>

    <p>Click the button to add a new row at the first position of the table and then add cells and content.</p>

    <table id="myTable">

        <tr>

        </tr>

    </table>
    <br>

    <button type="button" onclick="myFunction()">Try it</button>
    <input type="text" id="amountRow" name="amountRow" />
    <label for="">#row</label>
    <script>
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
        var rowCount = $('#myTable tr').length;

        const amountRow = document.getElementById('amountRow');

        console.log(rowCount + 'rows');
        console.log(amountRow.value);
        if (rowCount <= amountRow.value) {
            const index = amountRow.value - rowCount
            for (let j = 0; j <= index; j++) {
                var row = table.insertRow(-1, j);

                for (let i = 0; i < 16; i++) {
                    var cell1 = row.insertCell(i);

                    cell1.innerHTML = " <input  name=' " + someThing[i] + j + " ' value=''/>";

                }
            }
        }
        if (rowCount - 1 > amountRow.value) {

            const index = rowCount - amountRow.value
            if (index != rowCount)
                var row = table.deleteRow(-1, index);


        }
    }
    </script>

</body>

</html>