@extends('layouts.front')
@section('title','Acceuil')
@section('content')

	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">

				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">

						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>Commander votre produit</span> Petrolier; </h1>
										<hr>
										<hr>
										<p><br>
											Hazetu met a votre diposition des fournisseurs d'essence</p>
										<div class="button">
											<a href="{{route('fournisseurs')}}" class="btn">Acheter maintenant !</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->


	<hr>
	<section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"></span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><br> lite de fournisseurs</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">vous pouvez voir la liste de tous les fournisseurs ou vous pouvez acheter vos produits petroliers</p>

                        <div class="button">
                            <a href="ListeFournisseur.html" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Voir la liste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"></span>
                        <h2 class="text-center wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><br> les fournisseurs plus en cote</h2>
						<br>
						<br>
			<div class="row">
				@foreach ($compagnies as $company)
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>{{$company->name}}</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{asset('storage/uploads/'.$company->image)}}" alt="fournisseur de petrole">
									<a href="{{route("fournisseur.detail",['id' => $company->id])}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="{{route('fournisseurs')}}">En vente: </a></h5>
                                    <ul>

                                        @foreach (App\Models\Product::where('company_id',$company->id)->get() as $product)
                                       <li><strong>{{$product->name}}</strong><span>@livewire('boutton-achat', ['product' => $product], key($product->id))</span> </li>
                                       @endforeach
                                   </ul>

								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->

				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Livraison gratuite</h4>
						<p>Commandes supérieures à 1000</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Retour gratuit</h4>
						<p>Retour sous 30 jours</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Paiement sécurisé</h4>
						<p>Paiement 100% sécurisé</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Meilleure produit</h4>
						<p>Prix garanti</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->



	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
							<div class="col-lg-6 offset-lg-3 col-12">
								<h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Hazetu Petroleum</h4>
								<h3 style="font-size:30px;color:#333;">creation d'une plateforme de vente petrolier en Lubumbashi<h3>
								<p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Habari Zetu Services est une entreprise lancée en Décembre 2018 au registre de commerce CD/LSH/RCCM/18-A-00748 et elle est basée à Lubumbashi en République Démocratique du Congo.</p>
								<div class="button" style="margin-top:30px;">
									<a href="" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->

@endsection
