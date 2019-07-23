
<div id="local-box"  style="" class="col-md-12 col-sm-12 col-xs-12 " <?php echo ($location_search === TRUE) ? 'class="local-box-fluid"' : ''; ?>>
	<div class="container">
		<div class="row">
			<div class="order_now">
  					<h2 class="Banner_header">Welcome to Lugma</h2>
					<button type="button" class="order_btn" data-toggle="modal" data-target="#order_now">Order Now</button>
					<button type="button" class="order_btn" data-toggle="modal" data-target="#reservation_now">Reserve Now</button>
						<div class="modal fade" id="order_now" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<div class="section-title text-center">
												<div class="title-separator">
												<img src="assets/images/food_icon.png">
												<h2 class="h2_sttt_order"> <span class="text-orange  padin_rt">Order 	</span>Food</h2>
												</div>
          									</div>
									</div>

									<div class="modal-body">
										
		<?php if ($location_search === TRUE) { ?>
						<div id="local-search " class=" col-md-12 text-center">
						<div class="toggle_radio">
												<input type="radio" class="toggle_option" id="first_toggle" name="toggle_option">
												<input type="radio" checked class="toggle_option" id="second_toggle" name="toggle_option">

												<label for="first_toggle"><p>Delivery</p></label>
												<label for="second_toggle"><p>Pick up</p></label>

												<div class="toggle_option_slider">
												</div>
											</div>


							<div class="panel panel-local">
								<div class="panel-body h2_col">
									<!--<h2 style="color:#fff;font-size: 35px;font-weight: 800;"><?php echo lang('text_order_summary'); ?></h2>-->
													
									<!-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--open select2-container--focus" dir="ltr"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-area_id-container" aria-owns="select2-area_id-results" aria-activedescendant="select2-area_id-result-klzu-78"><span class="select2-selection__rendered" id="select2-area_id-container"><span class="select2-selection__placeholder">Type a delivery location</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									<span class="select2-container select2-container--default select2-container--open" style="position: absolute; top: 288px; left: 381.5px;"><span class="select2-dropdown select2-dropdown--below" dir="ltr" style="width: 400px;"><span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox"></span><span class="select2-results"><ul class="select2-results__options" role="tree" id="select2-area_id-results" aria-expanded="true" aria-hidden="false"><li class="select2-results__option" role="group" aria-label="Hawally"><strong class="select2-results__group">Hawally</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option select2-results__option--highlighted" id="select2-area_id-result-jqxi-85" role="treeitem" aria-selected="false">Al-Bidea</li><li class="select2-results__option" id="select2-area_id-result-cc20-43" role="treeitem" aria-selected="false">Al-Siddeeq</li><li class="select2-results__option" id="select2-area_id-result-itfb-118" role="treeitem" aria-selected="false">Anjafa</li><li class="select2-results__option" id="select2-area_id-result-ssxd-30" role="treeitem" aria-selected="false">Bayan</li><li class="select2-results__option" id="select2-area_id-result-klzu-78" role="treeitem" aria-selected="false">Hateen</li><li class="select2-results__option" id="select2-area_id-result-43l9-31" role="treeitem" aria-selected="false">Hawally</li><li class="select2-results__option" id="select2-area_id-result-p9l7-33" role="treeitem" aria-selected="false">Jabriya</li><li class="select2-results__option" id="select2-area_id-result-s4oe-34" role="treeitem" aria-selected="false">Maidan Hawally</li><li class="select2-results__option" id="select2-area_id-result-ksrg-35" role="treeitem" aria-selected="false">Mishref</li><li class="select2-results__option" id="select2-area_id-result-thnd-80" role="treeitem" aria-selected="false">Mubarak Al-Abdullah</li><li class="select2-results__option" id="select2-area_id-result-7hvz-37" role="treeitem" aria-selected="false">Rumaithiya</li><li class="select2-results__option" id="select2-area_id-result-z5w4-38" role="treeitem" aria-selected="false">Salam</li><li class="select2-results__option" id="select2-area_id-result-n86r-39" role="treeitem" aria-selected="false">Salmiya</li><li class="select2-results__option" id="select2-area_id-result-n68c-40" role="treeitem" aria-selected="false">Salwa</li><li class="select2-results__option" id="select2-area_id-result-rb2n-41" role="treeitem" aria-selected="false">Shaab</li><li class="select2-results__option" id="select2-area_id-result-s1zm-42" role="treeitem" aria-selected="false">Shuhada</li><li class="select2-results__option" id="select2-area_id-result-bl1f-44" role="treeitem" aria-selected="false">Zahra</li></ul></li><li class="select2-results__option" role="group" aria-label="Farwaniya"><strong class="select2-results__group">Farwaniya</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option" id="select2-area_id-result-xsv6-60" role="treeitem" aria-selected="false">Abbasiya</li><li class="select2-results__option" id="select2-area_id-result-33qb-61" role="treeitem" aria-selected="false">Abdullah Al Mubarak Al Sabah</li><li class="select2-results__option" id="select2-area_id-result-aphr-62" role="treeitem" aria-selected="false">Abraq Khaitan</li><li class="select2-results__option" id="select2-area_id-result-wgvc-69" role="treeitem" aria-selected="false">Al-Dajeej</li><li class="select2-results__option" id="select2-area_id-result-fkng-119" role="treeitem" aria-selected="false">Al-Shadadiya</li><li class="select2-results__option" id="select2-area_id-result-z2bo-64" role="treeitem" aria-selected="false">Andalous</li><li class="select2-results__option" id="select2-area_id-result-6chp-65" role="treeitem" aria-selected="false">Ardiya</li><li class="select2-results__option" id="select2-area_id-result-plu4-66" role="treeitem" aria-selected="false">Ardiya Small Industrial</li><li class="select2-results__option" id="select2-area_id-result-auvz-67" role="treeitem" aria-selected="false">Ardiya Storage Zone</li><li class="select2-results__option" id="select2-area_id-result-4w5j-7" role="treeitem" aria-selected="false">Doha</li><li class="select2-results__option" id="select2-area_id-result-9lu2-71" role="treeitem" aria-selected="false">Farwaniyah</li><li class="select2-results__option" id="select2-area_id-result-voog-72" role="treeitem" aria-selected="false">Firdous</li><li class="select2-results__option" id="select2-area_id-result-4ks2-79" role="treeitem" aria-selected="false">Ishbiliya</li><li class="select2-results__option" id="select2-area_id-result-uvve-73" role="treeitem" aria-selected="false">Jeleeb Al-Shuyoukh</li><li class="select2-results__option" id="select2-area_id-result-unx0-74" role="treeitem" aria-selected="false">Khaitan</li><li class="select2-results__option" id="select2-area_id-result-3c1k-136" role="treeitem" aria-selected="false">Kuwait International Airport</li><li class="select2-results__option" id="select2-area_id-result-rkug-75" role="treeitem" aria-selected="false">Omariya</li><li class="select2-results__option" id="select2-area_id-result-szhc-76" role="treeitem" aria-selected="false">Rabia</li><li class="select2-results__option" id="select2-area_id-result-dmnp-77" role="treeitem" aria-selected="false">Rai</li><li class="select2-results__option" id="select2-area_id-result-f9sc-83" role="treeitem" aria-selected="false">Rehab</li><li class="select2-results__option" id="select2-area_id-result-p5xq-102" role="treeitem" aria-selected="false">Rigai</li><li class="select2-results__option" id="select2-area_id-result-5j77-103" role="treeitem" aria-selected="false">Sabah Al Nasser</li><li class="select2-results__option" id="select2-area_id-result-n7a1-137" role="treeitem" aria-selected="false">Sheikh Saad Aviation Terminal</li><li class="select2-results__option" id="select2-area_id-result-o7j8-70" role="treeitem" aria-selected="false">South Khaitan - Exhibits</li></ul></li><li class="select2-results__option" role="group" aria-label="Ahmadi"><strong class="select2-results__group">Ahmadi</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option" id="select2-area_id-result-yn8r-86" role="treeitem" aria-selected="false">Abu Halifa</li><li class="select2-results__option" id="select2-area_id-result-epsb-87" role="treeitem" aria-selected="false">Ahmadi</li><li class="select2-results__option" id="select2-area_id-result-mwz6-132" role="treeitem" aria-selected="false">Al Khiran</li><li class="select2-results__option" id="select2-area_id-result-phcn-134" role="treeitem" aria-selected="false">Al Wafrah</li><li class="select2-results__option" id="select2-area_id-result-kk7d-129" role="treeitem" aria-selected="false">Al-Julaia'a</li><li class="select2-results__option" id="select2-area_id-result-mmjv-133" role="treeitem" aria-selected="false">Al-Nuwaiseeb</li><li class="select2-results__option" id="select2-area_id-result-n1cz-88" role="treeitem" aria-selected="false">Al-Riqqa</li><li class="select2-results__option" id="select2-area_id-result-gngz-124" role="treeitem" aria-selected="false">Ali Sabah Al Salem</li><li class="select2-results__option" id="select2-area_id-result-mt2k-89" role="treeitem" aria-selected="false">Assabahiyah</li><li class="select2-results__option" id="select2-area_id-result-kh0x-130" role="treeitem" aria-selected="false">Bnaider</li><li class="select2-results__option" id="select2-area_id-result-c076-90" role="treeitem" aria-selected="false">Dahar</li><li class="select2-results__option" id="select2-area_id-result-5zvt-91" role="treeitem" aria-selected="false">Eqaila</li><li class="select2-results__option" id="select2-area_id-result-dy2g-92" role="treeitem" aria-selected="false">Fahad Al Ahmad</li><li class="select2-results__option" id="select2-area_id-result-9qh7-93" role="treeitem" aria-selected="false">Fahaheel</li><li class="select2-results__option" id="select2-area_id-result-wf49-94" role="treeitem" aria-selected="false">Fintas</li><li class="select2-results__option" id="select2-area_id-result-12n2-96" role="treeitem" aria-selected="false">Hadiya</li><li class="select2-results__option" id="select2-area_id-result-7vvf-97" role="treeitem" aria-selected="false">Jaber Al Ali</li><li class="select2-results__option" id="select2-area_id-result-ptkx-98" role="treeitem" aria-selected="false">Mahboula</li><li class="select2-results__option" id="select2-area_id-result-2lvl-99" role="treeitem" aria-selected="false">Mangaf</li><li class="select2-results__option" id="select2-area_id-result-do68-135" role="treeitem" aria-selected="false">Sabah Al Ahmad</li><li class="select2-results__option" id="select2-area_id-result-u1e2-128" role="treeitem" aria-selected="false">Shalayhat Al Dubaiya</li><li class="select2-results__option" id="select2-area_id-result-g0s8-127" role="treeitem" aria-selected="false">Shalayhat Mina Abdullah</li><li class="select2-results__option" id="select2-area_id-result-vsif-125" role="treeitem" aria-selected="false">Shuaiba Block 1</li><li class="select2-results__option" id="select2-area_id-result-y3qu-126" role="treeitem" aria-selected="false">West Industrial Shuaiba</li><li class="select2-results__option" id="select2-area_id-result-p9nl-131" role="treeitem" aria-selected="false">Zour</li></ul></li><li class="select2-results__option" role="group" aria-label="Kuwait City"><strong class="select2-results__group">Kuwait City</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option" id="select2-area_id-result-cf61-1" role="treeitem" aria-selected="false">Abdullah al-Salem</li><li class="select2-results__option" id="select2-area_id-result-xexp-2" role="treeitem" aria-selected="false">Adailiya</li><li class="select2-results__option" id="select2-area_id-result-jefk-3" role="treeitem" aria-selected="false">Bneid Al Qar</li><li class="select2-results__option" id="select2-area_id-result-i6ni-4" role="treeitem" aria-selected="false">Daiya</li><li class="select2-results__option" id="select2-area_id-result-y0va-5" role="treeitem" aria-selected="false">Dasma</li><li class="select2-results__option" id="select2-area_id-result-342b-6" role="treeitem" aria-selected="false">Dasman</li><li class="select2-results__option" id="select2-area_id-result-46x0-8" role="treeitem" aria-selected="false">Faiha</li><li class="select2-results__option" id="select2-area_id-result-0mlm-9" role="treeitem" aria-selected="false">Granada</li><li class="select2-results__option" id="select2-area_id-result-4za8-10" role="treeitem" aria-selected="false">Jaber Al Ahmad</li><li class="select2-results__option" id="select2-area_id-result-4jkp-19" role="treeitem" aria-selected="false">Jibla</li><li class="select2-results__option" id="select2-area_id-result-mdw8-11" role="treeitem" aria-selected="false">Kaifan</li><li class="select2-results__option" id="select2-area_id-result-0ltn-12" role="treeitem" aria-selected="false">Khaldiya</li><li class="select2-results__option" id="select2-area_id-result-t2mo-82" role="treeitem" aria-selected="false">Kuwait City</li><li class="select2-results__option" id="select2-area_id-result-j209-104" role="treeitem" aria-selected="false">Kuwait Free Trade Zone</li><li class="select2-results__option" id="select2-area_id-result-levz-14" role="treeitem" aria-selected="false">Mansouriya</li><li class="select2-results__option" id="select2-area_id-result-2dtc-15" role="treeitem" aria-selected="false">Mirqab</li><li class="select2-results__option" id="select2-area_id-result-cii0-122" role="treeitem" aria-selected="false">Nahdha</li><li class="select2-results__option" id="select2-area_id-result-yqof-123" role="treeitem" aria-selected="false">North West Al-Sulaibikhat</li><li class="select2-results__option" id="select2-area_id-result-3vth-17" role="treeitem" aria-selected="false">Nuzha</li><li class="select2-results__option" id="select2-area_id-result-tpds-18" role="treeitem" aria-selected="false">Qadsiya</li><li class="select2-results__option" id="select2-area_id-result-350x-110" role="treeitem" aria-selected="false">Qairawan</li><li class="select2-results__option" id="select2-area_id-result-32yv-20" role="treeitem" aria-selected="false">Qortuba</li><li class="select2-results__option" id="select2-area_id-result-b2cl-21" role="treeitem" aria-selected="false">Rawda</li><li class="select2-results__option" id="select2-area_id-result-105u-22" role="treeitem" aria-selected="false">Salhiya</li><li class="select2-results__option" id="select2-area_id-result-jmro-23" role="treeitem" aria-selected="false">Shamiya</li><li class="select2-results__option" id="select2-area_id-result-svn4-24" role="treeitem" aria-selected="false">Sharq</li><li class="select2-results__option" id="select2-area_id-result-wmzi-100" role="treeitem" aria-selected="false">Shuwaikh Administrative</li><li class="select2-results__option" id="select2-area_id-result-o3tg-84" role="treeitem" aria-selected="false">Shuwaikh Industrial</li><li class="select2-results__option" id="select2-area_id-result-mrnt-101" role="treeitem" aria-selected="false">Shuwaikh Industrial 1</li><li class="select2-results__option" id="select2-area_id-result-hijm-120" role="treeitem" aria-selected="false">Shuwaikh Industrial 2</li><li class="select2-results__option" id="select2-area_id-result-nc0z-121" role="treeitem" aria-selected="false">Shuwaikh Industrial 3</li><li class="select2-results__option" id="select2-area_id-result-7p8e-25" role="treeitem" aria-selected="false">Shuwaikh Residential</li><li class="select2-results__option" id="select2-area_id-result-uaz0-16" role="treeitem" aria-selected="false">Souk Al Mubarakeya</li><li class="select2-results__option" id="select2-area_id-result-xcc4-26" role="treeitem" aria-selected="false">Sulaibikhat</li><li class="select2-results__option" id="select2-area_id-result-de7o-27" role="treeitem" aria-selected="false">Surra</li><li class="select2-results__option" id="select2-area_id-result-dalk-28" role="treeitem" aria-selected="false">Yarmouk</li></ul></li><li class="select2-results__option" role="group" aria-label="Mubarak Al Kabir"><strong class="select2-results__group">Mubarak Al Kabir</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option" id="select2-area_id-result-6dpk-46" role="treeitem" aria-selected="false">Abu Al Hasaniya</li><li class="select2-results__option" id="select2-area_id-result-8u92-45" role="treeitem" aria-selected="false">Abu Fatira</li><li class="select2-results__option" id="select2-area_id-result-yk7l-47" role="treeitem" aria-selected="false">Adan</li><li class="select2-results__option" id="select2-area_id-result-e4t8-48" role="treeitem" aria-selected="false">Al-Masayel</li><li class="select2-results__option" id="select2-area_id-result-5gqu-51" role="treeitem" aria-selected="false">Coast Strip B</li><li class="select2-results__option" id="select2-area_id-result-qy36-52" role="treeitem" aria-selected="false">Fnaitees</li><li class="select2-results__option" id="select2-area_id-result-nz7c-53" role="treeitem" aria-selected="false">Messila</li><li class="select2-results__option" id="select2-area_id-result-ye2a-54" role="treeitem" aria-selected="false">Mubarak Al Kabeer</li><li class="select2-results__option" id="select2-area_id-result-7oct-49" role="treeitem" aria-selected="false">Qurain</li><li class="select2-results__option" id="select2-area_id-result-n764-50" role="treeitem" aria-selected="false">Qusor</li><li class="select2-results__option" id="select2-area_id-result-uhj0-81" role="treeitem" aria-selected="false">Sabah Al Salem</li><li class="select2-results__option" id="select2-area_id-result-za1p-56" role="treeitem" aria-selected="false">Sabhan Industrial Area</li><li class="select2-results__option" id="select2-area_id-result-zxlj-57" role="treeitem" aria-selected="false">South Wista</li><li class="select2-results__option" id="select2-area_id-result-4rtr-58" role="treeitem" aria-selected="false">West of Abu Fatira Al-Herafia</li><li class="select2-results__option" id="select2-area_id-result-nvsr-59" role="treeitem" aria-selected="false">Wista</li></ul></li><li class="select2-results__option" role="group" aria-label="Jahra"><strong class="select2-results__group">Jahra</strong><ul class="select2-results__options select2-results__options--nested"><li class="select2-results__option" id="select2-area_id-result-grw9-114" role="treeitem" aria-selected="false">Al Sulaibiya Industrial 1</li><li class="select2-results__option" id="select2-area_id-result-dq5l-115" role="treeitem" aria-selected="false">Al Sulaibiya Industrial 2</li><li class="select2-results__option" id="select2-area_id-result-pguv-106" role="treeitem" aria-selected="false">Amgarah Industrial Area</li><li class="select2-results__option" id="select2-area_id-result-xy3p-107" role="treeitem" aria-selected="false">Jahra</li><li class="select2-results__option" id="select2-area_id-result-4ja1-105" role="treeitem" aria-selected="false">Naeem</li><li class="select2-results__option" id="select2-area_id-result-uo31-108" role="treeitem" aria-selected="false">Naseem</li><li class="select2-results__option" id="select2-area_id-result-okxy-109" role="treeitem" aria-selected="false">Oyoun</li><li class="select2-results__option" id="select2-area_id-result-evso-111" role="treeitem" aria-selected="false">Qasr</li><li class="select2-results__option" id="select2-area_id-result-cq84-112" role="treeitem" aria-selected="false">Saad Al Abdullah</li><li class="select2-results__option" id="select2-area_id-result-wbxp-113" role="treeitem" aria-selected="false">Sulaibiya</li><li class="select2-results__option" id="select2-area_id-result-v8ta-116" role="treeitem" aria-selected="false">Taima'</li><li class="select2-results__option" id="select2-area_id-result-g6do-117" role="treeitem" aria-selected="false">Waha</li></ul></li></ul></span></span></span>
									<span class="search-label sr-only"><?php echo lang('label_search_query'); ?></span> -->
									<div class="col-xs-12 col-sm-12 col-md-12 center-block">
										<?php if ($location_search_mode === 'multi') { ?>
											
											<form id="location-form" method="POST" action="<?php echo $local_action; ?>" role="form">
											
											<div class="col-md-7 col-sm-7 col-xs-12 nopad">
											<span><img src="assets/images/search-loc.png" alt="search location"></span>
											<select class="js-example-templating js-states form-control select2-hidden-accessible form-control  postcode-control input-lg" data-select2-id="1" tabindex="-1" aria-hidden="true">
											<optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="7">
												<option value="AK" data-select2-id="6">Alaska</option>
												<option value="HI" data-select2-id="8">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone" data-select2-id="9">
												<option value="CA" data-select2-id="10">California</option>
												<option value="NV" data-select2-id="11">Nevada</option>
												<option value="OR" data-select2-id="12">Oregon</option>
												<option value="WA" data-select2-id="13">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone" data-select2-id="14">
												<option value="AZ" data-select2-id="15">Arizona</option>
												<option value="CO" data-select2-id="16">Colorado</option>
												<option value="ID" data-select2-id="17">Idaho</option>
												<option value="MT" data-select2-id="18">Montana</option>
												<option value="NE" data-select2-id="19">Nebraska</option>
												<option value="NM" data-select2-id="20">New Mexico</option>
												<option value="ND" data-select2-id="21">North Dakota</option>
												<option value="UT" data-select2-id="22">Utah</option>
												<option value="WY" data-select2-id="23">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone" data-select2-id="24">
												<option value="AL" data-select2-id="25">Alabama</option>
												<option value="AR" data-select2-id="26">Arkansas</option>
												<option value="IL" data-select2-id="27">Illinois</option>
												<option value="IA" data-select2-id="28">Iowa</option>
												<option value="KS" data-select2-id="29">Kansas</option>
												<option value="KY" data-select2-id="30">Kentucky</option>
												<option value="LA" data-select2-id="31">Louisiana</option>
												<option value="MN" data-select2-id="32">Minnesota</option>
												<option value="MS" data-select2-id="33">Mississippi</option>
												<option value="MO" data-select2-id="34">Missouri</option>
												<option value="OK" data-select2-id="35">Oklahoma</option>
												<option value="SD" data-select2-id="36">South Dakota</option>
												<option value="TX" data-select2-id="37">Texas</option>
												<option value="TN" data-select2-id="38">Tennessee</option>
												<option value="WI" data-select2-id="39">Wisconsin</option>
											</optgroup>
											<optgroup label="Eastern Time Zone" data-select2-id="40">
												<option value="CT" data-select2-id="41">Connecticut</option>
												<option value="DE" data-select2-id="42">Delaware</option>
												<option value="FL" data-select2-id="43">Florida</option>
												<option value="GA" data-select2-id="44">Georgia</option>
												<option value="IN" data-select2-id="45">Indiana</option>
												<option value="ME" data-select2-id="46">Maine</option>
												<option value="MD" data-select2-id="47">Maryland</option>
												<option value="MA" data-select2-id="48">Massachusetts</option>
												<option value="MI" data-select2-id="49">Michigan</option>
												<option value="NH" data-select2-id="50">New Hampshire</option>
												<option value="NJ" data-select2-id="51">New Jersey</option>
												<option value="NY" data-select2-id="52">New York</option>
												<option value="NC" data-select2-id="53">North Carolina</option>
												<option value="OH" data-select2-id="54">Ohio</option>
												<option value="PA" data-select2-id="55">Pennsylvania</option>
												<option value="RI" data-select2-id="56">Rhode Island</option>
												<option value="SC" data-select2-id="57">South Carolina</option>
												<option value="VT" data-select2-id="58">Vermont</option>
												<option value="VA" data-select2-id="59">Virginia</option>
												<option value="WV" data-select2-id="60">West Virginia</option>
											</optgroup>
										</select>		
											
										</div>
										<div class="col-md-5 col-sm-5 col-xs-12 nopad nopad">
												<a id="search" class="search_btn_hme" onclick="searchLocal();"><?php echo lang('text_find'); ?></a> 
										</div> 
											</form>
										<?php } else { ?>
											<a class="btn btn-block btn-primary" href="<?php echo $single_location_url; ?>"><?php echo lang('text_find'); ?></a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
				<div class="clearfix"></div>
			<?php } ?>


									</div>
									<div class="modal-footer">
        <a type="button" class="" data-dismiss="modal">Skip to Main</a>
      </div>
							</div>
						</div>
			

			<?php if ($location_search !== TRUE AND $rsegment !== 'locations') { ?>
				<div id="local-info" class="col-md-12" style="display: <?php echo ($local_info) ? 'block' : 'none'; ?>">
					<div class="panel panel-local display-local">
						<?php if ($location_search_mode === 'multi') { ?>
							<div class="panel-heading">
								<div class="row local-search bg-warning" style="display: <?php echo (empty($search_query) AND $order_type == '1' AND $location_order === '1') ? 'block' : 'none'; ?>">
									<a class="close-search clickable" onclick="toggleLocalSearch();">&times;</a>
									<div class="col-xs-12 col-sm-6 center-block">
										<div class="postcode-group text-center">
											<?php echo lang('text_no_search_query'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
											<div class="input-group">
												<input type="text" id="search-query" class="form-control text-center postcode-control input-xs" name="search_query" placeholder="<?php echo lang('label_search_query'); ?>" value="<?php echo $search_query; ?>">
												<a id="search" class="input-group-addon btn btn-primary" onclick="searchLocal();"><?php echo lang('button_search_location'); ?></a>
											</div>
										</div>
									</div>
								</div>

								<div class="row local-change" style="display: <?php echo (!empty($search_query) OR (empty($search_query) AND $location_order !== '1')) ? 'block' : 'none'; ?>">
									<div class="col-xs-12 col-sm-7">
										<?php $text_location_summary = ($has_search_query AND $delivery_coverage) ? lang('text_location_summary') : lang('text_delivery_coverage'); ?>
										<?php $text_search_query = (empty($search_query)) ? lang('text_enter_location') : sprintf($text_location_summary, lang('text_at').$search_query); ?>
										<?php echo $text_search_query; ?>&nbsp;&nbsp;
										<a onclick="toggleLocalSearch();" class="clickable btn-link visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="">
											<?php echo empty($search_query) ? lang('button_enter_location') : lang('button_change_location'); ?>
										</a>
									</div>

									<?php if (!in_array($rsegment, array('local', 'locations'))) { ?>
										<div class="col-xs-12 col-sm-5 text-right">
											<a class="btn btn-primary btn-menus" href="<?php echo site_url('local?location_id='.$location_id).'#local-menus'; ?>"><i class="fa fa-cutlery"></i>
												<span>&nbsp;&nbsp;<?php echo lang('text_goto_menus'); ?></span>
											</a>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>

						<div class="panel-body" id="panel-body">
							<div class="row boxes">
								<div class="box-one col-xs-12 col-sm-5 col-md-5">
									<?php if (!empty($location_image)) { ?>
										<img class="img-responsive pull-left" src="<?php echo $location_image; ?>">
									<?php } ?>
									<dl <?php echo (!empty($location_image)) ? 'class="box-image"' : ''; ?>>
										<dd><h4><?php echo $location_name; ?></h4></dd>
										<?php if (config_item('allow_reviews') !== '1') { ?>
											<dd class="text-muted">
												<div class="rating rating-sm">
													<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span><span class="fa fa-star-o"></span>
													<span class="small"><?php echo $text_total_review; ?></span>
												</div>
											</dd>
										<?php } ?>
										<dd><span class="text-muted"><?php echo str_replace('<br />', ', ', $location_address); ?></span></dd>
									</dl>
								</div>
								<div class="col-xs-12 box-divider visible-xs"></div>
								<div class="box-two col-xs-12 col-sm-3 col-md-3">
									<dl>
										<?php if ($opening_status === 'open') { ?>
											<dt><?php echo lang('text_is_opened'); ?></dt>
										<?php } else if ($opening_status === 'opening') { ?>
											<dt class="text-muted"><?php echo sprintf(lang('text_opening_time'), $opening_time); ?></dt>
										<?php } else { ?>
											<dt class="text-muted"><?php echo lang('text_closed'); ?></dt>
										<?php } ?>
										<?php if ($opening_status !== 'closed') { ?>
											<dd class="visible-xs">
												<?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
												<?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
												<?php } ?>
											</dd>
										<?php } ?>
										<dd class="text-muted">
											<?php if ($has_delivery) { ?>
												<?php if ($delivery_status === 'open') { ?>
													<?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $delivery_time)); ?>
												<?php } else if ($delivery_status === 'opening') { ?>
													<?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $delivery_time)); ?>
												<?php } else { ?>
													<?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
												<?php } ?>
											<?php } ?>
										</dd>
										<dd class="text-muted">
											<?php if ($has_collection) { ?>
												<?php if ($collection_status === 'open') { ?>
													<?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $collection_time)); ?>
												<?php } else if ($collection_status === 'opening') { ?>
													<?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $collection_time)); ?>
												<?php } else { ?>
													<?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
												<?php } ?>
											<?php } ?>
										</dd>
									</dl>
								</div>
								<div class="col-xs-12 box-divider visible-xs"></div>
								<div class="box-three col-xs-12 col-sm-4 col-md-4">
									<dl>
										<?php if ($opening_status !== 'closed') { ?>
											<dd class="hidden-xs">
												<?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
												<?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
												<?php } ?>
											</dd>
										<?php } ?>
										<dd class="text-muted">
											<?php if (!$has_delivery AND $has_collection) { ?>
												<?php echo lang('text_collection_only'); ?>
											<?php } else if ($has_delivery AND !$has_collection) { ?>
												<?php echo lang('text_delivery_only'); ?>
											<?php } else if ($has_delivery AND $has_collection) { ?>
												<?php echo lang('text_both_types'); ?>
											<?php } else { ?>
												<?php echo lang('text_no_types'); ?>
											<?php } ?>
										</dd>
										<?php if ($has_delivery) { ?>
											<dd class="text-muted"><?php echo $text_delivery_condition; ?></dd>
<!--                                            <dd class="text-muted">--><?php //echo ($delivery_charge > 0) ? sprintf(lang('text_delivery_charge'), currency_format($delivery_charge)) : lang('text_free_delivery'); ?><!--</dd>-->
										<?php } ?>
