<div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">BabaGram</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{route('A.Fi')}}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Table</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="{{route ('displays-the-user-table.index')}}">Table Users</a></li>
          <li><a class="link_name" href="{{route ('displays-the-kategori-table.index')}}">Table Kategoris</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">PHP & MySQL</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="{{asset ('archives/media/user-1.jpg')}}" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">{{$auth->username}}</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out' ></i>
        </div>
      </li>
    </ul>