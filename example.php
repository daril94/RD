

<style>
 body {
    background: #F36E5F;
}
h1 {
    text-align: center;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    color: #fff;
    font-size: 50px;
    margin-top: 80px;
    margin-bottom: 80px;
}
div.social-btn {
    display: block;
    width: 665px;
    margin: 0 auto;
    text-align: center;
}
div.social-btn a {
    text-decoration: none;
}
div.social-btn div {
    width: 130px;
    display: inline-block;
    float: left;
    height: 120px;
    line-height: 120px;
    color: #fff;
    margin-right: 3px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    font-size: 20px;
    text-shadow:0px 0px 5px #000;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    margin-bottom: 50px;
}
div.social-btn a:last-child div {
    margin-right: 0;
}
div.social-btn div:hover, div.social-btn div:active {
    height: 135px;
    padding-top: 15px;
}
i {
    -moz-transition: all 0.4s ease-out;
    -webkit-transition: all 0.4s ease-out;
    -o-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
}
div.face span, div.twi span, div.in span, div.pin span, div.git span{
    position: absolute;
    left: 0;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    width: 100px;
    padding: 0px 15px;
    opacity: 0;
    -moz-transition: all 0.6s ease-in;
    -o-transition: all 0.6s ease-in;
    -webkit-transition: all 0.6s ease-in;
    transition: all 0.6s ease-in;
    line-height: 110px;
    font-size: 20px;
}
div.social-btn div:hover i  {
    opacity: 0;
}
div.social-btn div:hover span {
    opacity: 1;
}
div.face {
    background: #3A5795;
    -moz-box-shadow: 0px 4px 0px #1e469d;
    -webkit-box-shadow: 0px 4px 0px #1e469d;
    box-shadow: 0px 4px 0px #3e6d8d;
    position: relative;
}

div.twi {
    background: #5EA9DD;
    -moz-box-shadow: 0px 4px 0px #186ba4;
    -webkit-box-shadow: 0px 4px 0px #186ba4;
    box-shadow: 0px 4px 0px #2b95df;
    position: relative;
}
div.in {
    background: #0177B5;
    -moz-box-shadow: 0px 4px 0px #035e8e;
    -webkit-box-shadow: 0px 4px 0px #035e8e;
    box-shadow: 0px 4px 0px #035e8e;
    position: relative;
}
div.pin {
    background: #D73532;
    -webkit-box-shadow: 0px 4px 0px #b51c19;
    -moz-box-shadow: 0px 4px 0px #b51c19;
    box-shadow: 0px 4px 0px #b51c19;
    position: relative;
}
div.git {
    background: #BBBBBB;
    -webkit-box-shadow: 0px 4px 0px #b51c19;
    -moz-box-shadow: 0px 4px 0px #b51c19;
    box-shadow: 0px 4px 0px #9a9a9a;
    position: relative;
}
div.git i {
    text-shadow: none;
}
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beauty Social BTN</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <h1>'FLAT' Beauty Social Buttons</h1>
    <div class="social-btn">
        <a href="https://facebook.com/anampartho" target="_blank"><div class="social face"><i class="fa fa-facebook fa-2x"></i><span>Facebook</span></div></a>
        <a href="#" target="_blank"><div class="social twi"><i class="fa fa-twitter fa-2x"></i><span>Twitter</span></div></a>
        <a href="#" target="_blank"><div class="social in"><i class="fa fa-linkedin  fa-2x"></i><span>Linked In</span></div></a>
        <a href="#" target="_blank"><div class="social pin"><i class="fa fa-pinterest-p fa-2x"></i><span>Pinterest</span></div></a>
        <a href="#" target="_blank"><div class="social git"><i class="fa fa-github fa-2x"></i><span>Github</span></div></a>
    </div>
</body>
</html>