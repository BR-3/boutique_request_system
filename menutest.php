<head>
<link rel="stylesheet" href="./css/slimmenu.min.css" type="text/css">

<script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
<ul id="navigation" class="slimmenu">
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Services</a>
        <ul>
            <li><a href="#">Service 1</a></li>
            <li><a href="#">Service 2</a></li>
            <li><a href="#">Service 3</a></li>
        </ul>
    </li>
    <li><a href="#">Contact</a></li>
</ul>

<script src="./js/jquery.slimmenu.min.js">
    $('.slimmenu').slimmenu(
{
    resizeWidth: '767', /* Navigation menu will be collapsed when document width is below this size or equal to it. */
    initiallyVisible: false, /* Make main navigation menu initially visible on mobile devices without the need to click on expand/collapse icon. */
    collapserTitle: 'Main Menu', /* Collapsed menu title. */
    animSpeed: 'medium', /* Speed of the sub menu expand and collapse animation. */
    easingEffect: null, /* Easing effect that will be used when expanding and collapsing menu and sub menus. */
    indentChildren: false, /* Indentation option for the responsive collapsed sub menus. If set to true, all sub menus will be indented with the value of the option below. */
    childrenIndenter: '&nbsp;' /* Responsive sub menus will be indented with this character according to their level. */
    expandIcon: '<i>&#9660;</i>', /* An icon to be displayed next to parent menu of collapsed sub menus. */
    collapseIcon: '<i>&#9650;</i>' /* An icon to be displayed next to parent menu of expanded sub menus. */
});
</script>
</body>