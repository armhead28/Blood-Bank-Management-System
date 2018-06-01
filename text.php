<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body><select id="combo" onclick="calcola()">
    <option>*</option>
    <option>/</option>
    <option>+</option>
    <option>-</option>
</select>
<script>
    function calcola() {
        var element = document.getElementById("combo");
        var op = element.options[element.selectedIndex].value;
        $ajax({
            type: "POST",
            dataType: 'json',
            url: 'text.php',
            data: ({
                combo: op
            })
            success: function(data) {
                console.log(data);
            }
        });
    }
</script>	
<?php
$src1 = $_POST['combo'];
echo json_encode($src1);
?>