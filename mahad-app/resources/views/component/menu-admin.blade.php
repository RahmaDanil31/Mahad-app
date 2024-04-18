      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
                  <a href="{{ url('/admin/fakultas') }}" class="nav-link">
                      <i class="nav-icon fa fa-university"></i>
                      <p>
                          Fakultas
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/admin/jurusan') }}" class="nav-link">
                      <i class="nav-icon fa fa-book "></i>
                      <p>
                          Jurusan
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ url('/admin/gedung') }}" class="nav-link">
                      <i class="nav-icon far fa-building"></i>
                      <p>
                          Gedung
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ url('/admin/kamar') }}" class="nav-link">
                      <i class="nav-icon far fa-building"></i>
                      <p>
                          Kamar
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ url('/admin/petugas') }}" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>
                          Admin
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/admin/pendaftaran') }}" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                          Pendaftaran
                      </p>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->