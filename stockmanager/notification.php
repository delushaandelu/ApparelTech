

<html>
<head>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
</head>
<body>

 <script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Send Email",
            width: 400,
            height: 400,
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
        });
    });
</script>
<input type="button" id="btnShow" value="Send Email" />
<div id="dialog" style="display: none" align = "center">
    <form method="post" action="?">
        <table width="350px" height="300px">
        <tr>
            <td>To:</td>
            <td><input type="text" name="name"/></td>
        </tr>
         <tr>
            <td>Subject:</td>
            <td><input type="text" name="subject"/></td>
        </tr>
        <tr>
            <td>Message:</td>
            <td><textarea name="message" placeholder="write here !" ></textarea></td>
        </tr>
            
        <tr>
            
            <td><input type="submit" value="Send"/></td>
        </tr>
            
        
        </table>
    </form>
</div>


</body>
</html>