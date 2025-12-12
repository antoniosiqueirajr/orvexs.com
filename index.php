<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
	<!-- Meta Tags Essenciais -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index, follow" />
	<meta name="author" content="Antonio Siqueira" />
	<meta name="language" content="pt-BR" />
	<meta name="theme-color" content="#0a0a0a" />
	<meta name="color-scheme" content="light dark" />

	<!-- SEO -->
	<title>Orvexs & IT Outsourcing | Desenvolvimento, Consultoria e Terceirização de TI</title>
	<meta name="description"
		content="A Orvexs & IT Outsourcing é especialista em desenvolvimento de software, consultoria tecnológica e terceirização de infraestrutura de TI. Inovação, eficiência e suporte estratégico para seu negócio." />
	<meta name="keywords"
		content="desenvolvimento de software, consultoria em TI, terceirização de infraestrutura, tecnologia, Orvexs, TI, soluções tecnológicas" />

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Orvexs & IT Outsourcing" />
	<meta property="og:description" content="Especialistas em software, consultoria e infraestrutura de TI." />
	<meta property="og:image" content="https://www.orvexs.com/imagem-og.jpg" />
	<meta property="og:url" content="https://www.orvexs.com" />
	<meta property="og:site_name" content="Orvexs & IT Outsourcing" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Orvexs & IT Outsourcing" />
	<meta name="twitter:description" content="Inovação e eficiência em soluções de TI." />
	<meta name="twitter:image" content="https://www.seusite.com/imagem-twitter.jpg" />

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<!-- Tipografia -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700%7CSpectral:200&display=swap" rel="stylesheet" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/photoswipe.css" />
	<link rel="stylesheet" href="css/default-skin/default-skin.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />



	<!-- JS Class Indicator -->
	<script>
		document.documentElement.className = 'js';
	</script>

	<script>
		document.getElementById('mrs-contactForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Impede o envio padrão do formulário

			// Exibir o loader (se necessário)
			document.querySelector('.form_loader').style.display = 'inline-block';

			var formData = new FormData(this); // Captura os dados do formulário

			// Criação do objeto XMLHttpRequest para enviar via AJAX
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'php/contact.php', true);
			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4) {
					// Esconde o loader
					document.querySelector('.form_loader').style.display = 'none';

					if (xhr.status === 200) {
						// Processar a resposta do PHP (sucesso)
						var response = JSON.parse(xhr.responseText);
						if (response.status === 'success') {
							document.getElementById('mail_success').style.display = 'block';
							document.getElementById('mail_fail').style.display = 'none';
						} else {
							document.getElementById('mail_fail').textContent = response.message;
							document.getElementById('mail_fail').style.display = 'block';
							document.getElementById('mail_success').style.display = 'none';
						}
					} else {
						document.getElementById('mail_fail').textContent = 'Erro ao enviar mensagem. Tente novamente.';
						document.getElementById('mail_fail').style.display = 'block';
						document.getElementById('mail_success').style.display = 'none';
					}
				}
			};

			xhr.send(formData); // Envia os dados do formulário via AJAX
		});
	</script>


	<!-- Structured Data (JSON-LD) -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Orvexs & IT Outsourcing",
			"url": "https://www.siqueirajr.com",
			"logo": "https://www.siqueirajr.com/logo.png",
			"sameAs": [
				"https://www.linkedin.com/company/sjrholding",
				"https://twitter.com/sjrholding",
				"https://www.facebook.com/sjrholding"
			],
			"description": "Desenvolvimento de software, consultoria em tecnologia e terceirização de infraestrutura de TI.",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Brasil",
				"addressCountry": "BR"
			},
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+55-XX-XXXX-XXXX",
				"contactType": "customer support",
				"areaServed": "BR",
				"availableLanguage": "Portuguese"
			}
		}
	</script>
</head>

