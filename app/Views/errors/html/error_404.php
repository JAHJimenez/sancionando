<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/public/sancionando/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?= base_url() ?>/public/sancionando/img/favicon.png">
	<title>
		Soft UI Dashboard by Creative Tim
	</title>


	<link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard" />




	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

	<link href="<?= base_url() ?>/public/sancionando/css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url() ?>/public/sancionando/css/nucleo-svg.css" rel="stylesheet" />

	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url() ?>/public/sancionando/css/nucleo-svg.css" rel="stylesheet" />

	<link id="pagestyle" href="<?= base_url() ?>/public/sancionando/css/soft-ui-dashboard.min.css?v=1.0.5" rel="stylesheet" />

	<style>
		.async-hide {
			opacity: 0 !important
		}
	</style>
	<script>
		(function(a, s, y, n, c, h, i, d, e) {
			s.className += ' ' + y;
			h.start = 1 * new Date;
			h.end = i = function() {
				s.className = s.className.replace(RegExp(' ?' + y), '')
			};
			(a[n] = a[n] || []).hide = h;
			setTimeout(function() {
				i();
				h.end = null
			}, c);
			h.timeout = c;
		})(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
			'GTM-K9BGS8K': true
		});
	</script>




	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
	</script>

</head>

<body class="">

	<main class="main-content  mt-0">
		<section>
			<div class="page-header min-vh-75">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
							<div class="card card-plain mt-8">
								<div class="card-header pb-0 text-left bg-transparent">
									<h1 class="font-weight-bolder text-info text-gradient">404</h1>
									<p class="mb-0">La pagina web que esta buscando no existe</p>
								</div>
								<div class="text-center">
									<a href="/reporte/new">
									<button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Regresar a la pagina principal</button>
								    </a>
								</div>


							</div>
						</div>
						<div class="col-md-6">
							<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
								<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url() ?>/public/sancionando//img/curved-images/curved6.jpg')"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>



	<script src="<?= base_url() ?>/public/sancionando/js/core/popper.min.js"></script>
	<script src="<?= base_url() ?>/public/sancionando/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/public/sancionando/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url() ?>/public/sancionando/js/plugins/smooth-scrollbar.min.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>

	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<script src="<?= base_url() ?>/public/sancionando/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>