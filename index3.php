<html>
    <head>
        <link rel="stylesheet" href="jquery-ui.css">
        <script src="jquery-1.8.3.js"></script>
        <script src="jquery-ui.js"></script>
        <script src="chosen.jquery.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    </head>
    <body>
        <div class="wrapper">
            <select multiple>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <button type="button" class="chosen-toggle select">Select all</button>
            <button type="button" class="chosen-toggle deselect">Deselect all</button>
        </div>
        <div class="wrapper">
            <select id="second" name="ranktypeselect[]" multiple="multiple" size="5">
                <optgroup label="OFF">
                    <option>QB</option>
                    <option>RB</option>
                    <option>WR</option>
                    <option>TE</option>
                    <option>OL</option>
                </optgroup>
                <optgroup label="IDP">
                    <option>NT</option>
                    <option>DT</option>
                    <option>DE</option>
                    <option>DL</option>
                    <option>DB</option>
                    <option>LB</option>
                    <option>SF</option>
                    <option>CB</option>
                </optgroup>
                <optgroup label="ETC">
                    <option>K</option>
                    <option>P</option>
                    <option>LS</option>
                    <option>D/ST</option>
                </optgroup>
            </select>

            <button type="button" class="chosen-toggle select">Select all</button>
            <button type="button" class="chosen-toggle deselect">Deselect all</button>
        </div>
    </body>
    <script type="text/javascript">
        $('select').chosen({width: "300px"});

        $('.chosen-toggle').each(function (index) {
            $(this).on('click', function () {
                alert($(this).parent().find('option').text());
                $(this).parent().find('option').prop('selected', $(this).hasClass('select')).parent().trigger('chosen:updated');
            });
        });
    </script>
</html>