
</div>
</div>
</div>

<style>
    /* make sidebar nav vertical */
    @media (min-width: 768px){
        .affix-content .container {
            width: 700px;
        }

        html,body{
            background-color: #f8f8f8;
            height: 100%;
            overflow: hidden;
        }
        .affix-content .container .page-header{
            margin-top: 0;
        }
        .sidebar-nav{
            position:fixed;
            width:100%;
        }
        .affix-sidebar{
            padding-right:0;
            font-size:small;
            padding-left: 0;
        }
        .affix-row, .affix-container, .affix-content{
            height: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .affix-content{
            background-color:white;
        }
        .sidebar-nav .navbar .navbar-collapse {
            padding: 0;
            max-height: none;
        }
        .sidebar-nav .navbar{
            border-radius:0;
            margin-bottom:0;
            border:0;
        }
        .sidebar-nav .navbar ul {
            float: none;
            display: block;
        }
        .sidebar-nav .navbar li {
            float: none;
            display: block;
        }
        .sidebar-nav .navbar li a {
            padding-top: 12px;
            padding-bottom: 12px;
        }
    }

    @media (min-width: 769px){
        .affix-content .container {
            width: 600px;
        }
        .affix-content .container .page-header{
            margin-top: 0;
        }
    }

    @media (min-width: 992px){
        .affix-content .container {
            width: 900px;
        }
        .affix-content .container .page-header{
            margin-top: 0;
        }
    }

    @media (min-width: 1220px){
        .affix-row{
            overflow: hidden;
        }

        .affix-content{
            overflow: auto;
        }

        .affix-content .container {
            width: 1000px;
        }

        .affix-content .container .page-header{
            margin-top: 0;
        }
        .affix-content{
            padding-right: 30px;
            padding-left: 30px;
        }
        .affix-title{
            border-bottom: 1px solid #ecf0f1;
            padding-bottom:10px;
        }
        .navbar-nav {
            margin: 0;
        }
        .navbar-collapse{
            padding: 0;
        }
        .sidebar-nav .navbar li a:hover {
            background-color: #428bca;
            color: white;
        }
        .sidebar-nav .navbar li a > .caret {
            margin-top: 8px;
        }
    }


</style>