<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->title; ?></title>
    <link rel="stylesheet" type="text/css"
          href="http://php.net/cached.php?t=1421837618&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">

    <style>
        .main_div {
            padding-left: 10%
        }

        .footer, .header {
            text-align: center;
        }

        .table_header {
            text-align: right;
            width: 20%;
            font-weight: bold;
            padding-right: 20px;
        }

        .table_value {
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #00f;
        }
        
        .main_link {
            font-weight: bold;
        }

        .empty_value {
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="main_div">

    <h2 class="header">Компанія</h2>
    <hr/>
    <a class='main_link' href="/" title="Повернутись на головну">Головна</a>
    <hr/>
    <br/>
    <div class="content">
        <!-- require file with content information -->
        <?php require_once $contentPage; ?>
    </div>
    <footer class="footer">
        Компанія &copy; 2017
    </footer>
</div>
</body>
</html>