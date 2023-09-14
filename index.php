<?php
    $site_name = "Seagulls Frankston";
    $kravein_url = "//www.kravein.com.au/place/seagulls-greek-taverna-frankston";
    $page = $_SERVER["REQUEST_URI"];
    $redirect_url = $kravein_url . $page;
?>
<html>
<head>
    <title><?php echo $site_name ?></title>
    <meta name="description" content="<?php echo $site_name ?>">
    <meta name="keywords" content="<?php echo $site_name ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0
        }

        .row-container {
            display: table;
            empty-cells: show;
            border-collapse: collapse;
            width: 100%;
            height: 100%;
        }

        .frame-row {
            display: table-row;
            height: 100%;
            overflow: hidden
        }

            .frame-row iframe {
                width: 100%;
                height: 100%;
                border: none;
                margin: 0;
                padding: 0;
                display: block;
            }
    </style>
</head>
<body data-new-gr-c-s-check-loaded="14.1121.0" data-gr-ext-installed="">
    <div class="row-container">
        <div class="frame-row">
            <iframe src="<?php echo $redirect_url ?>" noresize="" frameborder="0">
                <noframes>
                    <div style='display:flex; position:absolute; top:0; bottom:0; right:0; left:0;'>
                        <div style='margin:auto;'>Sorry! Your browser does not support frames.</div>
                    </div>
                </noframes>
            </iframe>
        </div>
    </div>
</body>
</html>