<!--                                        <dd class="text-muted">--><?php //echo lang('text_min_total'); ?><!--: --><?php //echo currency_format($min_total); ?><!--</dd>-->
									</dl>
							   </div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>
			
		</div>
	</div>
<script type="text/javascript">

	function toggleLocalSearch() {
		if ($('.panel-local .panel-heading .local-search').is(":visible")) {
			$('.panel-local .panel-heading .local-search').slideUp();
			$('.panel-local .panel-heading .local-change').slideDown();
		} else {
			$('.panel-local .panel-heading .local-search').slideDown();
			$('.panel-local .panel-heading .local-change').slideUp();
		}
	}

	function searchLocal() {
		var search_query = $('input[name=\'search_query\']').val();

		$.ajax({
			url: js_site_url('local_module/local_module/search'),
			type: 'POST',
			data: 'search_query=' + search_query,
			dataType: 'json',
			success: function(json) {
				updateLocalBox(json);
			}
		});
	}


	function getCurrentLocal() {
		var search_query = $('input[name=\'search_query\']').val();

		$.ajax({
			url: js_site_url('local_module/local_module/search'),
			type: 'POST',
			data: 'search_query=' + search_query,
			dataType: 'json',
			success: function(json) {
				console.log(json);
				///updateLocalBox(json);
			}
		});
	}

	function updateLocalBox(json) {
		var alert_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		var local_alert = $('#local-alert .local-alert');
		var alert_message = '';

		if (json['redirect']) {
			window.location.href = json['redirect'];
		}

		if (json['error']) {
			alert_message = '<div class="alert">' + alert_close + json['error'] + '</div>';
		}

		if (json['success']) {
			alert_message = '<div class="alert">' + alert_close + json['success'] + '</div>';
		}

		if ($('#cart-box').is(':visible')) {
			$('#cart-box').load(js_site_url('cart_module/cart_module #cart-box > *'), function (response) {
				if (alert_message != '') {
					local_alert.empty();
					local_alert.append(alert_message);
					$('#local-alert').fadeIn('slow').fadeTo('fast', 0.5).fadeTo('fast', 1.0);
					$('html, body').animate({scrollTop: 0}, 300);
				}
			});
		} else {
			if (alert_message != '') {
				local_alert.empty();
				local_alert.append(alert_message);
				$('#local-alert').fadeIn('slow').fadeTo('fast', 0.5).fadeTo('fast', 1.0);
				$('html, body').animate({scrollTop: 0}, 300);
			}
		}
	}



	// This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('search-query')),
          {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.setComponentRestrictions({'country': ['KW']});
        autocomplete.addListener('place_changed', searchLocal);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
  
    function scrollToBody() {
    	var elemt;
    	var sear = "<?php echo $search_query; ?>";
    	
    	// if (sear) {
    	//     elemt = document.getElementById("panel-body");
		// 	if (elemt)
    	//         elemt.scrollIntoView(); // Top
        // }
    }
    
	$(document).ready(function() {
		
		
		$('.js-example-basic-multiple').select2();
		scrollToBody();

		apicall = $('#google-maps-js').attr('src');
		apicall = apicall.replace("&ver=", "&callback=initAutocomplete&ver=");
		$('#google-maps-js').attr('src' , apicall);

		initAutocomplete();
		
		$('.review-toggle').on('click', function() {
			$('a[href="#reviews"]').tab('show');
		});
	});
	

	function formatState (state) {
  if (!state.id) {
    return state.text;
  }
  var baseUrl = "/user/pages/images/flags";
  var $state = $(
    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};

$(".js-example-templating").select2({
  templateResult: formatState
});
//--></script>

  

