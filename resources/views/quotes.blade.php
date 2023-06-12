<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JrWeb | Random Anime Quotes</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
</head>
<body id="top">
<div class="site-wrapper" style="background: url(../img/{{$bgImg}}) no-repeat center center fixed;">
    <div class="site-wrapper-inner" style="background: rgba(36, 36, 49, 0.09)!important;">
        <div class="cover-container text-left">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Anime Quotes</h3>
                    <nav class="nav nav-masthead">
                        <a class="nav-link nav-social" href="#" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="#" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="#" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="#" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 mb-5 mt-5 text-center d-inline-block d-lg-none">
                        <img class="img-fluid" width="250px" src={{$img}}>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-left">
                        <div class="inner cover">
                            <h1 class="cover-heading">{{$anime}}</h1>
                            <p class="lead cover-copy">{{$quotes}}</p>
                            <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" onclick="window.location.reload();" >Refresh</button></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center d-none d-lg-inline-block">
                        <img class="img-fluid" width="370px" src={{$img}}>
                    </div>
                </div>
            </div>
            <div class="mastfoot">
                <div class="inner">
                    <p>&copy; By: <a href="https://github.com/Jrhero14" target="_blank">Jeremi Herodian Abednigo</a>.</p>
                </div>
            </div>
            <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="subscribeModalLabel">Get Notified on Launch:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Enter you e-mail to get notified when we launch</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/main.js?ver=1.2.0"></script>
</body>
</html>
