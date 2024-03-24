<x-layouts.app>
	
<div class="landing" x-data="{ scrolled: false }" @scroll="scrolled = ($event.target.scrollTop > 0)">	
		<button class="back-to-top" x-show="scrolled" x-data="{ scrollToTop: () => { document.querySelector('.landing').scrollTo({ top: 0, behavior: 'smooth' }); } }" @click="scrollToTop()">
			<x-icons.down></x-icons.down>
		</button>
		<section class="landing-section-wrapper">
			<img class="screen-image" src="{{ asset('images/landing/landing.webp') }}" alt="">
			<div class="content">
				<p>Laipni lūgti</p>
				<h1 class="hero-title">Ruckas muižā</h1>
		
				<div class="user-guidance">
					<x-icons.down></x-icons.down>
					<p>ritiniet uz leju</p>
				</div>
			</div>
		</section>	
		
		<section class="landing-section-wrapper">
			<img class="screen-image" src="{{ asset('images/landing/landing2.webp') }}" alt="">
			<div class="content">
				<div class="center-wrapper">
					<h2>Ko darīt muižā?</h2>
					<div class="options-grid">
						<x-landing.option
							icon="components.icons.confetti"
							title="Svinēt svētkus"
							link="svinet-svetkus"
						/>
						<x-landing.option
							icon="components.icons.bedtime"
							title="Nakšņot"
							link="naksnot"
						/>
						<x-landing.option
							icon="components.icons.calendar"
							title="Apmeklēt kultūras pasākumus"
							link="apmeklet-kulturas-pasakumus"
						/>
						<x-landing.option
							icon="components.icons.fireplace"
							title="Telpu noma"
							link="telpu-noma"
						/>
						<x-landing.option
							icon="components.icons.bag"
							title="Skolas soma"
							link="skolas-soma"
						/>
						<x-landing.option
							icon="components.icons.bird"
							title="Iepazīt muižas putnus"
							link="iepazit-muizas-putnus"
						/>
						<x-landing.option
							icon="components.icons.plant"
							title="Kļūt par melderi"
							link="klut-par-melderi"
						/>
						<x-landing.option
							icon="components.icons.forest"
							title="Aktivitātes, pastaigas muižas parkā"
							link="aktivitates-pastaigas-muizas-parka"
						/>
						<x-landing.option
							icon="components.icons.brush"
							title="Dzīvās gleznas"
							link="dzivas-gleznas"
						/>
					</div>
				</div>
			</div>
		</section>
		<x-landing.section
			id="svinet-svetkus"
			bgImage="images/landing/svinet-svetkus.webp"
			title="Svinēt svētkus"
			description="Ruckas muiža piedāvā svinēt kā mazus, tā lielus svētkus! Sākot ar dzimšanas dienām, beidzot ar kāzām."
    		icon="components.icons.confetti"
			link="izklaide"
			right=true
			fade=true
		/>
		<x-landing.section
			id="naksnot"
			bgImage="images/landing/naksnot.webp"
			title="Nakšņot"
			description="Muiža piedāvā ērtas guļvietas, astētisku, siltu un zaļu istabiņu ar pasakainu skatu pa logu. Esam par to, lai cilvēki šeit patiesi labi izgulētos."
    		icon="components.icons.bedtime"
			link="naksnosana"
			fade=true
		/>
		<x-landing.section
			id="apmeklet-kulturas-pasakumus"
			bgImage="images/landing/pasakumi.webp"
			title="Apmeklēt kultūras pasākumus"
			description="Ruckas muiža katru nedēļu piedāvā plašu kultūras programmu. Sākot ar lekcijām un meistarklasēm un beidzot ar koncertiem un teātriem. Seko līdzi informācijai un izvēlies savējo!"
    		icon="components.icons.calendar"
			link="afisa"
			fade=true
		/>
		<x-landing.section
			id="telpu-noma"
			bgImage="images/landing/landing3.webp"
			title="Telpu noma"
			description="TBD"
    		icon="components.icons.fireplace"
			link="naksnosana"
			fade=true
		/>
		<x-landing.section
			id="skolas-soma"
			bgImage="images/landing/landing4.webp"
			title="Skolas soma"
			description="TBD"
    		icon="components.icons.bag"
			link="https://latvijasskolassoma.lv/"
			fade=true
			right=true
		/>
		<x-landing.section
			id="iepazit-muizas-putnus"
			bgImage="images/landing/landing5.webp"
			title="Iepazīt muižas putnus"
			description="Muižā ir putnu istaba ar 12 putniem, katram lidonim ir savs vārds un stāsts, ko kāds no muižas ļaudīm gatavs pastāstīt!"
    		icon="components.icons.bird"
			link="izklaide"
			right=true
		/>
		<x-landing.section
			id="klut-par-melderi"
			bgImage="images/landing/landing6.webp"
			title="Kļūt par melderi"
			description="Ruckas muižā iespējamas ekskursijas uz griķu dzirnavām un uz stundu kļūt par melderi. Būs iespēja degustēt un iegādāties griķu produktus! Iespēja pasūtīt Bretaņas pankūkas ar ievārījumu, kas tapis no muižas augļu un ogu krūmiem, kā arī vietējiem mežiem."
    		icon="components.icons.plant"
			link="par-muizu"
			fade=true
			right=true
		/>
		<x-landing.section
			id="aktivitates-pastaigas-muizas-parka"
			bgImage="images/landing/landing7.webp"
			title="Aktivitātes, pastaigas muižas parkā"
			description="Ruckas muižā ietilpst 6 hektārus liels parks, kas atvērts apmeklētājiem visu dienu. Ziemā iespējams gatavot sniega enģeļus vai velt sniegavīrus. Siltajos mēnešos var izskriet rīta krosus vai vienkārši uz soliņa pabaudīt dabu."
    		icon="components.icons.forest"
			link="izklaide"
		/>
		<x-landing.section
			id="dzivas-gleznas"
			bgImage="images/landing/landing2.webp"
			title="Dzīvās gleznas"
			description="TBD"
    		icon="components.icons.brush"
			link="izklaide"
		/>
	</div>
</x-layouts.app>