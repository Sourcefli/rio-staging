<div class="section section-content section-pad bg-light">
	@php
        // 3 Items within this section

        //Item One - full width section with 2 column layout ... text on left - img on right
        $SectionItemOneTitle = config('sourcefli.siteData.aboutPageData.heroHeading');
        $SectionItemOneSummary = config('sourcefli.siteData.aboutPageData.fullRetirementServicesParagraph');
        $SectionItemOneImg = "img/sections/opt-income-protection.png";

        //Item Two - Image with text overlay
        $SectionItemTwoTitle = '';
        $SectionItemTwoSummary = '';
        $SectionItemTwoImg = "img/sections/opt-medicare-card.jpg";

        //Item Three - Image with text overlay
        $SectionItemThreeTitle = '';
        $SectionItemThreeSummary = '';
        $SectionItemThreeImg = "img/sections/opt-retirement-savings.jpg";
	@endphp

    <div class="container">
		<div class="content row">

			<div class="box-s1 pd-x5 no-round">
				<div class="row row-vm">
					<div class="col-sm-6 res-m-bttm pad-r-md">
						<h2 class="color-primary"></h2>
						<h4>{{ $SectionItemOneTitle }}</h4>
						<p>{{ $SectionItemOneSummary }}</p>
						<h5>We're here to help on every level</h5>
					</div>
					<div class="col-sm-6 pad-l-md">
						<img src="{{ $SectionItemOneImg }}" alt="{{ $SectionItemOneTitle }}">
					</div>
				</div>
			</div>

			<div class="gaps size-md"></div>

			<div class="row">
				<div class="col-sm-6 res-s-bttm">
					<div class="feature-imagebox has-bg light pd-x5">
						<div class="block">
							<span class="gaps size-lg"></span>
							<h3>Highly <strong>knowledgeable</strong> staff<strong> to walk you through</strong> the "Medicare maze".
								<a href="/contact" class="btn-link">Sit with an agent</a>
							</div>
							<div class="imagebg">
                                <img src="{{ $SectionItemTwoImg }}" alt="{{ $SectionItemTwoTitle }}">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="feature-imagebox has-bg light pd-x5">
							<div class="block">
								<span class="gaps size-lg"></span>
								<h3>Protect the <strong>Assets</strong> <br> you've spent your <strong>entire life</strong> <br>working for.</h3>
								<a href="/get-quote" class="btn-link">Speak to a retirement professional</a>
							</div>
							<div class="imagebg">
                                <img src="{{ $SectionItemThreeImg }}" alt="{{ $SectionItemThreeTitle }}">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</div>
