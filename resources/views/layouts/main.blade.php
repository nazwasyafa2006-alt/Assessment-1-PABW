<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriVision Garut</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        :root {
            --bg-color: #f4f7f4;
            --card-bg: #ffffff;
            --card-border: #e2e8f0;
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --accent-green: #14532d;
            --accent-green-hover: #052e16;
            --accent-light: #f0fdf4;
            --shadow-subtle: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            line-height: 1.6;
            padding: 20px 12px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        header {
            background: linear-gradient(135deg, #14532d 0%, #064e3b 100%);
            border-radius: 16px;
            padding: 24px 16px;
            text-align: center;
            box-shadow: 0 10px 25px -5px rgba(20, 83, 45, 0.2);
            margin-bottom: 16px;
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: #ffffff;
        }

        header p {
            color: #dcfce7;
            font-size: 0.85rem;
            font-weight: 500;
            margin-top: 4px;
        }

        nav {
            background: var(--card-bg);
            padding: 8px;
            border-radius: 14px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 6px;
            margin-bottom: 20px;
            border: 1px solid var(--card-border);
            box-shadow: var(--shadow-subtle);
        }

        nav a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        nav a:hover {
            background-color: var(--accent-light);
            color: var(--accent-green);
        }

        main {
            background: var(--card-bg);
            padding: 24px 16px;
            border-radius: 16px;
            border: 1px solid var(--card-border);
            box-shadow: var(--shadow-subtle);
            width: 100%;
        }

        h2 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--accent-green);
            margin-bottom: 16px;
            letter-spacing: -0.02em;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--accent-light);
        }

        h3 {
            font-size: 0.95rem;
            font-weight: 700;
            margin-top: 16px;
            margin-bottom: 8px;
            color: var(--accent-green);
        }

        p, ul {
            color: var(--text-secondary);
            font-size: 0.88rem;
        }

        ul {
            padding-left: 18px;
            margin-bottom: 16px;
        }

        li {
            margin-bottom: 6px;
        }

        form p {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid var(--card-border);
            border-radius: 10px;
            font-size: 0.88rem;
            background-color: #f8fafc;
            color: var(--text-primary);
            outline: none;
            transition: all 0.2s ease;
            font-family: inherit;
        }

        input:focus, select:focus {
            border-color: var(--accent-green);
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(20, 83, 45, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--accent-green);
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-size: 0.88rem;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 3px 10px rgba(20, 83, 45, 0.2);
        }

        .btn:hover {
            background-color: var(--accent-green-hover);
        }

        /* CONTAINER TABEL RESPONSIVE DENGA SCROLLBAR */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            margin-top: 14px;
            border-radius: 12px;
            border: 1px solid var(--card-border);
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            min-width: 650px;
            border-collapse: collapse;
            font-size: 0.82rem;
        }

        th, td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px solid var(--card-border);
            vertical-align: middle;
        }

        th {
            background-color: #f8fafc;
            color: var(--accent-green);
            font-weight: 700;
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: var(--accent-light);
        }

        footer {
            text-align: center;
            margin-top: 24px;
            font-size: 0.78rem;
            color: var(--text-secondary);
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>AgriVision Garut</h1>
            <p>Sistem Deteksi Hama Tanaman Berbasis Computer Vision</p>
        </header>

        @include('partials.navbar')

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2026 AgriVision - Kelompok Tani Makmur Kabupaten Garut</p>
        </footer>
    </div>
</body>
</html>