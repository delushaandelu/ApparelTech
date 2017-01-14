<html>
<head>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js">  
        </script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        
        <script type="text/javascript" src="jquery.js"></script> 
    
</head>
    
<body>
     <input type="button" id="btnShow" value="Send Email" />
</tfoot>  
  
</table>  
</form> 
       
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
 <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>  
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </script>
            <script type="text/javascript">
                $(function () {
                    $("#dialog").dialog({
                        modal: true,
                        autoOpen: false,
                        title: "Send Email",
                        display: "block",
                        width: 400,
                        height: 400,
                    });
                    $("#btnShow").click(function () {
                        $('#dialog').dialog('open');
                    });
                });
            </script>
</body>

</html>