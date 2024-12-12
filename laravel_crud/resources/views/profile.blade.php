<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Profile - AdminHub</title>
    <style>
        .profile-container {
            padding: 2rem;
            background: var(--light);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--grey);
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: var(--blue);
            margin-right: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--light);
        }

        .profile-info {
            flex: 1;
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .profile-role {
            font-size: 1.1rem;
            color: var(--grey);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .info-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .info-card h3 {
            font-size: 1.1rem;
            color: var(--blue);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-card p {
            color: var(--dark);
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .edit-button {
            background: var(--blue);
            color: var(--light);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .edit-button:hover {
            background: var(--blue-dark);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Staff</span>
                </a>
            </li>
            <li>
                <a href="{{ route('task.index') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Assign task</span>
                </a>
            </li>
        </ul>
		<br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <ul class="side-menu">
            <li class="active">
                <a href="/profile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a href="/" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="assets/img/people.png">
            </a>
        </nav>

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Profile</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="profile-container">
                <div class="profile-header">
                    <div class="profile-picture">
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="profile-info">
                        <h2 class="profile-name">{{ $user->name }}</h2>
                        <p class="profile-role">Administrator</p>
                    </div>
                </div>

                <div class="info-grid">
                    <div class="info-card">
                        <h3><i class='bx bxs-envelope'></i> Contact Information</h3>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Phone:</strong> {{ $user->phone }}</p>
                        <p><strong>Address:</strong> {{ $user->address }}</p>
                    </div>

                    <div class="info-card">
                        <h3><i class='bx bxs-user-detail'></i> Account Details</h3>
                        <p><strong>Member Since:</strong> {{ $user->created_at->format('F d, Y') }}</p>
                        <p><strong>Last Updated:</strong> {{ $user->updated_at->format('F d, Y') }}</p>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="{{asset('assets/script/script.js')}}"></script>
</body>
</html>