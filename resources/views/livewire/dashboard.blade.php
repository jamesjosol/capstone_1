<div class="wrapper">
	
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">
                    Dashboard
                </div>
            </div>
            <i class='bx bx-menu' id="btn-menu"></i>
        </div>

        <ul class="nav-list">
            <li>
                <a href="">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search...">
                </a>
                <span class="tooltip">Search</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-home'></i>
                    <span class="links-name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-info-circle'></i>
                    <span class="links-name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>

        </ul>

        <div class="logout-content fixed-bottom">
            <div class="logout">
                <div class="logout-details">
                    <div class="logout-name">Logout</div>
                </div>
                <i class='bx bx-log-out' id="logout"></i>
            </div>
        </div>
    </div>

    <div class="dashboard-content fixed-top">
        <div class="text">Dashboard</div>
    </div>

    <script>
        let btn = document.querySelector("#btn-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>

</div>
