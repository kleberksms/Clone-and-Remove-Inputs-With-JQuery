<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add And Remove Element JQuery</title>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="span12 ">
                <div class="row">
                    <h3>Clone and Remove Inputs With JQuery</h3>
                    <form action="" method="post" accept-charset="utf-8">
                        <div id="divInputElement">
                            <p>
                                <label for="inputElement">Text: </label>
                                <input name="data[Customer][email][]" type="text" id="inputElement" required="required"/>
                            </p>
                        </div>
                        <div class="add">
                            <img src="img/plus.png" style="cursor: pointer;" title="Add" alt="" /> 
                        </div>
                        <div class="remove">
                            <img src="img/minus.png" style="cursor: pointer;" title="Remove" alt="" /> 
                        </div>
                        <div class="submit">
                            <p><input type="submit" value="Send"/></p>
                        </div>
                        <br/>
                    </form>
                </div>                           
            </div>
        </div>
        <style>
            .add{
                position: relative;
                top: -44px;
                left: 210px;
                width: 33px;
                display: inline-block;
            }
            .remove{
                position: relative;
                top: -44px;
                left: 220px;
                width: 33px;
                display: inline-block;
            }
        </style>
        <script>
            var i = 0;
            jQuery('.remove').hide();
            conteudo = jQuery("#divInputElement").html();
            jQuery(".add").click(function() {
                jQuery("#divInputElement").append(conteudo);
                i++;
                jQuery('.remove').show();
                return false;
            });

            jQuery('.remove').click(function() {
                jQuery('#inputElement:last').prev().prev().remove();
                jQuery('#inputElement:last').prev().remove();
                jQuery('#inputElement:last').remove();
                --i;
                if (i == 0) {
                    jQuery('.remove').hide();
                }
            });
        </script>
    </body>
</html>
