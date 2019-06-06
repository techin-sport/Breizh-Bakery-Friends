<?php
header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');


if($_GET['main']){
    ?>
    @font-face {
    font-family: 'Ink Free Regular';
    font-style: normal;
    font-weight: normal;
    src: local('Ink Free Regular'), url('./fonts/Inkfree.woff') format('woff');
}
@media (max-width: 1200px) {
    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a {
        color: #acc4ff!important
    }
}
p {
    font-size: 1.2em
}
/*
*   ESSENTIEL
*/

html {
    scroll-behavior: smooth;
}
.shadow-1 {
    -webkit-box-shadow: 0px 0px 32px -14px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 32px -14px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 32px -14px rgba(0,0,0,0.75);
}
.shadow-2 {
    -webkit-box-shadow: 5px 5px 5px -2px rgba(168,168,168,1);
    -moz-box-shadow: 5px 5px 5px -2px rgba(168,168,168,1);
    box-shadow: 5px 5px 5px -2px rgba(168,168,168,1);
}
.shadow-inset-1 {
    -webkit-box-shadow: inset 0px 0px 32px -14px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 0px 32px -14px rgba(0,0,0,0.75);
    box-shadow: inset 0px 0px 32px -14px rgba(0,0,0,0.75);
}
.rond-min {
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
}
.rond-1 {
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}
.rond-2 {
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
}
.cercle {
    border-radius: 2000px;
    -moz-border-radius: 2000px;
    -webkit-border-radius: 2000px;
}
.mt-6 {
    margin-top: 5.5rem!important
}
.mb-6 {
    margin-bottom: 5.5rem!important
}
.space-nowrap {
    white-space: nowrap;
}
.margin-auto {
    margin: auto
}

/*
* BOX
*/

.box-column {
    display: flex;
    flex-direction: column;
}
.box-column .item {
    width: 100%;
    border: 1px #d4d4d4 solid;
    display: flex;
    padding: 20px 10px 20px 10px;
    box-sizing:border-box;
    margin-top: 30px;
    color: #2c2d8e
}
.box-column .item p {
    margin-block-start: 0em;
    margin-block-end: 0em;
}
.box-column .item h1 {
    margin-block-start: 0em;
    margin-block-end: 0em;
}
.box-column .item .left {
    width: 90%;
}
.box-column .item .left p {
    font-size: 1.5vw
}
.box-column .item .right {
    width: 10%;
    font-size: 3vw;
    display: flex
}
.box-column .item .right {
    margin: auto
}

/*
*   SECTION BUTTON
*/
.button-2 {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    background-color: #193166
}
.button-2 div {
    width: 20%;
    background-color: #FFF;
    text-align: center;
}
.button-2 div a {
    color: #193166;
    text-decoration: none;
    font-size: 20px
}
.button-2 div:last-child {
    margin-left: 15%;
}
@media (max-width: 1200px) {
    .button-2 div {
        width: 50%
    }
    .titre {
        font-size: 45px;
        text-transform: uppercase;
    }
}

#header.full-header {
	border-bottom-color: #001d55;
    background-color: #193166;
    color: #FFF
}
#primary-menu ul li > a {
	color: #FFF;
}
#header.sticky-header #header-wrap {
	background-color: #193166;
}
.col_one_third.yl-w-100 {
    width: 100%
}
.couleur-du-site {
    color: #193166
}
.bg-couleur-du-site {
    background-color: #193166;
    border: 1px #001e55 solid
}
.bg-couleur-du-site:hover {
    background-color: #001e55;
    border: 1px #001e55 solid
}
.bg-couleur-du-site-important {
    background-color: #001e55!important;
    border: 1px #001e55 solid!important
}
.titre {
    font-size: 64px;
    text-align: center;
    margin-bottom: 60px;
    margin-top: 0px;
    text-transform: none;
    letter-spacing: -1px!important;
}
.feature-box h3 {
    font-size: 18px
}
p.sous-titre {
    text-align: center;
    font-size: 1.3em;
    margin-bottom: 65px
}
@media (max-width: 1200px) {
    .titre {
        font-size: 45px;
        margin-top: 0
    }
}
.feature-box .fbox-icon i,
.feature-box .fbox-icon svg {
	border-radius: 50%;
    background-color: #193166;
    height: 64px;
    width: 64px;
    fill: #FFF;
    padding: 10px
}
.faire-confiance {
    margin-top: 120px;
    margin-bottom: 70px
}
.faire-confiance .col_one_fourth, .postcontent {
    width: 44%;
}
.faire-confiance .col_one_fourth .text-center {
    width: 63%;
}
.faire-confiance .col_three_fourth, .postcontent {
    width: 44%;
}
.faire-confiance h5 {
    font-size: 1.6em;
    margin-top: 20px
}
.faire-confiance ul {
    list-style-type: circle;
    font-size: 1.3em;
    margin-left: 20px
}
.faire-confiance a {
    color: #193166;
    text-decoration: underline!important;
    font-size: 1.3em;
    bottom: 0;
    position: absolute;
}
.faire-confiance .block {
    height: 400px;
}
@media (max-width: 1200px) {
    .faire-confiance .col_one_fourth {
        width: 100%;
    }
    .faire-confiance .col_three_fourth {
        width: 100%;
        padding-top: 150px;
        margin-bottom: 330px!important
    }
    .faire-confiance .text-center {
        width: 100%!important;
    }
    .faire-confiance a {
        position: relative;
    }
}
.separation-classic {
    background-color: #193166;
    padding: 80px 0px;
    width: 100%
}
.separation-classic h2 {
    color: #FFF;
    font-size: 64px;
    letter-spacing: -2px;
    font-weight: 400;
    margin-block-start: 0em;
    margin-block-end: 0em;
    margin-bottom: 80px;
    line-height: 1
}
.separation-classic .flex {
    justify-content: space-between;
}
.separation-classic .block {
    background-color: #FFF;
    padding: 20px 30px;
    height: 200px;
    width: 250px;
}
.separation-classic .block p {
    font-size: 1.32em;
    font-weight: bold
}
.separation-classic .block .en-savoir-plus {
    position: absolute;
    bottom: 30px;
    width: 250px;
    text-align: center;
    margin-left: -30px;
}
.separation-classic .block .en-savoir-plus a {
    color: #FFF;
    padding: 5px 10px;
    font-size: 1.4em;
    background-color: #193166;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
}
@media (max-width: 1200px) {
    .separation-classic .block {
        width: 100%;
        margin-bottom: 10vh
    }
    .separation-classic .block .en-savoir-plus {
        position: relative;
        bottom: 0;
        text-align: center;
        width: 100%;
        margin-left: 0
    }
    .separation-classic h2 {
        font-size: 40px
    }
}
#temoignages {
    padding: 80px 0;
}
@media (max-width: 1200px) {
    #temoignages .owl-stage {
        margin-left: -35px
    }
}
#temoignages .oc-item img {
    height: 88px;
    width: 88px;
    margin-left: auto;
    margin-right: auto
}
#temoignages .oc-item .t-item-content .t-avatar {
	height: 44px;
	width: 300px
}
#temoignages .oc-item .t-item-content {
    background-color: #193166;
    margin-left: auto;
    margin-right: auto;
	padding-bottom: 30px;
    height: 450px;
    width: 300px
}
#temoignages .oc-item .t-item-content .c-p {
	display: flex;
	height: 60%;
	padding: 30px;
	box-sizing:border-box;
}
#temoignages .oc-item {
    min-width: 386.667px;
    box-sizing:border-box;
	text-align: center;
	width: 100%;
}
#temoignages #t-btnPrecedent {
	height: 100%
}
#temoignages #t-btnPrecedent i {
	font-size: 3em;
	color: #376da3;
	line-height: 327px;
}
#temoignages #t-btnSuivant {
	height: 100%
}
#temoignages #t-btnSuivant i {
	font-size: 3em;
	color: #376da3;
	line-height: 327px
}
#temoignages .oc-item img {
	margin-bottom: -44px;
	-webkit-box-shadow: 0px 0px 50px -30px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 50px -30px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 50px -30px rgba(0,0,0,0.75);

}
#temoignages .oc-item strong {
	display: block;
	text-align: center;
	margin-top: 10px;
	font-size: 1.2em;
	color: #FFF;
}
#temoignages .oc-item i {
	display: block;
	text-align: center;
	font-size: 1em;
	color: #FFF;
}
#temoignages .oc-item p {
	display: block;
	text-align: justify;
	margin-left: 2%;
	margin-right: 2%;
	color: #FFF;
    font-size: 1.2em;
    line-height: 20px;
	margin: auto;
}
#temoignages .owl-carousel .owl-dots .owl-dot {
    background-color: #193166
}
#ils-nous-font-confiance {
    margin-bottom: 80px;
    margin-top: -20px
}
#retrouvez-nous {
    height: 450px;
    margin: 0
}
#retrouvez-nous .container {
    height: 450px;
    display: table-cell;
    vertical-align: middle;
    width: 100vw;
    max-width: 100vw;
    text-align: center
}
#retrouvez-nous .lead a {
    width: 24.74%;
    display: inline-block;
    margin: 0;
}
#retrouvez-nous .lead i {
    height: 80px;
    width: 80px;
    color: #FFF;
    border: 2.5px #FFF solid;
    line-height: 80px;
    font-size: 50px
}
@media (min-width: 1200px){
    #retrouvez-nous .emphasis-title {
        margin-left: auto;
        margin-right: auto;
        width: 1170px
    }
}
@media (max-width: 1200px) {
    #retrouvez-nous .container {
        width: 100vw!important
    }
    #retrouvez-nous .lead a {
        width: 15.74%
    }
    #retrouvez-nous {
        height: 70vh;
    }
    #retrouvez-nous .container {
        height: 70vh;
    }
}
@media (max-width: 580px) {
    #retrouvez-nous .lead a {
        width: 34.74%;
        margin-bottom: 20px
    }
}
#footer {
    background-color: #193166!important;
    color: #FFF!important
}
#footer .ip ul li a {
    background-image: none
}
.fa-phone {
    transform: rotate(90deg);
}
.content-all {
    padding: 0;
}
.mg-80 {
    margin-bottom: 0px
}
#retrouvez-nous H2 {
    padding-top: 10px;
    padding-bottom: 50px
}
#primary-menu ul li:hover > a, #primary-menu ul li.current > a {
    color: #00aeff /*acc4ff*/
}
#about h1 {
    color: #001e55
}
#about .nv {
    margin-top: 30px;
}
#about .ne {
    margin-top: 0px
}
#about .col_one_third {
    background-color: #001e55;
    color: #FFF;
    padding: 20px 30px
}
#about .col_one_third h1 {
    color: #FFF;
    text-align: center
}
#about .col_one_third span.citation {
    text-align: center;
    display: block;
    font-family:'Ink Free Regular';
    font-weight:bold;
    font-size: 17px;
}
#about .col_one_third img {
    padding: 10px 20px;
    margin-bottom: 20px
}
#about .col_one_third .text {
    text-align: justify
}
#about .col_one_fourth {
    text-align: center
}
#about .col_one_fourth img {
    height: 60px;
}
#notre-agence h2 {
    text-align: center;
    color: #000
}
#notre-agence ul li {
    font-size: 15px;
    font-weight: normal;
    list-style-type: none;
    text-align: left
}
#contact-form h2 {
    text-align: center;
    color: #000
}
#contact-form ul li {
    font-size: 15px;
    font-weight: normal;
    list-style-type: none;
    text-align: left
}
#nos-services ul {
    padding: 0 0% 0 10%
}
#nos-services ul li {
    text-align: left;
    line-height: 40px;
    font-size: 20px;
    list-style-type: circle;
}
.separateur {
    height: 450px;
}
.separateur .container {
    height: 450px;
    display: table-cell;
    vertical-align: middle;
    width: 100vw;
    max-width: 100vw;
    text-align: center
}
.emphasis-title {
    margin: 0
}
.pcrfd {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.pcrfd p {
    font-size: 1.7em;
    padding: 0 15px;
    font-weight: bold
}
#appeler {
    position: fixed;
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
    margin-top: -60px;
	transition-duration: 0.5s;
    right: -60px;
}
#appeler .appel {
    background-color: #00aeff;
    height: 80px;
    padding: 15px;
    font-size: 30px;
}
#appeler i {
    color: #FFF
}
.feature-box .fbox-icon i, .feature-box .fbox-icon img {
    border-radius: 0%;
    background-color: transparent;
}
@media (min-width: 1200px) {
    .index .feature-box {
        padding: 0 0 0 125px;
    }
}
a.bouton {
    padding: 10px 20px;
    background-color: #001e55;
    color: #FFF!important;
    font-size: 40px;
}
.slider-caption h2 {
font-size: 5rem
}
.slider-caption p {
font-size: 30px
}
.cat ul.tab-nav.tab-nav2 li {
    margin-left: 3%;
}
.cat ul.tab-nav.tab-nav2 li[aria-labelledby*='ui-id-1'] {
    margin-left: 0%;
}
.cat ul li {
    width: 14.166667%;
    height: 10vh!important
}
@media(max-width: 1200px) {
    .cat ul li {
        width: 30.33333333%;
        height: 10vh!important;
        margin-bottom: 3%
    }
    .cat ul li a {
        font-size: 2vw!important
    }
    .cat ul.tab-nav.tab-nav2 li[aria-labelledby*='ui-id-4'] {
        margin-left: 0%;
    }
}
.cat ul li a {
    text-transform: uppercase;
    background:
        linear-gradient(
        rgba(28, 54, 103, .65),
        rgba(28, 54, 103, .65)
        ),url('images/Page 3/test.jpg');
    background-position: center;
    background-size: 100%;
    background-color: transparent!important;
    height: 10vh!important;
    line-height: 10vh!important;
    color: #FFF!important;
}
.cat ul li.ui-tabs-active a {
    background:
        linear-gradient(
        rgba(255, 255, 255, .65),
        rgba(255, 255, 255, .65)
        ),url('images/Page 3/test.jpg');
        background-position: center;
        background-size: 100%;
        background-color: transparent!important;
        color: #000!important
}
.cat .col_one_fourth {
    height: 100%;
    display: flex;
    margin: 0;
    text-align: center;
    width: 25%
}
.cat .col_one_fourth img {
    margin: auto;
    max-height: 100%;
}
.cat .col_three_fourth {
    height: 100%;
    display: flex;
    margin: 0;
    padding-right: 30px;
    padding-left: 30px;
    text-align: justify;
    margin-bottom: 0;
    width: 75%
}
.cat .col_three_fourth p {
    margin: auto
}
.prestataires {
    height: 200px;
}
@media (max-width: 1200px) {
    .prestataires {
        height: auto;
    }
    .cat .col_one_fourth {
        width: 100%;
        margin-bottom: 0!important;
        max-height: 200px
    }
    .cat .col_one_fourth img {
        width: 50%;
        margin-top: 30px
    }
    .cat .col_three_fourth {
        width: 100%
    }
}
#about .postcontent, .sidebar, .col_full, .col_half, .col_one_third, .col_two_third, .col_three_fourth, .col_one_fourth, .col_one_fifth, .col_two_fifth, .col_three_fifth, .col_four_fifth, .col_one_sixth, .col_five_sixth {
    margin-bottom: 0
}
#primary-menu ul ul:not(.mega-menu-column), #primary-menu ul li .mega-menu-content {
    border-top: 2px solid #193166;
}
#primary-menu ul ul li:hover a {
    color: #193166!important
}
.comment-ca-marche-page .col_two_fifth {
    font-size: 1.3em
}
.comment-ca-marche-page .col_three_fifth {
    font-size: 1.3em
}
.comment-ca-marche-page h5 {
    font-size: 1.4em
}
.comment-ca-marche-page ul {
    list-style: circle;
    padding-left: 20px
}
a.url {
    color: #193166;
    text-decoration: #193166 underline!important;
}
#formulaire-contact .container.sc {
	max-width: 850px;
	padding-bottom: 75px
}
#formulaire-contact .form-item input {
	width: 85%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 1px solid #cfcfcf;
}
#formulaire-contact .form-item textarea {
	width: 85%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 1px solid #cfcfcf;
}
#formulaire-contact .form-item {
	display: flex;
	justify-content: space-around
}
#formulaire-contact .form-item label {
	width: 15%;
	margin: 8px 0;
	line-height: 40px
}
#formulaire-contact .appel {
	margin-bottom: 30px
}
#formulaire-contact .appel input {
	width: 42.5%
}
#formulaire-contact .appel select {
	width: 42.5%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 1px solid #cfcfcf;
}
#formulaire-contact .form-cgu {
	margin-left: 15%;
	margin-bottom: 15px;
	font-size: 15px;
	text-align: justify;
}
#formulaire-contact .form-btn {
	margin-top: 30px;
	text-align: right;
	font-size: 15px;
	margin-bottom: 30px
}
#formulaire-contact .form-btn button {
	background-color: #1f7dbd;
	color: #FFF;
	border: 0;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 8px 25px 8px 25px;
	font-size: 1.5em;
	text-transform: uppercase;
}
#formulaire-contact .info {
	display: flex;
}
#formulaire-contact .info .left {
	width: 50%;
	text-align: center;
	font-size: 18px;
}
#formulaire-contact .info .left strong {
	display: block;
	font-size: 24px;
	margin-top: 4px
}
#formulaire-contact .info .left img {
	width: 80%;
}
#formulaire-contact .info .right {
	display: flex;
	width: 50%;
	height: 100%
}
#formulaire-contact .info .right .sr {
	margin: auto;
	margin-left: 30px;
	font-size: 15px;
}
#formulaire-contact .info .right h1 {
	text-align: left;
}
#formulaire-contact .info .right .sr i {
	margin-right: 20px;
	width: 10px
}
#formulaire-contact .info .right .sr .fa-phone {
	transform: rotate(90deg);
}

