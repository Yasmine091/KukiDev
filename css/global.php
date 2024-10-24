<?php
    header("Content-type: text/css; charset: UTF-8");
    require ('../core/config.php');
?>

/* Esto es para añadir fuentes descargadas :)
@font-face {
    font-family: 'Nombre';
    src: url('carpeta/archivo.eot');
    src: url('carpeta/archivo.ttf');
    src: url('carpeta/archivo.woff');
    src: url('carpeta/archivo.svg');
}
*/

body {
    font-family: bahnschrift !important;
    background-color: #303030 !important;
    /*background-image: url(https://wallpaperplay.com/walls/full/8/e/2/121471.jpg);
    background-attachment: fixed;
    background-size: cover;*/
}

a {
    text-decoration: none;
    color: inherit;
}

#header-bg {
    border: 2px solid <?php echo $wbcnf['lay-color'] ?>;/* original color #69efaf */
    background-image: url(<?php echo $wbcnf['header-bg'] ?>); /* original bg https://wallpaperplay.com/walls/full/f/0/5/121414.jpg */
    height: 250px;
    width: auto;
    background-position: center;
    background-size: cover;
    background-clip: border-box;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-style: none;
    text-align: center;
    color: #fff;
    font-size: xx-large;
    line-height: 250px;
    /*max-width: 1080px;
    width: auto;*/
}

#navbar {
    background-color: <?php echo $wbcnf['lay-color'] ?>;
    border: 2px solid <?php echo $wbcnf['lay-color'] ?>;;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    /*max-width: 1080px;
    width: auto;*/
    margin-bottom: 50px !important;
    margin: auto;
    box-shadow: 0px 5px 0px 0px #ffffff7a inset;
    /*! line-height: 15px; */
}

#menu {

}

#menu li {
    list-style-type: none;
    display: inline-block;
    padding: 0px 10px 0px 10px;
}

#menu li:hover {
    color: #000000c0;
    display: inline-block;
}

#body {
    
    max-width: 1080px;
    display: flex;
    margin: auto;
}

#sec-def {
    width: 66%;
    margin-right: 8px;
}

.art-news {
    width: auto;
    height: 150px;
    border: 2px solid #e4e4e4;
    border-radius: 5px;
    background-color: #e4e4e4;
    border-left: 0px;
}

.art-img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    float: left;
    border: 2px solid #e4e4e4;
    margin-top: -2px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    margin-right: 5px;
}

.art-title {
    display: block;
    background-color: #2424244a;
    width: auto;
    height: 25px;
    padding-top: 5px;
}
.art-content {
    display: block;
    height: 60px;
    width: auto;
    margin-top: 10px;
    overflow: hidden;
}
.art-meta {
    display: inline-block;
    width: auto;
    background-color: #2424244a;
    border-radius: 5px;
    padding: 5px;
    font-size: small;
}

#aside-def {
    width: 33%;
    margin-left: 8px;
    font-size: small;
}

#box-title {
    text-align: center;
    background-color: <?php echo $wbcnf['lay-color'] ?>;
    box-shadow: 0px 5px 0px 0px #ffffff7a inset;
}

.box-content {
    width: auto;
    padding: 10px;
    height: auto;
    border: 2px solid #e4e4e4;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    background-color: #e4e4e4;
}

#footer-def {
    text-align: center;
    background-color: <?php echo $wbcnf['lay-color'] ?>;
    height: 50px;
    border-top: solid 2px <?php echo $wbcnf['lay-color'] ?>;
    box-shadow: 0px 5px 0px 0px #ffffff7a inset;
    line-height: 50px;
    bottom: 0;
    margin-top: 10%;
}

.title-def {
    text-align: center;
    background-color: <?php echo $wbcnf['lay-color'] ?>;
    width: auto;
    border-top: solid 2px <?php echo $wbcnf['lay-color'] ?>;
    box-shadow: 0px 5px 0px 2px #ffffff7a inset;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    padding: 10px;
}

.content-def {
    width: auto;
    padding: 10px;
    height: auto;
    border: 2px solid #e4e4e4;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    background-color: #e4e4e4;
}

/*input[type=text],[type=password] {
    border: 0px solid #fff0;
    border-radius: 5px;
    padding: 5px 0px 5px 0px;
    width: 100%;
    font-family: inherit;
    color: #0000008f;
    margin-left: -2px;
    border-left: 2px solid #fff0;
}*/

/* css pa botones
input[type=submit],[type=button] {
    border: 2px solid #7affaed9;
    border-radius: 5px;
    padding: 5px;
    width: auto;
     font-family: inherit;
    margin: auto;
    background-color: #7affaed9;
}
*/

/*input.login-box {
    border: 2px solid #7affaed9;
    border-radius: 5px;
    padding: 5px;
    width: 100%;
    font-family: inherit;
    margin: auto;
    background-color: #7affaed9;
}*/

.success-warns {
    color: #fff;
    background-color: #00ff0a63;
    border-radius: 5px;
    border: solid 2px #fff0;
    width: auto;
    display: block;
    padding-top: 2px;
    padding-bottom: 2px;
    font-weight: bold;
}

.danger-warns {
    color: #fff;
    background-color: #ff000040;
    border-radius: 5px;
    border: solid 2px #fff0;
    width: auto;
    display: block;
    padding-top: 2px;
    padding-bottom: 2px;
    font-weight: bold;
}