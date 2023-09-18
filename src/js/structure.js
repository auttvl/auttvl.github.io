function injectHeader() {
  document.body.innerHTML = header + document.body.innerHTML;
}

function injectFooter() {
  document.body.innerHTML += footer;
}

function initUI() {
  injectHeader();
  injectFooter();
}

const header = `
<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="contact-info">

						<ul id="menu-secondary-menu" class="top_menu">
							<li id="menu-item-251"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a
									href="https://auttvl.ac.in/alumni/index.html">Alumni</a></li>
							<li id="menu-item-250"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a
									href="https://auttvl.ac.in/placements/index.html">Placements</a></li>
							<li id="menu-item-249"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a
									href="https://auttvl.ac.in/sports/index.html">Sports</a></li>
							<li id="menu-item-709"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-709"><a
									href="https://auttvl.ac.in/hostel/index.html">Hostel</a></li>
						</ul>


					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 text-right">
					<div class="site-info">

						<div class="social-area">
							<a href="#Facebook" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#Youtube" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="#Twitter" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>

	<header id="header-2" class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="logo">
						<a class="navbar-brand" href="#"><img src="https://auttvl.ac.in/wp-content/uploads/2021/07/logo.png" alt=""></a>
					</div>
				</div>

				<div class="col-lg-7 text-right">
					<div id="header-aside">
						<div class="aside-content">
							<div class="inner" style="display: none;">
								<div class="info-one">
									<div class="info-wrap">
										<a href="./student/login.html" class="header-btn main-btn"><i
												class="fa fa-user"></i> Student
											Login</a>
									</div>
								</div>

								<div class="info-three">
									<div class="info-wrap">
										<a href="./staff/login.html" class="header-btn  btn-danger"><i
												class="fa fa-users"></i> Staff
											Login</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="sticky-area">
				<div class="navigation">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-menu">
								<nav class="navbar navbar-expand-lg">
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-center"
										id="navbarSupportedContent">

										<ul id="menu-primary-menu" class="navbar-nav m-auto" itemscope
											itemtype="http://www.schema.org/SiteNavigationElement">
											<li id="menu-item-39"
												class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-39 nav-item">
												<a itemprop="url" href="https://auttvl.ac.in/index.html" class="nav-link"
													aria-current="page">Home</a>
											</li>
											<li id="menu-item-168"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-168 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-168">Administration</a>
												<ul class="sub-menu" aria-labelledby="menu-item-dropdown-168">
													<li id="menu-item-252"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-252">
														<a target="_blank" rel="noopener noreferrer" itemprop="url"
															href="https://annauniv.edu/administration.php">University
															Administration</a>
														<ul class="sub-menu" aria-labelledby="menu-item-dropdown-168">
															<li id="menu-item-253"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-253">
																<a target="_blank" rel="noopener noreferrer"
																	itemprop="url"
																	href="https://www.annauniv.edu/vcprofile.php">Vice
																	Chancellor</a>
															</li>
															<li id="menu-item-126"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126">
																<a itemprop="url"
																	href="https://auttvl.ac.in/administration/registrar/index.html">Registrar</a>
															</li>
															<li id="menu-item-125"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125">
																<a itemprop="url"
																	href="https://auttvl.ac.in/administration/directorccc/index.html">Director
																	(CCC)</a>
															</li>
														</ul>
													</li>
													<li id="menu-item-712"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-712">
														<a itemprop="url" href="#">AURCT
															Administration</a>
														<ul class="sub-menu" aria-labelledby="menu-item-dropdown-168">
															<li id="menu-item-124"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
																<a itemprop="url"
																	href="https://auttvl.ac.in/administration/deans-desk/index.html">Dean’s
																	Desk</a>
															</li>
															<li id="menu-item-123"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
																<a itemprop="url"
																	href="https://auttvl.ac.in/administration/dean-office/index.html">Dean
																	Office</a>
															</li>
															<li id="menu-item-718"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-718">
																<a itemprop="url"
																	href="https://auttvl.ac.in/establishment/index.html">Establishment</a>
															</li>
															<li id="menu-item-715"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-715">
																<a itemprop="url"
																	href="https://auttvl.ac.in/affliation/index.html">Affliation</a>
															</li>
															<li id="menu-item-239"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239">
																<a itemprop="url" href="https://auttvl.ac.in/estate-office/index.html">Estate
																	Office</a>
															</li>
															<li id="menu-item-719"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719">
																<a itemprop="url" href="https://auttvl.ac.in/health-centre/index.html">Health
																	Centre</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li id="menu-item-167"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-167 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-167">Academic</a>
												<ul class="sub-menu" aria-labelledby="menu-item-dropdown-167">
													<li id="menu-item-142"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
														<a itemprop="url"
															href="https://auttvl.ac.in/academic/course-offered/index.html">Programme</a>
													</li>
													<li id="menu-item-726"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-726">
														<a itemprop="url" href="https://cac.annauniv.edu/content/AI-Viewmore.html">Academic
															Calendar</a>
													</li>
													<li id="menu-item-725"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-725">
														<a itemprop="url" href="https://auttvl.ac.in/library/index.html">Library</a>
													</li>
													<li id="menu-item-143"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
														<a itemprop="url" href="https://auttvl.ac.in/academic/faculty/index.html">Faculty
															Incharge</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-740"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-740 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-740">Admission</a>
												<ul class="sub-menu" aria-labelledby="menu-item-dropdown-740">
													<li id="menu-item-739"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-739">
														<a itemprop="url"
															href="https://auttvl.ac.in/admission-procedure/index.html">Admission
															procedure</a>
													</li>
													<li id="menu-item-742"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742">
														<a itemprop="url"
															href="https://auttvl.ac.in/academic/course-offered/index.html">Course Offered</a>
													</li>
													<li id="menu-item-741"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-741">
														<a itemprop="url" href="#">Fee Structure</a>
														<ul class="sub-menu" aria-labelledby="menu-item-dropdown-740">
															<li id="menu-item-794"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-794">
																<a target="_blank" rel="noopener noreferrer"
																	itemprop="url"
																	href="https://auttvl.ac.in/wp-content/uploads/2021/09/feesstructure.pdf">College</a>
															</li>
															<li id="menu-item-795"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-795">
																<a target="_blank" rel="noopener noreferrer"
																	itemprop="url"
																	href="https://auttvl.ac.in/wp-content/uploads/2021/09/Hostel_Fee_Structure.pdf">Hostel</a>
															</li>
														</ul>
													</li>
													<li id="menu-item-736"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-736">
														<a itemprop="url" href="https://auttvl.ac.in/scholarship/index.html">Scholarship</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-146"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146 nav-item">
												<a itemprop="url" href="https://auttvl.ac.in/departments/index.html"
													class="nav-link">Departments</a>
											</li>
											<li id="menu-item-195"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-195 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-195">Committees &#038; Cell</a>
												<ul class="sub-menu" aria-labelledby="menu-item-dropdown-195">
													<li id="menu-item-206"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/women-empowerment-cell/index.html">Women
															Empowerment Cell</a>
													</li>
													<li id="menu-item-205"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/grievance-committee/index.html">Grievance
															Committee</a>
													</li>
													<li id="menu-item-204"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-204">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/discipline-committee/index.html">Discipline
															Committee</a>
													</li>
													<li id="menu-item-203"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/anti-sexual-harassment-commitee/index.html">Anti
															Sexual Harassment Commitee</a>
													</li>
													<li id="menu-item-202"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/sc-st-cell/index.html">SC/ST Cell</a>
													</li>
													<li id="menu-item-201"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/internal-complaint-commitee/index.html">Internal
															Complaint Commitee</a>
													</li>
													<li id="menu-item-200"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/social-media-cell/index.html">Social
															Media Cell</a>
													</li>
													<li id="menu-item-199"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/intellectual-property-right-cell/index.html">Intellectual
															Property Right Cell</a>
													</li>
													<li id="menu-item-198"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/innovation-cell/index.html">Innovation
															Cell</a>
													</li>
													<li id="menu-item-197"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/internal-quality-assurance-cell/index.html">Internal
															Quality Assurance Cell</a>
													</li>
													<li id="menu-item-196"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196">
														<a itemprop="url"
															href="https://auttvl.ac.in/committees-cell/institution-industry-cell/index.html">Institution
															Industry Cell</a>
													</li>
													<li id="menu-item-238"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238">
														<a itemprop="url" href="https://auttvl.ac.in/anti-ragging/index.html">Anti
															Ragging</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-163"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-163 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-163">Research</a>
												<ul class="sub-menu" aria-labelledby="menu-item-dropdown-163">
													<li id="menu-item-165"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165">
														<a itemprop="url"
															href="https://auttvl.ac.in/research/list-of-supervisors/index.html">List of
															Supervisors</a>
													</li>
													<li id="menu-item-754"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-754">
														<a itemprop="url" href="https://auttvl.ac.in/journal-publications/index.html">Journal
															Publications</a>
													</li>
													<li id="menu-item-753"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753">
														<a itemprop="url" href="https://auttvl.ac.in/patent-filed/index.html">Patent
															Filed</a>
													</li>
													<li id="menu-item-752"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-752">
														<a itemprop="url"
															href="https://auttvl.ac.in/sponsored-research-project/index.html">Sponsored
															Research Project</a>
													</li>
													<li id="menu-item-1078"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1078">
														<a target="_blank" rel="noopener noreferrer" itemprop="url"
															href="../../www.auttvl.ac.in/Images/Consultancy%20Projects.pdf">Consultancy
															Projects</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-232" onclick = "window.location.href = 'https://auttvl.ac.in/aicte'"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-232 nav-item">
												<a href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" class="dropdown-toggle nav-link"
													id="menu-item-dropdown-232">AICTE</a>
												
											</li>
											<li id="menu-item-242"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242 nav-item">
												<a itemprop="url" href="https://auttvl.ac.in/gallery/index.html" class="nav-link">Gallery</a>
											</li>
											<li id="menu-item-759"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759 nav-item">
												<a itemprop="url" href="https://auttvl.ac.in/contact-us/index.html" class="nav-link">Contact
													Us</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>

						<!-- Responsive Logo-->
						<div class="col-md-4 col-sm-4">
							<div class="responsive-logo">
								<a href="#"><img src="https://auttvl.ac.in/wp-content/uploads/2021/07/logo.png" alt="dustrian-logo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

`;

