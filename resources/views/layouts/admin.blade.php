<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | GOATED JAIPUR</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        :root {
            --sidebar-width: 260px;
        }

        body {
            display: flex;
            background: #050505;
            cursor: default;
            color: var(--fg);
        }

        h2 {
            font-family: 'Syncopate', sans-serif;
            font-size: 1.1rem;
            letter-spacing: 4px;
            font-weight: 700;
            margin: 0;
            color: var(--fg);
            position: relative;
            padding-top: 1rem;
        }

        h2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--fg);
        }

        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: #0a0a0a;
            border-right: 1px solid var(--border);
            position: fixed;
            left: 0;
            top: 0;
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            z-index: 100;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            padding: 3rem 5%;
        }

        .admin-nav-link {
            color: var(--dim);
            text-decoration: none;
            font-family: 'Syncopate', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 1px;
            padding: 1rem;
            border: 1px solid transparent;
            transition: var(--transition);
        }

        .admin-nav-link:hover,
        .admin-nav-link.active {
            color: var(--fg);
            border-color: var(--border);
            background: rgba(255, 255, 255, 0.05);
        }

        .stat-card {
            background: #0a0a0a;
            border: 1px solid var(--border);
            padding: 2rem;
            position: relative;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-top: 2rem;
            border: 1px solid var(--border);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #0a0a0a;
        }

        th,
        td {
            padding: 1.2rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
        }

        th {
            font-family: 'Syncopate', sans-serif;
            font-size: 0.6rem;
            color: var(--dim);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .action-btn {
            padding: 0.5rem 1rem;
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 0.5rem;
        }

        .btn-edit {
            background: var(--fg);
            color: var(--bg);
        }

        .btn-delete {
            background: #ff3e3e;
            color: #fff;
            border: none;
        }

        /* Admin Action Buttons */
        .btn.btn-dark {
            background: transparent;
            color: var(--fg);
            border: 1px solid var(--border);
        }

        .btn.btn-dark:hover {
            background: var(--fg);
            color: var(--bg);
            border-color: var(--fg);
            transform: none;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo" style="margin-bottom: 2rem;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 30px;">
            <span>ADMIN</span>
        </div>
        <a href="{{ route('admin.dashboard') }}"
            class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.students.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.students.*') ? 'active' : '' }}">Students</a>
        <a href="{{ route('admin.classes.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.classes.*') ? 'active' : '' }}">Classes</a>
        <a href="{{ route('admin.enquiries.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">Enquiries</a>
        <a href="{{ route('admin.faqs.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">FAQs</a>
        <a href="{{ route('admin.gallery.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Gallery</a>
        <a href="{{ route('admin.testimonials.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">Testimonials</a>

        <form action="{{ route('admin.logout') }}" method="POST" style="margin-top: auto;">
            @csrf
            <button type="submit" class="admin-nav-link"
                style="width: 100%; text-align: left; background: none; border: none;">LOGOUT</button>
        </form>
    </div>

    <div class="main-content">
        @if (session('success'))
            <div
                style="background: rgba(0,255,0,0.1); color: #0f0; padding: 1rem; border: 1px solid #0f0; margin-bottom: 2rem;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
