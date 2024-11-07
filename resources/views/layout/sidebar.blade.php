<html>
        <!-- ======= Sidebar ======= -->
   
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item @if($sb_menu == 'mahasiswa')menu-open @endif">
    <a class="nav-link @if($sb_menu == 'mahasiswa')active @endif" data-bs-target="#mahasiswa-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-fill"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="mahasiswa-nav" class="nav-content collapse @if($sb_menu == 'mahasiswa') show @endif" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{url('/mastermhs')}}" class="@if($sb_submenu == 'mastermahasiswa')active @endif">
          <i class="bi bi-people-fill"></i><span>Master Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="{{url('/mastermk')}}" class="@if($sb_submenu == 'mastermk')active @endif">
          <i class="bi bi-book-half"></i><span>Master MK</span>
        </a>
      </li>
      <li>
        <a href="{{url('/masterkelas')}}" class="@if($sb_submenu == 'masterkelas')active @endif">
          <i class="bi bi-clipboard-check"></i><span>Master Kelas</span>
        </a>
      </li>
      <li>
        <a href="{{url('/masterdosen')}}" class="@if($sb_submenu == 'masterdosen')active @endif">
          <i class="ri-team-fill"></i><span>Master Dosen</span>
        </a>
      </li>
    </ul>
</li>
<li class="nav-item @if($sb_menu == 'perkuliahan')menu-open @endif">
    <a class="nav-link @if($sb_menu == 'perkuliahan')active @endif" data-bs-target="#perkuliahan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-fill"></i><span>Perkuliahan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="perkuliahan-nav" class="nav-content collapse @if($sb_menu == 'perkuliahan') show @endif" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{url('/jadwalkuliah')}}" class="@if($sb_submenu == 'jadwalkuliah')active @endif">
          <i class="bi bi-people-fill"></i><span>Jadwal Kuliah</span>
        </a>
      </li>
      <li>
        <a href="{{url('/jadwalujian')}}" class="@if($sb_submenu == 'jadwalujian')active @endif">
          <i class="bi bi-book-half"></i><span>Jadwal Ujian</span>
        </a>
      </li>
      <li>
        <a href="{{url('/absenmahasiswa')}}" class="@if($sb_submenu == 'absenmahasiswa')active @endif">
          <i class="bi bi-clipboard-check"></i><span>Absen Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="{{url('/nilaimahasiswa')}}" class="@if($sb_submenu == 'nilaimahasiswa')active @endif">
          <i class="ri-team-fill"></i><span>Nilai Mahasiswa</span>
        </a>
      </li>
    </ul>
</li>
      </li>
      <!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

</html>