const footer = `
<footer class="footer-area">
		<div class="container">
			<div class="footer-up">
				<div class="row">

					<div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Contact Us</h5>
						<p>Anna University Regional Campus - Tirunelveli
							Tirunelveli 627007
							Tamilnadu</p>
						<p>Phone: 0462-2551298</p>
						<p>Fax: enquiry@auttvl.ac.in</p>

						<div class="social-area">
							<a href="#Facebook" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#Youtube" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="#Twitter" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div>

					</div>

					<div class="widget_text col-lg-6 col-md-6" style="visibility: hidden;">
						<h5>Map Cordinates</h5>
						<div class="textwidget custom-html-widget"><iframe
								src="https://google.com/maps/embedd5ac.html?pb=!1m18!1m12!1m3!1d3944.048476076911!2d77.72352431532853!3d8.68694029664295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126b9cf8ff7d%3A0xe818c690ce42ee03!2sAnna+University+Regional+Campus!5e0!3m2!1sen!2sin!4v1555306115553!5m2!1sen!2sin"
								frameborder="0" width="100%" height="250px;" style="border:0" allowfullscreen>
							</iframe></div>
					</div>

					<div class="widget_text col-lg-3 col-md-6 col-sm-12">
						<h5>Quick Links</h5>
						<div class="textwidget custom-html-widget">
							<ul>
								<li>
									<a href="#"><span>-</span> Anna University Chennai</a>
									<a href="#"><span>-</span> Courses Offered</a>
									<a href="#"><span>-</span> Curriculum & Syllabus</a>
									<a href="#"><span>-</span> College Fee structure</a>
									<a href="#"><span>-</span> Hostel Fee Structure</a>
									<a href="#"><span>-</span> Anti Ragging Committee</a>
									<a href="#"><span>-</span> Sexual Harassment Committee</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<p class="copyright-line">© 2023 Anna University Regional Campus &#8211; Tirunelveli. All rights
						reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
				</div>
			</div>
		</div>
	</div>


`;

initUI();
