<x-layouts.app metaName="landing">
	
	<div id="top"></div>
<div class="landing" x-data="{ scrolled: false }" @scroll.throttle.debounce="scrolled = ($event.target.scrollTop > 0)" @scroll.window.throttle.debounce="scrolled = (window.scrollY > 10)">	
		<button class="back-to-top" x-show="scrolled" x-data="{ scrollToTop: () => { document.querySelector('.landing').scrollTo({ top: 0, behavior: 'smooth' }); window.scrollTo({ top: 0, behavior: 'smooth' }); }}" @click="scrollToTop()">
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
			<img class="screen-image" src="{{ asset('images/landing/landing3.webp') }}" alt="">
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
							title="Aktivitātes muižas parkā"
							link="aktivitates-muizas-parka"
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
			description="<p>Muiža piedāvā svinēt kā mazus, tā lielus svētkus! Sākot ar dzimšanas dienām,
										beidzot ar kāzām. Tevi gaida plašas, skaisti iekārtotas telpas ikvienam
										dzīves notikumam!</p>"
    		icon="components.icons.confetti"
			link="services."
			right=true
			fade=true
		/>
		<x-landing.section
			id="naksnot"
			bgImage="images/landing/naksnot.webp"
			title="Nakšņot"
			description="<p>Muižā netraucētu atpūtu iespējams baudīt kādā no 7 numuriņiem.
										Iespējams rezervēt arī visus numuriņus, vienlaicīgi nakšņošanas
										iespējas 12 (+3 guļvietas) personām. Piedāvājam ērtas, greznas naktsmājas Cēsīs,
										izvēloties sev piemērotāko numuru, no kura logiem paveras pasakains dabas skats.
										TV un citas ierīces istabās nav pieejamas, lai Tu varētu patiesi labi un
										netraucēti atpūsties.</p>
										<p>Pieejams koplietošanas sanitārais mezgls un karsti dzērieni brokastīs.
										Par papildus samaksu arī brokastis.</p>"
    		icon="components.icons.bedtime"
			link="services.stay"
			fade=true
		/>
		<x-landing.section
			id="apmeklet-kulturas-pasakumus"
			bgImage="images/landing/pasakumi.webp"
			title="Apmeklēt kultūras pasākumus"
			description="<p>Ik nedēļu Ruckas muižā ierodas viesi, lai piedzīvotu, pieredzētu un
										izbaudītu pasākumus. Sākot ar lekcijām un meistarklasēm, līdz pat
										koncertiem, kinolektorijiem un teātra izrādēm – Tevi gaida plašs kultūras
										pasākumu klāsts.</p>"
    		icon="components.icons.calendar"
			link="events"
			fade=true
		/>
		<x-landing.section
			id="telpu-noma"
			bgImage="images/landing/noma.webp"
			title="Telpu noma"
			description="<p>Ja meklē vietu, kur rīkot savus pasākumus, privātus vai publiskus seminārus,
										nometnes, konferences, meistarklases un daudz ko citu, esi ieradies
										pareizajā vietā! Piedāvājam dažādas telpas, kur satikties, rīkot tikšanās,
										neaizmirstami pavadīt laiku un radoši, jēgpilni darboties.</p>"
    		icon="components.icons.fireplace"
			link="services.rent"
			fade=true
		/>
		<x-landing.section
			id="skolas-soma"
			bgImage="images/landing/landing.webp"
			title="Skolas soma"
			description="<p>Īsteno kādu no programmas “Latvijas skolas soma” aktivitātēm muižā!
										Šī ir iespēja izmantot Ruckas muižas telpu, ļaujot skolas vecuma
										bērniem un jauniešiem iepazīt Latvijas kultūras vērtības un
										laikmetīgās izpausmes. Sazinies ar mums, lai uzzinātu vairāk par iespējām!</p>"
    		icon="components.icons.bag"
			link="contacts"
			linkText="Sazināties"
			fade=true
			right=true
		/>
		<x-landing.section
			id="iepazit-muizas-putnus"
			bgImage="images/landing/putni.webp"
			title="Iepazīt muižas putnus"
			description="<p>Mūsu muižā ir putnu istaba ar 12 putniem. Katram no viņiem ir savs vārds un stāsts,
											ko kāds no muižas ļaudīm gatavs izstāstīt. Tāpat mazajiem apmeklētājiem ir 
											iespēja uzzīmēt un izkrāsot putnus muižas darba lapās. Laipni gaidām ciemos,
											lai iepazīstinātu ar lidoņiem un atbildētu uz jautājumiem!</p>"
    		icon="components.icons.bird"
			link="gallery"
			linkText="Apskatīt"
		/>
		<x-landing.section
			id="klut-par-melderi"
			bgImage="images/landing/landing3.webp"
			title="Kļūt par melderi"
			description="<p>Tev ir iespēja kļūt par melderi uz stundu! Ruckas muižā vari apmeklēt
										ekskursiju griķu dzirnavām. Aizrautīgs dzirnavnieks parādīs, kā grauds
										pārtop miltos. Būs iespēja degustēt un iegādāties griķu produktus,
										sākot ar miltiem, beidzot ar miltiem. Tāpat ir iespēja pasūtīt Bretaņas
										pankūkas ar ievārījumu, kas tapis no muižas augļu kokiem un ogu krūmiem,
										kā arī vietējiem mežiem.</p>

									<p>Pakalpojums pieejams jau pavisam drīz – seko līdzi aktualitātēm un uzzini!</p>"
    		icon="components.icons.plant"
			link="contacts"
			linkText="Sazināties"
			fade=true
		/>
		<x-landing.section
			id="aktivitates-muizas-parka"
			bgImage="images/landing/parks.webp"
			title="Aktivitātes muižas parkā"
			description="<p>Vai zināji, ka Ruckas muižā ietilpst arī 6 hektārus liels parks,
										kas atvērts apmeklētājiem visu diennakti? Ziemā vari veidot sniega enģeļus, 
										velt sniegavīrus, slēpot un pikoties. Turpretī gada siltajos mēnešos – izskriet
										rīta krosu vai vienkārši uz soliņa baudīt dabu un skaisto apkārtni.
										Iespējams arī iegādāties kafiju vai tēju, iepriekš piezvanot!</p>"
    		icon="components.icons.forest"
			link="gallery"
			right=true
			linkText="Apskatīt"
		/>
		<x-landing.section
			id="dzivas-gleznas"
			bgImage="images/landing/landing.webp"
			title="Dzīvās gleznas"
			description="<p>Baibas Feoktistovas vārds daudziem liekus jautājumus neraisa. 
				Viņa rada krāšņas, drosmīgas un unikālas gleznas, kas pārsteidz ikvienu.
				Ja vēlies tās raudzīt savām acīm vai iemācīties gleznot viņas vadībā – šī ir vieta Tev!</p>"
    		icon="components.icons.brush"
			link="contacts"
			linkText="Sazināties"
		/>
	</div>
</x-layouts.app>