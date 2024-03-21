		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/logo-icon.png')}}" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Digital Library</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<ul class="metismenu" id="menu">
				@if(Auth::user()->role == 'Admin')
				<li class="menu-label">Dashboard</li>
				<li>
					<a href="/">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">Data Buku</li>
				<li>
					<a href="/kategoribuku">
						<div class="parent-icon icon-color-1"><i class="fadeIn animated bx bx-customize"></i>
						</div>
						<div class="menu-title">Kategori Buku</div>
					</a>
				</li>
				<li>
					<a href="/rakbuku">
						<div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-abacus"></i>
						</div>
						<div class="menu-title">Rak Buku</div>
					</a>
				</li>
			    </li>
					<a href="/buku">
						<div class="parent-icon icon-color-5"><i class="fadeIn animated bx bx-book"></i>
						</div>
						<div class="menu-title">Data Buku</div>
					</a>
				</li>
				<li>
					<a href="/kategoribukurelasi">
						<div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-book-reader"></i>
						</div>
						<div class="menu-title">Kategori Buku Relasi</div>
					</a>
				</li>

				<li class="menu-label">Laporan Peminjaman</li>
				<li>
					<a href="/peminjamen">
						<div class="parent-icon icon-color-3"><i class="fadeIn animated bx bx-archive-in"></i>
						</div>
						<div class="menu-title">Laporan Peminjaman</div>
					</a>
				</li>

				<li class="menu-label">Ulasan Buku</li>
				</li>
					<a href="/ulasanbuku">
						<div class="parent-icon icon-color-10"><i class="fadeIn animated bx bx-book-heart"></i>
						</div>
						<div class="menu-title">Ulasan Buku</div>
					</a>
				</li>

				<li class="menu-label">Koleksi Pribadi</li>
				<li>
					<a href="/koleksipribadi">
						<div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-book-bookmark"></i>
						</div>
						<div class="menu-title">Koleksi Pribadi</div>
					</a>
				</li>

				<li class="menu-label">Tambah User Admin</li>
				<li>
					<a href="/dataadmin">
						<div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-user"></i>
						</div>
						<div class="menu-title">Tambah Admin</div>
					</a>
				</li>
				@endif
			
				@if(Auth::user()->role == 'Petugas')
				<li class="menu-label">Dashboard</li>
				<li>
					<a href="/welcomep">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">Data Buku</li>
				<li>
					<a href="/kategoribuku">
						<div class="parent-icon icon-color-5"><i class="fadeIn animated bx bx-customize"></i>
						</div>
						<div class="menu-title">Kategori Buku</div>
					</a>
				</li>
			    </li>
					<a href="/buku">
						<div class="parent-icon icon-color-1"><i class="fadeIn animated bx bx-book"></i>
						</div>
						<div class="menu-title">Data Buku</div>
					</a>
				</li>
				<li>
					<a href="/kategoribukurelasi">
						<div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-book-reader"></i>
						</div>
						<div class="menu-title">Kategori Buku Relasi</div>
					</a>
				</li>	
				@endif

				@if(Auth::user()->role == 'Siswa')
				<li class="menu-label">Dashboard</li>
				<li>
					<a href="/welcomes">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li> 

				<li class="menu-label">Laporan Peminjaman</li>
				<li>
					<a href="/peminjamen">
						<div class="parent-icon icon-color-3"><i class="fadeIn animated bx bx-archive-in"></i>
						</div>
						<div class="menu-title">Laporan Peminjaman</div>
					</a>
				</li>

				<li class="menu-label">Ulasan Buku</li>
				</li>
					<a href="/ulasanbuku">
						<div class="parent-icon icon-color-10"><i class="fadeIn animated bx bx-book-heart"></i>
						</div>
						<div class="menu-title">Ulasan Buku</div>
					</a>
				</li>

				<li class="menu-label">Koleksi Pribadi</li>
				<li>
					<a href="/koleksipribadi">
						<div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-book-bookmark"></i>
						</div>
						<div class="menu-title">Koleksi Pribadi</div>
					</a>
				</li>

				@endif
			</ul>
		</div>
