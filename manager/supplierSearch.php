<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" /> -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/jquery/jquery.js"></script>
</head>

<body>

    <div class="container">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Search</span>
                <input type="text" name="searchText" id="searchText" placeholder="search by name" class="form-control"/>
            </div>
        </div>
        <br />
        <div id="result"></div>
    </div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>
</html>
<script>
    $(document).ready(function () {
        $('#searchText').keyup(function () {
            var txt = $(this).val();
            if(txt != ''){

            }
            else{
                $('#result').html('');
                $.ajax({
                    url:"manager/fetch.php",
                    method:"post",
                    data: {search:txt},
                    dataType:"text",
                    success:function (data) {
                        $('#result').html(data);
                    }
                });
            }

        });

    });
</script>