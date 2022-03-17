@extends('common.master')
@section('content')

<main id="main">
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Pacotes</h2>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="pricing-item">

            <div class="pricing-header">
              <h3>Pacote Prata</h3>
              <h4><sup>R$</sup>130<span> / Mês</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>24H por dia</span></li>
              <li><i class="bi bi-dot"></i> <span>Segunda à Sexta</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Comprar</a>
            </div>

          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-item featured">

              <div class="pricing-header">
                <h3>Pacote Ouro</h3>
                <h4><sup>R$</sup>160,00<span> / Mês</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>24H por dia</span></li>
                <li><i class="bi bi-dot"></i> <span>7 Dias por semana</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="#" class="buy-btn">Comprar</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

      </div>

    </div>
  </section><!-- End Pricing Section -->
</main><!-- End #main -->
@endsection
