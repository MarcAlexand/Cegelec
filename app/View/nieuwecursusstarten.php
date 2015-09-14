
<form method="post" name="form1" id="ticketform" action="#">    
    <h2>Nieuwe cursus starten</h2>
    <table class="formulier">
        <tr>
            <td>
                <select name="Cursus selecteren[]">
                    <option value="Cursus 1">Cursus 1</option>
                    <option value="Cursus 2">Cursus 2</option>
                    <option value="Cursus 3">Cursus 3</option>
                    <option value="Cursus 4">Cursus 4</option>
                    <option value="Cursus 5">Cursus 5</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
            </td>
        </tr>
    </table>
    <?php if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
</form>