@media (max-width: 1200px) {
    #footer .footer-widgets-wrap {
        padding: 0;
        padding-top: 80px;
        padding-bottom: 20px
    }
    #retrouvez-nous H2 {
        padding-top: 0;
        padding-bottom: 0
    }
    #notre-agence .reseau-social div {
        width: 50%;
        margin-top: 20px
    }
    .feature-box .fbox-icon {
        width: 100%;
        text-align: center
    }
    .feature-box {
        padding: 0
    }
    .feature-box.fbox-effect h3 {
        padding-top: 100px
    }
    .separateur {
        height: 100vh;
    }
    .separateur .container {
        height: 100vh;
    }
	#formulaire-contact .info {
		flex-direction: column;
		text-align: center;
	}
	#formulaire-contact .info .left {
		width: 100%
	}
	#formulaire-contact .info .right {
		width: 100%;
		display: none;
	}
	#formulaire-contact .form-btn {
		text-align: center;
	}
	#formulaire-contact .form-btn button {
		font-size: 28px;
		padding: 5px 40px 5px 40px;
	}
	#formulaire-contact .form-item select {
		width: 100%
	}
	#formulaire-contact .form-item {
		display: flex;
		flex-direction: column;
	}
	#formulaire-contact .form-item label {
		width: 100%
	}
	#formulaire-contact .form-item textarea {
		width: 100%;
		height: 200px
	}
	#formulaire-contact .form-item input {
		width: 100%
    }
    #formulaire-contact .form-cgu {
        margin-left: 0
    }
    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul ul a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover ul a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current ul a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover ul a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current ul a {
        color: #FFF !important;
    }
}
    <?php
}
