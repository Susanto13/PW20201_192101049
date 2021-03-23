						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ asset('jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('iziToast-master/dist/js/iziToast.min.js') }}"></script>
		<script src="{{ asset('sweetalert/sweetalert/sweetalert.min.js') }}"></script>
		<script src="{{ asset('jquery/modules-sweetalert.js') }}"></script>
		@include('alerts.main')

		@yield('script')
	</body>
</html>