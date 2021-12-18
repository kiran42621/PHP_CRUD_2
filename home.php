<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function doThis(){
            var p1 = Number(document.getElementById("p1").value);
            var p2 = Number(document.getElementById("p2").value);
            var p3 = Number(document.getElementById("p3").value);

            var total = p1 + p2 + p3;

            p1_width = Math.round((p1 / total) * 100);
            p2_width = Math.round((p2 / total) * 100);
            p3_width = Math.round((p3 / total) * 100);

            var p_array = [p1_width, p2_width, p3_width];
            p_array.sort();

            console.log(p_array[0]);

            document.getElementById("p1_div").style.width = p_array[0]+"%";
            document.getElementById("p2_div").style.width = p_array[1]+"%";
            document.getElementById("p3_div").style.width = p_array[2]+"%";

            console.log(p1_width+" "+p2_width+" "+p3_width);
        }
    </script>
</head>
<body>
    <input type="number" name="" id="p1">
    <input type="number" name="" id="p2">
    <input type="number" name="" id="p3">
    <input type="button" value="Click" onclick="doThis()">

    <div style="width:75rem;height: 50px;">
        <div style="width:25rem;background-color: blue;float: left;" id="p1_div">---</div>
        <div style="width:25rem;background-color: green;float: left;" id="p2_div">---</div>
        <div style="width:25rem;background-color: yellow;float: left;" id="p3_div">---</div>
    </div>

</body>
</html>