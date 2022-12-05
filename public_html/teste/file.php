<head>

</head>
<script>
$('select').each(function () {

    // Cache the number of options
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;

    // Hides the select element
    $this.addClass('s-hidden');

    // Wrap the select element in a div
    $this.wrap('<div class="select"></div>');

    // Insert a styled div to sit over the top of the hidden select element
    $this.after('<div class="styledSelect"></div>');

    // Cache the styled div
    var $styledSelect = $this.next('div.styledSelect');

    // Show the first select option in the styled div
    $styledSelect.text($this.children('option').eq(0).text());

    // Insert an unordered list after the styled div and also cache the list
    var $list = $('<ul />', {
        'class': 'options'
    }).insertAfter($styledSelect);

    // Insert a list item into the unordered list for each select option
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    // Cache the list items
    var $listItems = $list.children('li');

    // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
    $styledSelect.click(function (e) {
        e.stopPropagation();
        $('div.styledSelect.active').each(function () {
            $(this).removeClass('active').next('ul.options').hide();
        });
        $(this).toggleClass('active').next('ul.options').toggle();
    });

    // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
    // Updates the select element to have the value of the equivalent option
    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        /* alert($this.val()); Uncomment this for demonstration! */
    });

    // Hides the unordered list when clicking outside of it
    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
</script>
<style>
.s-hidden {
    visibility:hidden;
    padding-right:10px;
}
.select {
    cursor:pointer;
    display:inline-block;
    position:relative;
    font:normal 11px/22px Arial, Sans-Serif;
    color:black;
    border:1px solid #ccc;
}
.styledSelect {
    position:absolute;
    top:0;
    right:0;
    bottom:0;
    left:0;
    background-color:white;
    padding:0 10px;
    font-weight:bold;
}
.styledSelect:after {
    content:"";
    width:0;
    height:0;
    border:5px solid transparent;
    border-color:black transparent transparent transparent;
    position:absolute;
    top:9px;
    right:6px;
}
.styledSelect:active, .styledSelect.active {
    background-color:#eee;
}
.options {
    display:none;
    position:absolute;
    top:100%;
    right:0;
    left:0;
    z-index:999;
    margin:0 0;
    padding:0 0;
    list-style:none;
    border:1px solid #ccc;
    background-color:white;
    -webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
    -moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
}
.options li {
    padding:0 6px;
    margin:0 0;
    padding:0 10px;
}
.options li:hover {
    background-color:#39f;
    color:white;
}
</style>

<select id="selectbox1">
    <option value="">Select an option&hellip;</option>
    <option value="aye">Aye</option>
    <option value="eh">Eh</option>
    <option value="ooh">Ooh</option>
    <option value="whoop">Whoop</option>
</select>
<select id="selectbox2">
    <option value="">Month&hellip;</option>
    <option value="january">January</option>
    <option value="february">February</option>
    <option value="march">March</option>
    <option value="april">April</option>
    <option value="may">May</option>
    <option value="june">June</option>
    <option value="july">July</option>
    <option value="august">August</option>
    <option value="september">September</option>
    <option value="october">October</option>
    <option value="november">November</option>
    <option value="december">December</option>
</select>