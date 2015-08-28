<?php
$rootPath = $Think.__ROOT__;
$adminPath = $Think.__ROOT__.'/'.$Think.MODULE_NAME;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>控制面板首页</title>
    <!--- Site CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/dist/semantic.min.css">
    <script src="<?php echo $rootPath; ?>/Public/Assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/dist/semantic.min.js"></script>
    <!--- Example CSS -->
    <style>
        body {
            padding: 1em;
        }
        .ui.menu {
            margin: 3em 0em;
        }
        .ui.menu:last-child {
            margin-bottom: 110px;
        }
    </style>

    <!--- Example Javascript -->
    <script>
        $(document)
                .ready(function() {
                    $('.ui.menu .ui.dropdown').dropdown({
                        on: 'hover'
                    });
                    $('.ui.menu a.item')
                            .on('click', function() {
                                $(this)
                                        .addClass('active')
                                        .siblings()
                                        .removeClass('active')
                                ;
                            })
                    ;
                })
        ;
    </script>
</head>
<body>
<?php include_once dirname(dirname(__file__))."/Public/header.php" ?>

<!-- Cards List -->
<div class="ui four cards">
    <div class="ui card">
        <div class="image">
            <div class="ui blurring inverted dimmer">
                <div class="content">
                    <div class="center">
                        <div class="ui teal button">Add Friend</div>
                    </div>
                </div>
            </div>
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="content">
            <div class="header">Title</div>
            <div class="meta">
                <a class="group">Meta</a>
            </div>
            <div class="description">One or two sentence description that may go to several lines</div>
        </div>
        <div class="extra content">
            <a class="right floated created">Arbitrary</a>
            <a class="friends">
                Arbitrary</a>
        </div>
    </div>
    <div class="ui card">
        <div class="blurring dimmable image">
            <div class="ui dimmer">
                <div class="content">
                    <div class="center">
                        <div class="ui inverted button">Call to Action</div>
                    </div>
                </div>
            </div>
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="content">
            <a class="header">Name</a>
            <div class="meta">
                <span class="date">Date</span>
            </div>
        </div>
        <div class="extra content">
            <a>
                <i class="users icon"></i>
                Users
            </a>
        </div>
    </div>
    <div class="ui card">
        <div class="ui slide right reveal image">
            <div class="visible content">
                <img class="ui fluid image" src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/avatar/nan.jpg">
            </div>
            <div class="hidden content">
                <img class="ui fluid image" src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/avatar/tom.jpg">
            </div>
        </div>
        <div class="content">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
        </div>
    </div>
    <div class="ui card">
        <div class="ui move reveal image">
            <div class="visible content">
                <img class="ui fluid image" src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/avatar/tom.jpg">
            </div>
            <div class="hidden content">
                <img class="ui fluid image" src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/avatar/nan.jpg">
            </div>
        </div>
        <div class="content">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
        </div>
    </div>
</div>
<div class="ui four cards">
    <div class="ui card">
        <div class="extra content">
      <span class="left floated like">
        <i class="like icon"></i>
        Like
      </span>
      <span class="right floated star">
        <i class="star icon"></i>
        Favorite
      </span>
        </div>
        <div class="content">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
        </div>
    </div>
    <div class="ui card">
        <div class="content">
            <div class="header">
                <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/square-image.png" class="ui avatar right spaced image">
                Abbreviated Header
            </div>
            <div class="description">
                <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
            </div>
        </div>
        <div class="ui two bottom attached buttons">
            <div class="ui button">
                Action 1
            </div>
            <div class="ui button">
                Action 2
            </div>
        </div>
    </div>
    <a href="#" class="ui card">
        <div class="content">
            <div class="header">Cute Dog</div>
            <div class="meta">
                <span class="category">Animals</span>
            </div>
            <div class="description">
                <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
            </div>
        </div>
        <div class="extra content">
            <div class="right floated author">
                <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/square-image.png" class="ui avatar image"> Username
            </div>
        </div>
    </a>
    <div class="ui card">
        <div class="ui two top attached basic buttons">
            <div class="ui button">
                Action 1
            </div>
            <div class="ui button">
                Action 2
            </div>
        </div>
        <div class="content">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
        </div>
        <div class="ui two bottom attached basic buttons">
            <div class="ui button">
                Action 3
            </div>
            <div class="ui button">
                Action 4
            </div>
        </div>
    </div>
</div>


<div class="ui four cards">
    <div class="card">
        <div class="content">
            Content 1
        </div>
        <div class="content">
            Content 2
        </div>
        <div class="content">
            Content 3
        </div>
        <div class="extra content">
            Extra Content
        </div>
    </div>
    <div class="card">
        <div class="content">
            Content 1
        </div>
        <div class="content">
            Content 2
        </div>
        <div class="content">
            Content 3
        </div>
        <div class="extra content">
            Extra Content
        </div>
    </div>
    <div class="card">
        <div class="content">
            Content 1
        </div>
        <div class="content">
            Content 2
        </div>
        <div class="content">
            Content 3
        </div>
        <div class="extra content">
            Extra Content
        </div>
    </div>
    <div class="card">
        <div class="content">
            Content 1
        </div>
        <div class="content">
            Content 2
        </div>
        <div class="content">
            Content 3
        </div>
        <div class="extra content">
            Extra Content
        </div>
    </div>
</div>

<div class="ui four cards">
    <div class="card">
        <div class="image">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="extra center aligned">
            <div data-rating="4" class="ui star rating"></div>
        </div>
    </div>
    <div class="card">
        <div class="image">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="extra center aligned">
            <div data-rating="2" class="ui star rating"></div>
        </div>
    </div>
    <div class="card">
        <div class="image">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="extra center aligned">
            <div data-rating="3" class="ui star rating"></div>
        </div>
    </div>
    <div class="card">
        <div class="image">
            <img src="<?php echo $rootPath; ?>/Public/Assets/libs/semantic/examples/assets/images/wireframe/image.png">
        </div>
        <div class="extra center aligned">
            <div data-rating="4" class="ui star rating"></div>
        </div>
    </div>
</div>


</body>
</html>