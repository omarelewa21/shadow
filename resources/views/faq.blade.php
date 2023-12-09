<x-base :title="'Faq'">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">Faq</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Faq</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Faq Page -->
    <section class="faq-page">
        <div class="container">
            <div class="service-details__faq">
                <div class="service-details__faq-inner">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        @foreach ($faqs as $faq)
                            <div class="accrodion @if ($loop->first) active @endif">
                                <div class="accrodion-title">
                                    <h4>{{$faq->question}}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faq->answer}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Faq Page -->
</x-base>