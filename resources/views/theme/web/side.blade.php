<!--begin::Brand-->
<div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="" class="h-30px logo" />
	</a>
	<!--end::Logo-->
</div>
<!--end::Brand-->
<!--begin::Aside user-->
<div class="aside-user mb-5 mb-lg-10" id="kt_aside_user">
	<!--begin::User-->
	<div class="d-flex align-items-center flex-column">
		<!--begin::Symbol-->
		<div class="symbol symbol-75px mb-4">
			<img src="{{ asset('img/blank.png') }}" alt="" />
		</div>
		<!--end::Symbol-->
		<!--begin::Info-->
		<div class="text-center">
			<!--begin::Username-->
			<a href="#" class="text-gray-900 text-hover-primary fs-4 fw-boldest">{{ Auth::User()->username }}</a>
			<!--end::Username-->
			<!--begin::Description-->
			<span class="text-gray-600 fw-bold d-block fs-7 mb-1">{{ Auth::User()->email }}</span>
			<!--end::Description-->
		</div>
		<!--end::Info-->
	</div>
	<!--end::User-->
</div>
<!--end::Aside user-->
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid ps-3 ps-lg-5 pe-1 mb-9" id="kt_aside_menu">
	<!--begin::Aside Menu-->
	<div class="w-100 hover-scroll-overlay-y pe-2 me-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_user, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="0">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded fw-bold" id="#kt_aside_menu" data-kt-menu="true">
			<div class="menu-item">
				<a class="menu-link" href="{{ route('admin.index') }}">
					<span class="menu-icon">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
						<span class="svg-icon svg-icon-5">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
								<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<span class="menu-title">Dashboard</span>
				</a>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
						<span class="svg-icon svg-icon-5">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
								<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<span class="menu-title">Crafted</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Pages</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">User Profile</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/overview.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/projects.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Projects</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/campaigns.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Campaigns</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/documents.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Documents</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/followers.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Followers</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/user-profile/activity.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Activity</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Blog</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="pages/blog/home.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Home</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/blog/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Post</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Pricing</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="pages/pricing/pricing-1.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pricing 1</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/pricing/pricing-2.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pricing 2</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Careers</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="pages/careers/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/careers/apply.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers Apply</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="pages/faq/classic.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Classic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="pages/faq/extended.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Extended</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="pages/about.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">About Us</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="pages/contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Contact Us</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="pages/team.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Our Team</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="pages/licenses.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Licenses</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="pages/sitemap.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Sitemap</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Account</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="account/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/security.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Security</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/billing.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Billing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/statements.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statements</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/referrals.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Referrals</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/api-keys.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">API Keys</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="account/logs.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Logs</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Authentication</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Basic Layout</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/basic/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/basic/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/basic/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/basic/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/basic/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Aside Layout</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/aside/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/aside/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/aside/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/aside/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/aside/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Dark Layout</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/dark/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/dark/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/dark/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/dark/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/layouts/dark/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/extended/multi-steps-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Multi-steps Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/extended/two-factor-authentication.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Two Factor Auth</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/extended/free-trial-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Free Trial Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/extended/coming-soon.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Coming Soon</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/welcome.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Welcome Message</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/verify-email.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Verify Email</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/password-confirmation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Password Confirmation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/deactivation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Account Deactivation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/error-404.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 404</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="authentication/general/error-500.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 500</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Email Templates</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="authentication/email/verify-email.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/email/invitation.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Account Invitation</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/email/password-reset.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="authentication/email/password-change.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Changed</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Utilities</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Modals</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">General</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/general/invite-friends.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Invite Friends</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/general/view-users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Users</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/general/select-users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Select Users</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/general/upgrade-plan.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Upgrade Plan</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/general/share-earn.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Share &amp; Earn</span>
												</a>
											</div>
										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Forms</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/forms/new-target.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">New Target</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/forms/new-card.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">New Card</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/forms/new-address.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">New Address</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/forms/create-api-key.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create API Key</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/forms/bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bidding</span>
												</a>
											</div>
										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Wizards</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/create-app.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create App</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/create-campaign.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create Campaign</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/create-account.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create Business Acc</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/create-project.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create Project</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Top Up Wallet</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/offer-a-deal.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Offer a Deal</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/wizards/two-factor-authentication.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Two Factor Auth</span>
												</a>
											</div>
										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Search</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/search/users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="utilities/modals/search/select-location.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Select Location</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Search</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="utilities/search/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/search/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/search/users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/search/select-location.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Location</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Wizards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/two-factor-authentication.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two Factor Auth</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/create-app.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create App</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/create-campaign.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Campaign</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/create-account.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Account</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/create-project.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Project</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Top Up Wallet</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="utilities/wizards/offer-a-deal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Offer a Deal</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Widgets</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="widgets/lists.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lists</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="widgets/statistics.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statistics</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="widgets/charts.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Charts</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="widgets/mixed.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Mixed</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="widgets/tables.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tables</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="widgets/feeds.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Feeds</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
						<span class="svg-icon svg-icon-5">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
								<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<span class="menu-title">Apps</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Projects</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">My Projects</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/project.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Project</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/targets.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Targets</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/budget.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Budget</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/users.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/files.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Files</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/activity.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Activity</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/projects/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">eCommerce</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Catalog</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/products.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Products</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/categories.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Categories</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Add Product</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Edit Product</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Add Category</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Edit Category</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Sales</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/sales/listing.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Orders Listing</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/sales/details.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Order Details</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/sales/add-order.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Add Order</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Edit Order</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customers</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/customers/listing.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Customer Listing</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/customers/details.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Customer Details</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Reports</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/reports/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Products Viewed</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/reports/sales.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sales</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/reports/returns.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Returns</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Customer Orders</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/ecommerce/reports/shipping.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Shipping</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/ecommerce/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Support Center</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/support-center/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tickets</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/support-center/tickets/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tickets List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/support-center/tickets/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Ticket</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tutorials</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/support-center/tutorials/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorials List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/support-center/tutorials/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorial Post</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/support-center/faq.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/support-center/licenses.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Licenses</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/support-center/contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Contact Us</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">User Management</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/user-management/users/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/user-management/users/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View User</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Roles</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="apps/user-management/roles/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Roles List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/user-management/roles/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Role</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/user-management/permissions.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Permissions</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Contacts</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/contacts/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/contacts/add-contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Contact</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/contacts/edit-contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Edit Contact</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/contacts/view-contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Contact</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Subscriptions</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/subscriptions/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/subscriptions/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription List</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/subscriptions/add.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Subscription</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/subscriptions/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Subscription</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Customers</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/customers/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/customers/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Listing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/customers/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Details</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">File Manager</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/file-manager/folders.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Folders</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/file-manager/files.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Files</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/file-manager/blank.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Blank Directory</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/file-manager/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Invoice Manager</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Invoices</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="apps/invoices/view/invoice-1.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 1</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/invoices/view/invoice-2.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 2</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="apps/invoices/view/invoice-3.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 3</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/invoices/create.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create Invoice</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Inbox</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/inbox/listing.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Messages</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/inbox/compose.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Compose</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/inbox/reply.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View &amp; Reply</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Chat</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="apps/chat/private.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Private Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/chat/group.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Group Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="apps/chat/drawer.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Drawer Chat</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="apps/calendar.html">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Calendar</span>
						</a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{ route('crud.index') }}">
					<span class="menu-icon">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
						<span class="svg-icon svg-icon-5">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
								<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<span class="menu-title">CRUD</span>
				</a>
			</div>
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
<!--begin::Footer-->
<div class="aside-footer flex-column-auto px-6 px-lg-9" id="kt_aside_footer">
	<!--begin::User panel-->
	<div class="d-flex flex-stack ms-7">
		<!--begin::Link-->
		<a href="{{ route('auth.logout') }}" class="btn btn-sm btn-icon btn-active-color-primary btn-icon-gray-600 btn-text-gray-600">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
			<span class="svg-icon svg-icon-1 me-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
					<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
					<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
				</svg>
			</span>
			<!--end::Svg Icon-->
			<!--begin::Major-->
			<span class="d-flex flex-shrink-0 fw-bolder">Log Out</span>
			<!--end::Major-->
		</a>
		<!--end::Link-->
		
	</div>
	<!--end::User panel-->
</div>
<!--end::Footer-->
