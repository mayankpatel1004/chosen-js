<html>
    <head>
        <link rel="stylesheet" href="jquery-ui.css">
        <script src="jquery-1.8.3.js"></script>
        <script src="jquery-ui.js"></script>
        <script src="chosen.jquery.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    </head>
    <body>
        <script type="text/javascript">
            $(function () {
                //$(".chzn-select").chosen();
            });
        </script>
        <select class="chzn-select" multiple="true" id="fac" name="faculty" style="width:200px;">
            <option value="all">All</option>
            <option value="AC">AAAA</option>
            <option value="AD">BBBB</option>
            <option value="AM">CCCC</option>
            <option value="AP">DDDD</option>
        </select>
    </body>
    <script type="text/javascript">
        $(".chzn-select").chosen().change(function () {
            if ($(this).val() == 'all') {
                $(".chosen-container-multi").addClass('chosen-container-active');
                $(".chosen-container-multi").addClass('chosen-with-drop');
                var opt = 0;
                $(".chosen-results li").each(function () {
                    var texts = $(this).text();
                    $(".chosen-choices").append("<li class='search-choice'><span>" + texts + "</span><a class='search-choice-close' data-option-array-index='" + opt + "'></a></li>");
                    $(this).addClass('result-selected');
                    $(this).removeClass('active-result');
                    opt++;
                });
                $(".chosen-container-multi").removeClass('chosen-container-active');
                $(".chosen-container-multi").removeClass('chosen-with-drop');
            }
        });
    </script>
</html>