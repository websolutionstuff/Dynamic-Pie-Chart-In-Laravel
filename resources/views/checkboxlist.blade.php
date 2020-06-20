<!DOCTYPE html>
<html>
<head>
	<title>How to get selected checkbox value from checkboxlist in Jquery - websolutionstuff.com</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
    <div class="container" style="border:1px solid red; margin-top: 20px;">
        <h3 class="text-center">How to get selected checkbox value from checkboxlist in Jquery - websolutionstuff.com</h3>
        <div style="margin-left: 210px;">
        <input type="checkbox" id="id1" value="PHP"/> <label>PHP</label> <br>
        <input type="checkbox" id="id2" value="jQuery"/> <label>jQuery</label> <br>
        <input type="checkbox" id="id3" value="CSS"/> <label>CSS</label> <br>
        <input type="checkbox" id="id4" value="Bootstrap"/> <label>Bootstrap</label> <br>
        <input type="checkbox" id="id5" value="Laravel"/> <label>Laravel</label> <br><br>
        <input type="button" id="btn" value="Submit" class="btn btn-primary" style="margin-bottom: 20px;" />
        </div>
    </div>
</body>
<script type="text/javascript">
    $(function () {
        $("#btn").click(function () {
            var selected = new Array();
            $("input[type=checkbox]:checked").each(function () {
                selected.push(this.value);
            });
            if (selected.length > 0) {
                alert("Selected items: " + selected.join(","));
            }
        });
    });
</script>
</html>