<body class="alioy__body render">
	<main class="alioy__main">

		<div class="content">
			<svg class="scene" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800">
				<path
					d="M -84.52,-81.13 C -94.62,-73.4 -88.88,-59.55 -90.33,-48.91 -89.29,27.31 -89.61,103.5 -88.33,179.8 -85.99,416.1 -81.32,888.9 -81.32,888.9 -81.32,888.9 974.5,888.7 1587,891.9 1540.9886393775232,713.8753910596836 1498.8906755400983,636.7466879205401 1440.8906755400983,525.7466879205401 1399.8906755400983,430.44668792054006 1440.2619505272776,271.11504851849435 1392.865594675941,187 1356.8473739326241,125.77721313401524 1280.3052521347518,76.23740800080188 1220.0797430941082,24.23942127755253 1178.4396574588109,-11.511999934408701 1090.4214367154939,-78.0726924812166 1090.4214367154939,-78.0726924812166 1090.4214367154939,-78.0726924812166 914.5,-77.77 848.2,-80.17 537.6,-80.84 227,-81.38 -83.6,-81.6 -83.91,-81.44 -84.21,-81.29 -84.52,-81.13 Z"
					data-pathdata="M -84.52,-81.13 C -94.62,-73.4 -88.88,-59.55 -90.33,-48.91 -89.29,27.31 -89.61,103.5 -88.33,179.8 -85.99,416.1 -81.32,888.9 -81.32,888.9 -81.32,888.9 974.5,888.7 1587,891.9 1576,704.7 1517,625.7 1459,514.7 1418,419.4 1430,288.5 1382,187 1349,116.3 1296,54.47 1240,0.3429 1205,-33.51 1120,-83.59 1120,-83.59 1120,-83.59 914.5,-77.77 848.2,-80.17 537.6,-80.84 227,-81.38 -83.6,-81.6 -83.91,-81.44 -84.21,-81.29 -84.52,-81.13 Z">
				</path>
				<path
					d="M 665.2,-83.08 C 413.7,-81.89 162.2,-82.43 -89.29,-81.61 -90.35,164.3 -85.06,410.2 -84.09,656.1 -83.37,733.7 -82.64,811.3 -81.92,888.9 442.4,889.8 966.7,890.7 1491,891.6 1253,747.5 1409.9723716522496,432.60377174676853 1281.556058544805,246.9708816306736 1224.1062706803382,164.58485617440962 1110.9272040766841,137.4307610477741 1047.1338990280885,60.44847343694948 1013.2372465037906,20.58200949999011 973,-76.01 973,-76.01 973,-76.01 706.6,-83.67 665.2,-83.08 Z"
					data-pathdata="M 665.2,-83.08 C 413.7,-81.89 162.2,-82.43 -89.29,-81.61 -90.35,164.3 -85.06,410.2 -84.09,656.1 -83.37,733.7 -82.64,811.3 -81.92,888.9 442.4,889.8 966.7,890.7 1491,891.6 1253,747.5 1349,460.4 1243,260.6 1199,176.6 1145,96.92 1083,24.95 1050,-12.63 973,-76.01 973,-76.01 973,-76.01 706.6,-83.67 665.2,-83.08 Z">
				</path>
				<path
					d="M -85.01,-74.02 C -92.39,-66.64 -85.37,-55.79 -87.81,-46.91 -86.65,265.1 -84.66,577.2 -83.18,889.2 317.2,888.3 717.5,885.8 1118,890.4 1152,890.6 1187,890.9 1221,890 1219,768.3 1214.7959838730799,646.5490419018907 1180.0500286388562,529.437418267809 1148.3040734046326,421.0197131656345 1100.7675273183643,318.04149167244157 1038.7675273183643,224.6635111914441 999.7767527318364,167.7181525370364 960.723006255968,129.25650026409838 920.5774984566063,81.93745836220765 867.3375328232338,18.988048135568604 772.2,-78.96 772.2,-78.96 772.2,-78.96 222.1,-81.07 -85.01,-74.02 Z"
					data-pathdata="M -85.01,-74.02 C -92.39,-66.64 -85.37,-55.79 -87.81,-46.91 -86.65,265.1 -84.66,577.2 -83.18,889.2 317.2,888.3 717.5,885.8 1118,890.4 1152,890.6 1187,890.9 1221,890 1219,768.3 1175,659.3 1150,544.3 1128,438.4 1143,312.6 1081,227.1 1004,121.1 925.8,114.8 851.3,54.73 762,-17.34 772.2,-78.96 772.2,-78.96 772.2,-78.96 222.1,-81.07 -85.01,-74.02 Z">
				</path>
				<path
					d="M -92.42,-79.11 C -89.97,243.8 -87.52,566.7 -85.07,889.6 201.8,889.9 488.7,889.9 775.5,895.6 880.4,896.9 1040.152100012031,890.8215366316948 1070.929219790169,890.38102442113 1063.2936748070433,855.3749874215683 1068.0783084900947,733.957517498751 991.1447266099776,589.934179829933 955.034637276889,523.3466825253112 953.6597831705054,440.177260280998 907.7808695429195,379.7570816148207 840.3239428063092,290.6674735166549 724.4299726181955,257.8624991015406 640.6191304570805,183.82755925590595 561.586449095525,114.38968122466584 492.9683740352165,30.932933873000337 414.67047764108526,-34.13733268873051 388.08447880484096,-51.85566169801894 342.2923024661752,-85.68152042510629 342.2923024661752,-85.68152042510629 342.2923024661752,-85.68152042510629 9.82,-84.94 -92.42,-79.11 Z"
					data-pathdata="M -92.42,-79.11 C -89.97,243.8 -87.52,566.7 -85.07,889.6 201.8,889.9 488.7,889.9 775.5,895.6 880.4,896.9 1063,889.5 1063,889.5 1063,889.5 1081,768.2 997.4,608.7 958.5,534.8 969.9,436.8 918.5,370.8 848.4,280.8 717,260.3 629.9,186.5 552.6,121.2 491.5,38.73 426.3,-38.61 412.9,-54.44 387.9,-87.47 387.9,-87.47 387.9,-87.47 9.82,-84.94 -92.42,-79.11 Z">
				</path>
				<path
					d="M -88.6,95.54 C -90.38,166.1 -88.23,236.7 -88.68,307.4 L -86.19,890 C 229.7,890.2 939.8,892.4 939.8,892.4 855.2957095833979,766.9402046509913 830.9042904166022,639.4677557205486 721.4,519.4 634.7779375911228,424.4524228956804 526.4742350927321,360.800402793292 428.855722600779,281.71632353637176 332.7416531068946,203.93465090340538 251.54205590018663,102.41736919898298 140.0402046509913,49.01959069801736 70.69316664970383,15.852904434076978 -24.82,24.2 -85.28,0.03 Z"
					data-pathdata="M -88.6,95.54 C -90.38,166.1 -88.23,236.7 -88.68,307.4 L -86.19,890 C 229.7,890.2 939.8,892.4 939.8,892.4 906.9,734.7 779.3,676 721.4,519.4 676.8,398.8 566.5,307.1 458.9,236.6 355.2,168.7 220.3,165.7 107.8,113.5 40.05,82.12 -24.82,24.2 -85.28,0.03 Z">
				</path>
				<path
					d="M -95.69,252.3 -87.65,890.4 698.1,892 C 698.1,892 580.3058249195103,623.1711940922438 473.9992404220384,528.5598978568387 317.0184758912065,386.9951412993449 131.4,466.5 -95.69,252.3 Z"
					data-pathdata="M -95.69,252.3 -87.65,890.4 698.1,892 C 698.1,892 569.8,587.1 448.9,482.7 299.7,353.9 131.4,466.5 -95.69,252.3 Z">
				</path>
				<path
					d="M -85.59,444.4 -85.59,890.6 504.78610751001736,895.6 C 504.78610751001736,895.6 458.7751341158446,731.6950472409349 370.8853509511789,664.2444409071555 238.90583819161964,549.4686038022445 57.98,629.2 -85.59,444.4 Z"
					data-pathdata="M -85.59,444.4 -85.59,890.6 546.9,895.6 C 546.9,895.6 517.4,695.4 339.9,593.4 187.7,505.9 57.98,629.2 -85.59,444.4 Z">
				</path>
			</svg>
		</div>

		<a class="alioy__subscribe-toggle" href="#">
			<font style="vertical-align: inherit;">
				<font style="vertical-align: inherit;">Inscrever-se</font>
			</font>
		</a>
		<a class="alioy__about-toggle" href="#"><span>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Clique para mais!</font>
				</font>
			</span></a>
		<span class="alioy__about-close"></span>

		<div class="alioy__content">
			<div class="alioy__appear-content">
				<div class="alioy__default-inner">
					<h1 class="alioy__content-title">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Orvexs</font>
						</font>
					</h1>
					<h3 class="alioy__content-subtitle">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Em breve...</font>
						</font>
					</h3>
				</div>
			</div>
			<div class="alioy__subscription-wrapper">
				<div class="alioy__subscription-area">
					<div class="alioy__inner-content-container">
						<h2>
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">Assine agora</font>
							</font>
						</h2>
						<p>
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">Seja o primeiro a saber sobre as últimas
									atualizações e receba ofertas exclusivas em nossa grande inauguração</font>
							</font>
						</p>
						<form id="alloy_subscription-form" class="alloy_subscription-form" novalidate="true">
							<input id="alioy__email" type="email" placeholder="Digite seu e-mail e entre" name="EMAIL">
							<button class="alioy___submit" type="submit">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">Inscrever-se</font>
								</font>
							</button>
							<label for="alioy__email"></label>
						</form>
					</div>
				</div>
			</div>


			<div class="alioy__about-us">
				<div class="alioy__main-content mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;">
					<div class="alioy__the_content">
						<h2>Somos a Orvexs</h2>

						<p>
							A Orvexs nasceu com o propósito de transformar ideias em soluções reais.
							Com espírito inovador e foco em excelência, construímos negócios sustentáveis que conectam tecnologia, pessoas e resultados.
						</p>

						<p>
							Nossa história começou com o desejo de empreender de forma inteligente e estratégica.
							Ao longo do tempo, consolidamos nossa atuação em diversos setores, sempre guiados pela ética, inovação e impacto positivo.
						</p>

						<div class="alioy__works-details">
							<div id="works-heading" class="alioy__works-heading">
								<div class="alioy__works-heading-inner">
									<h2>Você pode <b><i>acreditar</i></b> na nossa visão</h2>
									<p>
										Criamos experiências que geram valor, impulsionam marcas e fortalecem ecossistemas empresariais.
										Nosso compromisso é com o crescimento, a transparência e a construção de um legado duradouro.
									</p>
								</div>
							</div>
							<!-- <div class="alioy__work-gallery-content">
          <div id="alioy__work-gallery" class="alioy__gallery" itemscope itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
            <figure class="alioy__gallery-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="images/works/large/1.jpg" itemprop="contentUrl" data-size="1200x800">
                <img src="images/works/small/1.jpg" itemprop="thumbnail" alt="Projeto Orvexs" class="mCS_img_loaded">
                <span class="mask-overley"></span>
              </a>
            </figure>
            <figure class="alioy__gallery-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="images/works/large/2.jpg" itemprop="contentUrl" data-size="1200x800">
                <img src="images/works/small/2.jpg" itemprop="thumbnail" alt="Soluções em tecnologia" class="mCS_img_loaded">
                <span class="mask-overley"></span>
              </a>
            </figure>
            <figure class="alioy__gallery-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="images/works/large/3.jpg" itemprop="contentUrl" data-size="1200x800">
                <img src="images/works/small/3.jpg" itemprop="thumbnail" alt="Inovação e estratégia" class="mCS_img_loaded">
                <span class="mask-overley"></span>
              </a>
            </figure>
            <figure class="alioy__gallery-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="images/works/large/4.jpg" itemprop="contentUrl" data-size="1200x800">
                <img src="images/works/small/4.jpg" itemprop="thumbnail" alt="Projetos em expansão" class="mCS_img_loaded">
                <span class="mask-overley"></span>
              </a>
            </figure>
          </div>
          <div class="bottom-separator"></div>
        </div> -->
						</div>

						<div class="alioy__single-full">
							<div class="mrs-single-heading">
								<h2>Entre em contato</h2>
							</div>
							<div class="mrs-single-full">
								<div class="contact-information">
									<div class="alioy__container">
										<div class="single-contact-info">
											<h4>E-mail</h4>
											<a href="mailto:contato@siqueirajr.com">contato@siqueirajr.com</a>

											<h4>Fale conosco</h4>
											<p>
												Envie-nos uma mensagem com dúvidas, sugestões ou propostas.
												Estamos prontos para ouvir você e construir novas possibilidades juntos.
											</p>
										</div>
									</div>
								</div>

								<form id="mrs-contactForm" class="mrs-contact-form" method="post">
									<div class="contact-alert-message">
										<div id="mail_success" class="success"><i class="fa fa-check-circle"></i> Sua mensagem foi enviada com sucesso.</div>
										<div id="mail_fail" class="error"><i class="fa fa-exclamation-circle"></i> Desculpe, ocorreu um erro. Tente novamente.</div>
									</div>

									<div class="single-cform-item">
										<label for="mrs_name">Nome</label>
										<input name="mrs_name" id="mrs_name" type="text" required>
									</div>
									<div class="single-cform-item">
										<label for="mrs_email">E-mail</label>
										<input name="mrs_email" id="mrs_email" type="email" required>
									</div>
									<div class="single-cform-item">
										<label for="mrs_message">Mensagem</label>
										<textarea name="mrs_message" id="mrs_message" rows="1" required></textarea>
									</div>
									<button id="mrs_submit" type="submit">Enviar</button>
									<span class="form_loader"></span>
								</form>

							</div>

							<div class="footer-copyright">
								© <span id="current-year"></span> – Feito com ❤️ por <strong>Orvexs & IT Outsourcing</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path class="shape-overlays__path" d="M10 10"></path>
				<path class="shape-overlays__path" d="M10 10"></path>
				<path class="shape-overlays__path" d="M10 10"></path>
			</svg>








			<div class="alioy__main-footer">
				<p class="alioy__copyright">
					© <span id="current-year"></span> – Feito com ❤️ por <strong>Orvexs & IT Outsourcing</strong>
				</p>
				<ul class="alioy__social-links">
					<li><a href="#" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" aria-label="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" aria-label="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<script>
				document.getElementById('current-year').textContent = new Date().getFullYear();
			</script>


	</main>
	<!--Gallery Dependancy -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div> <button class="pswp__button pswp__button--close"
						title="Fechar (Esc)"></button> <button class="pswp__button pswp__button--share"
						title="Compartilhar"></button> <button class="pswp__button pswp__button--fs"
						title="Alternar tela cheia"></button> <button class="pswp__button pswp__button--zoom"
						title="Aumentar/diminuir o zoom"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div> <button class="pswp__button pswp__button--arrow--left"
					title="Anterior (seta para a esquerda)"></button>
				<button class="pswp__button pswp__button--arrow--right" title="Próximo (seta para a direita)"></button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/anime.min.js"></script>
	<script src="js/jquery.textarea_autosize.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/gallery.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/easings.js"></script>
	<script src="js/canvas-line.js"></script>
	<script src="js/ShapeOverlays.js"></script>
	<script src="js/main.js"></script>
	<div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
		style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
		data-id="">
		<div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
			<div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
					src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24"
					alt=""></div>
			<div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
				<div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Texto original</div>
				<div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
			</div>
			<div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
				<div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
					<div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Avalie a tradução</div>
					<div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">O feedback vai ser usado para ajudar a melhorar o Google
						Tradutor</div>
				</div>
				<div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
						class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Tradução boa" aria-label="Tradução boa"
						aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
								viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
								<path
									d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
								</path>
							</svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
								viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
								<path
									d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
								</path>
							</svg></span></button><button id="goog-gt-thumbDownButton" type="button"
						class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Tradução ruim" aria-label="Tradução ruim"
						aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
								viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
								<path
									d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
								</path>
							</svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
								viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
								<path
									d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
								</path>
							</svg></span></button></div>
			</div>
			<div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
				<form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib"
					method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
						id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
						id="goog-gt-votingInputTrgLang"><input type="text" name="query"
						id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
						id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote">
				</form><iframe name="votingFrame" frameborder="0"></iframe>
			</div>
		</div>
	</div>


</body>

</html>